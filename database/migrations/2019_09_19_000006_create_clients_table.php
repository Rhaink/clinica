<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('phone',25)->nullable();

            $table->string('email',40)->nullable();

            $table->string('matricula',25)->nullable();

            $table->string('gender',20)->nullable();

            $table->string('edad',10)->nullable();

            $table->string('sala',10)->nullable();

            $table->string('religion',25)->nullable();

            $table->string('ocupacion',40)->nullable();

            $table->string('estadocivil',25)->nullable();

            $table->string('medicotratante',40)->nullable();

            $table->string('originariode',40)->nullable();

            $table->string('radicaen',25)->nullable();

            $table->string('escolaridad',25)->nullable();

            $table->string('municipales',25)->nullable();

            $table->string('habitacion',10)->nullable();

            $table->string('tabaquismo',15)->nullable();

            $table->string('etilismo',15)->nullable();

            $table->string('higiene',15)->nullable();

            $table->string('alimentacion',25)->nullable();

            $table->string('dominio',25)->nullable();

            $table->string('hijos',10)->nullable();

            $table->string('pasatiempo',25)->nullable();

            $table->text('otros')->nullable();

            $table->string('diabetes',25)->nullable();

            $table->text('hta')->nullable();

            $table->text('cancer')->nullable();

            $table->text('enfreumat')->nullable();

            $table->text('cardiopatias')->nullable();

            $table->text('cirugias')->nullable();

            $table->text('alergias')->nullable();

            $table->text('transfusiones')->nullable();

            $table->text('accidentes')->nullable();

            $table->text('encames')->nullable();

            $table->text('fracturas')->nullable();

            $table->text('ta')->nullable();

            $table->text('temp')->nullable();

            $table->text('fc')->nullable();

            $table->text('fr')->nullable();

            $table->text('reflejos')->nullable();

            $table->text('sensibilidad')->nullable();

            $table->text('lenguaje')->nullable();

            $table->text('otrose')->nullable();

            $table->text('sitioe')->nullable();

            $table->text('sitioc')->nullable();

            $table->text('queloide')->nullable();

            $table->text('retractil')->nullable();

            $table->text('abierta')->nullable();

            $table->text('adherencias')->nullable();

            $table->text('hipertrofica')->nullable();

            $table->text('libre')->nullable();

            $table->text('claudicante')->nullable();

            $table->text('ayudas')->nullable();

            $table->text('espastica')->nullable();

            $table->text('ataxica')->nullable();

            $table->text('otras')->nullable();

            $table->text('valinicial')->nullable();

            $table->text('independiente1')->nullable();

            $table->text('ruedas1')->nullable();

            $table->text('ayudas1')->nullable();

            $table->text('camilla1')->nullable();

            $table->text('valfinal')->nullable();

            $table->text('independiente2')->nullable();

            $table->text('ruedas2')->nullable();

            $table->text('ayudas2')->nullable();

            $table->text('camilla2')->nullable();

            $table->text('dolor')->nullable();

            $table->text('dolorinicial')->nullable();

            $table->text('dolorfinal')->nullable();

            $table->text('em1msupizq')->nullable();

            $table->text('em1msupder')->nullable();

            $table->text('em1minfizq')->nullable();

            $table->text('em1minfder')->nullable();

            $table->text('em1troncoizq')->nullable();

            $table->text('em1troncoder')->nullable();

            $table->text('em1cuelloizq')->nullable();

            $table->text('em1cuelloder')->nullable();

            $table->text('em2msupizq')->nullable();

            $table->text('em2msupder')->nullable();

            $table->text('em2minfizq')->nullable();

            $table->text('em2minfder')->nullable();

            $table->text('em2troncoizq')->nullable();

            $table->text('em2troncoder')->nullable();

            $table->text('em2cuelloizq')->nullable();

            $table->text('em2cuelloder')->nullable();

            $table->text('eg1msupizq')->nullable();

            $table->text('eg1msupder')->nullable();

            $table->text('eg1minfizq')->nullable();

            $table->text('eg1minfder')->nullable();

            $table->text('eg1troncoizq')->nullable();

            $table->text('eg1troncoder')->nullable();

            $table->text('eg1cuelloizq')->nullable();

            $table->text('eg1cuelloder')->nullable();

            $table->text('eg2msupizq')->nullable();

            $table->text('eg2msupder')->nullable();

            $table->text('eg2minfizq')->nullable();

            $table->text('eg2minfder')->nullable();

            $table->text('eg2troncoizq')->nullable();

            $table->text('eg2troncoder')->nullable();

            $table->text('eg2cuelloizq')->nullable();

            $table->text('eg2cuelloder')->nullable();

            $table->string('dxmedico',30)->nullable();

            $table->string('cie10',30)->nullable();

            $table->text('objetivos')->nullable();

            $table->text('hipotesis')->nullable();

            $table->text('ecorporal')->nullable();

            $table->text('fcorporal')->nullable();

            $table->text('actividad')->nullable();

            $table->text('participacion')->nullable();

            $table->text('pronostico')->nullable();

            $table->text('plan')->nullable();

            $table->string('dxfisio',50)->nullable();

            $table->string('codigocif',50)->nullable();

            $table->string('proximacita',25)->nullable();

            $table->string('hora',25)->nullable();

            $table->string('elaboro',25)->nullable();





            $table->timestamps();

            $table->softDeletes();
        });
    }
}
