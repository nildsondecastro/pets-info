<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Profile;
use App\Models\ProfilePlan;
use App\Http\Requests\ProfilePlanRequest;

class ProfilePlanController extends Controller
{

    public function index()
    {
        $profiles_plans = ProfilePlan::all();
        $admin_active = 'active';
        return view('admin.profilesplans.index', compact('profiles_plans', 'admin_active'));
    }

    public function create()
    {
        $plans = Plan::all();
        $profiles = Profile::all();
        $admin_active = 'active';
        return view(
            'admin.profilesplans.create', 
            compact('admin_active', 'plans', 'profiles')
        );
    }

    public function store(ProfilePlanRequest $request)
    {
        if(ProfilePlan::create($request->all())){
            return redirect()
                ->route('planos_perfis.index')
                ->with('success', 'Vínculo Realizado com Sucesso!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }

    public function destroy($id)
    {
        $profileplan = ProfilePlan::find($id);
        if($profileplan == null){
            return redirect()->back()->with('danger', 'Não Encontrado!');
        }
        
        if($profileplan->delete()){
            return redirect()
                ->back()
                ->with('success', 'Vínculo Deletado!');
        }else{
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
    }
}
