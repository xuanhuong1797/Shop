@extends('admin.layouts.master')
@section('title', 'Admin')
@section('style')
<style>
  .form-control{
    height: 31px;
  }
</style>
@endsection
@section('selectPage','Product')
@section('content')

  <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div>
      @if (Session::has('messenger'))
        <div class="alert alert-info">{{Session::get('messenger')}}</div>
      @endif
    </div>
    
    <div class="card mb-3">
        <div class="create-button">
            <a class="btn btn-success" href="{{ route('admin.products.create') }}">Create New Product</a>
        </div>
        <div class="card-header">
            <i class="fa fa-table"></i> Product Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <img src="/{{ $product->imageproducts->first()->image_url }}" alt="" style="width: 200px;height: 200px;display: block;margin: auto">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="{{ route('admin.products.edit',[$product->id]) }}">Edit</a>
                                    <a class="btn btn-danger deleteBtn" href="{{ route('admin.products.delete',[$product->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
@stop