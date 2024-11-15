<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-zinc-800 hover:text-white-600' : 'text-red-600 hover:bg-zinc-700 hover:text-white-600' }}rounded-md px-3 py-2 text-sm font-medium">

    {{ $slot }}

</a>