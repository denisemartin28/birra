<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Beer;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $request->validate([
          'query' -> 'required|min3',
      ])

      $query = $request->input('query');

      // $beers = Beer::where('type', 'like', "%$query%")
      //               ->orWhere('description', 'like', "%$query%")
      //               ->orWhere('alcohol_content', 'like', "%$query%")
      //               ->paginate(10);

      $beers = Beer::search($query)->paginate(10);

      return view('search-results')->with('beers, $beers');
    }
}
