<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\Contracts\Api;
use App\Repositories\Eloquent\AbstractRepository;

class NodeInfoApi extends Api
{
    public function __construct(AbstractRepository $repository)
    {
        parent::__construct($repository);
    }

    public static function create()
    {
        return ApiInstanceFactory::CREATE_FUNC(
            'NodeInfoApi',
            'NodeInfoRepository',
            'App\Repositories'
            );
    }


    public function all()
    {
        $modelArray = $this->repositoryMgr->all();

        $data = array();

        foreach ($modelArray as $item) {
            $tmp = [
                'nodeName' => $item->nodeName,
                'nodeIp' => $item->nodeIp,
                'nodePort'=>$item->nodePort,
                'nodeUserName'=>$item->nodeUserName,
                'nodePassword'=>$item->nodePassword,
                'address'=>$item->address,
                'remark'=>$item->remark,
            ];

            $data[] = $tmp;
        }
        return ['data'=>$data];
    }

    public function getNodeNameList()
    {
        $nameArr = $this->repositoryMgr->all(['nodeName']);
        $data = array();

        foreach ($nameArr as $item) {
            $tmp = [
                'nodeName'=>$item->nodeName
            ];
            $data[] = $tmp;
        }

        return ['data'=>$data];
    }

    public function getNodeServerInfo($nodeName)
    {
        $arrMap = $this->repositoryMgr->findBy('nodeName', $nodeName, ['nodeIp', 'nodePort', 'nodeUserName', 'nodePassword']);

        $data = array();

        if(count($arrMap) > 0){
            $data = [
                'nodeIp'=>$arrMap['nodeIp'],
                'nodePort'=>$arrMap['nodePort'],
                'nodeUserName'=>$arrMap['nodeUserName'],
                'nodePassword'=>$arrMap['nodePassword'],
            ];
        }

        return ['data'=>$data];
    }

    public function registerNodeInfo()
    {

    }

    public function updateNodeInfo()
    {

    }






}