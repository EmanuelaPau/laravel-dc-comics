<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 'ciao';
        $comicList = Comic::paginate(20);
        return view('admin.comics.index', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //prendo i valori
        $data = $request->all();
        // dd($data);
        // Creo un'/istanza del nuovo modello
        $newComic = new Comic();
        // Popolo il nuovo modello 
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->type = $data['type'];
        // $newComic->sale_date = $data['sale_date'];

        // Popolo il modello con le fillable 
        $newComic->fill($data);

        // Salvo nel db
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic = Comic::findOrFail($id);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        // @dd($id)
        //
        $data = $request->all();
        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('admin.comics.show', $comic->id)->with('updated', $comic->name);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('admin.users.index')->with('delete', $comic->name);

    }
}