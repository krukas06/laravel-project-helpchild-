<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\MenusRepository;

abstract class SiteController extends Controller
{
    //
    protected $template;
    protected $vars=array();
    protected $m_rep;
    protected $a_rep;
    protected $c_rep;

    public function __construct(MenusRepository $m_rep){

        $this->m_rep=$m_rep;        
    }

    public function RenderOutPut(){

        $footer=view('footer');
        $this->vars=array_add($this->vars,'footer',$footer);

        $menu=$this->getmenu();
        $navigation=view('menu')->with('menu',$menu);
        $this->vars=array_add($this->vars,'navigation',$navigation);

    	return view($this->template)->with($this->vars);
    }


    public function getmenu(){

        $menu = $this->m_rep->get('*');

        return $menu;
    }
}
