<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::orderBy('profiles_id')->orderBy('active')->get();
        $admin_active = 'active';
        return view('admin.profiles.index', compact('profiles', 'admin_active'));
    }

    public function create()
    {
        $admin_active = 'active';
        return view('admin.profiles.create', compact('admin_active'));
    }

    public function store(ProfileRequest $request)
    {
        if(Profile::create($request->all())){
            return redirect()
                ->route('perfis.index')
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
        $perfil = Profile::find($id);
        if($perfil == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $admin_active = 'active';
        return view('admin.profiles.edit', compact('admin_active', 'perfil'));
    }

    public function update(ProfileRequest $request, $id)
    {
        $perfil = Profile::find($id);
        if($perfil == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $data = $request->except('token');

        if($perfil->update($data)){
            return redirect()
                ->route('perfis.index')
                ->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function ativar_desativar($id)
    {
        $perfil = Profile::find($id);
        $perfil->active = !$perfil->active;
        if($perfil->save()){
            return redirect()->back()->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }
}
