<?php 

namespace projectmanager\Services;

use projectmanager\Repositories\ProjectRepository;

use \projectmanager\Validators\ProjectValidator;

use \Prettus\Validator\Exceptions\ValidatorException;

class ProjectService 
{
	/**
	 * @var ProjectRepository
	 */
	protected $repository;

	/**
	 * @var ProjectValidator
	 */
	protected $validator;

	public function __constuct(ProjectRepository $repository, ProjectValidator $validator)
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