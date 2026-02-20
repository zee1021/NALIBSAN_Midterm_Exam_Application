<!DOCTYPE html>
<html lang="en" class="dark">
    <head>
        <meta charset="utf-8">
        <title>Gadget Store | Tech Catalog</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-slate-900 text-slate-100 antialiased">
        <div class="max-w-7x1 mx-auto px-4 py-12">
            <h1 class="text-4xl font-extrabold mb-8 tracking-tighter text-blue-400 uppercase">Tech Catalog</h1>
            <div class="grid drid-cols-1 md:grid-cols-3 gap-8">
                @foreach($products as $product)
                    <div class="bg-slate-800 border border-slate-700 rounded-2xl overflow-hidden hover:border-blue-500 transition -all duration-300 shadow-xl">
                        <img src="{{ $product['image']}}" alt="{{ $product['name']}}" class="w-full h-48 object-cover">

                        <div class="p-6">
                            <span class="text-xs font-bold text-blue-400 tracking-widest uppercase">{{ $product['brand']}}</span>
                            <h2 class="text-xl font-bold mt-1">{{ $product['name']}}</h2>

                            <p class="text-slate-400 mt-2 text-sm">{{ $product['desc']}}</p>

                            <div class="mt-6 flex items-center justify-between">
                                <span class="text-2xl font-mono text-green-400">${{ $product['price']}}</span>

                                <button class="bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-lg font-bold text-sm transition">
                                    
                                    View Specs
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>