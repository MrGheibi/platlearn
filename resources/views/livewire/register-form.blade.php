<div class="flex-auto px-4 lg:px-10 py-10 pt-0">
    <form wire:submit.prevent="register">
        <div class="relative flex w-full mb-3">
            <div class="w-1/2 px-1">
                <label class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                       for="grid-password">نام</label>
                <input type="text" wire:model.lazy="name" autocomplete="name" autofocus
                       class="@error('name') border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                       placeholder="نام شما" style="transition: all 0.15s ease 0s;">
                @error('name')
                <small class="@error('name') text-xs text-red-400 @enderror">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-1/2 px-1">
                <label class=" block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                       for="grid-password">نام خانوادگی</label>
                <input type="text" wire:model.lazy="lastName" autocomplete="lastName"
                       class="@error('lastName') border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                       placeholder="نام خانوادگی شما" style="transition: all 0.15s ease 0s;">
                @error('lastName')
                <small class="@error('lastName') text-xs text-red-400 @enderror">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="relative w-full mb-3 px-1">
            <label class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                   for="grid-password">ایمیل</label>
            <input type="email" wire:model.lazy="email" autocomplete="email"
                   class="@error('email') border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                   placeholder="johnsmith@example.com" style="transition: all 0.15s ease 0s;">
            @error('email')
            <small class="@error('email') text-xs text-red-400 @enderror">{{ $message }}</small>
            @enderror
        </div>
        <div class="relative w-full px-1" x-data="{ show: true }">
            <label class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                   for="grid-password">رمز عبور</label>
            <input :type="show ? 'password' : 'text'" wire:model.lazy="password" autocomplete="new-password"
                   class="@error('password') border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                   placeholder="************" style="transition: all 0.15s ease 0s;">
            <div class="absolute inset-y-0 left-0 pl-3 pt-5 flex items-center text-sm leading-5">
                <i @click="show = !show"
                   :class="{'zmdi text-gray-100 cursor-pointer text-2xl': true, 'zmdi-eye': !show, 'zmdi-eye-off':show,}"></i>
            </div>

        </div>
        @error('password')
        <small class="@error('password') mr-2 text-xs text-red-400 @enderror">{{ $message }}</small>
        @enderror
        <div class="relative w-full mt-2 mb-3 px-1" x-data="{ show: true }">
            <label class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                   for="grid-password">تایید رمز عبور</label>
            <input :type="show ? 'password' : 'text'" wire:model.lazy="password_confirmation" autocomplete="new-password"
                   class="@error('password_confirmation') border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                   placeholder="************" style="transition: all 0.15s ease 0s;">
            <div class="absolute inset-y-0 left-0 pl-3 pt-5 flex items-center text-sm leading-5">
                <i @click="show = !show"
                   :class="{'zmdi text-gray-100 cursor-pointer text-2xl': true, 'zmdi-eye': !show, 'zmdi-eye-off':show,}"></i>
            </div>

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
                    <a href="" class="text-sm text-blue-300 mr-2 transition duration-500 ease-in-out hover:text-blue-500">
                    </a>
                </p>
                <p class="text-left mt-3 w-1/2">
                    <a href="{{route('signin')}}" class="text-sm text-blue-400 mr-2 transition duration-500 ease-in-out hover:text-blue-500"> وارد میشم&nbsp&leftarrow;
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>
