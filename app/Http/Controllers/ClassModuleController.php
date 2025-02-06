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
            'class_id' => 'required|exists:classes,id', // Validasi program_id harus ada di tabel programs
            'title' =>'required',
            'content' =>'required',
        ]);
    
    
        $data = ClassModule::create($validation); // Simpan data ke tabel modules
    
        if ($data) {
            session()->flash('success', 'Module Added Successfully');
            return redirect(route('admin/modules'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.modules/create'));
        }
    }
    

    public function edit($id) 
    {
        $module = ClassModule::findOrFail($id);
        $classes = Product::all(); 
        return view('admin.module.update', compact('module', 'classes'));
    }

    public function update(Request $request, $id) {
        $module = ClassModule::findOrFail($id);
    
        // Validasi input
        $validation = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'class_id' => 'required|exists:classes,id', // Pastikan program_id valid
        ]);
    
        // Update data produk
        $module->title = $validation['title'];
        $module->content = $validation['content'];
        $module->class_id = $validation['class_id']; // Update program_id
    
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
