<?php

namespace App\Http\Controllers\Hazim_Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Ticket;


class CaseManagement_Controllers extends Controller
{

  public function index()
  {
    $users = User::all();
    return view('FolderGolek.CaseManagement.index', compact('users'));
  }


  public function showing(Request $request)
  {
    $id = $request->id;
    $ticket = Ticket::find($id);
    $users = User::WHERE('id',$id)->get();
    return view('FolderGolek.CaseManagement.showing', compact('users','ticket'));
  }

  public function showing2(Request $request)
  {
    $id = $request->id;
    $ticket = Ticket::find($id);
    return view('FolderGolek.CaseManagement.showing2', compact('ticket'));
  }

  public function ticketlist()
  {
    $users = User::with('tickets')->get();
    return view('FolderGolek.CaseManagement.ticketlist', compact('users'));
  }

  public function createticket()
  {
    $users = Ticket::all();
    return view('FolderGolek.CaseManagement.createticket', compact('users'));
  }

  public function store(Request $request)
  {
    Ticket::create([
      'user_id' => request()->user()->id,
      'categoryt' => $request->categoryt,
      'subject' => $request->subject,
      'desct' => $request->desct,
      'priority' => $request->priority
      ]);
        // dd($testing);
    return redirect(action('Hazim_Form\CaseManagement_Controllers@ownticketlist'));
    
  }

public function TMhome()
{
    $users = User::all();
    return view('TMhome', compact('users'));
}

public function deleteticket()
{
   $users = User::all();
   return view('FolderGolek.CaseManagement.deleteticket', compact('users'));
}

public function destroy(Request $request)
{
   //dd($request);
  $inputs = $request->id;
  $user = Ticket::where('id',$inputs)->delete();

  return  redirect(action('Hazim_Form\CaseManagement_Controllers@ownticketlist'));
}

public function update(Request $request)
{
   $users = User::with('tickets')->get();
   $id = $request->id;
   $status = $request->status;
   //dd($id,$status,$sub,$cate,$desct,$prior,$users);

 
   $users = Ticket::find($id)->update(      
                      [
                          'status'=>$status,
                      ]
    );
   return redirect(action('Hazim_Form\CaseManagement_Controllers@ownticketlist'));
}

public function update2(Request $request)
{

   $users = User::with('tickets')->get();
   $id = $request->id;
   $status = $request->status;
   $sub = $request->subject;
   $cate = $request->categoryt;
   $desct = $request->desct;
   $prior = $request->priority;
   //dd($id,$status,$sub,$cate,$desct,$prior,$users);

 
   $users = Ticket::where('id',$id)->update(      
                      [
                          'status'=>$status,
                          'subject'=>$sub,
                          'categoryt'=>$cate,
                          'desct'=>$desct,
                          'priority'=>$prior
                      ]
    );
   return redirect(action('Hazim_Form\CaseManagement_Controllers@ownticketlist'));
}

public function editor(int $ticketID)
{

  $ticket = Ticket::find($ticketID);

  return view('FolderGolek.CaseManagement.editor', compact('ticket'));
}

public function ownticketlist(Request $request)
{

  $id = $request->id;
  $ticket = Ticket::find($id);

  return view('FolderGolek.CaseManagement.ownticketlist', compact('ticket'));
}




}