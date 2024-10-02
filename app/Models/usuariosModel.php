<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\vagasModel;
use App\Models\comentariosModel;


class usuariosModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nome_usuario',
        'email_usuario', 
        'senha_usuario', 
        'cpf_usuario',
        'data_nasc_usuario',
        'descricao_usuario',
        'sexo_usuario',
        'estado_usuario',
        'area_usuario',
        'ferramenta_favorita_usuario',
        'nivel_usuario',
        'pausa_usuario',
    ];
    
    
    public function vagas(){
        return $this->hasMany(vagasModel::class,'fk_usuario_id','id_usuario');
    }

    public function comentarios(){
        return $this->hasMany(comentariosModel::class,"user_id","id_usuario");
    }
    public function candidatos(){
        return $this->hasMany(candidatosModel::class,'user_id','id_candidatos');
    }
}
