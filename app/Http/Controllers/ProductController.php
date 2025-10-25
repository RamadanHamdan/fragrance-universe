<?php
namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
   /**
   * 
   * Display a listing of the resource.
   * 
   * @return void
   */

   public function index() : View
   {
      $products = Products::latest()->paginate(10);

      return view('products.collections', compact('products'));
   }
    /** 
     * Show the form for creating a new product
     * 
     * @return View
     */
   public function create() : View
   {
      return view('products.drop');
   }

   /**
    * Store a newly created resource in storage.
    * @param mixed $request
    * @return RedirectResponse
    */

   public function store(Request $request): RedirectResponse
     {
      // Validate the request data
        $request->validate([
            'name' => 'required',
            'top_notes' => 'required',
            'middle_notes' => 'required',
            'base_notes' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer|min:0',
            'description' => 'required',
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        Products::create([
            'name' => $request->name,
            'top_notes' => $request->top_notes,
            'middle_notes' => $request->middle_notes,
            'base_notes' => $request->base_notes,
            'price' => $request->price,
            'category' => $request->category,
            'size' => $request->size,
            'image' => $image->hashName(),
            'stock' => $request->stock,
            'description' => $request->description,
        ]);
        // redirect to products drop with success message
        return redirect()->route('products.collections')
            ->with('success', 'Product created successfully.');
     }
     
}
