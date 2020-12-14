<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use App\Models\Position;

class PivotController extends Controller
{
    public function index(){
        $positions = Position::with('workers')->get();
        return view('pw.assigned', compact('positions'));
    }

    public function create()
    {
        return view('pw.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'position_id' => 'required',
        ]);

        $position=Position::find($request->position_id);
        $position->workers()->attach($request->worker_id);

        return redirect('pw')->with('success', 'Position is added to the table!');
    }

    public function edit($id)
    {
        $position = Position::find($id);
        return view('pw.edit')->with('position', $position);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'position_id' => 'required',
            'worker_id' => 'required',
        ]);

        $position=Position::find($request->position_id);
        $position->workers()->attach($request->worker_id);

        return redirect('pw')->with('success', 'Position info is updated');
    }

    public function destroy($id)
    {
        $position = Position::find($id);
        $position -> delete();
        return redirect('pw')->with('success', 'Position`s info is deleted');
    }
}
