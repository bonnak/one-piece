@extends('layouts.app')

@section('content')
    <div>
        <div class="flex flex-wrap -mx-2 -my-2">
            @foreach($mongas as $monga)
                <div class="w-1/4 px-2 py-2">
                    <a href="{{ route('monga.show', [ 'id' => $monga->id ])}}" 
                        class="bg-white block p-3 shadow-md h-full no-underline text-grey-darkest hover:text-blue-dark">
                        <span class="block">
                            <img src="https://cuoool-storage.sgp1.digitaloceanspaces.com/onepiecemanga.jpg">
                        </span>
                        <span class="">#{{ $monga->chapter }} - {{ $monga->chapter_name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center py-4">
        {{ $mongas->links() }}
    </div>
@endsection
