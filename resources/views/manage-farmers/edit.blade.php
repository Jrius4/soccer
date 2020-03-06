@extends('layouts.dashboard')
@section('content')
<div class="container">
    <form action="{{route('farmers.update',$farmer->id)}}" method="POST">
        @include('manage-farmers.form')
    </form>
</div>
@endsection
