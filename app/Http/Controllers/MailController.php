<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
        mail('lexxstalker86@gmail.com', 'тестовое письмо', 'тело письма', 'From: lexxstalker86work@the-founders.blog');

        return 'Done!';
    }
}
