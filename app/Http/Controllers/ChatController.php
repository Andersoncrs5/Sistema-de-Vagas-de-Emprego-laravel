<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('errs.manutencao');

    }
}
