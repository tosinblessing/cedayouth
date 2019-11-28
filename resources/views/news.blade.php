@extends('layouts.app')

@section('content')

<div class="container text-center"><strong>Add a  New Newsfeed</strong></div>

<br>
<div class="card mx-auto " style="width: 50rem;">
    <div class="card-body" >
        <div class="container">
            {!! Form::open(['url' => 'news/submit']) !!}
                
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', '', ['class' => 'form-control' , 'placeholder' => 'News Title']) }}
                </div>
                
                <div class="form-group">
                    {{ Form::label('text', 'Text') }}
                    {{ Form::text('text', '' , ['class' => 'form-control' , 'placeholder' => 'Short Text']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('discription', 'Discription') }}
                    {{ Form::textarea('discription', '' , ['class' => 'form-control' , 'placeholder' => 'Post Your Story Here']) }}
                </div>

                <div>
                    {{  Form::submit('submit' ,  ['class' => 'btn btn-primary']) }}
                </div>


            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection