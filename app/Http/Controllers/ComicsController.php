<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = Comic::all();
        return view('comic.comics')->with('comic', $comic);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'category_id' => 'required',
        ]);

        $comics = new Comic;
        $comics->name = $request->input('name');
        $comics->author = $request->input('author');
        $comics->year = $request->input('year');
        $comics->category_id = $request->input('category_id');
        $comics->save();

        return redirect('comics')->with('success', 'Comic is added to the table!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comic.show')->with('comic', $comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comic.edit')->with('comic', $comic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
        ]);

        $comics = Comic::find($id);
        $comics->name = $request->input('name');
        $comics->author = $request->input('author');
        $comics->year = $request->input('year');
        $comics->category_id = $request->input('category_id');
        $comics->save();


        return redirect('comics')->with('success', 'Comics info is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic -> delete();
        return redirect('comics')->with('success', 'comics info is deleted');
    }
}
