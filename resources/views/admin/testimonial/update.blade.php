<x-app-layout>
    @include('admin.partials.navbar')

<div class="py-12" style="padding-left: 300px">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Edit Testimonial</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/testimonials') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/testimonials/update', $testimonials->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Title" value="{{$testimonials->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="description" class="form-control" placeholder="Category" value="{{$testimonials->description}}">
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <img src="{{ asset($testimonials->image) }}" alt="{{ $testimonials->title }}" width="150">

                        <input type="file" name="image" class="form-control">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
        

                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-warning">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
</x-app-layout>