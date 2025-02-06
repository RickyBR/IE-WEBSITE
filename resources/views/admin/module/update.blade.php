<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Module') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Edit Module</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/modules') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/modules/update', $module->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label for="class_id" class="form-label">Module</label>
                        <select name="class_id" class="form-control">
                        <option value="">-- Select Module --</option>
            @foreach($modules as $module)
                <option value="{{ $module->id }}" 
                    {{ $module->class_id == $module->id ? 'selected' : '' }}>
                    {{ $module->title }}
                </option>
            @endforeach
        </select>
        @error('class_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$module->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="content" class="form-control" placeholder="Category" value="{{$module->content}}">
                        @error('content')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <img src="{{ asset($module->image) }}" alt="{{ $module->title }}" width="150">

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