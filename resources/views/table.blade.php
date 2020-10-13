@extends('layouts.app')

@section('content')
<a  href="{{url('tambah')}}" class="btn btn-primary float-right mb-2">Add</a>
<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Nama Slug</th>
        <th scope="col">Gambar</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $merk)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$merk->product_title}}</td>
        <td>{{$merk->product_slug}}</td>
        <td>{{$merk->product_image}}</td>
        <td class="text-center">
            <form action="table/delete/{{ $merk->product_slug }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ url('/table/edit', $merk->product_slug) }}" class="btn btn-warning">
                Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$data->links()}}
@endsection