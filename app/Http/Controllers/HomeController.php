<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    //ok
    public function index()
    {
        $plans = Plan::where('active', true)->orderBy('price')->get();
        $plano_active = 'active';

        $title = 'Planos';
        $subtitle = 'Sistema para Lojas de Roupas. Conheça Nossos Planos';

        return view('web.home', compact('plans', 'plano_active', 'title', 'subtitle'));
    }

    public function contact()
    {
        $contact_active = 'active';
        $title = 'Contato';
        $subtitle = 'Entre em contato para assinar um de nossos planos ou testar gratuitamente';

        return view('web.home', compact('contact_active', 'title', 'subtitle'));
    }

    public function plan($plans_id){
        if(!$plan = Plan::find($plans_id)){
            return redirect()->back()->with('danger', 'Algum Erro Ocorreu!');
        }
        
        session()->put('plan', $plan->getAttributes());
        return redirect()->route('register');
    }
}
