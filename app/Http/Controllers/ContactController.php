<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use App\Repositories\ContactRepository;

use App\Repositories\Repository;

use Mail;


class ContactController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(ContactRepository $c_rep){

       parent::__construct(new \App\Repositories\MenusRepository (new \App\Menu));
       $this->c_rep=$c_rep;
       $this->template = 'contact_content';
        
    }

    public function index(Request $request)
    {
        //
        //dd($request);
         $contacts = $this->getcontact();
        //dd($contacts);
        $contact=view('contact')->with('contacts',$contacts);
        $this->vars=array_add($this->vars,'contact', $contact);

        return $this->RenderOutPut();

        $this->validate($request, [
            'name' => 'reqiured|max:255',
            'email' => 'reqiured|max:255',
            'phone' => 'reqiured|max:255',
            'company' => 'reqiured|max:255',
            'text' => 'reqiured',
        ]);

        $data = $request->all();

        $result = Mail::send('email',['data'=>$data], function($m) use ($data){
            $mail_admin = env('MAIL_ADMIN');
            $m->from($data['email'], $data['name']);
            $m->to($mail_admin,'mr_admin')->subject('Question');
        });

        if($result){
            return redirect()->route('contact')->with('status','Сообщение отправлено');
        }

        $contacts = $this->getcontact();
        //dd($contacts);
        $contact=view('contact')->with('contacts',$contacts);
        $this->vars=array_add($this->vars,'contact', $contact);

        return $this->RenderOutPut();

    }

    public function getcontact(){
        $contacts=$this->c_rep->get('*');

        return $contacts;
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
    public function show($id)
    {
        //
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
