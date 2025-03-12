<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function processBooks()
    {
        // Create a multidimensional array of books
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'Scott Fitzgerald',
                'price' => 10.99,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper',
                'price' => 12.50,
            ],
            [
                'title' => '1984',
                'author' => 'George',
                'price' => 9.99,
            ],
        ];

        // Update the price of the second book
        $books[1]['price'] = 15.00;

        // Return results to Blade view
        return view('book-results', [
            'books' => $books,
        ]);
    }
}
