@extends('layouts.admin')

@section('content')
    <div class="rounded overflow-hidden shadow bg-white">
        <div class="p-4">
            <div class="font-bold text-xl mb-2">All Mongas</div>
        </div>
        <div class="p-4">
            <a class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded no-underline"
                href="{{ url('admin/monga/create') }}">
                New
            </a>
        </div>
        <div class="p-4">
            <table class="table table__hover">
                <thead>
                    <tr>
                        <th class="w-32">Chapter</th>
                        <th>Caption</th>
                        <th>Pages</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mongas as $monga)
                        <tr>
                            <td class="w-32">{{ $monga->chapter }}</td>
                            <td>{{ $monga->chapter_name}}</td>
                            <td>{{ $monga->pages->count() }}</td>
                            <td>
                                <div class="flex">
                                    <a class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded"
                                        href="{{ url('admin/monga/' . $monga->id . '/edit') }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ url('admin/monga/' . $monga->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red hover:bg-red-dark text-white py-2 px-4 rounded ml-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-center py-4">
            {{ $mongas->links() }}
        </div>
    </div>
@endsection