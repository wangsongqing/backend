<?php


namespace App\Services;

use App\Helpers\ApiResponse;

class BaseService
{
    // 引入api统一返回消息
    use ApiResponse;

    protected static $instance;

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

}
