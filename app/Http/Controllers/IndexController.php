<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 09.12.2018
 * Time: 20:14
 */

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function homeIndex()
    {
        return view('index.index'//, ['wat' => '13wat']
        );
    }
}