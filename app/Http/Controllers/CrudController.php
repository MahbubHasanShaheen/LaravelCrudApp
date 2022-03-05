<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use  Session;
class CrudController extends Controller
{
    public function showData(){
    	//$showData = Crud::all();
    	//$showData = Crud::paginate(5);
    	$showData = Crud::simplePaginate(5);
     return view('show_data',compact('showData'));
    }


     public function addData(){
     return view('add_data');
    }



    public function storeData(Request $request){
         
         $rules = [
           'name' => 'required|max:10',
           'email' => 'required|email',

         ];

         $cmsg = [

           'name.required' => 'Plase Enter Your Name',
           'email.max' => 'Your name can not contain 10 carecters',
           'email.required' => 'Plase Enter Your Email',
           'email.email' => 'Email must be a valid mail',

         ];

         $this->validate($request,$rules, $cmsg);


         $crud = new Crud();
         $crud->name = $request->name;
         $crud->email = $request->email;
         $crud->save();

         Session::flash('msg','Data succesfully Added');


                 return redirect('/');
    }



    public function editData($id=null){

    	$editData = Crud::find($id);
        return view('edit_data',compact('editData'));

    }









    public function updateData(Request $request,$id){
         
         $rules = [
           'name' => 'required|max:10',
           'email' => 'required|email',

         ];

         $cmsg = [

           'name.required' => 'Plase Enter Your Name',
           'email.max' => 'Your name can not contain 10 carecters',
           'email.required' => 'Plase Enter Your Email',
           'email.email' => 'Email must be a valid mail',

         ];

         $this->validate($request,$rules, $cmsg);


         $crud =  Crud::find($id);
         $crud->name = $request->name;
         $crud->email = $request->email;
         $crud->save();

         Session::flash('msg','Data succesfully Updated');


                 return redirect('/');
    }



    public function deleteData($id = null){
          $deleteData = Crud::find($id);
          $deleteData->delete();

            Session::flash('msg','Data succesfully Delete');
             return redirect('/');
    }




}


