<?php

namespace App\Http\Controllers;

use App\Models\Account as ModelsAccount;
use Illuminate\Http\Request;

class Account extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts=ModelsAccount::all();
        return view('Account.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Account.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Account::create($request->all());
        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $account=\App\Models\Account::find($id);
        return view("Account.edit",["account"=>$account]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $account=ModelsAccount::find($id);
        $account->Email=$request->email;
        $account->Password=$request->password;
        $account->save();

        return redirect("/Account");
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Account::destroy($id);
        $accounts=ModelsAccount::all();
        return view('Account.index',compact('accounts'));
    }
}
