<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Requests\PermissionRequest;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('permissions_id')->orderBy('active')->get();
        $admin_active = 'active';
        return view('admin.permissions.index', compact('permissions', 'admin_active'));
    }

    public function create()
    {
        $admin_active = 'active';
        return view('admin.permissions.create', compact('admin_active'));
    }

    public function store(PermissionRequest $request)
    {
        if(Permission::create($request->all())){
            return redirect()
                ->route('permissions.index')
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
        $permission = Permission::find($id);
        if($permission == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $admin_active = 'active';
        return view('admin.permissions.edit', compact('admin_active', 'permission'));
    }

    public function update(PermissionRequest $request, $id)
    {
        $permission = Permission::find($id);
        if($permission == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        $data = $request->except('token');

        if($permission->update($data)){
            return redirect()
                ->route('permissions.index')
                ->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function ativar_desativar($id)
    {
        $permission = Permission::find($id);
        $permission->active = !$permission->active;
        if($permission->save()){
            return redirect()->back()->with('success', 'Atualização Realizada com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }
}
