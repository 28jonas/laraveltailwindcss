<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="">

@include('layouts.partials.header')

<body data-layout-mode="light"
      class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


<!-- leftbar-tab-menu -->
@include('layouts.partials.navbar')


<div class="container  mx-auto px-2">
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Dashboard</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-gray-500">Dashboard</li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-blue-600 hover:text-blue-700">Analytics</li>
                            </ol>
                        </div>
                        <div class="flex items-center">
                            <button
                                class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                                Create New
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!--end container-->

<div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4  mb-4">
        @include('layouts.partials.hero')
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-4">
        @include('layouts.partials.livetracking')
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">
        @include('layouts.partials.totalstracking')
    </div>
    <!-- footer -->
    @include('layouts.partials.footer')


</div><!--end container-->


</body>

</html>
