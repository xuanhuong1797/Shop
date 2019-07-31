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
@section('selectPage','Category')
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
            <h4>Edit Category</h4>
        </div>
        <form method="post" action="{{route('admin.categories.edit',$categories->id)}}">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{$categories->name}}"
            class="form-control @error('name') is-invalid @enderror"
            name="name" id="name" placeholder="Enter Name">
            @error('name')
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