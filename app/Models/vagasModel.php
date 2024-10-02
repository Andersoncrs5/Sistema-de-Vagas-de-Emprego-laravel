<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use app\Models\usuariosModel;
use App\Models\comentariosModel;
use App\Models\candidatosModel;


class vagasModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'vagas';
    protected $primaryKey = 'id_vagas';
    
    protected $fillable = ['email_vaga', 'titulo_vagas','descrição',
    'inicio_salario_vagas','fim_salario_vagas','local_vagas','tipo_vaga','scala_vagas','pausado','fk_usuario_id' ];
    
    public function usuarios(){
        return $this->belongsTo(usuariosModel::class,'fk_usuario_id','id_usuario');
    }
    public function comentarios(){
        return $this->hasMany(comentariosModel::class,'vagas_id','id_vagas');
    }
    public function candidatos(){
        return $this->hasMany(candidatosModel::class,'vagas_id','id_candidatos');
    }
}
