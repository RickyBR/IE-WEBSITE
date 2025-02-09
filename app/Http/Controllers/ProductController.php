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
        $classes = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.class.home', compact(['classes', 'total']));

    }
    public function user($id)
    {
        $program = Program::findOrFail($id);
    
    $products = $program->products;

    return view('pages.class', compact('products'));
    }

    public function create() 
    {
        $programs = Program::all(); 
        return view('admin.class.create', compact('programs'));
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'program_id' => 'required|exists:programs,id', // Validasi program_id harus ada di tabel programs
            'title' =>'required',
            'category' =>'required',
            'description' =>'required',
            'price' =>'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $validation['image'] = 'uploads/programs/'.$imageName;
        }
    
        $data = Product::create($validation); // Simpan data ke tabel classes
    
        if ($data) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.classes/create'));
        }
    }
    

    public function edit($id) 
    {
        $class = Product::findOrFail($id);
        $programs = Program::all(); 
        return view('admin.class.update', compact('class', 'programs'));
    }

    public function update(Request $request, $id) {
        $class = Product::findOrFail($id);
    
        // Validasi input
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|integer',
            'program_id' => 'required|exists:programs,id', // Pastikan program_id valid
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // Update data produk
        $class->title = $validation['title'];
        $class->category = $validation['category'];
        $class->price = $validation['price'];
        $class->program_id = $validation['program_id']; // Update program_id
    
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            if ($class->image && file_exists(public_path($class->image))) {
                unlink(public_path($class->image));
            }
    
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/classes'), $imageName);
            $class->image = 'uploads/classes/'.$imageName;
        }
    
        // Simpan perubahan
        if ($class->save()) {
            session()->flash('success', 'Product Updated Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/classes/edit', $id));
        }
    }

    public function delete($id) 
    {
        $classes = Product::findOrFail($id)->delete();
        if ($classes) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/classes'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/classes'));
        }
    }
}
