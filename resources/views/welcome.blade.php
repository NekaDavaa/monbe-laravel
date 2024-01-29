@extends('layouts.master')
@section('content')
<form method="POST" action="{{ route('hi') }}">
       @csrf
    <div class="form-group py-6">
    <label for="first_name" >What is your name?</label>
    </div>
        <input type="text" id="first_name" name="first_name" class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-red-400 sm:text-sm sm:leading-6" placeholder="Your Name" value="{{ old('first_name') }}">
       <input type="submit" class="flex-none rounded-md bg-red-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
       @if ($errors->any())
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
       @endif
   </form>
   @if(session('first_name'))
       <p><span class="font-bold">{{ session('first_name') }}</span>, welcome to Laravel :))</p>
   @endif
@endsection
