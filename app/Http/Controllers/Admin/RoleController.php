<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //后台用户角色
    protected $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function add()
    {

    }
    public function edit(){

    }
    public function delete()
    {

    }
    public function show()
    {

    }

}
