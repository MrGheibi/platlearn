@extends('layouts.main')

@section('content')
    <div class="container pt-10" id="series-page">
        <div class="flex justify-between items-center flex-wrap mb-5 pt-2">
            <h1 class="text-2xl font-bold dark:text-gray-100 text-gray-600 block">دوره‌های آموزشی</h1>
            <div class="flex items-center space-x-4 space-x-reverse">
                <a href="/series" class="hover:underline dark:text-gray-100 text-gray-700 font-bold underline">مسیر یادگیری</a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-4 md:space-x-reverse">
            <div class="w-12/12 mb-4 md:mb-0 md:w-3/12 space-y-3">
                <div class="py-6 px-2 shadow rounded-2xl bg-white dark:bg-gray-800 space-y-4">
                    <div class="pb-4 mx-4 border-b border-solid dark:border-gray-500 border-opacity-10">
                        <span class="text-lg font-bold dark:text-gray-100 text-gray-800">نوع دوره</span>
                    </div>
                    <div class="px-4 space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="w-4 h-4" type="checkbox" name="type" value="free">
                                <span class="font-medium text-gray-800 dark:text-gray-100">رایگان</span>
                            </label>
                            <span class="text-sm bg-gray-200 p-1 rounded-md text-gray-500">۱۵</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="w-4 h-4" type="checkbox" name="type" value="vip">
                                <span class="font-medium text-gray-800 dark:text-gray-100">فقط نقدی</span>
                            </label>
                            <span class="text-sm bg-gray-200 p-1 rounded-md text-gray-500">۱۲</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="w-4 h-4" type="checkbox" name="type" value="ovip">
                                <span class="font-medium text-gray-800 dark:text-gray-100"> نقدی و اعضای ویژه</span>
                            </label>
                            <span class="text-sm bg-gray-200 p-1 rounded-md text-gray-500">۳۳</span>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-2 shadow rounded-2xl bg-white dark:bg-gray-800 space-y-4">
                    <div class="pb-4 mx-4 border-b border-solid dark:border-gray-500 border-opacity-10">
                        <span class="text-lg font-bold text-gray-800 dark:text-gray-100">مرتب‌سازی بر اساس</span>
                    </div>
                    <div class="px-4 space-y-3">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio"  name="order" value="latest">
                                <span class="font-medium text-gray-800 dark:text-gray-100">جدید‌ترین</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" name="order" value="uncomplete">
                                <span class="font-medium text-gray-800 dark:text-gray-100">در حال برگزاری</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="complete" name="order">
                                <span class="font-medium text-gray-800 dark:text-gray-100">تکمیل ضبط‌ شده‌ها</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="deaf" name="order">
                                <span class="font-medium text-gray-800 dark:text-gray-100">مخصوص ناشنوایان</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="learning" name="order">
                                <span class="font-medium text-gray-800 dark:text-gray-100">دوره‌های خریداری شده</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-2 shadow rounded-2xl bg-white dark:bg-gray-800 space-y-4">
                    <div class="pb-4 mx-4 border-b border-solid dark:border-gray-500 border-opacity-10">
                        <span class="text-lg font-bold">دسته دوره</span>
                    </div>
                    <div class="px-4 space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.24" value="لاراول ">
                                <span class="font-medium text-gray-800 dark:text-gray-100">لاراول </span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.29" value="کاربردی">
                                <span class="font-medium text-gray-800 dark:text-gray-100">کاربردی</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.32" value="php">
                                <span class="font-medium text-gray-800 dark:text-gray-100">php</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.33" value="وردپرس">
                                <span class="font-medium text-gray-800 dark:text-gray-100">وردپرس</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.34" value="جاوا">
                                <span class="font-medium text-gray-800 dark:text-gray-100">جاوا</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.35" value="جاوااسکریپت">
                                <span class="font-medium text-gray-800 dark:text-gray-100">جاوااسکریپت</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.36" value="اندروید">
                                <span class="font-medium text-gray-800 dark:text-gray-100">اندروید</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.47" value="پایتون">
                                <span class="font-medium text-gray-800 dark:text-gray-100">پایتون</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 space-x-reverse">
                                <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.53" value="طراحی وب">
                                <span class="font-medium text-gray-800 dark:text-gray-100">طراحی وب</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-12/12 md:w-9/12">
                <div class="relative">
                    {{--<div wire:loading.flex="" class="absolute h-full w-full z-10">
                    </div>--}}
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 grid-flow-row gap-4">
                        <div>
                            <div class="m-auto  duration-300 ease-in max-w-xl ">
                                <div class="dark:bg-gray-800  bg-white shadow-lg rounded-2xl">
                                    <div class="mx-2 pt-2 relative">
                                <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                                    <div class="flex items-center space-x-2 space-x-reverse">
                                        <span class="">
                                            <i class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none
                                             zmdi zmdi-notifications-active text-white opacity-90 text-2xl"></i>
                                        </span>
                                    </div>
                                </span>
                                        <span class="absolute mt-4 top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                        <img class="rounded-xl" src="https://static.roocket.ir/public/images/2019/10/22/laravel-2.png">
                                    </div>
                                    <div class="px-4 py-2 duration-300 ease-in text-gray-700">
                                        <h2 class="font-bold text-xl dark:text-white mt-2 cursor-pointer
                            transition duration-300 ease-in-out
                            hover:text-blue-500 dark:hover:text-blue-400">آموزش
                                            لاراول</h2>
                                        <p class="text-sm text-gray-500 dark:text-gray-200 my-3 dark:opacity-50 opacity-85 ">
                                            در دوره آموزش php ما سعی می‌کنیم php را به شکل جامع و کاملا رایگان به شما آموزش دهیم.
                                        </p>

                                        <div class="text-gray-200 mt-5 border-b-2 pb-5 border-gray-300 dark:border-gray-600">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5 text-gray-600 dark:text-gray-200">
                                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                        </svg>  &nbsp;  <span class="text-gray-600 dark:text-gray-200">۰۳:۰۸:۲۴</span>
                                                    </div>
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer text-gray-600 dark:text-gray-200">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>
                                                        <span ref="likecount" class="font-bold text-gray-600 dark:text-gray-200">۱۴۷</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="text-gray-200 rounded-lg py-4 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <img class="w-10 h-10 sm:w-7 sm:h-7 object-cover rounded-full shadow"
                                                                 src="/assets/Logos/profile.png"
                                                                 alt="avatar">
                                                            <a href="https://twitter.com/GressierCosme1" target="_blank"
                                                               class="mr-2 text-sm text-gray-600 dark:text-gray-200 transition duration-300
                                   ease-in-out hover:text-blue-500 dark:hover:text-blue-400">محمد
                                                                مهدی غیبی</a>
                                                        </div>


                                                    </div>
                                                    <span class="font-bold text-tiny text-gray-600 dark:text-gray-200">۷۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="m-auto  duration-300 ease-in max-w-xl ">
                                <div class="dark:bg-gray-800  bg-white shadow-lg rounded-2xl">
                                    <div class="mx-2 pt-2 relative">
                                <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                                    <div class="flex items-center space-x-2 space-x-reverse">
                                        <span class="">
                                            <i class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none
                                             zmdi zmdi-notifications-active text-white opacity-90 text-2xl"></i>
                                        </span>
                                    </div>
                                </span>
                                        <span class="absolute mt-4 top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                        <img class="rounded-xl" src="https://static.roocket.ir/public/images/2020/9/20/livewire.jpg">
                                    </div>
                                    <div class="px-4 py-2 duration-300 ease-in text-gray-700">
                                        <h2 class="font-bold text-xl dark:text-white mt-2 cursor-pointer
                            transition duration-300 ease-in-out
                            hover:text-blue-500 dark:hover:text-blue-400">آموزش
                                            لاراول</h2>
                                        <p class="text-sm text-gray-500 dark:text-gray-200 my-3 dark:opacity-50 opacity-85 ">
                                            در دوره آموزش php ما سعی می‌کنیم php را به شکل جامع و کاملا رایگان به شما آموزش دهیم.
                                        </p>

                                        <div class="text-gray-200 mt-5 border-b-2 pb-5 border-gray-300 dark:border-gray-600">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5 text-gray-600 dark:text-gray-200">
                                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                        </svg>  &nbsp;  <span class="text-gray-600 dark:text-gray-200">۰۳:۰۸:۲۴</span>
                                                    </div>
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer text-gray-600 dark:text-gray-200">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>                                                                 <span ref="likecount" class="font-bold text-gray-600 dark:text-gray-200">۱۴۷</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="text-gray-200 rounded-lg py-4 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <img class="w-10 h-10 sm:w-7 sm:h-7 object-cover rounded-full shadow"
                                                                 src="/assets/Logos/profile.png"
                                                                 alt="avatar">
                                                            <a href="https://twitter.com/GressierCosme1" target="_blank"
                                                               class="mr-2 text-sm text-gray-600 dark:text-gray-200 transition duration-300
                                   ease-in-out hover:text-blue-500 dark:hover:text-blue-400">محمد
                                                                مهدی غیبی</a>
                                                        </div>


                                                    </div>
                                                    <span class="font-bold text-tiny text-gray-600 dark:text-gray-200">۷۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="m-auto  duration-300 ease-in max-w-xl ">
                                <div class="dark:bg-gray-800  bg-white shadow-lg rounded-2xl">
                                    <div class="mx-2 pt-2 relative">
                                <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                                    <div class="flex items-center space-x-2 space-x-reverse">
                                        <span class="">
                                            <i class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none
                                             zmdi zmdi-notifications-active text-white opacity-90 text-2xl"></i>
                                        </span>
                                    </div>
                                </span>
                                        <span class="absolute mt-4 top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                        <img class="rounded-xl" src="https://static.roocket.ir/public/images/2020/4/28/node.png">
                                    </div>
                                    <div class="px-4 py-2 duration-300 ease-in text-gray-700">
                                        <h2 class="font-bold text-xl dark:text-white mt-2 cursor-pointer
                            transition duration-300 ease-in-out
                            hover:text-blue-500 dark:hover:text-blue-400">آموزش
                                            لاراول</h2>
                                        <p class="text-sm text-gray-500 dark:text-gray-200 my-3 dark:opacity-50 opacity-85 ">
                                            در دوره آموزش php ما سعی می‌کنیم php را به شکل جامع و کاملا رایگان به شما آموزش دهیم.
                                        </p>

                                        <div class="text-gray-200 mt-5 border-b-2 pb-5 border-gray-300 dark:border-gray-600">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5 text-gray-600 dark:text-gray-200">
                                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                        </svg>  &nbsp;  <span class="text-gray-600 dark:text-gray-200">۰۳:۰۸:۲۴</span>
                                                    </div>
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer text-gray-600 dark:text-gray-200">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>                                                                 <span ref="likecount" class="font-bold text-gray-600 dark:text-gray-200">۱۴۷</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="text-gray-200 rounded-lg py-4 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <img class="w-10 h-10 sm:w-7 sm:h-7 object-cover rounded-full shadow"
                                                                 src="/assets/Logos/profile.png"
                                                                 alt="avatar">
                                                            <a href="https://twitter.com/GressierCosme1" target="_blank"
                                                               class="mr-2 text-sm text-gray-600 dark:text-gray-200 transition duration-300
                                   ease-in-out hover:text-blue-500 dark:hover:text-blue-400">محمد
                                                                مهدی غیبی</a>
                                                        </div>


                                                    </div>
                                                    <span class="font-bold text-tiny text-gray-600 dark:text-gray-200">۷۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="m-auto  duration-300 ease-in max-w-xl ">
                                <div class="dark:bg-gray-800  bg-white shadow-lg rounded-2xl">
                                    <div class="mx-2 pt-2 relative">
                                <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                                    <div class="flex items-center space-x-2 space-x-reverse">
                                        <span class="">
                                            <i class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none
                                             zmdi zmdi-notifications-active text-white opacity-90 text-2xl"></i>
                                        </span>
                                    </div>
                                </span>
                                        <span class="absolute mt-4 top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                        <img class="rounded-xl" src="https://static.roocket.ir/public/images/2020/1/29/laravel-projects-2.png">
                                    </div>
                                    <div class="px-4 py-2 duration-300 ease-in text-gray-700">
                                        <h2 class="font-bold text-xl dark:text-white mt-2 cursor-pointer
                            transition duration-300 ease-in-out
                            hover:text-blue-500 dark:hover:text-blue-400">آموزش
                                            لاراول</h2>
                                        <p class="text-sm text-gray-500 dark:text-gray-200 my-3 dark:opacity-50 opacity-85 ">
                                            در دوره آموزش php ما سعی می‌کنیم php را به شکل جامع و کاملا رایگان به شما آموزش دهیم.
                                        </p>

                                        <div class="text-gray-200 mt-5 border-b-2 pb-5 border-gray-300 dark:border-gray-600">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5 text-gray-600 dark:text-gray-200">
                                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                        </svg>  &nbsp;  <span class="text-gray-600 dark:text-gray-200">۰۳:۰۸:۲۴</span>
                                                    </div>
                                                    <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                        <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer text-gray-600 dark:text-gray-200">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>                                                                 <span ref="likecount" class="font-bold text-gray-600 dark:text-gray-200">۱۴۷</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="text-gray-200 rounded-lg py-4 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <img class="w-10 h-10 sm:w-7 sm:h-7 object-cover rounded-full shadow"
                                                                 src="/assets/Logos/profile.png"
                                                                 alt="avatar">
                                                            <a href="https://twitter.com/GressierCosme1" target="_blank"
                                                               class="mr-2 text-sm text-gray-600 dark:text-gray-200 transition duration-300
                                   ease-in-out hover:text-blue-500 dark:hover:text-blue-400">محمد
                                                                مهدی غیبی</a>
                                                        </div>


                                                    </div>
                                                    <span class="font-bold text-tiny text-gray-600 dark:text-gray-200">۷۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-4">
                        <ul class="relative z-0 inline-flex hidden md:flex flex-row my-4 rounded-lg flex-wrap">

                            <li class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-300 hover:text-gray-400 transition ease-in-out duration-150">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </li>





                            <li class="bg-gray-100 -ml-px relative inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"><span>۱</span></li>
                            <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(2)">۲</a></li>
                            <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(3)">۳</a></li>
                            <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(4)">۴</a></li>
                            <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(5)">۵</a></li>



                            <li>
                                <a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-400 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click.prevent="nextPage" rel="next">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="flex-1 flex justify-between md:hidden mt-2">
                            <a href="#series-page" wire:click.prevent="previousPage" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 opacity-50 cursor-auto">
                                صفحه قبل
                            </a>
                            <a href="#series-page" wire:click.prevent="nextPage" class="mr-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 ">
                                صفحه بعد
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   {{-- <div class="bg-gray-200 pt-3 py-6">
        <div class="container" id="series-page">
            <div class="flex justify-between items-center flex-wrap mb-5 pt-2">
                <h1 class="text-2xl font-bold text-gray-600 block">دوره‌های آموزشی</h1>
                <div class="flex items-center space-x-4 space-x-reverse">
                    <a href="/series" class="hover:underline font-bold underline">دوره های جاری</a>
                    <a href="/series?archived=1" class="hover:underline ">آرشیو شده</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4 md:space-x-reverse">
                <div class="w-12/12 mb-4 md:mb-0 md:w-3/12 space-y-3">
                    <div class="py-6 px-2 shadow rounded-lg bg-white space-y-4">
                        <div class="pb-4 mx-4 border-b border-solid border-gray-800 border-opacity-10">
                            <span class="text-lg font-bold">نوع دوره</span>
                        </div>
                        <div class="px-4 space-y-2">
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="type" wire:model="type.1" value="free">
                                    <span class="font-medium">رایگان</span>
                                </label>
                                <span class="text-sm text-gray-400">۱۵</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="type" wire:model="type.2" value="vip">
                                    <span class="font-medium">فقط نقدی</span>
                                </label>
                                <span class="text-sm text-gray-400">۱۲</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="type" wire:model="type.3" value="ovip">
                                    <span class="font-medium"> نقدی و اعضای ویژه</span>
                                </label>
                                <span class="text-sm text-gray-400">۳۳</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-2 shadow rounded-lg bg-white space-y-4">
                        <div class="pb-4 mx-4 border-b border-solid border-gray-800 border-opacity-10">
                            <span class="text-lg font-bold">مرتب‌سازی بر اساس</span>
                        </div>
                        <div class="px-4 space-y-3">
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" name="order" value="latest">
                                    <span class="font-medium">جدید‌ترین</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" name="order" value="uncomplete">
                                    <span class="font-medium">در حال برگزاری</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="complete" name="order">
                                    <span class="font-medium">تکمیل ضبط‌ شده‌ها</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="deaf" name="order">
                                    <span class="font-medium">مخصوص ناشنوایان</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="learning" name="order">
                                    <span class="font-medium">دوره‌های خریداری شده</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="followed" name="order">
                                    <span class="font-medium">دوره‌های دنبال شده</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="watching" name="order">
                                    <span class="font-medium">در حال مشاهده</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" value="done" name="order">
                                    <span class="font-medium">کامل مشاهده شده</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-radio w-4 h-4 rounded-full border border-gray-300 bg-gray-100" type="radio" wire:model="order" name="order" value="oldest">
                                    <span class="font-medium">قدیمی‌ترین</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-2 shadow rounded-lg bg-white space-y-4">
                        <div class="pb-4 mx-4 border-b border-solid border-gray-800 border-opacity-10">
                            <span class="text-lg font-bold">دسته دوره</span>
                        </div>
                        <div class="px-4 space-y-2">
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.24" value="لاراول ">
                                    <span class="font-medium">لاراول </span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.29" value="کاربردی">
                                    <span class="font-medium">کاربردی</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.32" value="php">
                                    <span class="font-medium">php</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.33" value="وردپرس">
                                    <span class="font-medium">وردپرس</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.34" value="جاوا">
                                    <span class="font-medium">جاوا</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.35" value="جاوااسکریپت">
                                    <span class="font-medium">جاوااسکریپت</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.36" value="اندروید">
                                    <span class="font-medium">اندروید</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.47" value="پایتون">
                                    <span class="font-medium">پایتون</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2 space-x-reverse">
                                    <input class="form-checkbox w-4 h-4 rounded border border-gray-300 bg-gray-100" type="checkbox" name="category" wire:model="category.53" value="طراحی وب">
                                    <span class="font-medium">طراحی وب</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-3 pl-5 shadow rounded-lg bg-white flex">
                        <div class="text-emerald-500 ml-2 hidden xl:block">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="10 0 45 55" class="w-16">
                                <title>i</title>
                                <path fill="currentColor" stroke="currentColor" stroke-width="2" d="M42.25,20.57a9.75,9.75,0,1,0-9.75,9.76A9.76,9.76,0,0,0,42.25,20.57ZM32.5,29.36a8.79,8.79,0,1,1,8.79-8.79A8.8,8.8,0,0,1,32.5,29.36Z"></path>
                                <path fill="currentColor" stroke="currentColor" stroke-width="2" d="M48.59,45.59l-6.35-14a2.75,2.75,0,0,1,.51-.81A4.34,4.34,0,0,1,44.24,30,4,4,0,0,0,46.4,28.6,4,4,0,0,0,46.57,26a4.32,4.32,0,0,1-.06-1.7,4.44,4.44,0,0,1,.87-1.39,4,4,0,0,0,1.16-2.37,4,4,0,0,0-1.16-2.37,4.29,4.29,0,0,1-.87-1.38,4.37,4.37,0,0,1,.06-1.71,4,4,0,0,0-.17-2.56,4,4,0,0,0-2.16-1.45,4.52,4.52,0,0,1-1.49-.78A4.46,4.46,0,0,1,42,8.84a3.91,3.91,0,0,0-1.45-2.16,2.37,2.37,0,0,0-1.27-.3A7.94,7.94,0,0,0,38,6.51a8.5,8.5,0,0,1-1.17.11,2.23,2.23,0,0,1-.54-.06,4.13,4.13,0,0,1-1.38-.87A4,4,0,0,0,32.5,4.53a4,4,0,0,0-2.37,1.16,4.23,4.23,0,0,1-1.38.87,2.23,2.23,0,0,1-.54.06A8.5,8.5,0,0,1,27,6.51a7.94,7.94,0,0,0-1.29-.13,2.37,2.37,0,0,0-1.27.3A3.91,3.91,0,0,0,23,8.84a4.46,4.46,0,0,1-.78,1.48,4.52,4.52,0,0,1-1.49.78,4,4,0,0,0-2.16,1.45,3.91,3.91,0,0,0-.17,2.56,4.37,4.37,0,0,1,.06,1.71,4.29,4.29,0,0,1-.87,1.38,4,4,0,0,0-1.16,2.37,4,4,0,0,0,1.16,2.37,4.44,4.44,0,0,1,.87,1.39,4.32,4.32,0,0,1-.06,1.7,3.94,3.94,0,0,0,.17,2.57A4,4,0,0,0,20.76,30a4.34,4.34,0,0,1,1.49.79,2.74,2.74,0,0,1,.53.86l-6.37,13.9a.5.5,0,0,0,.05.49.5.5,0,0,0,.45.19l5.6-.73,3.11,4.72a.49.49,0,0,0,.4.21h0a.49.49,0,0,0,.4-.28l6-13.2,6,13.2a.47.47,0,0,0,.4.28h0a.49.49,0,0,0,.4-.21l3.11-4.72,5.6.73a.5.5,0,0,0,.45-.19A.5.5,0,0,0,48.59,45.59ZM25.94,49l-2.79-4.24a.48.48,0,0,0-.47-.21l-5,.65,5.63-12.29a3.08,3.08,0,0,0,1.2,1.56,2.46,2.46,0,0,0,1.27.3A9.24,9.24,0,0,0,27,34.64a8.6,8.6,0,0,1,1.17-.12,2.23,2.23,0,0,1,.54.06,4.59,4.59,0,0,1,1.38.87,5.81,5.81,0,0,0,1.55,1ZM32.5,35.65a3.34,3.34,0,0,1-1.77-.95A5.07,5.07,0,0,0,29,33.65a3.1,3.1,0,0,0-.78-.09,8.19,8.19,0,0,0-1.31.13,8.23,8.23,0,0,1-1.15.11,1.58,1.58,0,0,1-.79-.16,3.27,3.27,0,0,1-1-1.68,5.36,5.36,0,0,0-1-1.82,5.41,5.41,0,0,0-1.81-1,3.23,3.23,0,0,1-1.68-1,3.19,3.19,0,0,1-.05-1.94,5.26,5.26,0,0,0,0-2.09,5.07,5.07,0,0,0-1.05-1.74,3.27,3.27,0,0,1-.95-1.77,3.28,3.28,0,0,1,.95-1.76,5.26,5.26,0,0,0,1.05-1.74,5.32,5.32,0,0,0,0-2.1A3.2,3.2,0,0,1,19.44,13a3.23,3.23,0,0,1,1.68-1,5.24,5.24,0,0,0,1.81-1,5.22,5.22,0,0,0,1-1.81,3.27,3.27,0,0,1,1-1.68,1.57,1.57,0,0,1,.79-.17,8.33,8.33,0,0,1,1.15.12,9.53,9.53,0,0,0,1.31.13,2.68,2.68,0,0,0,.78-.1,4.92,4.92,0,0,0,1.74-1,3.34,3.34,0,0,1,1.77-1,3.34,3.34,0,0,1,1.77,1,4.92,4.92,0,0,0,1.74,1,2.68,2.68,0,0,0,.78.1,9.53,9.53,0,0,0,1.31-.13,8.33,8.33,0,0,1,1.15-.12,1.57,1.57,0,0,1,.79.17,3.27,3.27,0,0,1,1,1.68,5.22,5.22,0,0,0,1,1.81,5.24,5.24,0,0,0,1.81,1,3.23,3.23,0,0,1,1.68,1,3.2,3.2,0,0,1,0,1.94,5.32,5.32,0,0,0,0,2.1,5.26,5.26,0,0,0,1.05,1.74,3.28,3.28,0,0,1,.95,1.76,3.27,3.27,0,0,1-.95,1.77,5.07,5.07,0,0,0-1.05,1.74,5.26,5.26,0,0,0,0,2.09,3.19,3.19,0,0,1,0,1.94,3.23,3.23,0,0,1-1.68,1,5.41,5.41,0,0,0-1.81,1,5.36,5.36,0,0,0-1,1.82,3.27,3.27,0,0,1-1,1.68,1.58,1.58,0,0,1-.79.16,8.23,8.23,0,0,1-1.15-.11,8.19,8.19,0,0,0-1.31-.13,3.1,3.1,0,0,0-.78.09,5.07,5.07,0,0,0-1.74,1.05A3.34,3.34,0,0,1,32.5,35.65Zm9.82,8.9a.48.48,0,0,0-.47.21L39.06,49,33.32,36.46a5.81,5.81,0,0,0,1.55-1,4.48,4.48,0,0,1,1.38-.87,2.23,2.23,0,0,1,.54-.06,8.6,8.6,0,0,1,1.17.12,9.24,9.24,0,0,0,1.29.13,2.46,2.46,0,0,0,1.27-.3,3.09,3.09,0,0,0,1.22-1.61L47.35,45.2Z"></path>
                                <path fill="currentColor" stroke="currentColor" stroke-width="2" d="M38.7,17.13a.47.47,0,0,0-.67-.07L30.2,23.51,27.14,20a.48.48,0,0,0-.68-.05.49.49,0,0,0-.05.68l3.37,3.85a.5.5,0,0,0,.37.17.5.5,0,0,0,.3-.11l8.19-6.75A.48.48,0,0,0,38.7,17.13Z"></path>
                            </svg>    </div>
                        <div class="space-y-2 leading-relaxed">
                            <h3 class="text-lg font-bold">گواهی پایان دوره</h3>
                            <p class="text-tiny">شما می‌توانید در پایان هر دوره از راکت گواهی پایان دوره به همراه گواهی تاییدیه فنی دریافت کنید، برای مطالعه جزئیات بیشتر به صفحه زیر مراجعه کنید.
                                <a href="https://roocket.ir/certifications/what-is-certification" class="flex font-bold text-emerald-500 hover:underline hover:text-emerald-600 mt-2">گواهی پایان دوره چیست؟</a>
                            </p>
                        </div>
                    </div>                </div>
                <div class="w-12/12 md:w-9/12">
                    <div class="relative">
                        <div wire:loading.flex="" class="absolute h-full w-full z-10">
                            <div class="w-full h-full flex absolute items-start justify-center bg-gray-800 bg-opacity-40 z-20 rounded-lg">
                                <svg class="animate-spin mt-5 h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>    </div>
                        </div>                                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-flow-row gap-4">
                            <div wire:id="tSmVd3j0J2ct3h8n78Iq">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="H0X3X2L5rj71FeDN4a8v" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2021/3/2/mysq-cover-1" alt="آموزش mysql" src="https://static.roocket.ir/public/images/2021/3/2/mysq-cover-1" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-mysql"><span>آموزش mysql</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش mysql به شکل کامل از سطح مقدماتی تا پیشرفته کار با پایگاه داده mysql را به شما آموزش می‌دهیم تا شما بتوانید به سادگی با آن کار کنید.
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۸:۲۳:۵۶</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۲۵</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۲۰۰,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="LAmDyQfDPDseCaQhocJb">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="lXZeo3pmQ7smA8bP3j7l" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/12/21/php-8" alt="آموزش php 8" src="https://static.roocket.ir/public/images/2020/12/21/php-8" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-php-8"><span>آموزش php ۸</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش php ۸ سعی کرده‌ایم شما را با تغییرات و ویژگی‌های جدید php ۸ به شکل کامل و کاربردی آشنا کنیم تا بتواین در پروژهای خود از php ۸ استفاده کن...
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۱:۵۲:۲۷</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۶۶</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۸۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="PXHRFJ5yWvJR8uvCAOkk">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="CQqlqWEqQ7SpQiiVb9Af" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/image/2017/6/13/sass-cover-2.jpg" alt="آموزش کامل sass" src="https://static.roocket.ir/public/image/2017/6/13/sass-cover-2.jpg" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learning-sass"><span>آموزش کامل sass</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش sass ما قصد داریم کار با این زبان پیش پردازنده را که به css قابلیت‌های پیشرفته‌تری می‌دهد به شکل جامع و کامل به شما آموزش دهیم.
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۳:۰۸:۲۴</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۱۴۷</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۷۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="SBlR0mhla4AcTLYsB7Ch">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="Z3J5e7q2Zob2tmKL0vj4" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/9/25/php.jpg" alt="آموزش PHP" src="https://static.roocket.ir/public/images/2020/9/25/php.jpg" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learning-php"><span>آموزش PHP</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش php ما سعی می‌کنیم php را به شکل جامع و کاملا رایگان به شما آموزش دهیم تا با استفاده از php بتوانید سایت‌های خود را بسازید.
                                            </p>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۹:۱۲:۵۲</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۲۰۸</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class=" text-green-600 font-bold text-tiny">رایگان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="Lf0P0hluXk6WXcpJJADa">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="pjVwPhwVBR59OerDvLPc" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/9/20/livewire.jpg" alt="آموزش Livewire" src="https://static.roocket.ir/public/images/2020/9/20/livewire.jpg" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-livewire"><span>آموزش Livewire</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش livewire ما سعی داریم livewire که یک فریمورک laravel به حساب می‌آید را به شکل قدم به قدم و جامع به شما آموزش دهیم .
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-yellow-300 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۱۰:۱۰:۰۶</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۱۱۲</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۱۲۵,۰۰۰ تومان</span>
                                                </div>
                                                <div class="pt-3 mt-3 border-t border-solid border-gray-800 border-opacity-10 flex justify-between items-center text-tiny">
                                                    <span>میزان پیشرفت شما در دوره</span>
                                                    <span class="p-1 bg-gray-700 text-white rounded text-sm">۶ درصد</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="VLiyjTRNJZetSF3lKaaO">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="JRSwEjEkRSu6Z3LwT092" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/9/10/laravel-thum.jpg" alt="آشنایی با امکانات جدید لاراول 8" src="https://static.roocket.ir/public/images/2020/9/10/laravel-thum.jpg" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/whats-new-in-laravel-8"><span>آشنایی با امکانات جدید لاراول ۸</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                لاراول ۸ با تغییرات جدیدی ارائه شده که ما در دوره آشنایی با امکانات لاراول ۸ سعی داریم شما را با این امکانات جدید به شکل کامل آشنا کنیم
                                            </p>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۲:۳۱:۴۵</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۹۶</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class=" text-green-600 font-bold text-tiny">رایگان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="hBTgoI0ezm0nX8y9yVNM">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="AqLoupr5qhUazo2bwMRE" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/6/17/angular.png" alt="آموزش انگولار" src="https://static.roocket.ir/public/images/2020/6/17/angular.png" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-angular"><span>آموزش انگولار</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش انگولار ما سعی داریم به شما کمک کنیم angular را ساده و قدم به قدم به شکل کامل و با جزئیات یاد بگیرید.
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۱۲:۱۷:۲۲</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۶۲</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۱۲۵,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="FIV3Wxaxb0opQMPNdDOR">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="HuR7VqMI6TKGEHhK1VzP" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/5/1/next.png" alt="آموزش nextjs" src="https://static.roocket.ir/public/images/2020/5/1/next.png" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-nextjs"><span>آموزش nextjs</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                دوره آموزش nextjs به شما کمک می‌کند ssr را برای react به سادگی راه ‌اندازی کنید و یک وبسایت با سئو مناسب با react بوجود آورید.
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۴:۴۱:۴۲</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۷۹</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۹۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="iSFj8ALOb5fclAEBmtLB">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="r6N1bKJDygDtTLxxPHRV" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <div class="absolute top-0.5 left-0 ml-12 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-yellow-500">
                                                <path fill="currentColor" d="M415.99814,80.0021a7.297,7.297,0,0,0-3.68757-5.96246L362.669,53.338,341.96545,3.697a6.65746,6.65746,0,0,0-11.926,0L309.33591,53.338,259.69042,74.03964a6.66417,6.66417,0,0,0,0,11.92493l49.64549,20.69969,20.70353,49.643a6.65746,6.65746,0,0,0,11.926,0L362.669,106.66426l49.64159-20.69969A7.31629,7.31629,0,0,0,415.99814,80.0021Zm93.05649,139.2264L469.339,202.67109,452.7801,162.961a5.32533,5.32533,0,0,0-9.53925,0L426.678,202.67109l-39.7117,16.55741a5.33544,5.33544,0,0,0,0,9.54033L426.678,245.3282l16.56282,39.7081a5.32376,5.32376,0,0,0,9.53925,0L469.339,245.3282l39.71561-16.55937a5.33544,5.33544,0,0,0,0-9.54033Z" class="opacity-50"></path>
                                                <path fill="currentColor" d="M364.294,267.29343,259.4951,251.99764l-46.90716-95.19633c-8.39078-16.99879-32.68813-17.2019-41.18829,0l-46.90716,95.19633L19.69358,267.29343C.89634,269.99636-6.71318,293.19783,6.99021,306.49376l75.90772,73.99472L64.89758,485.07476c-3.20319,18.9049,16.68782,33.107,33.29752,24.2014l93.7987-49.3871,93.79869,49.3871A22.95361,22.95361,0,0,0,319.09,485.07476L301.199,380.48848l75.89209-73.99472C390.70077,293.19783,383.09125,269.99636,364.294,267.29343Z" class="fa-primary"></path>
                                            </svg>                </div>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/4/28/node.png" alt="آموزش node.js" src="https://static.roocket.ir/public/images/2020/4/28/node.png" data-loaded="true">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-node"><span>آموزش node.js</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آموزش node.js ( نود جی اس ) ما سعی می‌کنیم node.js را به شکل کاربردی و مفصل و به شکل عمیق به شما آموزش دهیم
                                            </p>
                                        </div>
                                        <div class="space-y-3 mr-3">
                                            <div class="text-sm text-red-600 font-medium flex items-center space-x-1 space-x-reverse">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>                            <span> دسترسی رایگان برای اعضای ویژه</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۷:۰۵:۰۸</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۱۱۶</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۹۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="OLm1H8qrME9KcJ9SibdM">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="VzhF05UnXI7xYCCJ5Ghv" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/3/4/1583305013laravel-poster-1.png" alt="آشنایی با امکانات جدید لاراول 7">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/whats-new-in-laravel-7"><span>آشنایی با امکانات جدید لاراول ۷</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                در دوره آشنایی با امکانات لاراول ۷ ما سعی می‌کنیم شما را با امکاناتی که در لاراول ۷ اضافه شده به شکل کامل به شکل رایگان آشنا کنیم
                                            </p>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۰۱:۵۰:۰۶</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۱۳۶</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class=" text-green-600 font-bold text-tiny">رایگان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="TzjSalRFmh9LXlb76mUJ">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="UVT3VoigQj5Nx9pxMACf" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class="opacity-40"></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2020/1/29/laravel-projects-2.png" alt="آموزش پروژه محور لاراول">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/laravel-projects"><span>آموزش پروژه محور لاراول</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                آموزش لاراول آن هم با پروژه در یک آموزش پروژه محور لاراول یک شانس برای یادگیری بهتر و کاربردی‌تر لاراول محسوب می‌شود که در این دوره قصد اینکار را داری...
                                            </p>
                                        </div>
                                        <div>
                                            <div class="bg-gray-50 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۳۶:۱۳:۳۱</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۲۱۸</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="font-bold text-tiny">۲۵۹,۰۰۰ تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div wire:id="TVqUVJaf1AmCMxXcr5Ws">
                                <article class="flex flex-col h-full rounded-lg bg-white bg-white shadow-sm overflow-hidden">
                                    <div class="h-48 overflow-hidden relative m-3 rounded-lg">
            <span class="absolute left-0 top-0 ml-4 mt-4 cursor-pointer">
                <div wire:id="elW04ba802y6rYOi6CYz" class="flex items-center space-x-2 space-x-reverse">
        <span wire:click="setSubscription">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="text-white w-6 h-6 cursor-pointer ">
    <path fill="currentColor" d="M479.92,208c0-77.69-54.48-139.91-127.94-155.16V32a32,32,0,1,0-64,0V52.84C214.56,68.09,160.08,130.31,160.08,208c0,102.31-36.14,133.53-55.47,154.28A31.28,31.28,0,0,0,96,384c.11,16.41,13,32,32.09,32H511.91c19.11,0,32-15.59,32.09-32a31.23,31.23,0,0,0-8.61-21.72C516.06,341.53,479.92,310.31,479.92,208Z" class=""></path>
    <path fill="currentColor" d="M88,168H24a24,24,0,0,0,0,48H88a24,24,0,0,0,0-48ZM131.08,55.22l-55.42-32a24,24,0,1,0-24,41.56l55.42,32a24,24,0,1,0,24-41.56Zm457.26,9.56a24,24,0,0,0-24-41.56l-55.42,32a24,24,0,1,0,24,41.56ZM320,512a64,64,0,0,0,64-64H256A64,64,0,0,0,320,512ZM616,168H552a24,24,0,0,0,0,48h64a24,24,0,0,0,0-48Z" class="fa-primary"></path>
</svg>        </span>
        </div>            </span>
                                        <img class="w-full h-full object-cover lozad" data-src="https://static.roocket.ir/public/images/2019/10/22/laravel-2.png" alt="آموزش لاراول">
                                        <span class="absolute top-0 right-0 p-1 bg-gray-700 mt-3 mr-2 text-xs rounded text-white bg-opacity-50">تکمیل ضبط</span>
                                    </div>
                                    <div class="flex flex-col flex-1 space-y-3">
                                        <div class="px-4 flex-grow">
                                            <h2 class="font-medium text-lg leading-relaxed tracking-tight hover:underline"><a href="/series/learn-laravel"><span>آموزش لاراول</span></a></h2>
                                            <p class="mt-2 mb-3 text-sm opacity-70 leading-relaxed">
                                                فریمورک لاراول یکی از محبوبترین و بهترین فریمورک های حال حاضر برای زبان php می باشد، آموزش لاراول راکت می‌تواند به شکل رایگان به شما لاراول را آموزش د...
                                            </p>
                                        </div>
                                        <div>
                                            <div class="bg-yellow-300 text-gray-600 rounded-lg py-4 px-5 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-baseline font-bold flex-row-reverse text-tiny">
                                                        <div class="flex items-center space-x-2 space-x-reverse">
                                                            <span>۱۰:۰۳:۴۲</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                                                            </svg>                                </div>

                                                        <div class="ml-2 flex items-center space-x-1 space-x-reverse">
                                                            <span ref="likecount" class="font-bold">۳۱۵</span>
                                                            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-6 h-6 hover:text-red-500 cursor-pointer " wire:click="like">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>                                </div>
                                                    </div>
                                                    <span class="text-gray-600 font-bold text-tiny">رایگان</span>
                                                </div>
                                                <div class="pt-3 mt-3 border-t border-solid border-gray-800 border-opacity-10 flex justify-between items-center text-tiny">
                                                    <span>میزان پیشرفت شما در دوره</span>
                                                    <span class="p-1 bg-gray-700 text-white rounded text-sm">۵.۲ درصد</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <ul class="relative z-0 inline-flex hidden md:flex flex-row my-4 rounded-lg flex-wrap">

                                <li class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-300 hover:text-gray-400 transition ease-in-out duration-150">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </li>





                                <li class="bg-gray-100 -ml-px relative inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"><span>۱</span></li>
                                <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(2)">۲</a></li>
                                <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(3)">۳</a></li>
                                <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(4)">۴</a></li>
                                <li><a class="relative -ml-px inline-flex items-center px-4 py-2 border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:text-gray-700 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click="gotoPage(5)">۵</a></li>



                                <li>
                                    <a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-solid border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-400 transition ease-in-out duration-150" href="#series-page" data-turbolinks="false" wire:click.prevent="nextPage" rel="next">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="flex-1 flex justify-between md:hidden mt-2">
                                <a href="#series-page" wire:click.prevent="previousPage" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 opacity-50 cursor-auto">
                                    صفحه قبل
                                </a>
                                <a href="#series-page" wire:click.prevent="nextPage" class="mr-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 ">
                                    صفحه بعد
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
