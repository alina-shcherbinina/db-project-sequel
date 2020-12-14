<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;


class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();
        return view('workers.work')->with('workers', $workers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create');
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
            'surname' => 'required',
            'phone' => 'required',
        ]);

        $worker = new Worker;
        $worker->name = $request->input('name');
        $worker->surname = $request->input('surname');
        $worker->phone = $request->input('phone');
        $worker->save();

        return redirect('workers')->with('success', 'Worker is added to the table!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $worker = Worker::find($id);
        return view('workers.show')->with('worker', $worker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker = Worker::find($id);
        return view('workers.edit')->with('worker', $worker);
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
            'surname' => 'required',
            'phone' => 'required',
        ]);

        $worker = Worker::find($id);
        $worker->name = $request->input('name');
        $worker->surname = $request->input('surname');
        $worker->phone = $request->input('phone');
        $worker->save();

        return redirect('workers')->with('success', 'Workers info is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Worker::find($id);
        $worker -> delete();
        return redirect('workers')->with('success', 'Workers info is deleted');
    }
}
