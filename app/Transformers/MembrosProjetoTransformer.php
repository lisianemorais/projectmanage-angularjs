<?php  

namespace projectmanager\Transformers;

use projectmanager\Entities\User;
use League\Fractal\TransformerAbstract;


class MembrosProjetoTransformer extends TransformerAbstract
{
	public function transform(User $membrosProjeto)
	{
		return [
			'membro_id' => $membrosProjeto->id,
			'name'    => $membrosProjeto->name,
		];
	}
}
