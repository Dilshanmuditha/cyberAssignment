<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<x-button class="m-4"><a href="/dashboard">Back</a></x-button>


<h1 class="m-10 mb-20 text-center text-6xl text-blue-600">World's Latest Products </h1> 
   
<x-product-card :products="$products" />