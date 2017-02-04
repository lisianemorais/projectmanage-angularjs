<?php

namespace projectmanager\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use projectmanager\Repositories\ArquivosProjectRepository;
use projectmanager\Entities\ArquivosProject;
use projectmanager\Validators\ArquivosProjectValidator;

/**
 * Class ArquivosProjectRepositoryEloquent
 * @package namespace projectmanager\Repositories;
 */
class ArquivosProjectRepositoryEloquent extends BaseRepository implements ArquivosProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArquivosProject::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
