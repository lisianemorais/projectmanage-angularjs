<?php  

namespace projectmanager\Transformers;

use projectmanager\Entities\Project;
use League\Fractal\TransformerAbstract;
//use projectmanager\Transformers\ProjetoTransformer;


class ProjetoTransformer extends TransformerAbstract
{	
	protected $defaultIncludes = ['membros'];

	public function transform(Project $projeto)
	{
		return [
			'projeto_id' => $projeto->id,
			'projeto'    => $projeto->name,
			'descricao'  => $projeto->descricao,
			'progresso'  => $projeto->progresso,
			'status'     => $projeto->status,
			'data_fim'   => $projeto->data_fim,
		];
	}

	public function includeMembros(Project $projeto)
	{
		return $this->collection($projeto->membros, new MembrosProjetoTransformer);
	}
}
