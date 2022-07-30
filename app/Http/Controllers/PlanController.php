<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Requests\PlanRequest;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $plans = Plan::orderBy('plans_id')->orderBy('active')->get();
        $admin_active = 'active';
        return view('admin.plans.index', compact('plans', 'admin_active'));
    }

    public function create()
    {
        $admin_active = 'active';
        return view('admin.plans.create', compact('admin_active'));
    }

    public function store(PlanRequest $request)
    {
        if(Plan::create($request->all())){
            return redirect()
                ->route('planos.index')
                ->with('success', 'Cadastro Realizado com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $plano = Plan::find($id);
        if($plano == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $admin_active = 'active';
        return view('admin.plans.edit', compact('admin_active', 'plano'));
    }

    public function update(PlanRequest $request, $id)
    {
        $plano = Plan::find($id);
        if($plano == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $data = $request->except('token');

        if($plano->update($data)){
            return redirect()
                ->route('planos.index')
                ->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }

    }

    public function destroy($id)
    {
        //
    }

    public function ativar_desativar($id)
    {
        $plano = Plan::find($id);
        $plano->active = !$plano->active;
        if($plano->save()){
            return redirect()->back()->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }
}
