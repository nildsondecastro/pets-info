<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\Detail;

class PlansTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //cadastro dos planos
        Plan::create([
            'name' => 'Plano Básico',
            'url' => 'plano-basico',
            'icon' => 'mdi mdi-weather-pouring',
            'active' => true,
            'price' => 99.99,
        ]);
        Plan::create([
            'name' => 'Plano Padrão',
            'url' => 'plano-padrao',
            'icon' => 'mdi mdi-weather-pouring',
            'active' => true,
            'price' => 199.99,
        ]);
        Plan::create([
            'name' => 'Plano Premium',
            'url' => 'plano-premium',
            //'icon' => 'plane',
            'icon' => 'mdi mdi-weather-pouring',
            'active' => true,
            'price' => 399.99,
        ]);

        //cadastro dos detalhes do plano básico
        Detail::create([
            'name' => '1 usuário',
            'plans_id' => 1,
        ]);
        Detail::create([
            'name' => 'Até 1000 pedidos por mês',
            'plans_id' => 1,
        ]);

        //cadastro dos detalhes do plano padrão
        Detail::create([
            'name' => '3 usuários',
            'plans_id' => 2,
        ]);
        Detail::create([
            'name' => 'Pedidos Ilimitados',
            'plans_id' => 2,
        ]);
        Detail::create([
            'name' => 'Cupons de Desconto',
            'plans_id' => 2,
        ]);
        Detail::create([
            'name' => 'Controle de Usuários',
            'plans_id' => 2,
        ]);

        //cadastro dos detalhes do plano premium
        Detail::create([
            'name' => '10 usuários',
            'plans_id' => 3,
        ]);
        Detail::create([
            'name' => 'Pedidos Ilimitados',
            'plans_id' => 3,
        ]);
        Detail::create([
            'name' => 'Cupons de Desconto',
            'plans_id' => 3,
        ]);
        Detail::create([
            'name' => 'Controle de Usuários',
            'plans_id' => 3,
        ]);
        Detail::create([
            'name' => 'Gestão de Estoque',
            'plans_id' => 3,
        ]);



        //Plan::create([
        //    'name' => 'Plano de Teste',
        //    'url' => 'plano-de-teste',
        //    'icon' => 'clock',
        //    'active' => true,
        //    'price' => 0.00,
        //]);
        //Plan::create([
        //    'name' => 'Plano PRO',
        //    'url' => 'plano-pro',
        //    'icon' => 'plane-departure',
        //    'active' => true,
        //    'price' => 220.00,
        //]);
        //Plan::create([
        //    'name' => 'Plano Ilimitado',
        //    'url' => 'plano-ilimitado',
        //    'icon' => 'rocket',
        //    'active' => false,
        //    'price' => 0.00,
        //]);
    }
}
