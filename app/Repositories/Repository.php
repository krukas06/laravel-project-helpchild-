<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Requests;

abstract class Repository {

	protected $model =false;

	public function get($select, $take=FALSE){

		$builder=$this->model->select($select);
		//dd($builder);

		if($take){
			$builder=$this->model->take($take);
		}

		return $builder->get();
	}

	public function one($title){

		$result=$this->model->where('title',$title)->first();
		//dd($result);
		return $result;
	}

}
?>