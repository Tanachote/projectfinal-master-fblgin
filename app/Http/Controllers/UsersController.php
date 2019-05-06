<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Event;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('active');
    }
    public function allEvent(){
        $this->authorize('viewMember',User::class);
        $events = Event::all();
        return view('users.allevent',['events' => $events]);

    }

    public function userHome(){
        $this->authorize('viewMember',User::class);
        $home_events = Event::all();
        return view('users.userhome',['home_events' => $home_events ]);
    }


    public function seeDetail()
    {
        //
        $detail_event = Event::where('id', request('id'))->first();
        return view('users.seedetail',['detail_event' => $detail_event]);
    }

    public function buyTicket(Request $request)
    {
        //
        $order = new Order;
        $order->event_id = $request->input('event_id');
        $order->user_id = $request->input('user_id');
        $order->user_name = $request->input('user_name');
        $order->total_ticket = $request->input('total_ticket');
        $order->total_price = $request->input('total_price');
        if($request->hasfile('slip')){
            $file = $request->file('slip');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $order->slip = $file->getClientOriginalName();
        }
        $order->save();


    }

}
