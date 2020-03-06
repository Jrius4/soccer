@extends('layouts.dashboard')
@section('content')
<div class="container">
    <form action="{{route('farmers.store')}}" method="post">
        @include('manage-farmers.form')
    </form>
</div>
@endsection
