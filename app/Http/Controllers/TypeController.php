<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Inertia::render;
     */
    public function index()
    {

        $types = Type::all()->reverse();

        return Inertia::render('Type/Index', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Inertia::render;
     */
    public function create()
    {
        return Inertia::render('Type/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([

                'name' => 'required',
                'description' => 'required',
            ]);

            Type ::create($validated);

            return Redirect::route('type.index');


        } catch (\Throwable $th) {
            return response()->json([
                'status'    => 'failed',
                'code'      => '0',
                'operation' => 'create',
                'error'     => $th->getMessage(),
                'school'   => $request->all()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Inertia\Inertia::render;
     */
    public function edit(Type $type)
    {
        return Inertia::render('Type/Edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Type $type)
    {
        try {
            $validated = $request->validate([

                'name' => 'required',
                'description' => 'required',
            ]);

            $type->update($validated);

            return Redirect::route('type.index');


        } catch (\Throwable $th) {
            return response()->json([
                'status'    => 'failed',
                'code'      => '0',
                'operation' => 'create',
                'error'     => $th->getMessage(),
                'school'   => $request->all()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return Redirect::route('type.index');
    }
}
