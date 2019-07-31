<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\CreateRequest;
use App\Http\Requests\Admin\Brand\EditRequest;
use App\Repositories\BrandRepository;
use App\Models\Brand;
use Session;

class BrandController extends Controller
{
    //
    protected $brandRepository;
    
    public function __construct(BrandRepository $brandRepository){
        $this->brandRepository = $brandRepository;
    }
    
    public function show(){
        // todo
        $brands = $this->brandRepository->getAll();
        
        return view('admin.brands.show', compact('brands'));
    }
    
    public function create(){
        
        return view('admin.brands.create');
    }
    
    public function store(CreateRequest $request) {
        $brands = Brand::create([
            'name' => $request['name'],
        ]);
        Session::flash('messenger', 'Create Brand Successed!!!');
        return redirect(route('admin.brands.show'));
    }
    
    public function edit($id){
        $brands = $this->brandRepository->getById($id);
        
        return view('admin.brands.edit', compact('brands'));
    }
    
    public function update(EditRequest $request, $id){
        $brands = $this->brandRepository->getById($id);
        
        try {
            $brands = $request->all();
            $result = $this->brandRepository->update($id, $brands);
            
            if ($result) {
                Session::flash('messenger', 'Edit Brand Successed!!!');
                return redirect(route('admin.brands.show'));
            }
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Brand Failed!!!');
            return redirect()->back();
        }
        
    }
    
    public function delete($id){
        $brands = $this->brandRepository->getById($id);
        try {
            $brands = $this->brandRepository->destroy($id);
            
            Session::flash('messenger', 'Delete Brand Successed!!!');
            return redirect(route('admin.brands.show'));
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Brand Failed!!!');
            return redirect(route('admin.brands.show'));
        }
        
        Session::flash('messenger', 'falied');
        return redirect()->back();
    }
    
}
