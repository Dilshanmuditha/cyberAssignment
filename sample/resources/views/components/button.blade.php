<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 
    bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase 
    tracking-widest hover:bg-blue-900 active:bg-grayeen-900 focus:outline-none focus:border-blue-900 
    focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>