@extends('admin.layout.admin');
@section('content');
    <h3>Menus</h3>
    <ul>
        @forelse($menus as $menu)
        <li>
            <h4>Name of menu: {{$menu->name}}</h4>
            <h4>Size: {{ $menu->size }}</h4>
            <h4>Price: {{ $menu->price }}
            <form action="{{ route('product.edit', $menu->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('UPDATE')}}
                <input type="submit" class="btn btn-sm btn-success" value="Edit">
            </form>
              <form action="{{ route('product.destroy', $menu->id)}}" method"POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form>
        </li>
        @empty
        <h3>No Menus</h3>
        @endforelse
    </ul>
@endsection