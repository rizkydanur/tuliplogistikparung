<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ContactController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // You can add any necessary logic here before redirecting
        // For example, passing data to the view

        return view('contact');
    }
}
