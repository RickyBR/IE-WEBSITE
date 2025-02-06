<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">List Module</h1>
                <a href="{{ route('admin/modules/create') }}" class="btn btn-primary">Add Module</a>
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
                        <th>content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($modules as $module)
                    <tr>
                        <td class="align-middle"> {{$loop->iteration}}</td>
                        <td class="align-middle">
                            {{ $module->product ? $module->product->title : 'No Class' }}
                        </td>                        <td class="align-middle"> {{$module->title}}</td>
                        <td class="align-middle"> {{$module->content}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <a href="{{ route('admin/modules/edit', ['id'=>$module->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('admin/modules/delete', ['id'=>$module->id])}}" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="5">Module not found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</x-app-layout>