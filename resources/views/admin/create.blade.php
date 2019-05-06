@extends('layouts.default')
@section('content')
    <br>
    <div style="margin: 10% 30% 20% 30%;">
        <form action="{{ action('Admin\AdminController@store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="background-color:#FFFFFF; padding:1rem; border-radius:20px;" align="center">
                <!-- Form Group -->
                <br>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Event Name</label>
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
                        <input type="file" name ="image" id="image" placeholder="Image" required="required" style="margin-left: 15%;">
                    </div>
                </div>
                <br>
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Image Background</label>
                        <input type="file" name ="image_bg" id="image_bg" placeholder="Image" required="required" style="margin-left: 15%;">
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <button type="submit" class="btn confer-btn">Create<i class="zmdi zmdi-long-arrow-right"></i></button>
                </div>
                <br>
            </div>
        </form>
    </div>
@endsection
