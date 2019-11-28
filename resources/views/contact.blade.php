
@extends('layouts.app')

@section('content')
<div class="container text-center"><strong>SEND US A MESSAGE HERE!    </strong></div>

<br>
<div class="card mx-auto " style="width: 50rem;">
    <div class="card-body" >
        <div class="container">
            {!! Form::open(['url' => 'contact/submit']) !!}
                
                <div class="form-group">
                    {{ Form::label('fullname', 'Fullname') }}
                    {{ Form::text('fullname', '', ['class' => 'form-control' , 'placeholder' => 'Enter Your Fullname']) }}
                </div>
                
                <div class="form-group">
                    {{ Form::label('email', 'E-Mail Address') }}
                    {{ Form::text('email', '' , ['class' => 'form-control' , 'placeholder' => 'example@gmail.com']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('message', 'Message') }}
                    {{ Form::textarea('message', '' , ['class' => 'form-control' , 'placeholder' => 'Enter Message']) }}
                </div>

                <div>
                    {{  Form::submit('submit' ,  ['class' => 'btn btn-primary']) }}
                </div>


            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection


<style>


</style>
