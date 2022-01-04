<?php
namespace App\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BooksTable extends Controller
{
    /**
     * Show a list of all of the application's books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('books')->get();

        return view('books.display', ['books' => $books]);
    }
}
