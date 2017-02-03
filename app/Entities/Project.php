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
        'cliente_id',
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
    	return $this->belongsTo(User::class);
    }
}
