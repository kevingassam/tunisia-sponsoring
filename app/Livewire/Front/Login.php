<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    public function render()
    {
        return view('livewire.front.login');
    }

    public function login(){
        $this->validate([
            'email'=>'required|email|existe:users,email',
            'password'=>'required|min:8'
        ],[
            'email.existe'=>'Email n\'existe pas',
            'password.min'=>'Votre mot de passe doit contenir au moins 8 caractères',
            'password.required'=>'Votre mot de passe est obligatoire',
            'email.required'=>'Votre email est obligatoire',
            'email.email'=>'Votre email doit être valide',
            
        ]);
    }

}
