<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id("id_comentario");
            $table->string("nome_comentario");
            $table->string("email_comentario");
            $table->longText("comentario_comentario");
            $table->integer("editado_comentario")->default(0);

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


    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
