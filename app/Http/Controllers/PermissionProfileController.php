<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Permission;
use App\Http\Requests\PermissionProfileRequest;
use App\Models\PermissionProfile;

class PermissionProfileController extends Controller
{
    
    public function permissions($idProfile)
    {
        $profile = Profile::with('permissions')->find($idProfile);
        if(!$profile){
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
        $permissions = $profile->permissionsAvailable();
        $admin_active = 'active';
        return view('admin.profiles.permissions', compact('admin_active', 'profile', 'permissions'));
    }
    
    public function store(PermissionProfileRequest $request)
    {
        if(PermissionProfile::create($request->all())){
            return redirect()
                ->back()
                ->with('success', 'Cadastro Realizado com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function destroy(Request $request)
    {
        $data = PermissionProfile::where([
            ['permissions_id', $request->idPermission],
		    ['profiles_id', $request->idProfile]
        ])->first();

        if($data == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        
        if($data->delete()){
            return redirect()
                ->back()
                ->with('success', 'Permissão Excluída do Perfil com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }
}
