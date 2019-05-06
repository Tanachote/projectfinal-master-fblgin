@extends('layouts.default')
@section('content')
    <br>
    <div class="col-12">
        <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
            <h4 style="margin-top: 10%">Welcome administrator</h4>
        </div>
    </div>
    <a href="{{ action('Admin\AdminController@create') }}"class="btn btn-success" role="button" aria-pressed="true" style="color: #FFFFFF; padding:0.5rem; margin: 1.5% 10% 0% 10%;">
        Create Event
    </a>
        <div style="margin: 2.5% 10% 25% 10%;">
            <table class="table table-dark" style="background-color: black; color:#FFFFFF; padding:1rem; border-radius:10px;">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Event Detail</th>
                    <th scope="col">Limit</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event['id'] }}</td>
                        <td>{{ $event['event_name'] }}</td>
                        <td>{{ $event['start'] }}</td>
                        <td>{{ $event['end'] }}</td>
                        <td>{{ $event['detail'] }}</td>
                        <td>{{ $event['limit'] }}</td>
                        <td> <a href="{{ action('Admin\AdminController@edit',['id' => $event->id ]) }}" class="btn btn-primary">Edit Event</a></td>
                        {{--<td> <a href="{{ action('Admin\AdminController@destroy',['id' => $event['id'] ]) }}" class="btn btn-primary">Delete Event</a></td>--}}
                        {{--<td> <a href="{{ action('Admin\AdminController@destroy',['id' => $event['id'] ]) }}" class="btn btn-primary">Delete Event</a></td>--}}
                        <td>
                            <form method="Post" action="{{ action('Admin\AdminController@destroy',['id' =>$event->id]) }}">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-danger delete-post" onclick="return confirm('Are you sure to delete {{$event -> event_name}} ?')">
                                Delete Event
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
@endsection

