<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = DB::table('student')->get();
        return view('home', ['student' =>$student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $student = DB::table('student')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,

        ]);
        return redirect(route('index'))->with('status', 'Added sucessfull');

    }

    public function edit(string $id)
    {
        $student = DB::table('student')->find($id);
        return view('edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = DB::table('student')->where('id', $id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        return redirect(route('index'))->with('status', 'update sucessfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('student')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'delete sucessfull');
    }
}
