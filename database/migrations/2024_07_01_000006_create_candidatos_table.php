<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id('id_candidatos');
            // $table->string('nome_candidatos',100);
            $table->string('email_candidatos',120)->unique();
            $table->string('telefone_candidatos');
            $table->string('curriculo_candidatos')->nullable();
            // $table->enum("sexo_candidatos",["M","F","O"]);

            $table->foreignId('vagas_id')
                  ->constrained('vagas', 'id_vagas') 
                  ->onDelete('cascade');

            $table->foreignId('user_id')
                  ->constrained('usuarios','id_usuario') 
                  ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
