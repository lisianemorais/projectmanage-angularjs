<?php

namespace projectmanager\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use projectmanager\Repositories\NotasProjectRepository;
use projectmanager\Entities\NotasProject;
use projectmanager\Validators\NotasProjectValidator;

/**
 * Class NotasProjectRepositoryEloquent
 * @package namespace projectmanager\Repositories;
 */
class NotasProjectRepositoryEloquent extends BaseRepository implements NotasProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return NotasProject::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
