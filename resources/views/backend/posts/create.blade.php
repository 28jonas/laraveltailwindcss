@extends('layouts.blogslayout')

@section('content')
    <div class="container mx-auto px-4">
        <div>
            {{--@include("layouts.partials.form_error")--}}
        </div>
        <form action="{{action('\App\Http\Controllers\PostController@store')}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="w-full p-2 border rounded-lg @error('title') border-red-500 @enderror"
                        value="{{ old('title') }}"
                    >
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
                    <input
                        type="text"
                        name="content"
                        id="content"
                        class="w-full p-2 border rounded-lg"
                        value="{{ old('content') }}"
                    >
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">
                        Select Category: <span class="text-xs text-gray-500">(Ctrl + Click to select multiple)</span>
                    </label>
                    <select
                        name="category_id[]"
                        id="category_id"
                        multiple
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-white py-2 px-3 text-gray-700 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 sm:text-sm"
                    >
                        <option value="" disabled class="text-gray-500">Select category</option>
                        @foreach($categories as $id => $category)
                            <option value="{{$id}}" class="text-gray-900">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg w-full">
                    Create post
                </button>
            </div>
        </form>
    </div>
@endsection

