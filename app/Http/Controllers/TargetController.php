<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.target.indexTarget');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::where('label', 'vendedor')->first();
        $vendedor = User::where('role_id', $role->id)->orderBy('updated_at', 'asc')->first();

        if ($vendedor) {
            $target = Client::create($request->all());
            $target->fill([
                'tipo' => 'Target Ativo',
                'estagio' => 'aguardando',
                'user_id' => $vendedor->id
            ]);
            $target->save();
            $vendedor->updated_at = time();
            $vendedor->save();
            $record = Record::create([
                'descricao' => 'Target cadastrado com sucesso',
                'client_id' => $target->id,
                'user_id' => Auth::user()->id
            ]);
        } else {
            return ' não existe';
        }

        return redirect()->route('target.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $target)
    {
        return view('pages.target.showTarget')->with('target', $target);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
