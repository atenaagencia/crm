<?php

namespace App\Http\Livewire\Target;

use Livewire\Component;
use App\Models\Client;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $targets;
    public $vendedores, $filter, $phase;

    public function mount(Client $targets){

        if(Auth::user()->role->label == "admin"){
        $this->targets = $targets->all();
        }else{
            $this->targets = $targets->where('user_id', Auth::user()->id)->get();
        }

        $role = Role::where('label', 'vendedor')->first();
        $this->vendedores = User::where('role_id', $role->id)->get();

        if(!$this->filter == ''){
            $this->targets = $targets->where('user_id', $this->filter)->get();
        }
        if (!$this->phase == '') {
            $this->targets = $targets->where('estagio', $this->phase)->get();
        }
        if (!$this->filter == '' && !$this->phase == '') {
            $this->targets = $targets->where('user_id', $this->filter)->where('estagio', $this->phase)->get();
        }

    }

    public function render()
    {   
        return view('livewire.target.index');
    }

    public function resetFilter(){
        $this->filter = '';
        $this->phase = '';
    }
}
