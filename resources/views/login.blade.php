@extends('layouts.main')

@section('content')

    <section class="w-full">
        <div class="container mx-auto h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 pt-10">
                    <div
                        class="relative flex flex-col min-w-0 break-words transition duration-300 ease-in-out w-full mb-6 shadow-xl rounded-xl bg-white dark:bg-gray-800 border-0">
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="text-center mb-3">
                                <h6 class="dark:text-gray-300 text-gray-700 text-sm font-bold">ورود با اکانت</h6></div>
                            <div class="btn-wrapper text-center">
                                <button
                                    class="dark:bg-gray-600 duration-300 ease-in bg-white border text-gray-700 active:bg-gray-100 dark:text-gray-200 font-normal px-4 py-2 rounded
                                     outline-none focus:outline-none mr-2 mb-1 uppercase shadow-xl  hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    <img alt="گیت هاب" class="w-5 ml-2" src="/assets/Icons/github.svg">گیت هاب
                                </button>
                                <button
                                    class="dark:bg-gray-600 duration-300 ease-in bg-white border text-gray-700 active:bg-gray-100 dark:text-gray-200 font-normal px-4 py-2
                                    rounded outline-none focus:outline-none mr-1 mb-1 uppercase  shadow-xl dark:shadow-white hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    <img alt="گوگل" class="w-5 ml-2" src="/assets/Icons/google.svg">گوگل
                                </button>
                            </div>
                        </div>
                        @livewire('login-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
