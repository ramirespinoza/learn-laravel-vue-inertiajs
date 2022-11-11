<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Inertia::render;
     */
    public function index()
    {

        $books = Book::all()->reverse();

        return Inertia::render('Book/Index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Inertia::render;
     */
    public function create()
    {
        $types = Type::all()->reverse();
        return Inertia::render('Book/Create', ['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse | \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([

                'name' => 'required',
                'author' => 'required',
                'editorial' => 'required',
                'publication_date' => 'required',
                'type_id' => 'required',
            ]);

            Book::create($validated);

            return Redirect::route('book.index');


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
     * @return \Inertia\Inertia::render
     */
    public function show(Book $book)
    {
        $book->load('type');
        return Inertia::render('Book/Show', ['book' => $book]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Inertia\Inertia::render
     */
    public function edit(Book $book)
    {
        $types = Type::all()->reverse();
        return Inertia::render('Book/Edit', ['book' => $book, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse | \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Book $book)
    {
        try {
            $validated = $request->validate([

                'name' => 'required',
                'author' => 'required',
                'editorial' => 'required',
                'publication_date' => 'required',
                'type_id' => 'required',
            ]);

            $book->update($validated);

            return Redirect::route('book.index',[], 303);


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
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Book $book)
    {

        $book->delete();

        return Redirect::route('book.index',[], 303);
    }
}
