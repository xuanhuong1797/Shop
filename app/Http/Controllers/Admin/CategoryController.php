<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CreateRequest;
use App\Http\Requests\Admin\Category\EditRequest;
use App\Repositories\CategoryRepository;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    //
    protected $categoryRepository;
    
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    
    public function show(){
        // todo
        $categories = $this->categoryRepository->getAll();
        
        return view('admin.categories.show', compact('categories'));
    }
    
    public function create(){
        
        return view('admin.categories.create');
    }
    
    public function store(CreateRequest $request) {
        $categories = Category::create([
            'name' => $request['name'],
        ]);
        Session::flash('messenger', 'Create Category Successed!!!');
        return redirect(route('admin.categories.show'));
    }
    
    public function edit($id){
        $categories = $this->categoryRepository->getById($id);
        
        return view('admin.categories.edit', compact('categories'));
    }
    
    public function update(EditRequest $request, $id){
        $categories = $this->categoryRepository->getById($id);
        
        try {
            $categories = $request->all();
            $result = $this->categoryRepository->update($id, $categories);
            
            if ($result) {
                Session::flash('messenger', 'Edit Category Successed!!!');
                return redirect(route('admin.categories.show'));
            }
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Category Failed!!!');
            return redirect()->back();
        }
        
    }
    
    public function delete($id){
        $categories = $this->categoryRepository->getById($id);
        try {
            $categories = $this->categoryRepository->destroy($id);
            
            Session::flash('messenger', 'Delete Category Successed!!!');
            return redirect(route('admin.categories.show'));
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Category Failed!!!');
            return redirect(route('admin.categories.show'));
        }
        
        Session::flash('messenger', 'falied');
        return redirect()->back();
    }
}
