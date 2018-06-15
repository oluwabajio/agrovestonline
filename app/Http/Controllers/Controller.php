<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Basic;
use App\Expo;
use App\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function db()
    {
        //
         
         $basiccount = [
            'user'  => User::count(),
            'basic'  => Basic::count(),
            'expo'  =>  Expo::count(),
            'standard'   => '22',
            'premium' => ''
        ];
        return view('dashboard.index')->with('basiccount', $basiccount);
    
      
    }

    public function registeredUser()
    {
        $rusers2 = User::all();
        return view('dashboard.users.index')->with('rusers2', $rusers2);
    }

    public function destroy($id)
    {
        //
        $rusers = User::find($id);
        $rusers->delete();
        return redirect('dashboard.users.index')->with('success', 'User Deleted');
    
    }
}
