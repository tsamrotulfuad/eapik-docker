<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'superadmin') {
            return redirect('/superadmin/dashboard');
        }
        elseif(auth()->user()->role == 'admin'){
            return redirect('/admin/dashboard');
        }
        elseif(auth()->user()->role == 'user'){
            return redirect('/dashboard');
        }
        else{
            return auth()->logout();
        }
    }
}
