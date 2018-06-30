<?php

namespace App\Http\Controllers\Hazim_Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Golek;

class Users_Controllers extends Controller
{

    public function index()
    {
       $users = Golek::all();
        return view('FolderGolek.Golek2.index', compact('users'));
    }


    //specific listing










     public function create()
    {
        $users = Golek::all();
           return view('FolderGolek.Golek2.createGolekUser', compact('users'));
    }

    //add to database









    public function store(Request $request)
    {
        $inputs = $request->all();
        Golek::create([
                                'name'=>$inputs['name'],
                                'phone'=>$inputs['phone'],
                                'email'=>$inputs['email'],
                                'address'=>$inputs['address'],
                            ]);
        // dd($testing);
        return redirect(action('Hazim_Form\Users_Controllers@index'));
    
    }

    //create handler










    public function deleting()
    {
        // dd($IDToBeDelete);
         $users = Golek::all();
        return view('FolderGolek.Golek2.deletingGolekUser', compact('users'));
    }

    public function destroy(Request $request)
    {
        //dd($request->id);
        $inputs = $request->id;
        $user = Golek::where('id',$inputs)->delete();

        return redirect('/');
        
    }










    public function show()
    {
           $users = Golek::all();
        return view('FolderGolek.Golek2.welcomeGolek', compact('users'));
    }

    //Specific listing

    public function welcomepage()
    {
           $users = Golek::all();
        return view('FolderGolek.Golek2.welcomeGolek', compact('users'));
    }














    public function editing()
    {
           // dd('askndas');
         $users = Golek::all();
        return view('FolderGolek.Golek2.editingGolekUser', compact('users')); 
    }

     public function edit(Request $request)
    {
           dd($request->id);
    }

    //filled form from database


     public function editor(Request $request)
    {
        $id = $request->id;
        $users = Golek::WHERE('id',$id)->first();
        // dd($users);
        return view('FolderGolek.Golek2.editorGolekUser', compact('users'));
    }








     public function updating()
    {
           $users = Golek::all();
        return view('FolderGolek.Golek2.updatingGolekUser', compact('users')); 
    }

     public function update(Request $request)
    {
          

           $id = $request->id;
           $name = $request->name;
           $email = $request->email;
           $phone = $request->phone;
           $address = $request->address;

           $users = Golek::where('id',$id)->update(      ['id'=>$id,
                                                        'name'=>$name,
                                                        'email'=>$email,
                                                        'phone'=>$phone,
                                                        'address'=>$address]
                                    );
             
            return redirect(action('Hazim_Form\Users_Controllers@index'));
    }


    //edit handler

    

   



 
}