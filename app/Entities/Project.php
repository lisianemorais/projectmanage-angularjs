<?php

namespace projectmanager\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use projectmanager\Entities\Clientes;
use projectmanager\Entities\NotasProject;
use projectmanager\Entities\User;


class Project extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'owner_id',
        'clientes_id',
        'name',
        'descricao',
        'progresso',
        'status',
        'data_fim',
    ];

    public function notas()
    {
    	return $this->hasMany(NotasProject::class);
    }


    public function cliente()
    {
    	return $this->belongsTo(Clientes::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'owner_id');
    }

    public function membros()
    {
        return $this->belongsToMany(User::class, 'membros_projects', 'project_id', 'membro_id');
    }

    public function arquivos()
    {
        return $this->hasMany(ArquivosProject::class);
    }
}
