<?php

namespace App\Http\Livewire\Target;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $targets;

    public function mount(Client $targets){
        if(Auth::user()->role->label == "admin"){
        $this->targets = $targets->all();
        }else{
            $this->targets = $targets->where('user_id', Auth::user()->id)->get();
        }
    }

    public function render()
    {   
        return view('livewire.target.index');
    }
}
