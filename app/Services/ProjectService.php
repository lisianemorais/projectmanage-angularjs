<?php 

namespace projectmanager\Services;

use projectmanager\Repositories\ProjectRepository;

use \projectmanager\Validators\ProjectValidator;

use \Prettus\Validator\Exceptions\ValidatorException;

use Illuminate\Contracts\Filesystem\Factory ;
use Illuminate\Filesystem\Filesystem;

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

    /**
     * @var Factory
     */

    protected $factory;

    /**
     * @var Filesystem
     */

    protected $filesystem;

	public function __construct(ProjectRepository $repository, ProjectValidator $validator, Factory $factory, Filesystem $filesystem)
	{
		$this->repository = $repository;
		$this->validator = $validator;
        $this->factory = $factory;
        $this->filesystem = $filesystem;
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


    public function createFile(array $data )
    {   

        $this->factory->put($data['id'].".".$data['extensao'], $this->filesystem->get($data['arquivo']));

    }
}