<?php

namespace projectmanager\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use projectmanager\Repositories\ProjectRepository;
use projectmanager\Entities\Project;
use projectmanager\Validators\ProjectValidator;

/**
 * Class ProjectRepositoryEloquent
 * @package namespace projectmanager\Repositories;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
