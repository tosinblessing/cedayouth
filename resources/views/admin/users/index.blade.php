@extends('layouts.admin')



@section('content')

@if(Session::has('deleted_user'))
<p> {{session('deleted_user')}}</p>
@endif


<h2>Users</h2>
<div class="wrapper table_responsive">
   @if($users)
   
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
         <th><input type="checkbox" id="options"></th>
          <th>Id</th>
          <th>Display Picture</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Registration Day</th>
          <th>Last Updated</th>
          {{-- <th>Delete</th> --}}
       </tr>
    

        @foreach($users as $user)
            <tr>
            <td><input class="checkboxes" type="checkbox" name="checkboxArray[]" value="{{$user->id}}"></td>
            <td>{{$user->id}}</td>
            <td><img class="img-responsive" height='20' src="{{$user->photo ? $user->photo->path : '/img/lagos.jpg'}}"></td>
            <td><a href="{{ route('admin.users.edit' , $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at}}</td> 
            {{-- <td><a href ="#"><button class="btn btn-danger">Delete</button></a></td>               --}}
            </tr>
        @endforeach

     @endif
    </thead>
 </table>
</div>

{{-- <script>
    $(document).ready( function () {
     $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin.users') }}",
            columns: [
                    { data: 'id', name: 'id' },
                     { data: 'name', name: 'name' },
                     { data: 'email', name: 'email' },
                     { data: 'name', name: 'name' },
                     { data: 'is_active', name: 'is_active' },
                     { data: 'created_at', name: 'created_at' },
                     { data: 'updated_at', name: 'updated_at' },
                  ]
         });
      });
</script> --}}


@endsection