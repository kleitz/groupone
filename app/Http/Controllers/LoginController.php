<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Hash;
use Session;
class LoginController extends Controller
{    
	public function postLogin(Request $request){
	$rules = [
		'username' => 'required|email',
		'password' => 'required|min:8'
		];	
		$validator = Validator::make($request->all(), $rules);
		if($validator->fails()){
			return back()->withErrors($validator)->withInput();
		}else{
			return redirect('/');
		}
	}
}