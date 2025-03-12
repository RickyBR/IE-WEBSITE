<x-app-layout>
    @include('admin.partials.navbar')

<div class="py-12" style="padding-left: 300px">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Add Module</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/modules') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/modules/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col mb-3">
                        <label for="class_id">Select Class</label>
                        <select name="class_id" class="form-control">
                            <option value="">-- Select Class --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                            @endforeach
                        </select>
                        @error('class_id')
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
                        <input type="text" name="content" class="form-control" placeholder="Content">
                        @error('content')
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