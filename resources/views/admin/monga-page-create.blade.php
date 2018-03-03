@extends('layouts.admin')

@section('content')
    <div class="rounded overflow-hidden shadow bg-white">
        <div class="p-4">
            <div class="font-bold text-xl mb-2">Monga Page</div>
        </div>
        <div class="p-4">
            <form class="w-full max-w-xs" 
                action="{{ url('admin/monga/' . $monga_id . '/page' ) }}" 
                method="post"
                enctype="multipart/form-data">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="page">
                            Page
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="page"
                            name="page"
                            type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="file">
                            File
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="file" class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="file"
                            name="file">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        @csrf
                        <button class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection