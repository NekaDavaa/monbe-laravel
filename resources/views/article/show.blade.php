@extends('layouts.master')

@section('title', 'Articles')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">
                {{ $article->title }}
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="prose max-w-none">
                    {{ $article->content }}
                </div>
            </div>
        </div>
    </div>
@endsection


