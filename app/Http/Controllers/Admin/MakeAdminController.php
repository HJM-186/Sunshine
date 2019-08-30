<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeAdminController extends Controller
{
    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->role = 1;
        $user->save();
        return redirect(route('admin'));

    }
}
