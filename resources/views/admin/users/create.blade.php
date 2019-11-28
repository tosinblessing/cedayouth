@extends('layouts.admin')





@section('content')
    <h2>Create Users</h2>

    @include('partials.messages')

    {!! Form::open(['action' => 'AdminUsersController@store' , 'method' => 'POST', 'files' => true]) !!}
    
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '' , ['class' => 'form-control' , 'placeholder' => 'Your Name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::text('email', '' , ['class' => 'form-control' , 'placeholder' => 'example@gmail.com']) }}
    </div>

    <div class="form-group">
        {{ Form::label('is_active', 'Status') }}
        {{ Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], 0, [ 'class' => 'form-control' ,'placeholder' => 'Status']) }}
        {{-- {{ Form::text('Role_id', '' , ['class' => 'form-control' , 'placeholder' => 'Role']) }} --}}
    </div>

    <div class="form-group">
        {{ Form::label('role_id', 'Role_id') }}
        {{ Form::select('role_id', [''=>'Choose Options'] + $roles, null, [ 'class' => 'form-control' ,'placeholder' => 'Role_id']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('photo_id', 'Upload file') }}
        {{ Form::file('photo_id' ) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::text('password', '' , ['class' => 'form-control' , 'placeholder' => 'Password']) }}
    </div>

    {{-- <div class="form-group">
        {{ Form::label('cpassword', 'Confirm password') }}
        {{ Form::text('cpassword', '' , ['class' => 'form-control' , 'placeholder' => 'Confirm Password']) }}
    </div> --}}

    <div>
        {{  Form::submit('submit' ,  ['class' => 'btn btn-primary']) }}
    </div>

    {!! Form::close() !!}

    
@endsection