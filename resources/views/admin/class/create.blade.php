<x-app-layout>
    @include('admin.partials.navbar')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Add Class</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/classes') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/classes/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col mb-3">
                        <label for="program_id">Select Program</label>
                        <select name="program_id" class="form-control">
                            <option value="">-- Select Program --</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->title }}</option>
                            @endforeach
                        </select>
                        @error('program_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="row">
                    <div class="col mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="row">
                    <div class="col mb-3">
                        <input type="text" name="category" class="form-control" placeholder="Category">
                        @error('category')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="row">
                    <div class="col mb-3">
                        <input type="text" name="price" class="form-control" placeholder="Price">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <textarea id="description" name="description">{!! old('description', $class->description ?? '') !!}</textarea> 
                         @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="row">
                    <div class="col mb-3">
                        <input type="file" name="image">
                        @error('file')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
</x-app-layout>