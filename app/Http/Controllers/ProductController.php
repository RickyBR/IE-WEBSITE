<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        return view('admin.product.create');
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
            $validation['image'] = 'uploads/products/'.$imageName;
        }
    
        $data = Product::create($validation);
        
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
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function update(Request $request, $id) {
        $products = Product::findOrFail($id);
    
        // Validasi input
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi file gambar
        ]);
    
        // Update data produk
        $products->title = $validation['title'];
        $products->category = $validation['category'];
        $products->price = $validation['price'];
    
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($products->image && file_exists(public_path($products->image))) {
                unlink(public_path($products->image));
            }
    
            // Simpan gambar baru
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
            $products->image = 'uploads/products/'.$imageName; // Simpan path gambar
        }
    
        // Simpan perubahan
        $data = $products->save();
    
        if ($data) {
            session()->flash('success', 'Product Updated Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/products/update', $id));
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
