<?php

namespace projectmanager\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use projectmanager\Repositories\MembrosProjectRepository;
use projectmanager\Entities\MembrosProject;
use projectmanager\Validators\MembrosProjectValidator;

/**
 * Class MembrosProjectRepositoryEloquent
 * @package namespace projectmanager\Repositories;
 */
class MembrosProjectRepositoryEloquent extends BaseRepository implements MembrosProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MembrosProject::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MembrosProjectValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
