<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Http\Requests\Admin\User\CreateRequest;
use App\Http\Requests\Admin\User\EditRequest;
use Session;

class UserController extends Controller
{
    //
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    
    public function showUser(){
        // todo
        $users = $this->userRepository->getAll();
        
        return view('admin.users.show', compact('users'));
    }
    
    public function createUser(){
        
        return view('admin.users.create');
    }
    
    public function storeUser(CreateRequest $request) {
        $users = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'username' => $request['email'],
            'gender' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]);
        Session::flash('messenger', 'Create User Successed!!!');
        return redirect(route('admin.users.showUser'));
    }
    
    public function editUser($id){
        $users = $this->userRepository->getById($id);
        
        return view('admin.users.edit', compact('users'));
    }
    
    public function updateUser(EditRequest $request, $id){
        $users = $this->userRepository->getById($id);
        
        try {
            $users = $request->all();
            $result = $this->userRepository->update($id, $users);
            
            if ($result) {
                Session::flash('messenger', 'Edit User Successed!!!');
                return redirect(route('admin.users.showUser'));
            }
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit User Failed!!!');
            return redirect()->back();
        }
        
    }
    
    public function deleteUser($id){
        $users = $this->userRepository->getById($id);
        try {
            $users = $this->userRepository->destroy($id);
            
            Session::flash('messenger', 'Delete User Successed!!!');
            return redirect(route('admin.users.showUser'));
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit User Failed!!!');
            return redirect(route('admin.users.showUser'));
        }
        
        Session::flash('messenger', 'falied');
        return redirect()->back();
    }
}
