<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class RegisterController extends Controller{





protected function credentials(Request $request) 
    {
    
    /// this method is overriden form Illuminate\Foundation\Auth\AuthenticatesUsers; class
    $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
        ? $this->username()
        : 'username';

    return [
        $field => $request->get($this->username()),
        'password' => $request->password,
    ];
    }
}
