<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center mt-4 px-4 py-2 bg-primary-600 dark:bg-yellow-500 border border-transparent rounded-md font-medium tracking-tight text-sm text-white dark:text-white hover:bg-gray-700 dark:hover:bg-blue-500 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
