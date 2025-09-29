<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $books = Book::all();
            return BookResource::collection($books);
        } catch (Exception $e) {
            Log::error('Error fetching books: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menampilkan daftar buku'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $currentYear = Carbon::now()->year;

            $data = $request->validate([
                'title' => 'required|string|max:150',
                'author' => 'required|string|max:100',
                'year' => 'nullable|integer|max:' . $currentYear,
            ]);

            $book = Book::create($data);

            return new BookResource($book);
        } catch (Exception $e) {
            Log::error('Error creating book: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menambahkan buku'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        try {
            return new BookResource($book);
        } catch (Exception $e) {
            Log::error('Error fetching book: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menampilkan buku'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        try {

            $currentYear = Carbon::now()->year;

            $data = $request->validate([
                'title' => 'sometimes|required|string|max:150',
                'author' => 'sometimes|required|string|max:100',
                'year' => 'nullable|integer|max:' . $currentYear,
            ]);

            $book->update($data);

            return new BookResource($book);
        } catch (Exception $e) {
            Log::error('Error updating book: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal mengubah buku'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            $book->delete();

            return response()->json(['message' => 'Buku berhasil dihapus']);
        } catch (Exception $e) {
            Log::error('Error deleting book: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menghapus buku'], 500);
        }
    }
}
