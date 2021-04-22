<section @click.away="closeSideBar" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300"
         x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-show="isSettingsPanelOpen"
         class="fixed inset-y-0 right-0 w-64 dark:bg-gray-800 bg-white shadow-xl z-50 rounded-l-3xl"
         style="display: none;">
    <div class="px-4 py-8">
        <div class="text-left text-2xl dark:text-gray-100 text-gray-700 cursor-pointer" @click="isSettingsPanelOpen = false" style="margin-top: -20px">
            &times;
        </div>
        <img src="/assets/Logos/platlearn.png" width="130" class="rounded-full m-auto shadow-xl" alt="">
        <h6 class="text-xl text-gray-700 font-semibold mt-5 dark:text-gray-200 text-center">پلت لرن</h6>
        {{-- <div class="text-center mt-5"><a class="text-blue-200 transition duration-100
            ease-in hover:text-blue-400" href="">ورود</a>&nbsp; | &nbsp;<a class="text-blue-200 transition duration-100
            ease-in hover:text-blue-400" href="">ثبت نام</a> </div>--}}
        {{--
                <div class="flex-1 mt-8 space-y-2 overflow-hidden hover:overflow-auto">
                    <a href="#" class="flex items-center w-full space-x-2 text-white rounded-lg">
                          <span aria-hidden="true" class="p-2  rounded-lg">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                          </span>
                        <span>خانه</span>
                    </a>
                </div>
        --}}
        <div class="mt-6">
            <div>
                <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                <a
                    href="/"
                    class="flex items-center py-2  dark:text-gray-200 text-gray-700 transition-colors rounded-md dark:text-light hover:text-blue-500 dark:hover:text-blue-400"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <span aria-hidden="true">
                    <i class="zmdi zmdi-home text-2xl"></i>
                </span>
                    <span class="mr-2 text-sm"> صفحه اصلی </span>
                </a>
            </div>
            <div>
                <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                <a
                    href="/courses"
                    class="flex items-center py-2 dark:text-gray-200 text-gray-700 transition-colors rounded-md dark:text-light hover:text-blue-500 dark:hover:text-blue-400"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <span aria-hidden="true">
                    <i class="zmdi zmdi-collection-video text-xl"></i>
                </span>
                    <span class="mr-2 text-sm"> دوره های آموزشی </span>
                </a>
            </div>
            <div>
                <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                <a
                    href="/articles"
                    class="flex items-center py-2 dark:text-gray-200 text-gray-700 transition-colors
                     rounded-md dark:text-light hover:text-blue-500 dark:hover:text-blue-400"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <span aria-hidden="true">
                    <i class="zmdi zmdi-blogger text-xl"></i>
                </span>
                    <span class="mr-2 text-sm"> مقالات آموزشی </span>
                </a>
            </div>
            <div>
                <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                <a
                    href="#"
                    class="flex items-center py-2 dark:text-red-400 text-red-500 transition-colors rounded-md dark:text-light"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <span aria-hidden="true">
                    <i class="zmdi zmdi-youtube-play text-xl"></i>
                </span>
                    <span class="mr-2 text-sm"> کانال یوتیوب </span>
                </a>
            </div>
        </div>

    </div>
</section>
<section @click="closeSideBar"
         x-show="isSettingsPanelOpen"
         class="fixed inset-y-0 right-0 w-full z-0 bg-gray-500 opacity-70 z-0 border-l border-indigo-100 ">
    <div class="px-4 py-8">
    </div>
</section>
