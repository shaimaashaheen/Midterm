<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;


class TickketController extends Controller
{
    public function index(){
        $tickets = Ticket::all();
        return view('my_ticket' , compact('tickets'));
    }

     public function store(Request $request){
        $ticket = new Ticket;
        $ticket->title = $request->title;
        $ticket->catagory = $request->catagory;
        $ticket->message = $request->message;
        $ticket->save();
        return redirect()->back();
    }

}
