<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Api\UserRequest;
use App\Services\UserService;

class UsersController extends BaseController
{
    public function userList(UserRequest $request)
    {

        $user = UserService::getUserInfo();

        return $this->success($user);
    }
}
