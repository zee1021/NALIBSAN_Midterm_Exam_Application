namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Quantum X1 Smartphone', 'brand' => 'Aether', 'price' => 999, 'image' => 'https://example.com/images/quantum-x1.jpg', 'desc' => 'Next-gen neural processor and edge to edge display'],
            ['name' => 'Nebula Pro Laptop', 'brand' => 'StellarTech', 'price' => 1499, 'image' => 'https://example.com/images/nebula-pro.jpg', 'desc' => 'Ultra-thin design with 12-hour battery life'],
            ['name' => 'Titan mechanical keyboard', 'brand' => 'TitanTech', 'price' => 200, 'image' => 'https://example.com/images/titan-keyboard.jpg', 'desc' => 'Customizable RGB lighting and tactile feedback'],
            ['name' => 'Vortex gaming mouse', 'brand' => 'Vortex', 'price' => 80, 'image' => 'https://example.com/images/vortex-mouse.jpg', 'desc' => 'Ergonomic design with adjustable DPI settings'],
        ];
        return view('products.index', compact('products'));    
    }
}