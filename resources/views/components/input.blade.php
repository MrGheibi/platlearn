<input
    name="{{$name}}"
    value="{{$value}}"
    id="{{$id}}"
    autocomplete="{{$autocomplete}}"
    type="{{$type}}"
    class="@error($name) border-2 border-red-500 @enderror px-3 transition duration-300 ease-in-out py-3 dark:placeholder-gray-100
 placeholder-gray-500 text-gray-800 dark:text-gray-100  dark:bg-gray-600 rounded
  text-sm shadow-lg focus:outline-none focus:shadow-outline w-full"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => '']) !!}

>
@error($name)
<small
    class="@error($name) text-xs text-red-400 @enderror">{{ $message }}</small>
@enderror
