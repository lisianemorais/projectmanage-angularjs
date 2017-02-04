<?php  

namespace projectmanager\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
	protected $rules = [
		'owner_id' => 'required',
        'cliente_id' => 'required',
        'name' => 'required',
        'progresso' => 'required',
        'status' => 'required',
        'data_fim' => 'required',
	];
}