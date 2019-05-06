@extends('layouts.default')
@section('content')
    <br>
    <div style="margin: 12.5% 30% 20% 30%;">
        <form action="{{ action('Admin\AdminController@update',['id' => $event->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="background-color:#FFFFFF; padding:1rem; border-radius:20px;" align="center">
                <!-- Form Group -->
                <br>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control mb-30" name="id" id="id" value="{{$event->id }}">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Event name</label>
                        <input type="text" class="form-control mb-30" name="event_name" id="event_name">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Event Start Date</label>
                        <input type="text" class="form-control mb-30" name="start" id="start">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Event End Date</label>
                        <input type="text" class="form-control mb-30" name="end" id="end">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Limit</label>
                        <input type="text" class="form-control mb-30" name="limit" id="limit">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Event Detail</label>
                        <textarea name="detail" class="form-control mb-30" id="detail" cols="30" rows="6"></textarea>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Image Card</label>
                        <input type="file" name ="image" id="image" placeholder="Image" style="margin-left: 15%;">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Image Background</label>
                        <input type="file" name ="image_bg" id="image_bg" placeholder="Image" style="margin-left: 15%;">
                    </div>
                </div>
                <br>
                <br>
                <div class="col-12">
                    <button type="submit" class="btn confer-btn">Update<i class="zmdi zmdi-long-arrow-right"></i></button>
                </div>
                <br>
            </div>
        </form>
    </div>
@endsection
