@extends('admin.layouts.master')
@section('title', 'Admin')
@section('style')
<style>
  .form-control{
    height: 31px;
  }
</style>
@endsection
@section('selectPage','User')
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
            <a class="btn btn-success" href="{{ route('admin.users.createUser') }}">Create New User</a>
        </div>
        <div class="card-header">
            <i class="fa fa-table"></i> User Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="{{ route('admin.users.editUser',[$user->id]) }}">Edit</a>
                                    <a class="btn btn-danger deleteBtn" href="{{ route('admin.users.deleteUser',[$user->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
@stop