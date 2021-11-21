@extends('layouts.app')

@section('content')

{{-- <div class="container d-flex align-items-center justify-content-center mt-1">
    <img src="{{ asset('res/coverphoto.png') }}" alt="">
</div> --}}


<div class="container-fluid over-flow-container">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="d-flex flex-row">
            <img class="overflow-auto"  src="https://source.unsplash.com/500x500/?destination,water" class="img-fluid" alt="connect to internet to view the image">
            <img class="overflow-auto" src="https://source.unsplash.com/1000x500/?destination,lan" class="img-fluid" alt="connect to internet to view the image">
        </div>
        <div class="d-flex flex-row">
            <img class="overflow-auto" src="https://source.unsplash.com/1000x500/?destination" class="img-fluid" alt="connect to internet to view the image">
            <img class="overflow-auto" src="https://source.unsplash.com/500x500/?destination" class="img-fluid" alt="connect to internet to view the image">
        </div>
    </div>
</div>


@endsection
