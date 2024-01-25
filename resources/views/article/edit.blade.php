@extends('layouts.master')
@section('title', 'Articles')
@section('content')
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-4">
            You are currently editing this post
        </h1>
    </div>

    <form class="max-w-lg mx-auto my-10 p-6 bg-white shadow-md rounded" method="POST" action="{{ route('article.update', $article->id) }}
">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="article_title" value="{{ $article->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400">
        </div>
        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Post Content</label>
            <textarea id="content" name="article_content" class="shadow appearance-none border rounded w-full h-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400 resize-none"> {{ $article->content }}</textarea>
        </div>
        <div class="flex justify-end">
            <input type="submit" class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Update">
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>




@endsection
