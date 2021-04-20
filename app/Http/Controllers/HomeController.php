<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Hash::check(Auth::user()->cpf, Auth::user()->password)) {
            session()->flash('message', true);
           return view('pages.password.resetPassword');
          
        }

        return view('dashboard');
    }

    public function reset(Request $request){

        $validated = $request->validate([
            'password' => 'required',
            'password_confirme' => 'required | same:password',
        ]);
            
        if($validated){
           $user = User::find(Auth::user()->id);
           $user->password = Hash::make($request->password);
           $user->save();
            session()->flash('message', 'Senha alterada com sucesso');
           return redirect(route('dashboard'));
         
        }
        
        return back();

    }

    public function resetPassword (){
        return view('pages.password.resetPassword');
    }
}
