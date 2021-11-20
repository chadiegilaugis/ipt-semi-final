@extends('layouts.app')

@section('content')



    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Destination</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
            {{-- <button type="button" class="close" data-dismiss="alert">X</button> --}}
                <strong>{{ $message }}</strong>
        </div>


        @endif


        {!! Form::open(['route' => ['store-destination'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('type','Type') }}
                {{ Form::text('type',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('rating','Rating') }}
                {{ Form::text('rating',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>


@endsection
