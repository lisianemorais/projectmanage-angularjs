<?php

namespace projectmanager\Entities;

use Illuminate\Database\Eloquent\Model;
use projectmanager\Entities\Project;

class Clientes extends Model
{
    protected $fillable = [
    	'name',
    	'responsavel',
    	'email',
    	'phone',
    	'endereco',
    	'obs'
    ];


    public function project()
    {
    	return $this->hasMany(Project::class);
    }
}
