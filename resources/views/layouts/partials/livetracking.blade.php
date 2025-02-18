{{--Live session device--}}
<div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="font-medium dark:text-slate-300">Sessions Device</h4>
        </div>
        <div class="card-body">
            <div id="ana_device" class="apex-charts"></div>
            <h6 class="bg-slate-50 dark:bg-slate-800 py-3 px-2 mb-0 rounded-md  text-center text-slate-500 font-medium mt-3">
                <i class="ti ti-calendar self-center text-lg mr-1"></i>
                01 January 2022 to 31 December 2022
            </h6>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Device
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Sassions
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Day
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Week
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Product 1 -->
                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dasktops
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        1843
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -3
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -12
                                    </td>
                                </tr>
                                <!-- Product 2 -->
                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tablets
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        2543
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -5
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -2
                                    </td>
                                </tr>
                                <!-- Product 2 -->
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Mobiles
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        3654
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -5
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        -6
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--end inner-grid-->
</div>

{{--Live Visits our new Site--}}
<div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
    <div class="card h-full overflow-hidden">
        <div class="card-header">
            <h4 class="font-medium dark:text-slate-300">Live Visits Our New Site</h4>
        </div>
        <div class="card-body">
            <div class="text-center ">
                <p class="text-slate-400 uppercase font-medium text-sm">Right now</p>
                <h2 class="text-slate-800 dark:text-slate-300  text-4xl font-bold leading-8 py-2">120</h2>
                <p class="text-sm text-gray-700 whitespace-nowrap dark:text-gray-400 font-medium">
                    Yesterday Visits : 10,563 <i class="ti ti-caret-up text-green-500 text-base"></i>
                </p>
            </div>
        </div>
        <div class="p-4">
            <div id="visitors" class="h-60 my-6"></div>
            <div class="mt-5 text-center">
                <button
                    class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                    More Details
                </button>
            </div>
        </div>
    </div> <!--end inner-grid-->
</div>

{{--Live Activities--}}
<div class="sm:col-span-1  md:col-span-2 lg:col-span-2 xl:col-span-1 ">
    <div class="card ">
        <div class="card-header">
            <h4 class="font-medium dark:text-slate-300">Activites</h4>
        </div>
        <div class="card-body h-[510px] p-4" data-simplebar>
            <ol class="relative border-l border-dashed border-gray-200 dark:border-gray-700 ml-3">
                <li class="mb-10 ml-8">
                                <span data-tooltip-target="tooltip-light" data-tooltip-style="light"
                                      class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-green-100 rounded-full dark:bg-green-900">
                                    <i class="ti ti-clock text-green-500"></i>
                                    <span id="tooltip-light" role="tooltip"
                                          class="inline-block absolute invisible z-10 py-2 px-3 text-[12px] font-medium text-gray-900 bg-white rounded-lg border border-slate-200 shadow-sm opacity-0 tooltip">
                                        Tooltip content
                                        <span class="tooltip-arrow" data-popper-arrow></span>
                                    </span>
                                </span>
                    <div
                        class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                <span
                                    class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                            <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">Jack </a>
                            updated the status of Refund #1234 to awaiting customer response
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-8">
                                <span
                                    class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-pink-100 rounded-full dark:bg-pink-900/50">
                                    <i class="ti ti-brand-codesandbox text-pink-500"></i>
                                </span>
                    <div
                        class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                <span
                                    class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                            <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">Donald</a>
                            updated the status of Refund #1234 to awaiting customer response
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-8">
                                <span
                                    class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-blue-200 rounded-full dark:bg-slate-900">
                                    <img class="rounded-full shadow-lg" src="assets/images/users/avatar-1.jpg"
                                         alt="Thomas Lean image"/>
                                </span>
                    <div
                        class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm dark:bg-slate-800 dark:border-slate-700">
                        <div class="justify-between items-center mb-3 sm:flex">
                            <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">2 hours ago</span>
                            <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Aword winner
                                this year <a href="#"
                                             class="font-semibold text-gray-900 dark:text-white hover:underline">Bette
                                    Elam</a></div>
                        </div>
                        <div
                            class="p-3 text-xs italic font-normal text-gray-500 bg-gray-50 rounded-lg border border-gray-200 dark:bg-slate-800 dark:border-slate-700 dark:text-gray-300">
                            There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, or randomised words
                            which.
                        </div>
                    </div>
                </li>
                <li class="mb-10 ml-8">
                                <span
                                    class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-purple-100 rounded-full dark:bg-purple-900/50">
                                    <i class="ti ti-atom-2 text-purple-500"></i>
                                </span>
                    <div
                        class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                <span
                                    class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                            <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">William </a>
                            updated the status of Refund #1234 to awaiting customer response
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div> <!--end inner-grid-->
</div>
