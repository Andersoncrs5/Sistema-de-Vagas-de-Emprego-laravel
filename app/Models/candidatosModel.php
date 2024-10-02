<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class candidatosModel extends Model
{
    use HasFactory,SoftDeletes ;

    protected $table = 'candidatos';
    protected $primaryKey = 'id_candidatos';
    protected $fillable = ['nome_candidatos', 'email_candidatos','telefone_candidatos', 'curriculo_candidatos']; 

    public function usuarios()
    {
        return $this->belongsTo(usuariosModel::class, 'user_id', 'id_usuario'); 
    }

    public function vagas()
    {
        return $this->belongsTo(vagasModel::class, 'vagas_id', 'id_vagas'); 
    }
}
