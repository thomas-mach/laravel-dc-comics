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
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        // dd($request->all());
        // dd($comic);
        $comic->fill($form_data); //non salva automaticamente sul db
        // se qui dobbiamo fare qualcos'altro
        $comic->save();
        // $comic->update($form_data);

        // redirect alla rotta show di comic 
        return to_route('comics.show', $comic);
    }
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
