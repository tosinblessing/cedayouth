<div class="container">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger text-center w-50">
                {{$error}}
            </div>
        @endforeach
    @endif
</div>

{{-- sucess message --}}

<div class="container">
    @if(session('success'))
        <div class="alert alert-success text-center w-50">
            {{session('success')}}
        </div>
    @endif
</div>
    
    