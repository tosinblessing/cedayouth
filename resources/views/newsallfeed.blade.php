@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        @if(count($newsallfeed) > 0  )
            @foreach ($newsallfeed as $newsallfeeds)
                <ul clas="list-group">
                <li class="list-group-item">Title: {{ $newsallfeeds->title }}</li>
                    <li class="list-group-item">Text: {{ $newsallfeeds->text }}</li>
                    <li class="list-group-item">Discription: {{ $newsallfeeds->discription }}</li>
                </ul>
            @endforeach
        @endif
    </div>
</div>

@endsection