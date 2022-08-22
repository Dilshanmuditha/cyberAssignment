
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<x-button class="m-4"><a href="/dashboard">Back</a></x-button>

<section class="px-6 py-8 max-w-4xl mx-auto  mt-10 ">
<table class="min-w-full divide-y divide-gray-200">
    
    <thead >
        
        <tr class="bg-blue-700 font-medium text-xl text-white">
            
                <td class="">
                    <div class="m-4">Product Id</div>
                </td>
                <td class="text-left">
                    <div class="m-4">Product Name</div>
                </td>
                <td class="text-right">
                    <div class="m-4">Edit</div>
                </td>
                <td class="text-right">
                    <div class="m-4">Delete</div>
                </td>
            
        </tr>

    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      @foreach ($products as $products)
      <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="text-sm font-medium text-gray-900">
                    {{$products->id}}
                </div>
            </div>
        </td>
      
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="text-sm font-medium text-gray-900">
                    {{$products->name}}
                </div>
            </div>
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="/dashboard/{{$products->id}}/edit" class="text-blue-300 hover:text-blue-700">Edit</a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <form action="/dashboard/{{$products->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="text-sm text-gray-400 hover:text-gray-700">Delete</button>
            </form>
            
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div></div></div></div>
</section>