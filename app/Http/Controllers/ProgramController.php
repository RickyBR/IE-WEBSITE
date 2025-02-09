<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadeView;

class ProgramController extends Controller
{

    public function index() 
    {
        $programs = Program::all();
        $total = Program::count();
        return view('admin.program.home', compact('programs', 'total'));
    }
    
    public function home()
    {
        $programs = Program::all();
        return view('pages.home', compact('programs'));
    }
    

    public function create() 
    {
        return view('admin.program.create');
    }


    public function show($id) 
    {
        $program = Program::findOrFail($id);

        $classes = $program->classes; 
        return view('pages.class', compact('program', 'classes'));
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'title' =>'required',
            'description' => 'required', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $validation['image'] = 'uploads/programs/'.$imageName;
        }
        $data = Program::create($validation);

        if ($data) {
            session()->flash('success', 'Program Added Successfully');
            return redirect(route('admin/programs'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin.programs/create'));
        }
    }

    public function edit($id) {
        $programs = Program::findOrFail($id);
        return view('admin.program.update', compact('programs'));
    }

    public function update(Request $request, $id) {
        $programs = Program::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required', 
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $programs->title =$validation['title'];
        $programs->description = $validation['description'];
        
        if ($request->hasFile('image')) {
            if ($programs->image && file_exists(public_path($programs->image))) {
                unlink(public_path($programs->image));
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $programs->image = 'uplads/programs'.$imageName;
        }

        $data = $programs->save();

     
        if ($data) {
            session()->flash('success', 'Program Updated Successfully');
            return redirect(route('admin/programs'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/programs/update', $id));
        }
    }

    public function delete($id) 
    {
        $programs = Program::findOrFail($id)->delete();
        if ($programs) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/programs'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/programs'));
        }
    }
}
