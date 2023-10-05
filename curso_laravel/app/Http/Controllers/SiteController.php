<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(3);

        return view('site.home', compact('produtos'));
    
     }

      /*
     public function details($slug)
     {
        $produto = Produto::where('slug', $slug)->first();

        return view('site.details', compact('produto'));
     }
     */

    public function details($slug)
    {
    $produto = Produto::where('slug', $slug)->first();

    if (!$produto) {
        // Se o produto não for encontrado, você pode redirecionar para uma página de erro ou fazer algo apropriado.
        abort(404); // Isso retornará uma página de erro 404.
    }

    return view('site.details', compact('produto'));
    }
      
}
