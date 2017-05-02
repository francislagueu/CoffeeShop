@extends('admin.layout.admin');
@section('content');
    <h3>Menus</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Process time</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        @forelse($menus as $menu)
        <tr>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->size }}</td>
            <td>{{ $menu->price }}</td>
            <td>{{ $menu->process }}</td>
            <td><form action="{{ route('menu.edit', $menu->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('UPDATE')}}
                <input type="submit" class="btn btn-sm btn-success" value="Edit">
            </form></td>
              <td><form action="{{ route('menu.destroy', $menu->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form></td>
        </tr>
        </tbody>
        @empty
        <h3>No Menus</h3>
        @endforelse
    </table>
@endsection