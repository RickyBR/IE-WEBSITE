<x-app-layout>
    @include('admin.partials.navbar')


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

            <p><a href="{{ route('admin/classes') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/classes/update', $class->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label for="program_id" class="form-label">Program</label>
                        <select name="program_id" class="form-control">
                        <option value="">-- Select Program --</option>
            @foreach($programs as $program)
                <option value="{{ $program->id }}" 
                    {{ $class->program_id == $program->id ? 'selected' : '' }}>
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
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$class->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label>Class Features</label>
                        <div id="features-container">
                            <div class="input-group mb-2">
                                <input type="text" name="description[]" class="form-control" placeholder="Enter feature" >
                                <button type="button" class="btn btn-danger remove-feature">X</button>
                            </div>
                        </div>
                        <button type="button" id="add-feature" class="btn btn-success">+ Add Feature</button>
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="price" class="form-control" placeholder="Price" value="{{$class->price}}">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <img src="{{ asset($class->image) }}" alt="{{ $class->title }}" width="150">

                        <input type="file" name="image" class="form-control">
                        @error('image')
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const featuresContainer = document.getElementById("features-container");
        const addFeatureButton = document.getElementById("add-feature");

        addFeatureButton.addEventListener("click", function () {
            const featureInput = document.createElement("div");
            featureInput.classList.add("input-group", "mb-2");
            featureInput.innerHTML = `
                <input type="text" name="description[]" class="form-control" placeholder="Enter feature">
                <button type="button" class="btn btn-danger remove-feature">X</button>
            `;
            featuresContainer.appendChild(featureInput);
        });

        featuresContainer.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-feature")) {
                e.target.parentElement.remove();
            }
        });
    });
</script>
</x-app-layout>