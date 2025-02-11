<x-app-layout>
    @include('admin.partials.navbar')


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Edit Instructor</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/instructors') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/instructors/update', $instructors->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Title" value="{{$instructors->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="institution" class="form-control" placeholder="Institution" value="{{$instructors->institution}}">
                        @error('institution')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="experience" class="form-control" placeholder="Experience" value="{{$instructors->experience}}">
                        @error('experience')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <input type="text" name="socialMedia" class="form-control" placeholder="Social Media" value="{{$instructors->socialMedia}}">
                        @error('socialMedia')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row ">
                    <div class="col mb-3">
                        <img src="{{ asset($instructors->image) }}" alt="{{ $instructors->title }}" width="150">

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