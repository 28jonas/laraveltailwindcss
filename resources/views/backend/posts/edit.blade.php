@extends('layouts.blogslayout')

@section('content')
    <div class="container-fluid px-4">
        {{--@include('layouts.partials.flash_message')--}}
        <!-- Update Form: Dit formulier omvat alle invoervelden en de foto-upload -->
        <form id="updateForm" action="{{action('\App\Http\Controllers\PostController@update',$post->id)}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PATCH')
            <div class="row">
                <!-- Linkerkant: User Details in een card -->
                <div class="col-md-8 d-flex">
                    <div class="card w-100 h-100">
                        <div class="card-header">
                            Post Details
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="title">Title:</label>
                                <input type="text"
                                       name="title"
                                       id="title"
                                       class="form-control"
                                       value="{{ old('title', $post->title) }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Content:</label>
                                <input type="text"
                                       name="content"
                                       id="content"
                                       class="form-control"
                                       value="{{ old('email', $post->content) }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="role_id">Select categories:</label>
                                <select name="category_id[]" id="category_id" class="form-control" multiple>
                                    <option value="" disabled>Select a category</option>
                                    @foreach($categories as $id => $category)
                                        <option value="{{ $id }}" {{ collect(old('categrory_id', $post->categories->pluck('id')->toArray()))->contains($id) ? 'selected' : '' }}>
                                            {{ $category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rechterkant: Foto en Bestandsdetails in een card -->
                {{--<div class="col-md-4 d-flex">
                    <div class="card w-100 h-100">
                        <div class="card-header">
                            Profile Photo
                        </div>
                        <div class="card-body text-center">
                            @if($user->photo && $photoDetails['exists'])
                                <img src="{{ asset('assets/img/' . $user->photo->path) }}"
                                     alt="{{ $user->photo->alternate_text ?? $user->name }}"
                                     class="img-fluid rounded object-fit-cover mb-2"
                                     style="width: 100%; max-width: 300px; height: auto;">
                                <div class="mt-2">
                                    <small>
                                        File size: {{ $photoDetails['filesize'] }} KB<br>
                                        Resolution: {{ $photoDetails['width'] }}x{{ $photoDetails['height'] }}<br>
                                        Extension: {{ $photoDetails['extension'] }}
                                    </small>
                                </div>
                            @else
                                <img src="https://placehold.co/300x300"
                                     alt="No Image"
                                     class="img-fluid rounded object-fit-cover mb-2"
                                     style="width: 100%; max-width: 300px; height: auto;">
                                <div class="mt-2">
                                    <small>No photo available</small>
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <label for="photo_id">Upload New Image:</label>
                                <input type="file"
                                       name="photo_id"
                                       id="photo_id"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <button type="submit" form="updateForm" class="btn btn-primary">Update Post</button>

        </form>
        <!-- Delete Form: Dit formulier staat buiten de update form en bevat enkel de benodigde velden -->
{{--        <form id="deleteForm" method="POST" action="{{ action('App\Http\Controllers\PostController@destroy', $post->id) }}" onsubmit="return confirm('Are you sure you want to delete this user?');">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--        </form>--}}
        <!-- Card Footer met knoppen voor update en delete, weergegeven naast elkaar -->
{{--        <div class="card-footer d-flex justify-content-between align-items-center mt-3">--}}
{{--            <button type="submit" form="updateForm" class="btn btn-primary">Update Post</button>--}}
{{--            <button type="submit" form="deleteForm" class="btn btn-danger">--}}
{{--                <i class="fas fa-trash-alt"></i> Delete Post--}}
{{--            </button>--}}
{{--        </div>--}}
        {{--@include('layouts.partials.form_error')--}}
    </div>
@endsection
