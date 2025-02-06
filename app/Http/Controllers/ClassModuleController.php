<?php

namespace App\Http\Controllers;

use App\Models\ClassModule;
use App\Models\Product;
use Illuminate\Http\Request;

class ClassModuleController extends Controller
{
      public function index() 
    {
        $modules = ClassModule::orderBy('id', 'desc')->get();
        $total = ClassModule::count();
        return view('admin.module.home', compact(['modules', 'total']));

    }

    public function create() 
    {
        $products = Product::all(); 
        return view('admin.module.create', compact('products'));
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'program_id' => 'required|exists:programs,id', // Validasi program_id harus ada di tabel programs
            'title' =>'required',
            'content' =>'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $validation['image'] = 'uploads/programs/'.$imageName;
        }
    
        $data = ClassModule::create($validation); // Simpan data ke tabel modules
    
        if ($data) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.modules/create'));
        }
    }
    

    public function edit($id) 
    {
        $module = ClassModule::findOrFail($id);
        $products = Product::all(); 
        return view('admin.module.update', compact('product', 'programs'));
    }

    public function update(Request $request, $id) {
        $module = ClassModule::findOrFail($id);
    
        // Validasi input
        $validation = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'class_id' => 'required|exists:classes,id', // Pastikan program_id valid
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // Update data produk
        $module->title = $validation['title'];
        $module->content = $validation['content'];
        $module->program_id = $validation['program_id']; // Update program_id
    
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            if ($module->image && file_exists(public_path($module->image))) {
                unlink(public_path($module->image));
            }
    
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/classes'), $imageName);
            $module->image = 'uploads/classes/'.$imageName;
        }
    
        // Simpan perubahan
        if ($module->save()) {
            session()->flash('success', 'Product Updated Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/classes/edit', $id));
        }
    }

    public function delete($id) 
    {
        $modules = ClassModule::findOrFail($id)->delete();
        if ($modules) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/classes'));
        }
    }
}
