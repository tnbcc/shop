<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    //验证邮箱页面

    public function emailVerifyNotice(Request $request)
    {
        return view('pages.email_verify_notice');
    }
}
