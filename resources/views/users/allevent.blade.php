@extends('layouts.default')
@section('content')
    <br>
    <div style="margin: 5% 20% 25% 20%;">
        <div id="features" class="text-center">
            <div class="container">
                <div class="row">
                    @foreach($events as $event)
                        {{--<div class="col-xs-12 col-sm-4">--}}
                        {{--<div class="features-item">--}}
                        {{--<img src="{{ $event->image }}" class="img-responsive">--}}
                        {{--<h3>{{ $event->event_name }}</h3>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="card" style="width: 15rem; margin: 5% 2.5% 0% 2.5%; border-radius: 10px; background-color: black;">
                            <div class="img-resize">
                                <a href="{{action('UsersController@seeDetail',['id' => $event->id ])}}"><img src="{{ asset($event->image) }}" style="border-radius: 10px"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="color: #FFFFFF;">{{ $event->event_name }}</h5>
                                {{--<p class="card-text" style="color: #FFFFFF;">{{ $event->detail }}</p>--}}
                                <a href="#" class="btn btn-danger" style="border-radius:20px;">BUY NOW</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
