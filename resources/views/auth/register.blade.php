@extends('layouts.main')

@section('content')
    <section class="w-full">
        <div class="container mx-auto h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 pt-10">
                    <div
                        class="relative flex flex-col min-w-0 break-words transition duration-300
                     ease-in-out w-full mb-6 shadow-xl rounded-xl bg-white dark:bg-gray-800 border-0">
                        <div class="rounded-t mb-0  py-6">
                            <div class="text-center mb-3">
                                <h6 class="dark:text-gray-300 text-gray-700 text-sm font-bold">ثبت نام با اکانت</h6>
                            </div>
                            <div class="btn-wrapper text-center">
                                <button
                                    class="dark:bg-gray-600 transition duration-300 ease-in-out bg-white border text-gray-700 active:bg-gray-100 dark:text-gray-200 font-normal px-4 py-2 rounded
                                     outline-none focus:outline-none mr-2 mb-1 uppercase shadow-xl  hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    <img alt="گیت هاب" class="w-5 ml-2" src="/assets/Icons/github.svg">گیت هاب
                                </button>
                                <button
                                    class="dark:bg-gray-600 transition duration-300 ease-in-out bg-white border text-gray-700 active:bg-gray-100 dark:text-gray-200 font-normal px-4 py-2
                                    rounded outline-none focus:outline-none mr-1 mb-1 uppercase  shadow-xl dark:shadow-white hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    <img alt="گوگل" class="w-5 ml-2" src="/assets/Icons/google.svg">گوگل
                                </button>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @method('post')
                                <div class="relative flex w-full mb-3">
                                    <div class="w-1/2 px-1">
                                        <label
                                            class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">نام</label>
                                        <x-input autofocus id="name" type="text" name="name"
                                                 autocomplete="name" :value="old('name')"
                                                 placeholder="نام شما"></x-input>
                                    </div>
                                    <div class="w-1/2 px-1">
                                        <label
                                            class=" block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">نام خانوادگی</label>
                                        <x-input id="lastName" type="text" name="lastName"
                                                 autocomplete="lastName" :value="old('lastName')"
                                                 placeholder="نام خانوادگی شما"></x-input>
                                    </div>
                                </div>
                                <div class="relative w-full mb-3 px-1">
                                    <label
                                        class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">ایمیل</label>
                                    <x-input id="email" type="email" name="email"
                                             autocomplete="email" :value="old('email')"
                                             placeholder="email@example.com"></x-input>
                                </div>
                                <div class="relative w-full px-1" x-data="{ show: true }">
                                    <label
                                        class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">رمز عبور</label>
                                    <x-input-password name="password" autocomplate="password" id="password"></x-input-password>
                                </div>
                                @error('password')
                                <small
                                    class="@error('password') mr-2 text-xs text-red-400 @enderror">{{ $message }}</small>
                                @enderror
                                <div class="relative w-full mt-3 mb-3 px-1" x-data="{ show: true }">
                                    <label
                                        class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">تایید رمز عبور</label>
                                    <x-input-password name="password_confirmation" autocomplate="password_confirmation" id="password_confirmation"></x-input-password>
                                </div>

                                <div class="text-center mt-6 px-1">
                                    <button
                                        class="inline-flex items-center text-center dark:bg-gray-900 transition duration-300 ease-in-out bg-blue-500 text-white
                                        active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow
                                        hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                        type="submit" style="transition: all 0.15s ease 0s;">
                <span class="inline-flex m-auto">
                ورود
                <svg wire:loading wire:target="Login" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                     xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                </span>
                                    </button>
                                    <div class="flex">
                                        <p class="text-right mt-3 w-1/2">
                                            <a href=""
                                               class="text-sm text-blue-300 mr-2 transition duration-500 ease-in-out hover:text-blue-500">
                                            </a>
                                        </p>
                                        <p class="text-left mt-3 w-1/2">
                                            <a href="{{route('login')}}"
                                               class="text-sm text-blue-400 mr-2 transition duration-500 ease-in-out hover:text-blue-500">
                                                وارد میشم&nbsp&leftarrow;
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




