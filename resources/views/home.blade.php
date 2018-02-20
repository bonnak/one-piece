@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="text-brand-darker bg-white rounded-t overflow-hidden">
                <div class="vdo-player" 
                    style="background-image: url('https://2.bp.blogspot.com/-WvkxxsCv0Ug/WdNuHXhN1gI/AAAAAAAAB4w/liHVpuk14LsF0mEgqmd7rWLaFEYtgOnVACHMYCw/s0')">
                </div>
            </div>
            <div class="bg-white rounded-b flex">
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <input type="checkbox">
                    <span class="ml-1">Auto Play</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <input type="checkbox">
                    <span class="ml-1">Auto Next</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="far fa-lightbulb text-yellow-dark"></span>
                    <span class="ml-1">Light Off</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="fas fa-plus text-green-dark"></span>
                    <span class="ml-1">Bookmark</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="fas fa-share-alt text-blue-dark"></span>
                    <span class="ml-1">Share</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="fas fa-expand-arrows-alt text-indigo"></span>
                    <span class="ml-1">Expand</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="fas fa-compass text-grey"></span>
                    <span class="ml-1">Guide</span>
                </a>
                <a href="#" class="text-xs text-grey-dark flex justify-center no-underline hover:bg-grey-light p-3 flex-1">
                    <span class="fas fa-info text-purple"></span>
                    <span class="ml-1">Report</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
