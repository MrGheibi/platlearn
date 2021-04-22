<div x-data class="flex-auto px-4 lg:px-10 py-10 pt-0">

    <div
        class="dark:text-gray-300 transition duration-300 ease-in-out text-gray-700 text-center text-lg mb-3  font-bold">
        <small>ورود با ایمیل و رمز
            عبور</small></div>
    <form wire:submit.prevent="Login">

        <div class="relative w-full mb-3">
            <label
                class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                for="grid-password">ایمیل</label>
            <input type="email" wire:model.lazy="email"
                   class="px-3 @error('email') border-2 border-red-500 @enderror transition duration-300 ease-in-out py-3
                   dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                   placeholder="johnsmith@example.com" style="transition: all 0.15s ease 0s;">
            @error('email')
            <small class="@error('email') text-xs text-red-400 @enderror">{{ $message }}</small>
            @enderror
        </div>
        <div class="relative w-full mb-3">
            <label
                class="block transition duration-300 ease-in-out uppercase dark:text-gray-300 text-gray-700 text-xs font-bold mb-2"
                for="grid-password">رمز عبور</label>
            <input type="password" wire:model.lazy="password"
                   class="px-3 py-3 transition @error('password') border-2 border-red-500 @enderror duration-300 ease-in-out dark:placeholder-gray-100 placeholder-gray-500 text-gray-800  dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
                   placeholder="************" style="transition: all 0.15s ease 0s;">
            @error('password')
            <small class="@error('password') text-xs text-red-400 @enderror">{{ $message }}</small>
            @enderror
        </div>
        <div class="text-center mt-6">

            @if(session('faild'))
                <small class="text-red-500 pb-5 text-sm block md:hidden">{{session('faild')}}</small>
            @endif

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
                    <a href="{{route('resetpassword')}}"
                       class="text-sm duration-300 ease-in text-blue-400 mr-2 transition duration-500 ease-in-out hover:text-blue-500">بازیابی
                        رمز عبور
                    </a>
                </p>
                <p class="text-left mt-3 w-1/2">
                    <a href="{{route('signup')}}"
                       class="text-sm duration-300 ease-in text-blue-400 mr-2 transition duration-500 ease-in-out hover:text-blue-500">
                        ثبت نام می کنم&nbsp&leftarrow;
                    </a>
                </p>
            </div>
        </div>
    </form>
    <x-alert type="danger"
             :message="session('faild')"
             bText="می تونی برای راحت تر شدن کارت با حساب گوگلت وارد بشی"
             emoji="😉"
    ></x-alert>
</div>
