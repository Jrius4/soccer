@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h2 class="display-2">Farmers</h2>
    <div class="row">
        <div class="row d-flex justify-content-center">
            <a href="{{route('farmers.create')}}" class="btn btn-sm btn-success">Add Farmer</a>
            <a href="{{route('farmers.index')}}" class="btn btn-sm btn-success">Home</a>
        </div>
        <table class="table">
            <thead>
                <th>name</th>
            </thead>
            <tbody>
                @foreach ($farmers as $farmer)
                    <tr>
                        <td>{{$farmer->name}}</td>
                        <td><a href="{{route('farmers.edit',$farmer->id)}}">edit</a></td>
                        <td><a href="{{route('farmers.show',$farmer->id)}}">view</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
