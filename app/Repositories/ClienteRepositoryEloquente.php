<?php  

namespace projectmanager\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use projectmanager\Models\Clientes;

class ClienteRepositoryEloquente extends BaseRepository	implements ClienteRepository
{
	public function model()
	{
		return Clientes::class;
	}
}