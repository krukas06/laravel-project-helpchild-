<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\NewsRepository;
use App\Repositories\Repository;
use App\Event;

class NewsController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function __construct(NewsRepository $n_rep){

       parent::__construct(new \App\Repositories\MenusRepository (new \App\Menu));
       $this->template='news';
       $this->n_rep=$n_rep; 
    }
    

   public function index()
    {
        //
        $events=$this->getNews();
        //dd($news);
        $content = view('news_content')->with('events',$events);
        $this->vars = array_add($this->vars,'content',$content);
        return $this->RenderOutPut();
    }


    public function getNews(){

        $news= $this->n_rep->get('*');

        return $news;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        $news = $this->getnews_first($title);

        $content = view('full_news')->with('news',$news);
        $this->vars = array_add($this->vars,'content',$content);

        return $this->RenderOutPut();

    }

    public function getnews_first($title){

        $news = $this->n_rep->one($title);

        return $news;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
