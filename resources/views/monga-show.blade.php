@extends('layouts.app')

@section('content')
<div class="bg-white rounded overflow-hidden shadow">
    <div class="px-6 py-4">
        <h2 class="text-grey-darkest text-base">
            Chapter #{{ $monga->chapter }} - {{ $monga->chapter_name }}
        </h2>
        <!-- <p class="text-grey-darker text-base">
            Sanji Comes Back! Crash! The Tea Party from Hell! 
        </p> -->
    </div>
    <div class="relative flex justify-center items-center">
        <img src="https://cuoool-storage.sgp1.digitaloceanspaces.com/one-piece-1668229.jpg" />
    </div>    
</div>
<div class="bg-white rounded overflow-hidden shadow mt-4 p-4">
    <!-- <div  class="flex">
        <a class="text-grey text-xl" href="#">
            <i class="fas fa-chevron-left"></i>
        </a>
        <div class="flex-auto">
        </div>
        <a class="text-grey text-xl" href="#">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div> -->
    <carousel>
    <slide>
      Slide 1 Content
    </slide>
    <slide>
      Slide 2 Content
    </slide>
  </carousel>
</div>
@endsection
