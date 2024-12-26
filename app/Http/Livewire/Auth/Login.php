<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email, $password;


    public function login()
    {
        $login = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $login['email'])->first();

        if (!$user) {
            $this->addError('error', trans('Email does not exist or password is incorrect'));
            return;
        }

        if (Auth::attempt($login)) {
            return redirect()->intended('/');
        }

        $this->addError('error', trans('Email does not exist or password is incorrect'));

        return;
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
