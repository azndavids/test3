<?php

namespace App\Http\Controllers\Hazim_Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Ticket;


class TM_Controllers extends Controller
{

  public function index()
  {
    $users = User::all();
    return view('FolderGolek.TM.index', compact('users'));
  }

  public function ticket(int $ticketID)
  {
   $ticket = Ticket::find($ticketID);
   // dd("$ticket");
   return view('FolderGolek.TM.ticket', compact('ticket'));
 }

 public function createcase()
 {
  $users = Ticket::all();
  return view('FolderGolek.TM.createcase', compact('users'));
  }

  public function store(Request $request)
  {
    $ticket = Ticket::create([
      'user_id' => request()->user()->id,
      'categoryt' => $request->categoryt,
      'subject' => $request->subject,
      'desct' => $request->desct,
      'priority' => $request->priority
    ]);

    $ticket_id = $ticket->id;
          // dd($testing);
    return view('FolderGolek.TM.usercase', compact('ticket' ,'ticket_id'));

  }

  public function case(Request $request)
  {

    $id = $request->id;
    $ticket = Ticket::find($id);

    return view('FolderGolek.TM.case', compact('ticket'));

  }

  public function usercase(Request $request)
  {

    $id = $request->id;
    $ticket = Ticket::find($id);
    $users = User::WHERE('id',$id)->get();
    return view('FolderGolek.TM.usercase', compact('ticket'));
  }

  public function everyonecase()
  {
    $users = User::with('tickets')->get();
    return view('FolderGolek.TM.everyonecase', compact('users'));
  }









}