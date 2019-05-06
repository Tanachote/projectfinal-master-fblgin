@extends('layouts.default')
@section('content')
    <br>
    <div style="margin: 10% 20% 25% 20%;">
        <table class="table table-dark" style="background-color: black; color:#FFFFFF; padding:1rem; border-radius:10px;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Event Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Event Detail</th>
                <th scope="col">Limit</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $event['id'] }}</td>
                    <td>{{ $event['event_name'] }}</td>
                    <td>{{ $event['start'] }}</td>
                    <td>{{ $event['end'] }}</td>
                    <td>{{ $event['detail'] }}</td>
                    <td>{{ $event['limit'] }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <a href="{{action('Admin\AdminController@index')}}" class="ml-auto"><button class="btn btn-success">Home</button></a>
        </div>
    </div>
@endsection
