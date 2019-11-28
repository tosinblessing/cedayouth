@extends('layouts.admin')





@section('content')
    <h2 class="d-flex justify-content-center">Edit User Profile</h2>

    @include('partials.messages')
    <div class="d-flex justify-content-center">
            <img class="img-responsive img-rounded" height='100' src="{{$user->photo ? $user->photo->path : '/img/lagos.jpg'}}">
    </div>

    <div class="d-flex justify-content-center">

        {!! Form::model($user, ['method' => 'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=> true]) !!}
        
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null , ['class' => 'form-control' , 'placeholder' => 'Your Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email', null , ['class' => 'form-control' , 'placeholder' => 'example@gmail.com']) }}
        </div>

        <div class="form-group">
            {{ Form::label('is_active', 'Status') }}
            {{ Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], null, [ 'class' => 'form-control' ,'placeholder' => 'Status']) }}
            {{-- {{ Form::text('Role_id', '' , ['class' => 'form-control' , 'placeholder' => 'Role']) }} --}}
        </div>

        <div class="form-group">
            {{ Form::label('role_id', 'Role_id') }}
            {{ Form::select('role_id', $roles, null, [ 'class' => 'form-control' ,'placeholder' => 'Role_id']) }}
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
        <div class="form-group">
            {{  Form::submit('UPDATE' ,  ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>
    {{-- for deleting --}}
    <div class="d-flex justify-content-center p-l-20">  
        {!! Form::open(['method' => 'delete', 'action'=> ['AdminUsersController@destroy', $user->id ]]) !!}
        <div class="form-group">
            {{  Form::submit('DELETE' ,  ['class' => 'btn btn-danger']) }}
        </div>
        {!! Form::close() !!}
    </div>


    
@endsection