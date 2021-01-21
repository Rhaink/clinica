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

            $table->string('email',30)->nullable();

            $table->string('matricula',25)->nullable();

            $table->string('gender',25)->nullable();

            $table->string('edad',25)->nullable();

            $table->string('sala',25)->nullable();

            $table->string('religion',25)->nullable();

            $table->string('ocupacion',25)->nullable();

            $table->string('estadocivil',25)->nullable();

            $table->string('medicotratante',25)->nullable();

            $table->string('originariode',25)->nullable();

            $table->string('radicaen',25)->nullable();

            $table->string('escolaridad',25)->nullable();

            $table->string('municipales',25)->nullable();

            $table->string('habitacion',25)->nullable();

            $table->string('tabaquismo',25)->nullable();

            $table->string('etilismo',25)->nullable();

            $table->string('higiene',25)->nullable();

            $table->string('alimentacion',25)->nullable();

            $table->string('dominio',25)->nullable();

            $table->string('hijos',25)->nullable();

            $table->string('pasatiempo',25)->nullable();

            $table->string('otros',50)->nullable();

            $table->string('diabetes',25)->nullable();

            $table->string('hta',50)->nullable();

            $table->string('cancer',50)->nullable();

            $table->string('enfreumat',50)->nullable();

            $table->string('cardiopatias',50)->nullable();

            $table->string('cirugias',50)->nullable();

            $table->string('alergias',50)->nullable();

            $table->string('transfusiones',50)->nullable();

            $table->string('accidentes',50)->nullable();

            $table->string('encames',50)->nullable();

            $table->string('fracturas',50)->nullable();

            $table->string('ta',50)->nullable();

            $table->string('temp',50)->nullable();

            $table->string('fc',50)->nullable();

            $table->string('fr',50)->nullable();

            $table->string('reflejos',50)->nullable();

            $table->string('sensibilidad',50)->nullable();

            $table->string('lenguaje',50)->nullable();

            $table->string('otrose',50)->nullable();

            $table->string('sitioe',50)->nullable();

            $table->string('sitioc',50)->nullable();

            $table->string('queloide',50)->nullable();

            $table->string('retractil',50)->nullable();

            $table->string('abierta',50)->nullable();

            $table->string('adherencias',50)->nullable();

            $table->string('hipertrofica',50)->nullable();

            $table->string('libre',50)->nullable();

            $table->string('claudicante',50)->nullable();

            $table->string('ayudas',50)->nullable();

            $table->string('espastica',50)->nullable();

            $table->string('ataxica',50)->nullable();

            $table->string('otras',50)->nullable();

            $table->string('valinicial',50)->nullable();

            $table->string('independiente1',50)->nullable();

            $table->string('ruedas1',50)->nullable();

            $table->string('ayudas1',50)->nullable();

            $table->string('camilla1',50)->nullable();

            $table->string('valfinal',50)->nullable();

            $table->string('independiente2',50)->nullable();

            $table->string('ruedas2',50)->nullable();

            $table->string('ayudas2',50)->nullable();

            $table->string('camilla2',50)->nullable();

            $table->string('dolor',50)->nullable();

            $table->string('dolorinicial',50)->nullable();

            $table->string('dolorfinal',50)->nullable();

            $table->string('em1msupizq',50)->nullable();

            $table->string('em1msupder',50)->nullable();

            $table->string('em1minfizq',50)->nullable();

            $table->string('em1minfder',50)->nullable();

            $table->string('em1troncoizq',50)->nullable();

            $table->string('em1troncoder',50)->nullable();

            $table->string('em1cuelloizq',50)->nullable();

            $table->string('em1cuelloder',50)->nullable();

            $table->string('em2msupizq',50)->nullable();

            $table->string('em2msupder',50)->nullable();

            $table->string('em2minfizq',50)->nullable();

            $table->string('em2minfder',50)->nullable();

            $table->string('em2troncoizq',50)->nullable();

            $table->string('em2troncoder',50)->nullable();

            $table->string('em2cuelloizq',50)->nullable();

            $table->string('em2cuelloder',50)->nullable();

            $table->string('eg1msupizq',50)->nullable();

            $table->string('eg1msupder',50)->nullable();

            $table->string('eg1minfizq',50)->nullable();

            $table->string('eg1minfder',50)->nullable();

            $table->string('eg1troncoizq',50)->nullable();

            $table->string('eg1troncoder',50)->nullable();

            $table->string('eg1cuelloizq',50)->nullable();

            $table->string('eg1cuelloder',50)->nullable();

            $table->string('eg2msupizq',50)->nullable();

            $table->string('eg2msupder',50)->nullable();

            $table->string('eg2minfizq',50)->nullable();

            $table->string('eg2minfder',50)->nullable();

            $table->string('eg2troncoizq',50)->nullable();

            $table->string('eg2troncoder',50)->nullable();

            $table->string('eg2cuelloizq',50)->nullable();

            $table->string('eg2cuelloder',50)->nullable();

            $table->string('dxmedico',50)->nullable();

            $table->string('cie10',50)->nullable();

            $table->string('objetivos')->nullable();

            $table->string('hipotesis')->nullable();

            $table->string('ecorporal')->nullable();

            $table->string('fcorporal')->nullable();

            $table->string('actividad')->nullable();

            $table->string('participacion')->nullable();

            $table->string('pronostico')->nullable();

            $table->string('plan')->nullable();

            $table->string('dxfisio',50)->nullable();

            $table->string('codigocif',50)->nullable();

            $table->string('proximacita',50)->nullable();

            $table->string('hora',25)->nullable();

            $table->string('elaboro',50)->nullable();





            $table->timestamps();

            $table->softDeletes();
        });
    }
}
