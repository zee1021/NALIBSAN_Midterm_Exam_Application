<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Lab | Future Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); }
    </style>
</head>
<body class="text-slate-200 antialiased">

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold tracking-tighter text-white">GADGET<span class="text-blue-500">LAB</span></h1>
        <div class="space-x-8 text-sm uppercase tracking-widest opacity-70">
            <a href="#" class="hover:text-blue-400 transition">Store</a>
            <a href="#" class="hover:text-blue-400 transition">About</a>
            <a href="#" class="hover:text-blue-400 transition">Cart (0)</a>
        </div>
    </nav>

    <header class="py-20 text-center">
        <span class="text-blue-500 font-semibold tracking-widest uppercase text-xs">New Collection 2026</span>
        <h2 class="text-6xl font-extrabold text-white mt-4 tracking-tight">The Future is Tangible.</h2>
        <p class="mt-4 text-slate-400 max-w-xl mx-auto">Explore our curated selection of high-performance tech designed for the modern professional.</p>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="glass p-4 rounded-3xl transition-all duration-500 hover:scale-[1.02]">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover rounded-2xl mb-6">
                <div class="px-2">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold text-white">{{ $product['name'] }}</h3>
                        <span class="text-blue-400 font-bold">{{ $product['price'] }}</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-6">{{ $product['desc'] }}</p>
                    <button class="w-full bg-white text-slate-950 py-3 rounded-xl font-bold hover:bg-blue-500 hover:text-white transition-colors duration-300">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>
</html>