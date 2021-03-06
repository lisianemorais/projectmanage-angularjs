<?php

namespace projectmanager\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ArquivosProject extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
            'project_id',
            'name',
            'descricao',
            'extensao',
    ];

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }

}
