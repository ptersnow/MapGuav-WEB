<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

  public function authenticate(Request $request) {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);
    
    $user = User::where('email', $request->email)->first();
    if ($request->password == $user->password) {
      $apikey = base64_encode(str_random(40));
      User::where('email', $request->email)->update(['api_key' => $apikey]);
      return response()->json(['status' => 'success', 'user' => $user]);
    }
    else {
      return response()->json(['status' => 'fail']);
    }
  }

  public function index() {
      $users = User::all();
      return response()->json($users);
  }

    
  public function create(Request $request) {
    $user = new User;
    $user->nome = $request->input('nome');
    $user->data_nasc = $request->input('data_nasc');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return response()->json($user);
  }

  public function show($id) {
    $user = User::find($id);
    return response()->json($user);
  }

  public function update(Request $request, $id) {
    $user= User::find($id);
    $user->nome = $request->input('nome');
    $user->data_nasc = $request->input('data_nasc');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return response()->json($user);
  }

  public function destroy($id) {
    $user = User::find($id);
    $user->delete();
    return response()->json('Usuário removido com sucesso');
  }

}
