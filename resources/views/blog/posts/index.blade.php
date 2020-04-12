@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created at</th>
                    </tr>
                    </thead>
                    @foreach($items as $item)
                        <tr>
                            <td scope="row">{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
