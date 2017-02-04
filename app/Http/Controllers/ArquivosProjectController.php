<?php

namespace projectmanager\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use projectmanager\Services\ProjectService;
use projectmanager\Entities\ArquivosProject;

class ArquivosProjectController extends Controller
{
    
    /**
     *  @var NotasProjectRepository
     */
   // private $repository;

    /**
     * @var NotasProjectService
     */
    private $service;

    private $arquivosProject;


    public function __construct( ProjectService $service, ArquivosProject $arquivosProject)
    {
     //   $this->repository = $repository;
        $this->service = $service;
        $this->arquivosProject = $arquivosProject;
    }

    //public function index($id)
    //{
    //    return $this->repository->findWhere(['project_id'=> $id]);;
    //}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {   
        
    //  dd($request->all());
        
        $arquivo = $request->file('arquivo');
        
        $extensao = $arquivo->getClientOriginalExtension();
        $data['arquivo'] = $arquivo;
        $data['extensao'] = $extensao;
        $data['name'] = $request->name;
        $data['project_id'] = 1;//$request->project_id;
        $data['descricao'] = $request->descricao;
        $arquivoProjeto = $this->arquivosProject->create($data);
        $data['id'] = $arquivoProjeto->id;
        $this->service->createFile($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show($id, $notaId)
   // {
   //     return $this->repository->findwhere(['project_id'=>$id, 'id'=>$notaId]);
   // }
//
//   // 
//
//   // /**
//   //  * Update the specified resource in storage.
//   //  *
//   //  * @param  \Illuminate\Http\Request  $request
//   //  * @param  int  $id
//   //  * @return \Illuminate\Http\Response
//   //  */
//   // public function update(Request $request, $id, $notaId)
//   // {
//   //     return $this->service->find($notaId)->update($request->all());
//   // }
//
//   // /**
//   //  * Remove the specified resource from storage.
//   //  *
//   //  * @param  int  $id
//   //  * @return \Illuminate\Http\Response
//   //  */
//   // public function destroy($id, $notaId)
//   // {
//   //     return $this->repository->find($notaId)->delete();
//   // }
}
//