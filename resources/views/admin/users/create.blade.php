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
@section('selectPage','User')
@section('content')

<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

  <div class="row">
    <div class="col-md-2"></div>
    <div class="card-wrapper col-md-8" style="margin: auto;">
      <div class="card">
        <div class="card-header">
            <h4>Create new user</h4>
        </div>
        <form method="post" action="{{route('admin.users.createUser')}}">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{old('name')}}"
            class="form-control @error('name') is-invalid @enderror"
            name="name" id="name" placeholder="Enter Name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email')}}"
            class="form-control @error('email') is-invalid @enderror"
            id="email" placeholder="Enter Email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control @error('gender') is-invalid @enderror"
            name="gender" id="gender">
              <option value="0">Man</option>
              <option value="1">Woman</option>
            </select>
            @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>



</section>

@stop