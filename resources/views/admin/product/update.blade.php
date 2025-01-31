<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Product') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Edit Product</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/products') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/products/update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label for="program_id" class="form-label">Program</label>
                        <select name="program_id" class="form-control">
                        <option value="">-- Select Program --</option>
            @foreach($programs as $program)
                <option value="{{ $program->id }}" 
                    {{ $product->program_id == $program->id ? 'selected' : '' }}>
                    {{ $program->title }}
                </option>
            @endforeach
        </select>
        @error('program_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$product->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="category" class="form-control" placeholder="Category" value="{{$product->category}}">
                        @error('category')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="150">

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