<?php 

namespace projectmanager\Services;

use projectmanager\Repositories\NotasProjectRepository;
use projectmanager\Validators\NotasProjectValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class NotasProjectService 
{
	/**
	 * @var ClienteRepository
	 */
	protected $repository;

	/**
	 * @var ClienteValidator
	 */
	protected $validator;

	public function __construct(NotasProjectRepository $repository, NotasProjectValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function create( array $data)
    {    
    	try{                  

    		$this->validator->with($data)->passesOrFail();
        	return $this->repository->create($data);

    	} catch (ValidatorException $e) {
    		return[
    			'error'=> true,
    			'message'=> $e->getMessageBag()
    		];
    	}  
    }


    public function update(array $data, $id)
    {	
    	try{
    		$this->validator->with($data)->passesOrFail();
        	return $this->repository->find($id)->update($data);
    	}catch(ValidatorException $e){
    		return[
    			'error'=> true,
    			'message'=> $e->getMessageBag()
    		];
    	} 
    }
}