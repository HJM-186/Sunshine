<?php

namespace App\Http\Controllers\Admin;
use App\Jobs\RemoveUserJob;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RemoveUserController extends Controller
{
  public function removeUser($id)
  {
      $user = User::find($id);
      $user->delete();

      RemoveUserJob::dispatch()->delay(now()->addSeconds(5));

      return redirect(route('admin'));
  }

}
