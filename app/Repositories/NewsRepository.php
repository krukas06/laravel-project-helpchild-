<?php
namespace App\Repositories;

use App\Event;

class NewsRepository extends Repository{

	public function __construct(Event $news){

		$this->model=$news;

	}

}

?>