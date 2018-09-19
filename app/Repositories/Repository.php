<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Requests;

abstract class Repository {

	protected $model =false;

	public function get(){

		$builder=$this->model->select('*');
		//dd($builder);
		return $builder->get();
	}

}
?>