<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans_shops', function (Blueprint $table) {
            $table->id('plans_shops_id');

            $table->bigInteger('plans_id');
            $table->foreign('plans_id')
                ->references('plans_id')
                ->on('plans');

            $table->bigInteger('shops_id');
            $table->foreign('shops_id')
                ->references('shops_id')
                ->on('shops');

            $table->date('subscription')->nullable();//Data que se inscreveu
            $table->date('expires_at')->nullable();//Data que expira o acesso
            $table->string('subscription_id')->nullable();//Identificado do Gateway de pagamento
            $table->boolean('subscription_active')->default(false);//Assinatura Ativa
            $table->boolean('subscription_suspended')->default(false);//Assinatura Cancelada

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans_shops');
    }
}
