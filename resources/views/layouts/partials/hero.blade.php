{{--T-wind application--}}
<div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1  ">
    <div
        class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
            <h3 class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
                <span class="inline-block xl:block">T-Wind</span>
                Multi Application</h3>
            <div
                class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                We Design and Develop Clean and High Quality Web Applications
            </div>
            <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                <button
                    class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                    Buy New
                </button>
            </div>
        </div>
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
            <img src="assets/images/widgets/user.png" alt="" class="px-3 mb-2 w-60 mx-auto">
        </div>
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 hidden dark:block">
            <img src="assets/images/widgets/user-light.png" alt="" class="px-3 mb-2 w-60 mx-auto">
        </div>
    </div> <!--end inner-grid-->
</div>

{{--Cards--}}
<div class="sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-3">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
            <div
                class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                <div class="flex justify-between xl:gap-x-2 items-cente">
                    <div
                        class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                        <i class="ti ti-users text-3xl"></i>
                    </div>
                    <div class="self-center ml-auto">
                        <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">24k</h3>
                        <p class="text-gray-400 mb-0 font-medium">Sessions</p>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
        <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
            <div
                class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                <div class="flex justify-between xl:gap-x-2 items-cente">
                    <div
                        class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                        <i class="ti ti-clock text-3xl"></i>
                    </div>
                    <div class="self-center ml-auto">
                        <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">01<span
                                class="text-sm text-slate-500">m</span>03<span
                                class="text-sm text-slate-500">s</span></h3>
                        <p class="text-gray-400 mb-0 font-medium">Avg.Sessions</p>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
        <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
            <div
                class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                <div class="flex justify-between xl:gap-x-2 items-cente">
                    <div
                        class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                        <i class="ti ti-activity text-3xl"></i>
                    </div>
                    <div class="self-center ml-auto">
                        <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">$1800</h3>
                        <p class="text-gray-400 mb-0 font-medium">Bounce Rate</p>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
        <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
            <div
                class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                <div class="flex justify-between xl:gap-x-2 items-cente">
                    <div
                        class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                        <i class="ti ti-confetti text-3xl"></i>
                    </div>
                    <div class="self-center ml-auto">
                        <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">75000</h3>
                        <p class="text-gray-400 mb-0 font-medium">Goal Completions</p>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
    </div>
</div>

{{--Staaf diagram--}}
<div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
    <div class="bg-white dark:bg-slate-800 shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
        <div class="chart-container">
            <canvas id="bar" height="290"></canvas>
        </div>
    </div> <!--end inner-grid-->
</div>
