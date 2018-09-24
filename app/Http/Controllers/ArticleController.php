<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\ArticleRepository;
use App\Repositories\Repository;
use App\Article;


class ArticleController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ArticleRepository $a_rep){

       parent::__construct(new \App\Repositories\MenusRepository (new \App\Menu));
       $this->template='article';
       $this->a_rep=$a_rep; 
    }


    ////////////////////////////////// Отображение списка всех статей реализована
    public function index()
    {
        //
        $article= $this->getarticle();

        //dd($article);

        $content = view('content')->with('article',$article);

        $this->vars = array_add($this->vars,'content',$content);

        return $this->RenderOutPut();
    }

     public function getarticle(){

        $article = $this->a_rep->get('*');

        return $article;

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
        $content = view('article_add')->render();
        $this->vars = array_add($this->vars,'content',$content);
        $this->RenderOutPut();
        $data = $request->all();
        $article = new  Article;
        $article = fill($data);
        $article = save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    ////////////////////////////////Проблема с параметром
    public function show($title)
    {
        //
        
        $article=$this->getarticle_content($title);

        $content=view('full_text_article')->with('article',$article);
        $this->vars = array_add($this->vars,'content',$content);

        return $this->RenderOutPut();
    }

    public function getarticle_content($title){

        $article_content=$this->a_rep->one($title);

        return $article_content;

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
