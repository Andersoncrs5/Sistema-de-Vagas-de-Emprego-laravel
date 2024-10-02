<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comentariosModel extends Model
{
    use HasFactory, SoftDeletes; 

    protected $table = 'comentarios';
    protected $primaryKey = 'id_comentario';
    protected $fillable = ['nome_comentario', 'email_comentario','comentario_comentario', 'editado_comentario']; 
    


    public function usuarios()
    {
        return $this->belongsTo(usuariosModel::class, 'user_id', 'id_usuario'); 
    }

    public function vagas()
    {
        return $this->belongsTo(vagasModel::class, 'vagas_id', 'id_vagas'); 
    }
}
