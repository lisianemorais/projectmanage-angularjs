<?php

namespace projectmanager\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use projectmanager\Entities\Project;


class NotasProject extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'project_id',
    	'titulo',
    	'nota'
    ];

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }

}
