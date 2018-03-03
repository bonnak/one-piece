@extends('layouts.admin')

@section('content')
    <div class="rounded overflow-hidden shadow bg-white">
        <div class="p-4">
            <div class="font-bold text-xl mb-2">Monga</div>
        </div>
        <div class="p-4">
            <form class="w-full max-w-xs" action="{{ url('admin/monga/' . $monga->id ) }}" method="post">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="chapter">
                            Chapter
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="chapter"
                            name="chapter"
                            type="text" 
                            value="{{ $monga->chapter }}">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="chapter_name">
                            Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="chapter_name"
                            name="chapter_name"
                            type="text" 
                            value="{{ $monga->chapter_name }}">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        @csrf
                        @method('put')
                        <button class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="p-4">
            <table class="table table__hover">
                <thead>
                    <tr>
                        <th class="w-32">Page</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monga_pages as $page)
                        <tr>
                            <td class="w-32">{{ $page->page }}</td>
                            <td>
                                <image class="w-16" src="{{  Storage::disk('spaces')->url($page->file_name) }}" />
                            </td>
                            <td>
                                <div class="flex">
                                    <a class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded"
                                        href="{{ url('admin/monga/' . $monga->id . '/page/' . $page->id . '/edit') }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ url('admin/monga/' . $monga->id . '/page/' . $page->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded ml-1">
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
        <div class="flex p-4">
            <a class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded no-underline"
                href="{{ url('admin/monga/' . $monga->id . '/page/create') }}">
                Add page
            </a>
            <div class="flex justify-center">
                {{ $monga_pages->links() }}
            </div>
        </div>
    </div>
@endsection