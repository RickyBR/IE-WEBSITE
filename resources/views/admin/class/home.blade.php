<x-app-layout>
    @include('admin.partials.navbar')

<div class="py-12" style="padding-left: 300px">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">List Class</h1>
                <a href="{{ route('admin/classes/create') }}" class="btn btn-primary">Add Product</a>
            </div>
            <hr/>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success')}}
            </div>
            @endif

            <table class = "table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Program</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($classes as $product)
                    <tr>
                        <td class="align-middle"> {{$loop->iteration}}</td>
                        <td class="align-middle">
                            {{ $product->program ? $product->program->title : 'No Program' }}
                        </td>                        <td class="align-middle"> {{$product->title}}</td>
                        <td class="align-middle"> {{$product->category}}</td>
                        <td class="align-middle"> {{$product->price}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <a href="{{ route('admin/classes/edit', ['id'=>$product->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('admin/classes/delete', ['id'=>$product->id])}}" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="5">Product not found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</x-app-layout>