<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Program;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index() 
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));

    }

    public function create() 
    {
        $programs = Program::all(); 
        return view('admin.product.create', compact('programs'));
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'program_id' => 'required|exists:programs,id', // Validasi program_id harus ada di tabel programs
            'title' =>'required',
            'category' =>'required',
            'price' =>'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $validation['image'] = 'uploads/programs/'.$imageName;
        }
    
        $data = Product::create($validation); // Simpan data ke tabel products
    
        if ($data) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.products/create'));
        }
    }
    

    public function edit($id) 
    {
        $product = Product::findOrFail($id);
        $programs = Program::all(); 
        return view('admin.product.update', compact('product', 'programs'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
    
        // Validasi input
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|integer',
            'program_id' => 'required|exists:programs,id', // Pastikan program_id valid
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // Update data produk
        $product->title = $validation['title'];
        $product->category = $validation['category'];
        $product->price = $validation['price'];
        $product->program_id = $validation['program_id']; // Update program_id
    
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
    
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = 'uploads/products/'.$imageName;
        }
    
        // Simpan perubahan
        if ($product->save()) {
            session()->flash('success', 'Product Updated Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/products/edit', $id));
        }
    }

    public function delete($id) 
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/products'));
        }
    }
}
