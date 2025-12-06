<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Mary\Traits\Toast;

#[Layout('components.layouts.guest')]
#[Title('Login')]
class Login extends Component
{
    use Toast;
    public $email, $password;
    public function mount(){
        if(Auth::guard('web')->check()){
            return redirect()->route('menus');
        }
    }

    public function login(){
        $validation = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validation)){
            $this->success('Welcome! You are now signed in.', position: 'toast-bottom');
            return redirect()->route('menus');
        } else {
            $this->error('Invalid Credential. Please try again or contact administrator.', position: 'toast-botton');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
