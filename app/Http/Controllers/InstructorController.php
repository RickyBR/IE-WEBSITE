<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index() 
    {
        $instructors = Instructor::get();
        $total = Instructor::count();
        return view('admin.instructor.home', compact(['instructors', 'total']));
    }

    public function user() 
    {
        $instructors = Instructor::all();
        return view('pages.service', compact('instructors'));
    }

    public function create() 
    {
        return view('admin.instructor.create');
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'name' =>'required',
            'institution' => 'required',
            'experience' => 'required',
            'socialMedia' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/instructors'), $imageName);
            $validation['image'] = 'uploads/instructors/'.$imageName;
        }
        $data = Instructor::create($validation);

        if ($data) {
            session()->flash('success', 'Program Added Successfully');
            return redirect(route('admin/instructors'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin.instructors/create'));
        }
    }

    public function edit($id) {
        $instructors = Instructor::findOrFail($id);
        return view('admin.instructor.update', compact('instructors'));
    }

    public function update(Request $request, $id) {
        $instructors = Instructor::findOrFail($id);

        $validation = $request->validate([
            'name' => 'required', 
            'institution' => 'required',
            'experience' => 'required',
            'socialMedia' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $instructors->name =$validation['name'];
        $instructors->experience = $validation['experience'];
        $instructors->institution = $validation['institution'];
        $instructors->social_media = $validation['socialMedia'];

        
        if ($request->hasFile('image')) {
            if ($instructors->image && file_exists(public_path($instructors->image))) {
                unlink(public_path($instructors->image));
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/instructors'), $imageName);
            $instructors->image = 'uplads/instructors'.$imageName;
        }

        $data = $instructors->save();

     
        if ($data) {
            session()->flash('success', 'Program Updated Successfully');
            return redirect(route('admin/instructors'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/instructors/update', $id));
        }
    }

    public function delete($id) 
    {
        $instructors = Instructor::findOrFail($id)->delete();
        if ($instructors) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/instructors'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/instructors'));
        }
    }
}
