@extends('dashboard.dashboard')

@section('title')
    user manage page
@endsection

@section('body')

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$location->name}}</td>
                        <td>{{$location->latitude}}</td>
                        <td>{{$location->longitude}}</td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>

    @endsection
