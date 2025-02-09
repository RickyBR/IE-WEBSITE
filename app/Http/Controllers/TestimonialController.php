<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() 
    {
        $testimonials = Testimonial::get();
        $total = Testimonial::count();
        return view('admin.testimonial.home', compact(['testimonials', 'total']));
    }

    public function user()
    {
        $testimonials = Testimonial::all();
    

    return view('pages.testimonial', compact('testimonials'));
    }

    public function create() 
    {
        return view('admin.testimonial.create');
    }

    public function save(Request $request) {
        $validation = $request->validate([
            'name' =>'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonials'), $imageName);
            $validation['image'] = 'uploads/testimonials/'.$imageName;
        }
        $data = Testimonial::create($validation);

        if ($data) {
            session()->flash('success', 'Program Added Successfully');
            return redirect(route('admin/testimonials'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin.testimonials/create'));
        }
    }

    public function edit($id) {
        $testimonials = Testimonial::findOrFail($id);
        return view('admin.testimonial.update', compact('testimonials'));
    }

    public function update(Request $request, $id) {
        $testimonials = Testimonial::findOrFail($id);

        $validation = $request->validate([
            'name' => 'required', 
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $testimonials->name =$validation['name'];
        $testimonials->description = $validation['description'];
        
        if ($request->hasFile('image')) {
            if ($testimonials->image && file_exists(public_path($testimonials->image))) {
                unlink(public_path($testimonials->image));
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonials'), $imageName);
            $testimonials->image = 'uplads/testimonials'.$imageName;
        }

        $data = $testimonials->save();

     
        if ($data) {
            session()->flash('success', 'Program Updated Successfully');
            return redirect(route('admin/testimonials'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/testimonials/update', $id));
        }
    }

    public function delete($id) 
    {
        $testimonials = Testimonial::findOrFail($id)->delete();
        if ($testimonials) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/testimonials'));
        } else {
            session()->flash('error', 'Product Not Deleted success');
            return redirect(route('admin/testimonials'));
        }
    }
}
