<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    function index()
    {
    	return view('web/home');
    }

    function about()
    {
    	return view('web/about');
    }

    function contact()
    {
    	return view('web/contact');
    }

    function service()
    {
    	return view('web/service');
    }

    function blog()
    {
    	return view('web/blog');
    }
      function digitalprinting()
    {
    	return view('web/digitalprinting');
    }
       function offsetprinting()
    {
    	return view('web/offsetprinting');
    }
       function largeformat()
    {
    	return view('web/largeformat');
    }

}
