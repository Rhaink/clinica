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

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('matricula')->nullable();

            $table->string('gender')->nullable();

            $table->string('edad')->nullable();

            $table->string('sala')->nullable();

            $table->string('religion')->nullable();

            $table->string('ocupacion')->nullable();

            $table->string('estadocivil')->nullable();

            $table->string('medicotratante')->nullable();

            $table->string('originariode')->nullable();

            $table->string('radicaen')->nullable();

            $table->string('escolaridad')->nullable();

            $table->string('municipales')->nullable();

            $table->string('habitacion')->nullable();

            $table->string('tabaquismo')->nullable();

            $table->string('etilismo')->nullable();

            $table->string('higiene')->nullable();

            $table->string('alimentacion')->nullable();

            $table->string('dominio')->nullable();

            $table->string('hijos')->nullable();

            $table->string('pasatiempo')->nullable();

            $table->string('otros')->nullable();

            $table->string('diabetes')->nullable();

            $table->string('hta')->nullable();

            $table->string('cancer')->nullable();

            $table->string('enfreumat')->nullable();

            $table->string('cardiopatias')->nullable();

            $table->string('cirugias')->nullable();

            $table->string('alergias')->nullable();

            $table->string('transfusiones')->nullable();

            $table->string('accidentes')->nullable();

            $table->string('encames')->nullable();

            $table->string('fracturas')->nullable();

            $table->string('ta')->nullable();

            $table->string('temp')->nullable();

            $table->string('fc')->nullable();

            $table->string('fr')->nullable();

            $table->string('reflejos')->nullable();

            $table->string('sensibilidad')->nullable();

            $table->string('lenguaje')->nullable();

            $table->string('otrose')->nullable();

            $table->string('sitioe')->nullable();

            $table->string('sitioc')->nullable();

            $table->string('queloide')->nullable();

            $table->string('retractil')->nullable();

            $table->string('abierta')->nullable();

            $table->string('adherencias')->nullable();

            $table->string('hipertrofica')->nullable();

            $table->string('libre')->nullable();

            $table->string('claudicante')->nullable();

            $table->string('ayudas')->nullable();

            $table->string('espastica')->nullable();

            $table->string('ataxica')->nullable();

            $table->string('otras')->nullable();

            $table->string('valinicial')->nullable();

            $table->string('independiente1')->nullable();

            $table->string('ruedas1')->nullable();

            $table->string('ayudas1')->nullable();

            $table->string('camilla1')->nullable();

            $table->string('valfinal')->nullable();

            $table->string('independiente2')->nullable();

            $table->string('ruedas2')->nullable();

            $table->string('ayudas2')->nullable();

            $table->string('camilla2')->nullable();

            $table->string('dolor')->nullable();

            $table->string('dolorinicial')->nullable();

            $table->string('dolorfinal')->nullable();

            $table->string('em1msupizq')->nullable();

            $table->string('em1msupder')->nullable();

            $table->string('em1minfizq')->nullable();

            $table->string('em1minfder')->nullable();

            $table->string('em1troncoizq')->nullable();

            $table->string('em1troncoder')->nullable();

            $table->string('em1cuelloizq')->nullable();

            $table->string('em1cuelloizq')->nullable();



            $table->timestamps();

            $table->softDeletes();
        });
    }
}
