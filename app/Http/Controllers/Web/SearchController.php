<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\ModelSearchAspect;
use Spatie\Searchable\Search;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class SearchController extends Controller
{
    public function index()
    {
        $searchResults = (new Search())
            ->registerModel(Post::class, 'name')
            ->limitAspectResults(50)
            ->search('dan');

        return view ('user.search', ['searchResults' => $searchResults]);
    }
}
