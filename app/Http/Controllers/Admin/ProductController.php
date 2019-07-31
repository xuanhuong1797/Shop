<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateRequest;
use App\Http\Requests\Admin\Product\EditRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Session;
use App\Repositories\CategoryRepository;
use App\Repositories\BrandRepository;
use App\Models\ImageProduct;

class ProductController extends Controller
{
    //
    protected $productRepository;
    
    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }
    
    public function show(){
        // todo
        $products = $this->productRepository->getList();
        
        return view('admin.products.show', compact('products'));
    }
    
    public function create(){
        $categoryRepository = new CategoryRepository();
        $categories = $categoryRepository->getAll();
        
        $brandRepository = new BrandRepository();
        $brands = $brandRepository->getAll();
        
        return view('admin.products.create', compact('categories', 'brands'));
    }
    
    public function store(CreateRequest $request) {
        $products = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'brand_id' => $request['brand'],
            'category_id' => $request['category'],
        ]);
        
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move('upload/products/', $file->getClientOriginalName());
            $url = 'upload/products/'.$file->getClientOriginalName();
            ImageProduct::create([
                 'product_id' => $products->id,
                 'image_url' => $url,
             ]);
        } else $products->image='';
        
        Session::flash('messenger', 'Create Product Successed!!!');
        return redirect(route('admin.products.show'));
    }
    
    public function edit($id){
        $products = $this->productRepository->getById($id);
        
        $categoryRepository = new CategoryRepository();
        $categories = $categoryRepository->getAll();
        
        $brandRepository = new BrandRepository();
        $brands = $brandRepository->getAll();
        
        return view('admin.products.edit', compact('products', 'categories', 'brands'));
    }
    
    public function update(EditRequest $request, $id){
        $products = $this->productRepository->getById($id);
        
        try {
            $products = $request->all();
            $result = $this->productRepository->update($id, $products);
            
            if ($result) {
                Session::flash('messenger', 'Edit Product Successed!!!');
                return redirect(route('admin.products.show'));
            }
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Product Failed!!!');
            return redirect()->back();
        }
        
    }
    
    public function delete($id){
        $products = $this->productRepository->getById($id);
        try {
            $products = $this->productRepository->destroy($id);
            
            Session::flash('messenger', 'Delete Product Successed!!!');
            return redirect(route('admin.products.show'));
        } catch (Exception $e) {
            Session::flash('messenger', 'Edit Product Failed!!!');
            return redirect(route('admin.products.show'));
        }
        
        Session::flash('messenger', 'falied');
        return redirect()->back();
    }
}
