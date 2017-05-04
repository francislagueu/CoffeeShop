@extends('admin.layout.admin')
@section('content')
<div class="row">
<div class="col-md-10 col-md-offset-1">
    <h3>Users</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Confirmed</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->confirmed }}</td>
           <td> <form action="{{ route('user.edit', $user->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('UPDATE')}}
                <input type="submit" class="btn btn-sm btn-success" value="Edit">
            </form></td>
              <td><form action="{{ route('user.destroy', $user->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form></td>
        </tr>
        </tbody>
        @empty
        <h3>No Users</h3>
        @endforelse
    </table>
    </div>
    </div>
@endsection