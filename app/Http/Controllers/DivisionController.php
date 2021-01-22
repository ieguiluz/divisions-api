<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index() {
        $divisions = Division::orderBy('id')->paginate(10);

        return response()->json([
            'divisions' => $divisions->load('parent')->loadCount('subdivisions'),
        ], 200);
    }

    public function store(Request $request) {
        $new_division = new Division();
        $new_division->name = $request->name;
        $new_division->level = $request->level;
        $new_division->colaborators_qty = $request->colaborators_qty;

        if ($request->filled('ambassador')) {
            $new_division->ambassador = $request->ambassador;
        }

        if ($request->filled('parent_id')) {
            $new_division->parent_id = $request->parent_id;
        }

        $new_division->save();

        return response()->json([
            'msg' => 'Division created successfully',
            'division' => $new_division,
        ], 200);
    }

    public function update(Division $division, Request $request) {
        $division->name = $request->name;
        $division->level = $request->level;
        $division->colaborators_qty = $request->colaborators_qty;

        if ($request->filled('ambassador')) {
            $division->ambassador = $request->ambassador;
        }

        $division->save();

        return response()->json([
            'msg' => 'Division updated successfully',
            'division' => $division,
        ], 200);
    }

    public function destroy(Division $division) {
        $division->delete();

        return response()->json([
            'msg' => 'Division deleted successfully',
        ], 200);
    }

    public function getSubdivisions($division_parent_id) {
        return response()->json([
            'subdivisions' => Division::where('parent_id', $division_parent_id)->get(),
        ], 200);
    }
}
