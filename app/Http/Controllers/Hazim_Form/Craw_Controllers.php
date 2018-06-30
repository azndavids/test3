<?php

namespace App\Http\Controllers\Hazim_Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Craw;


class Craw_Controllers extends Controller
{

    public function index()
    {
      $users = Craw::all();
      return view('FolderGolek.Craw.index', compact('users'));
  }










  public function create()
  {
    $users = Craw::all();
    return view('FolderGolek.Craw.createCraw', compact('users'));
}









public function store(Request $request)
{
    $inputs = $request->all();
    Craw::create([
        'nameCraw'=>$inputs['name'],
        'phoneCraw'=>$inputs['phone'],
        'emailCraw'=>$inputs['email'],
        'statusCraw'=>$inputs['status'],
        ]);
        // dd($testing);
    return redirect(action('Hazim_Form\Craw_Controllers@index'));
    
}






public function destroying()
{
   $users = Craw::all();
      return view('FolderGolek.Craw.destroying', compact('users'));
}

public function destroy(Request $request)
{
   //dd($request);
    $inputs = $request->id;
        $user = Craw::where('idCraw',$inputs)->delete();

        return  redirect(action('Hazim_Form\Craw_Controllers@index'));
}




// public function show(idCraw)
// {
//  dd($request->id);
//  $inputs = $request->id;
//   $users = Craw::all();
//    return view('FolderGolek.Craw.edit', compact('users'));
// }



public function welcomePage()
{
   $users = Craw::all();
   return view('FolderGolek.Craw.welcomeCraw', compact('users'));
}









public function editOR(Request $request)
{
         //dd($request->id);

  $id = $request->id;
  $users = Craw::WHERE('idCraw',$id)->first();
        // dd($users);
  return view('FolderGolek.Craw.editOR', compact('users'));
}

public function chooseEditCraw()
{
    $users = Craw::all();
    return view('FolderGolek.Craw.chooseEditCraw', compact('users')); 
}


public function update(Request $request)
{


   $id = $request->id;
   $name = $request->name;
   $email = $request->email;
   $phone = $request->phone;
   $status = $request->status;


   $users = Craw::where('idCraw',$id)->update(      [
                                                        'idCraw'=>$id,
                                                        'nameCraw'=>$name,
                                                        'emailCraw'=>$email,
                                                        'phoneCraw'=>$phone,
                                                        'statusCraw'=>$status
                                                    ]
    );



   return redirect(action('Hazim_Form\Craw_Controllers@index'));
}









}