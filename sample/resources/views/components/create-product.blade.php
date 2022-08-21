<x-guest-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<section class="px-6 py-8 ">
    <main class="mx-auto max-w-4xl mt-10 bg-blue-100 border border-blue-300 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl mb-10 text-blue-600">Add New Product!</h1>
        <form method="POST" action="/dashboard" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                    Product Name
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                    Thumbnail
                </label>
                <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail" required>{{ old('thumbnail') }}</input>
                @error('thumbnail')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="price">
                   Product Price
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="price" id="price" value="{{ old('price') }}" required>
                @error('price')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="status">
                   Active Status
                </label>
                <input type="radio" id="active" name="status" value="1">
                <label for="active">Active</label>
                <input type="radio" id="inactive" name="status" value="0">
                <label for="inactive">Inactive</label><br>
                @error('status')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-300 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Publish
                </button>
            
                <button type="reset" class="bg-blue-300 text-white rounded py-2 px-4 hover:bg-blue-500">
                    <a href="/dashboard">Cancel</a>
                </button>
            </div>
        </form>
    </main>
</section>
</x-guest-layout>