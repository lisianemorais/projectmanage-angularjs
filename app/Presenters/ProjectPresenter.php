<?php 

namespace projectmanager\Presenters;
 
          
use Prettus\Repository\Presenter\FractalPresenter; 
use projectmanager\Transformers\ProjetoTransformer;

class ProjectPresenter extends FractalPresenter
{
	public function getTransformer()
	{
		return new ProjetoTransformer;
	}
}


