@extends('layouts.blogslayout')

@section('content')
    <div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">
        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
            @foreach($posts as $post)
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-3 ">
                    <div class="card">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/images/widgets/img-1.jpg" alt=""/>
                        </a>

                        <div class="card-body">
                            <div>
                                @foreach($post->categories as $categorie)
                                    <span
                                        class="focus:outline-none text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-1 px-2 mx-2 my-2">
                                {{$categorie->name}}
                            </span>
                                @endforeach
                            </div>
                            <div>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info btn-sm" title="Edit Post">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <a href="#"
                               class="my-3 block text-[20px] font-medium tracking-tight text-gray-800 dark:text-white">{{$post->title}}</a>
                            <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                                {{$post->content}}
                            </p>
                            <div class="border-[0.5px] border-dashed border-slate-300 my-4 dark:border-slate-700"></div>
                            <div class="flex flex-wrap justify-between">
                                <div class="flex items-center mb-2">
                                    <div class="w-8 h-8 rounded">
                                        <img class="w-full h-full overflow-hidden object-cover rounded object-center"
                                             src="assets/images/users/avatar-3.jpg" alt="logo"/>
                                    </div>
                                    <div class="ml-2">
                                        <a tabindex="0"
                                           class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline">
                                            <h5 class=" font-medium text-sm">
                                                {{$post->user->name}}</h5></a>
                                        <p tabindex="0"
                                           class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">
                                            San Diego, California</p>
                                    </div>
                                </div>
                                <a href="#" class="text-primary-500 font-semibold text-sm self-center">Read More <i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            @endforeach
        </div><!--end inner-grid-->
        @endsection




    </div><!--end container-->

