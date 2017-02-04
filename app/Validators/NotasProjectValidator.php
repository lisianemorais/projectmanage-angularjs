<?php  

namespace projectmanager\Validators;

use Prettus\Validator\LaravelValidator;

class NotasProjectValidator extends LaravelValidator

{
	protected $rules = [
		'project_id' => 'required',
        'titulo' => 'required',
        'nota' => 'required',
	];
}