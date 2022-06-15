<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function test($name)
  {
    $res = ['name' => $name];
    return response()->json($res);
  }

  public function testPost(Request $request)
  {
    $res = $request->input();
    return response()->json($res);
  }

  public function info($user_id)
  {
    $user = User::find($user_id);
    return response()->json($user);
  }
}
