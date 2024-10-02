<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nome_usuario',140);
            $table->string('email_usuario',200)->unique();
            $table->string('senha_usuario',255);
            $table->string('cpf_usuario',11)->unique();
            $table->dateTime('data_nasc_usuario');
            $table->longText('descricao_usuario')->nullable();
            $table->enum('sexo_usuario',["Masculino","Feminino","Outro"]); 
            $table->char('estado_usuario',2);
            $table->enum('area_usuario',["Desenvolvimento Web",'Desenvolvimento de Aplicativos Móveis','Desenvolvimento de Software',
            'Ciência de Dados e Análise','Inteligência Artificial','Desenvolvimento de Jogos','Desenvolvimento de Sistemas Embarcados',
            'DevOps','Segurança da Informação','Administração de Banco de Dados','Programação de Scripts','Blockchain', 'Criptomoedas',
            'Desenvolvimento de APIs','Testes de Software','Arquitetura de Software','Computação em Nuvem',
            'Gestão de Projetos','Marketing Digital','UX/UI Design']);

            $table->string('telefone_usuario')->nullable(); //
            $table->string('ferramenta_favorita_usuario')->nullable();
            $table->enum("nivel_usuario",['E','J','P','S'])->nullable();
            $table->string('pausa_usuario')->default("0");
            // $table->string('curriculo_usuarios',255)->nullable()->default("null");
            $table->timestamps();
            $table->softDeletes();
        });


    }
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};