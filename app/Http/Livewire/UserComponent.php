<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserComponent extends Component
{
    public $añadir = "false";
    public $user_id, $name, $email, $password;

    public function render()
    {
        return view('livewire.user-component', [
            'user' => User::get()
        ]);
    }

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        /*if ($validator) {
            $this->añadir = "false";
        }*/

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function destroy($id)
    {
        User::destroy($id);
    }

    public function edit($id)
    {
        $user = User::find($id);

        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update()
    {
        $user = User::find($this->user_id);

        if ($this->name == '') $this->name = $user->name;
        if ($this->email == '') $this->email = $user->email;
        if ($this->password == '') $this->password = $user->password; else $this->password = Hash::make($this->password);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
