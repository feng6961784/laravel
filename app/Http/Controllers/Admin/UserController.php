<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //后台用户处理
    protected $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function login()
    {

    }
    public function logout()
    {

    }
    public function show()
    {

    }
    public function add()
    {

    }
    public function edit()
    {

    }
    public function reset()
    {

    }
    public function delete()
    {

    }


}
