<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id('id_vagas');
            $table->string('email_vaga', 120);
            $table->string('titulo_vagas', 150);
            $table->longText('descrição');
            $table->bigInteger('inicio_salario_vagas');
            $table->bigInteger('fim_salario_vagas');
            $table->string('local_vagas');
            $table->enum('tipo_vaga', ['CLT', 'PJ', 'FL'])->nullable(false);
            $table->enum('senioridade_vagas', ['J', 'P', 'S'])->nullable(false);
            $table->enum('scala_vagas', ['PRE', 'RE', 'HI'])->nullable(false);
            $table->enum('ferramenta_vaga',['PHP','PY','JV','JS','GO','TS','DT','MYSQL','FLT',
            'SQLITE','KT','CS','CPP','C','RS','R','HC','RB','SW','NODE','SC','ML','OC','SQL','CB','LUA',
            'MDB','VBA','PL','PSQL','SQLS','OSQL','PLSQL','TSQL','HK','JL','EL','DEVOPS','FS'])->nullable(false);

            $table->enum('estado_vaga',['PI','AC','AL','AM','AZ','BH','CE','DF','ES',
            'GO','MA','MT','MS','MG','PA','PB','PR','PE','RJ','RN','RS','RO','RR','SC','SP','SE','TO','BA'])->nullable(false);
            $table->boolean('pausado')->default(false);

            $table->foreignId('fk_usuario_id')
                  ->constrained('usuarios', 'id_usuario')
                  ->onDelete('cascade');
                  
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};

/*
nova coluna - beneficios 

*/