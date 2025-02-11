<x-app-layout>
    @include('admin.partials.navbar')


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <h1 class="mb-0">Add Instructor</h1>
            <hr/>

            @if (session()->has('error'))
            <div>
                {{session('error')}}
            </div>
            @endif

            <p><a href="{{ route('admin/instructors') }}" class="btn btn-primary">Back to Home</a>
            </p>

            <form action="{{ route('admin/instructors/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="institution" class="form-control" placeholder="Institution">
                        @error('institution')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="experience" class="form-control" placeholder="Experience">
                        @error('experience')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row">
                    <div class="col mb-3">
                        <input type="text" name="socialMedia" class="form-control" placeholder="SocialMedia">
                        @error('socialMedia')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div clas="row">
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