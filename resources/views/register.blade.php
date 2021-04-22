@extends('layouts.main')

@section('content')
{{--
    <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5    " >
        <div class="bg-gray-800 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:500px">
            <div class="md:flex w-full">


                <div class="w-full md:w-full py-10 px-5 md:px-10">

                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-100">ثبت نام</h1>
                        <p class="text-gray-300 mt-3"> با ثبت نام در سایت ، از مزایای کاربران سایت بهره مند شوید </p>
                    </div>
                    <div>
                        <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-sm text-gray-100 px-1 ">نام</label>
                                <div class="flex mt-1">
                                    <input type="text"
                                           class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                           placeholder="نام شما">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-sm text-gray-100 px-1 ">نام خانوادگی</label>
                                <div class="flex mt-1">
                                    <input type="text"
                                           class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                           placeholder="نام خانوادگی شما">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-sm text-gray-100 px-1 ">ایمیل</label>
                                <div class="flex mt-1">
                                    <input type="email"
                                           class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                           placeholder="johnsmith@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-sm text-gray-100 px-1 ">رمز عبور</label>
                                <div class="flex mt-1">
                                    <input type="password"
                                           class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                           placeholder="************">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-12">
                                <label for="" class="text-sm text-gray-100 px-1 ">یه بار دیگه رمز عبور</label>
                                <div class="flex mt-1">
                                    <input type="password"
                                           class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                           placeholder="************">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="w-full px-3 mb-5">
                                <button class="block w-full max-w-xs mx-auto bg-blue-500 transition duration-500 ease-in-out
                                hover:bg-blue-700 focus:bg-blue-500 text-white
                                 rounded-lg px-3 py-3">ثبت نام
                                </button>
                            </div>
                            <div class="flex">
                                <p class="text-right mt-3 w-1/2">
                                </p>
                                <p class="text-left mt-3 w-1/2">
                                    <a href="/login"
                                       class="text-sm text-blue-300 mr-2 transition duration-500
                                        ease-in-out hover:text-blue-500"> می خوام وارد شم&nbsp&leftarrow;
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
--}}
<section class="w-full">
    <div class="container mx-auto h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 pt-10">
                <div
                    class="relative flex flex-col min-w-0 break-words transition duration-300
                     ease-in-out w-full mb-6 shadow-xl rounded-xl bg-white dark:bg-gray-800 border-0">
                    <div class="rounded-t mb-0  py-6">
                        <div class="text-center mb-3">
                            <h6 class="dark:text-gray-300 text-gray-700 text-sm font-bold">ثبت نام با اکانت</h6></div>
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
                   @livewire('register-form')
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
