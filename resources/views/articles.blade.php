@extends('layouts.main')

@section('content')
    {{--
        <div class="overflow-x-hidden">

            <div class="px-6 py-8">
                <div class="flex justify-between container mx-auto">
                    <div class="w-full lg:w-8/12">
                        <div class="flex items-center justify-between">
                            <h1 class="text-xl font-bold text-gray-100 md:text-2xl">مقالات</h1>
                            <div class="lg:ml-20">
                                <div class="lg:ml-12">
                                    <select
                                        class="w-full bg-gray-700 rounded-md border border-gray-100 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option>آخرین مقالات</option>
                                        <option>هفته قبل</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div
                                class="max-w-4xl px-10 py-6 bg-gray-800 rounded-lg shadow-lg transition duration-500 ease-in-out  hover:bg-gray-600 md:transform hover:-translate-y-1 hover:scale-100 ">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-50"> ۲۹ بهمن ۱۳۹۹</span><a
                                        href="#"
                                        class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                                </div>
                                <div class="mt-2"><a href="#" class="text-2xl text-white font-bold hover:underline">جاوااسکریپت
                                        رو با کوئیز یاد بگیریم</a>
                                    <p class="mt-3 text-gray-200">با مجموعه‌ای از کوئیزهای جاوااسکریپت، می‌خوایم این زبان رو
                                        بهتر یاد بگیریم و با نکته‌های کاربردی بیشتری آشنا بشیم. این فرصت خوبیه
                                        تا دانشی که از جاوااسکریپت داریم رو بسنجیم.</p>
                                </div>
                                <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                       class="text-blue-500 hover:underline">ادامه
                                        مطلب</a>
                                    <div><a href="#" class="flex items-center"><img
                                                src="/assets/Logos/profile.png"
                                                alt="avatar"
                                                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                            <h1 class="text-gray-200 font-bold hover:underline">محمد مهدی غیبی</h1>
                                        </a></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div
                                class="max-w-4xl px-10 py-6 bg-gray-800 rounded-lg shadow-lg transition duration-500 ease-in-out  hover:bg-gray-600 md:transform hover:-translate-y-1 hover:scale-100 ">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-50"> ۲۹ بهمن ۱۳۹۹</span><a
                                        href="#"
                                        class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                                </div>
                                <div class="mt-2"><a href="#" class="text-2xl text-white font-bold hover:underline">جاوااسکریپت
                                        رو با کوئیز یاد بگیریم</a>
                                    <p class="mt-3 text-gray-200">با مجموعه‌ای از کوئیزهای جاوااسکریپت، می‌خوایم این زبان رو
                                        بهتر یاد بگیریم و با نکته‌های کاربردی بیشتری آشنا بشیم. این فرصت خوبیه
                                        تا دانشی که از جاوااسکریپت داریم رو بسنجیم.</p>
                                </div>
                                <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                       class="text-blue-500 hover:underline">ادامه
                                        مطلب</a>
                                    <div><a href="#" class="flex items-center"><img
                                                src="/assets/Logos/profile.png"
                                                alt="avatar"
                                                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                            <h1 class="text-gray-200 font-bold hover:underline">محمد مهدی غیبی</h1>
                                        </a></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div
                                class="max-w-4xl px-10 py-6 bg-gray-800 rounded-lg shadow-lg transition duration-500 ease-in-out  hover:bg-gray-600 md:transform hover:-translate-y-1 hover:scale-100 ">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-50"> ۲۹ بهمن ۱۳۹۹</span><a
                                        href="#"
                                        class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                                </div>
                                <div class="mt-2"><a href="#" class="text-2xl text-white font-bold hover:underline">جاوااسکریپت
                                        رو با کوئیز یاد بگیریم</a>
                                    <p class="mt-3 text-gray-200">با مجموعه‌ای از کوئیزهای جاوااسکریپت، می‌خوایم این زبان رو
                                        بهتر یاد بگیریم و با نکته‌های کاربردی بیشتری آشنا بشیم. این فرصت خوبیه
                                        تا دانشی که از جاوااسکریپت داریم رو بسنجیم.</p>
                                </div>
                                <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                       class="text-blue-500 hover:underline">ادامه
                                        مطلب</a>
                                    <div><a href="#" class="flex items-center"><img
                                                src="/assets/Logos/profile.png"
                                                alt="avatar"
                                                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                            <h1 class="text-gray-200 font-bold hover:underline">محمد مهدی غیبی</h1>
                                        </a></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div
                                class="max-w-4xl px-10 py-6 bg-gray-800 rounded-lg shadow-lg transition duration-500 ease-in-out  hover:bg-gray-600 md:transform hover:-translate-y-1 hover:scale-100 ">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-50"> ۲۹ بهمن ۱۳۹۹</span><a
                                        href="#"
                                        class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                                </div>
                                <div class="mt-2"><a href="#" class="text-2xl text-white font-bold hover:underline">جاوااسکریپت
                                        رو با کوئیز یاد بگیریم</a>
                                    <p class="mt-3 text-gray-200">با مجموعه‌ای از کوئیزهای جاوااسکریپت، می‌خوایم این زبان رو
                                        بهتر یاد بگیریم و با نکته‌های کاربردی بیشتری آشنا بشیم. این فرصت خوبیه
                                        تا دانشی که از جاوااسکریپت داریم رو بسنجیم.</p>
                                </div>
                                <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                       class="text-blue-500 hover:underline">ادامه
                                        مطلب</a>
                                    <div><a href="#" class="flex items-center"><img
                                                src="/assets/Logos/profile.png"
                                                alt="avatar"
                                                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                            <h1 class="text-gray-200 font-bold hover:underline">محمد مهدی غیبی</h1>
                                        </a></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex">
                                <a href="#"
                                   class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                                    قبلی
                                </a>

                                <a href="#"
                                   class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                                    1
                                </a>

                                <a href="#"
                                   class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                                    2
                                </a>

                                <a href="#"
                                   class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                                    3
                                </a>

                                <a href="#"
                                   class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                                    بعدی
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-8 w-4/12 hidden lg:block">
                        <div class="px-8">
                            <h1 class="mb-4 text-xl font-bold lg:mr-8 text-gray-100">دسته بندی ها</h1>
                            <div class="flex flex-col bg-gray-800 max-w-sm px-6 py-4 mx-auto rounded-lg shadow-xl">
                                <ul class="-mx-4">
                                    <li class="flex items-center"><img
                                            src="/assets/icon/javascript.svg"
                                            alt="avatar" class="w-10 h-10 object-cover  mx-4">
                                        <p><a href="#" class="text-gray-100 font-bold mx-1 hover:underline">JavaScript</a><span
                                                class="text-gray-100 text-sm font-light"></span></p>
                                    </li>
                                    <li class="flex items-center mt-6"><img
                                            src="/assets/icon/php.svg"
                                            alt="avatar" class="w-10 h-10 object-cover  mx-4">
                                        <p><a href="#" class="text-gray-100 font-bold mx-1 hover:underline">PHP</a><span
                                                class="text-gray-100 text-sm font-light"></span></p>
                                    </li>
                                    <li class="flex items-center mt-6"><img
                                            src="/assets/icon/vuejs.svg"
                                            alt="avatar" class="w-10 h-10 object-cover  mx-4">
                                        <p><a href="#" class="text-gray-100 font-bold mx-1 hover:underline">Vue.js</a><span
                                                class="text-gray-100 text-sm font-light"></span></p>
                                    </li>
                                    <li class="flex items-center mt-6"><img
                                            src="/assets/icon/tailwind.svg"
                                            alt="avatar" class="w-10 h-10 object-cover  mx-4">
                                        <p><a href="#" class="text-gray-100 font-bold mx-1 hover:underline">TailWind Css</a><span
                                                class="text-gray-100 text-sm font-light"></span></p>
                                    </li>
                                    <li class="flex items-center mt-6"><img
                                            src="/assets/icon/python.svg"
                                            alt="avatar" class="w-10 h-10 object-cover  mx-4">
                                        <p><a href="#" class="text-gray-100 font-bold mx-1 hover:underline">Python</a><span
                                                class="text-gray-700 text-sm font-light"></span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    --}}
    <section class="text-gray-400 dark:bg-gray-900 transition duration-300 ease-in-out body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4  md:w-1/3">
                    <div class="h-full border-2 dark:border-gray-800 transition duration-300 ease-in-out rounded-lg shadow-lg overflow-hidden">
                        <img class="lg:h-56 md:h-36 w-full object-cover object-center" src="/assets/Logos/photo.jpg"
                             alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font transition duration-300 ease-in-out font-medium dark:text-gray-400 text-gray-600 mb-1">
                                JavaScript</h2>
                            <h1 class="title-font text-lg font-medium transition duration-300 ease-in-out hover:text-blue-400 dark:text-white text-gray-700 cursor-pointer mb-3">آموزش جاوااسکریپت</h1>
                            <p class="leading-relaxed text-gray-600 transition duration-300 ease-in-out dark:text-gray-300 mb-3">با مجموعه‌ای از کوئیزهای جاوااسکریپت، می‌خوایم این زبان رو
                                بهتر یاد بگیریم و با نکته‌های کاربردی بیشتری آشنا بشیم.</p>
                            <div class="flex transition duration-300 ease-in-out items-center flex-wrap cursor-pointer">
                                <a class="text-blue-400 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                    ادامه مطلب
                                </a>
                                <span
                                    class="text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>&nbsp; 1.2K &nbsp;
              </span>
                                <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" viewBox="0 0 24 24">
                  <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>&nbsp; 6 &nbsp;
              </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
