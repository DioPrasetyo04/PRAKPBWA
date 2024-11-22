<a {{ $attributes }} class=" {{ request()->fullUrlIs(url($href)) ? "bg-zinc-800 text-white" : "text-red-600 hover:bg-zinc-700 hover:text-red-600" }} block rounded-md px-3 py-2 text-sm font-medium">
 
    {{ $slot }}

</a>