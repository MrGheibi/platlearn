<input {{ $disabled ? 'disabled' : '' }}
       id="{{$id}}" :type="show ? 'password' : 'text'" name="{{$name}}"
       autocomplete="{{$autocomplete}}"
       class="@error($name) border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
                                            text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
       placeholder="************" style="transition: all 0.15s ease 0s;">
<div
    class="absolute inset-y-0 left-0 pl-3 pt-5 flex items-center text-sm leading-5">
    <i @click="show = !show"
       :class="{'zmdi text-gray-100 cursor-pointer text-2xl': true, 'zmdi-eye': !show, 'zmdi-eye-off':show,}"></i>
</div>
