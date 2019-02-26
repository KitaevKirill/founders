<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 09.12.2018
 * Time: 20:14
 */

namespace App\Http\Controllers;


class AuthorsController extends Controller
{
    public function KristinaDController()
    {
        return view('authors.KristinaDavidova'//, ['wat' => '13wat']
        );
    }
}