<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use app\htto\controllers\controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use illuminate\Foundation\Auth\RegisterUsers;
use illuminate\Support\Facades\Hash;
use illumimate\Support\Facade\Validator;
class RegisterController extends Controller
{
    public function _construct()
    {    
        $this->middleware('guest');
     }
        public function index()
        {
        return view ('auth.register') ; 
        }

    protected function create(Request $request)
{
        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:191|unique:users',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
        $validator= Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect('signup')
            ->withInput()
            ->withErrors($validator); 
        }
        else{
            $data=$_REQUEST['name'];
            $user=new user;
            $user->name=$data['name'];
            $user->username=$data['username'];
            $user->email=$data['email'];
            $user->password=$data['password'];
            $user->save();
            return redirect('/login')->with('success','You have successfully registered!');
        }
}
}

