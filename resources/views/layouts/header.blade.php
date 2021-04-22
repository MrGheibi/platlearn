<nav
    class="border-b bg-white transition duration-300 ease-in-out dark:bg-gray-800
     dark:border-gray-800 shadow-xl rounded-b-3xl">
    <div class="container mx-auto flex px-4 items-center justify-between px-4 py-4">
        <ul class="flex items-center ">
            <li class="mr-5">
                <a href="#">
                    <img width="60" id="logoPlatlern" src="/assets/Logos/platlearn.svg" alt="">
                </a>
            </li>
            <li class="mr-16 hidden lg:block">
                <a href="/"
                   class="dark:hover:text-gray-300 dark:text-gray-100 text-gray-800  no-underline border-b-2 border-blue-500 font-bold pb-3">خانه</a>
            </li>
            <li class="mr-6 hidden lg:block">
                <a href="/courses" class="dark:hover:text-gray-300 dark:text-gray-100 text-gray-800">دوره های آموزش</a>
            </li>
            <li class="mr-6 hidden lg:block">
                <a href="/articles" class="dark:hover:text-gray-300 dark:text-gray-100 text-gray-800">مقالات آموزشی</a>
            </li>
            <li class="mr-6 hidden lg:block">
                <a href="#"
                   class="hover:text-red-500 text-red-400 no-underline border-b-2 border-red-500 font-bold pb-3"> کانال
                    یوتیوب</a>
            </li>
            <div @click="SideBarOpener" class="mr-6 flex lg:hidden">
                <a href="#">
                    <i class="text-gray-700 dark:text-gray-200 zmdi zmdi-menu text-4xl"></i>
                </a>
            </div>
        </ul>

        <div class="items-center hidden lg:flex">
            <div class="relative">
                <input type="text" style="padding-right: 40px"
                       class="transition duration-300 ease-in-out dark:bg-gray-800 border border-gray-500 rounded-full w-64 px-6 py-1 focus:outline-none focus:ring focus:border-blue-300"
                       placeholder="جستجو کنید ...">
                <div class="absolute top-0">
                    <img src="/assets/Icons/search.svg" class="fill-current text-gray-100 mt-2 mr-3 " width="17" alt="">
                </div>
            </div>
            @if(auth('web')->check())
                <div class="mr-4">
                    <div
                        @click.away="open = false"
                        class="relative"
                        x-data="{ open: false }"
                    >
                        <button
                            @click="open = !open"
                            class="flex flex-row items-center w-full px-1 py-1 mt-2 text-sm text-left transition duration-300 ease-in-out bg-transparent rounded-full
                                     md:w-auto md:mt-0 md:ml-2 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                                     focus:bg-blue-500 focus:outline-none focus:shadow-outline"
                        >
                            <img src="/assets/Logos/profile.png" class="w-auto h-8
                                     rounded-full" alt=""/>
                        </button>
                        <div
                            x-show="open"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute left-0 mt-5 w-full origin-top-right  rounded-md shadow-lg md:w-48"
                        >
                            <div class="px-2 py-2 dark:bg-gray-700 bg-white rounded-md shadow">

                                <a href="" class="flex items-center px-2 py-1 mt-2 dark:text-white text-gray-600 bg-transparent rounded-lg
                                          text-sm font-semibold md:mt-0 hover:text-gray-100 focus:text-gray-100
                                          hover:bg-blue-500">
                                    <i class="zmdi zmdi-account-circle text-2xl ml-2"></i>
                                    <span class="font-medium">حساب کاربری</span>
                                </a>
                                <a href="{{route('logout')}}" class="flex items-center px-2 py-1 mt-2 dark:text-white text-gray-600 bg-transparent rounded-lg
                                          text-sm font-semibold md:mt-0 hover:text-gray-100 focus:text-gray-100
                                          hover:bg-red-500 ">
                                    <i class="zmdi zmdi-power text-2xl ml-2"></i>

                                    <span class="font-medium">خروج</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="mr-4">
                    <a href="/">
                        ثبت نام
                    </a>&nbsp; | &nbsp;
                    <a href="/signin">
                        ورود
                    </a>
                </div>
            @endif

            <li class="mr-2 hidden sm:block">
                <button id="switchTheme"
                        class="h-10 w-10 flex justify-center items-center
                        focus:outline-none text-yellow-500">
                    <img src="" id="iconDarking" width="22" alt="">
                </button>
            </li>
        </div>
        <div class="items-center flex lg:hidden">
            <div class="mr-2">
                <button id="switchTheme2"
                        class="h-10 w-10 flex justify-center items-center
                        focus:outline-none text-yellow-500">
                    <img src="" id="iconDarking2" width="22" alt="">
                </button>
            </div>
            <div class="mr-4">
                <a href="/register">
                    {{--
                                        <img src="/assets/Logos/profile.png" class="rounded-full w-8 h-8 shadow-lg" alt="profile">
                    --}}
                    ثبت نام
                </a>&nbsp; | &nbsp;
                <a href="/login">
                    ورود
                </a>
            </div>
        </div>
    </div>
</nav>
<script>
    {{--  Names  --}}
    let LogoId = "logoPlatlern"
    let elementIcon1 = "iconDarking"
    let elementIcon2 = "iconDarking2"
    {{--  End Names  --}}

    {{--  Paths  --}}
    let moonIcon = "/assets/Icons/moon.svg"
    let sunIcon = "/assets/Icons/sun.svg"
    let LogoPlatlearn = "/assets/Logos/platlearn.svg"
    let LogoPlatlearnDark = "/assets/Logos/platlearnDark.svg"
    {{-- End Paths  --}}

    let htmlClasses = document.querySelector('html').classList;

    if (localStorage.theme == 'dark') {
        document.getElementById(elementIcon1).src = sunIcon
        document.getElementById(elementIcon2).src = sunIcon
        document.getElementById(LogoId).src = LogoPlatlearn
    } else {
        document.getElementById(elementIcon1).src = moonIcon
        document.getElementById(elementIcon2).src = moonIcon
        document.getElementById(LogoId).src = LogoPlatlearnDark
    }
    document.getElementById('switchTheme').addEventListener('click', function () {
        if (localStorage.theme == 'dark') {
            document.getElementById(elementIcon1).src = moonIcon
            darkingTheme()
        } else {
            document.getElementById(elementIcon1).src = sunIcon
            undarkingTheme()
        }
    });
    document.getElementById('switchTheme2').addEventListener('click', function () {
        if (localStorage.theme == 'dark') {
            document.getElementById(elementIcon2).src = moonIcon
            darkingTheme()
        } else {
            document.getElementById(elementIcon2).src = sunIcon
            undarkingTheme()
        }
    });

    function darkingTheme() {
        document.getElementById(LogoId).src = LogoPlatlearnDark
        htmlClasses.remove('dark');
        localStorage.removeItem('theme')
    }

    function undarkingTheme() {
        document.getElementById(LogoId).src = LogoPlatlearn
        htmlClasses.add('dark');
        localStorage.theme = 'dark';
    }
</script>
