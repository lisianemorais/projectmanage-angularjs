<?php

namespace projectmanager\Validators;

use Prettus\Validator\LaravelValidator;

class ClienteValidator extends LaravelValidator
{
	protected $rules = [
		'name' => 'required|max:255',
		'responsavel' => 'required|max:255',
		'email' => 'required|email',
		'phone' => 'required',
		'endereco' => 'required'
	];
}
