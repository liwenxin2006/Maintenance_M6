<?php

/**
 * This file is created by hanzhiwei using _example_template_XXXApi.php
 *
 * @Copyright
 *      @user: hanzhiwei
 *      @Email: bigosprite@163.com
 *      @GitHub: https://github.com/BigoSprite
 */

namespace App\Http\Controllers\Api\Node;
use App\Http\Controllers\Api\Contracts\Api;
use App\Repositories\Eloquent\AbstractRepository;
use App\Http\Controllers\Api\Utils\ApiInstanceFactory;

/** MAKE SURE that yourApi class extents Api in order to use the (REPOSITORY MANAGER) */
class VDeviceNodeInfoApi extends Api
{
    /**
     * Constructor.
     *
     * @param AbstractRepository $repository
     * @NOTE you HAVE TO implement constructor and call parent constructor like follow.
     */
    public function __construct(AbstractRepository $repository)
    {
        /** Don't forget to call parent constructor. */
        parent::__construct($repository);
    }

    /**
     * Create Function
     *
     * @return object
     */
    public static function create()
    {
        /** CREATE_FUNC like Cocos2d-x CREATE_FUNC */
        /** Don't forget to CHANGE the parameters of CREATE_FUNC! */
        return ApiInstanceFactory::CREATE_FUNC(
            '_example_template_XXXApi',
            '_example_template_XXXRepository',
            'App\Repositories'
        );
    }

    /**
     * Test Method.
     *
     * @NOTE you can add you own method like this.
     *
     */
    public function test()
    {
        //
    }

}