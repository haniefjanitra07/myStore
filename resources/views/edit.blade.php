@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        
    </div> 

    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <a href="{{ url('/product') }}">
                    <button class="btn btn-success float-right mr-2"><i class="fas fa-arrow-left"></i></button>
                </a>
                <h2>Edit</h2>
            </div>
            <div class="card-body">

                <form action="/product/update" method="POST">
                    @csrf
                    @method('patch')
                        <input type="hidden" value="{{$data->id}}" name="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Title</label>
                        <input type="text" class="form-control" value="{{$data->product_title}}" name="product_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Slug</label>
                        <input type="text" class="form-control" value="{{$data->product_slug}}" name="product_slug">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product Image</label>
                          <input type="text" class="form-control" value="{{$data->product_image}}" name="product_image">
                      </div>
                      <input class="btn btn-success float-right" type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>

       
</div>    
@endsection
