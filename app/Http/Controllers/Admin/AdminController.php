<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('active');
    }
    public function index()
    {
        $this->authorize('view',User::class);
        $events = Event::all();
        return view('admin.index',['events'=> $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin',User::class);
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin',User::class);
        $event = new Event;
        $event->event_name = $request->input('event_name');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->limit = $request->input('limit');
        $event->detail = $request->input('detail');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $event->image = $file->getClientOriginalName();
        }
        if($request->hasfile('image_bg')){
            $file = $request->file('image_bg');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $event->image_bg = $file->getClientOriginalName();
        }
        $event->category = $request->input('category');
        $event->save();

        return redirect()->action('Admin\AdminController@show',['id' => $event->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('admin',User::class);
        $event = Event::findOrFail($id);
        return view('admin.show',['event' => $event]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin',User::class);
        $event = Event::findOrFail($id);
        return view('admin.edit',['event' => $event]);
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
        $this->authorize('admin',User::class);
        $event = Event::findOrFail($id);
        $event->event_name = $request->input('event_name');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->limit = $request->input('limit');
        $event->detail = $request->input('detail');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $event->image = $file->getClientOriginalName();
        }
        if($request->hasfile('image_bg')){
            $file = $request->file('image_bg');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $event->image_bg = $file->getClientOriginalName();
        }
        $event->category = $request->input('category');
        $event->save();

        return redirect()->action('Admin\AdminController@show',['id' => $event->id]);
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
        $this->authorize('admin',User::class);
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->action('Admin\AdminController@index');
    }
}
