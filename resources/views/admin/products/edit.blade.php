@extends('admin.layouts.master')
@section('title', 'Admin')
@section('style')
<style>
  .form-control{
    height: 36px;
  }
  .card{
    border: #d2d6de 1px solid;
    border-radius: 4px;
    padding: 10px;
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
  <div class="row">
    <div class="col-md-2"></div>
    <div class="card-wrapper col-md-8" style="margin: auto;">
      <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <form method="post" action="{{route('admin.products.edit',$products->id)}}">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{$products->name}}"
            class="form-control @error('name') is-invalid @enderror"
            name="name" id="name" placeholder="Enter Name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{$products->price}}"
            class="form-control @error('price') is-invalid @enderror"
            id="price" placeholder="Enter Price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" 
            class="form-control @error('description') is-invalid @enderror"
            id="description" rows="3">{{$products->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" value="{{$products->quantity}}"
            class="form-control @error('quantity') is-invalid @enderror"
            id="quantity" placeholder="Enter Quantity">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="brand">Brand</label>
            <select class="form-control @error('brand') is-invalid @enderror"
            name="brand" id="brand">
              @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
              @endforeach
            </select>
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control @error('category') is-invalid @enderror"
            name="category" id="category">
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" value="{{old('image')}}"
            class="form-control @error('image') is-invalid @enderror"
            name="image" id="image" required="true">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>



</section>

@stop