<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Detail;
use App\Http\Requests\DetailRequest;

class DetailController extends Controller
{
    public function index()
    {
        $plano = Plan::find(request('plans_id'));
        $admin_active = 'active';
        return view('admin.plans.details.index', compact('plano', 'admin_active'));
        
    }

    public function store(DetailRequest $request)
    {
        if(Detail::create($request->all())){
            return redirect()
                ->route('detalhes_do_plano.index', ['plans_id' => $request->plans_id])
                ->with('success', 'Cadastro Realizado com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function update(DetailRequest $request, $id)
    {
        $detalhe = Detail::find($id);
        if($detalhe == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $data = $request->except('token');

        if($detalhe->update($data)){
            return redirect()
                ->route('detalhes_do_plano.index', ['plans_id' => $request->plans_id])
                ->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function destroy($id)
    {
        $detalhe = Detail::find($id);
        if($detalhe == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        
        if($detalhe->delete()){
            return redirect()
                ->back()
                ->with('success', 'Detalhe Deletado!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }

    }
}
