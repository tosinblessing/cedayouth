@extends('layouts.auth')

@section('content')
<div class="hold-transition sidebar-mini">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
            </div>
        </div>
    </div>
</div>
@endsection
