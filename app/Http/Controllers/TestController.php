<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function getIndex()
    {
            echo 'this is index';
    }
    public function getAdd()
    {
        echo 'this is add';
    }
    public function getDelete()
    {
        echo 'this is delete';
    }

}
