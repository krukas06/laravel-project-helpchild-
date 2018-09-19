<?php
namespace App\Repositories;

use App\Menu;

class MenusRepository extends Repository{

	public function __construct(Menu $menus){

		$this->model=$menus;

	}

}

?>