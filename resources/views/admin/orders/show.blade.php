@extends('admin.layouts.master')
@section('title', 'Admin')
@section('style')
<style>
  .form-control{
    height: 31px;
  }
</style>
@endsection
@section('selectPage','Order')
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
        
        <div class="card-header">
            <i class="fa fa-table"></i> Order Table</div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Customer name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>
                                @foreach($users as $user)
                                  @if ($order->user_id == $user->id)
                                    {{ $user->email }}
                                  @endif
                                @endforeach
                                </td>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->customer_phone }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->order_total }}</td>
                                <td>
                                  @if ($order->status == 0)
                                    <span class="glyphicon glyphicon-minus"></span>
                                  @elseif ($order->status == 1)
                                    <span class="glyphicon glyphicon-ok"></span>
                                  @elseif ($order->status == 2)
                                    <span class="glyphicon glyphicon-remove"></span>
                                  @endif
                                </td>
                                <td>
                                    <a class="btn btn-primary editBtn" href="{{ route('admin.orders.confirm',[$order->id]) }}">Confirm</a>
                                    <a class="btn btn-danger deleteBtn" href="{{ route('admin.orders.cancel',[$order->id]) }}">Cancel</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Customer name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

  </section>
@stop