<?php

namespace projectmanager\Http\Controllers;

use Illuminate\Http\Request;
use projectmanager\Repositories\NotasProjectRepository;
use projectmanager\Services\NotasProjectService;

class NotasProjectController extends Controller
{
    
    /**
     *  @var NotasProjectRepository
     */
    private $repository;

    /**
     * @var NotasProjectService
     */
    private $service;


    public function __construct( NotasProjectRepository $repository, NotasProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index($id)
    {
        return $this->repository->findWhere(['project_id'=> $id]);;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {   
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $notaId)
    {
        return $this->repository->findwhere(['project_id'=>$id, 'id'=>$notaId]);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $notaId)
    {
        return $this->service->find($notaId)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $notaId)
    {
        return $this->repository->find($notaId)->delete();
    }
}
