<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }
    public function show(Comic $comic)
    {

        // $pasta = Pasta::findOrFail($id);

        // if ($pasta === null) {
        //     abort('404');
        // }

        return view('comics.show', compact('comic'));
    }
    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {
        $from_data = $request->all();

        Comic::create($from_data);

        return to_route('comics.index');
    }
}
