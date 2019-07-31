<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Schema;
use Session;

class OrderController extends Controller
{
    //
    protected $orderRepository;
    
    public function __construct(OrderRepository $orderRepository){
        $this->orderRepository = $orderRepository;
    }
    
    public function show(){
        // todo
        $orders = $this->orderRepository->getAll();
        
        $userRepository = new UserRepository();
        $users = $userRepository->getAll();
        
        return view('admin.orders.show', compact('orders', 'users'));
    }
    
    public function confirm($id) {
        $orders = $this->orderRepository->getById($id);
        
        $orders = ['status' => 1];
        
        $result = $this->orderRepository->update($id, $orders);
        
        return redirect(route('admin.orders.show'));
    }
    
    public function cancel($id) {
        $orders = $this->orderRepository->getById($id);
        
        $orders = ['status' => 2];
        
        $result = $this->orderRepository->update($id, $orders);
        
        return redirect(route('admin.orders.show'));
    }
}
