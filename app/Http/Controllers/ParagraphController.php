<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParagraphController extends Controller
{
    public function showForm()
    {
        // Display the form to input a paragraph
        return view('paragraph-form');
    }

    public function processParagraph(Request $request)
    {
        // Validate the input
        $request->validate([
            'paragraph' => 'required|string|min:500',
        ]);

        // Get the paragraph from the form
        $paragraph = $request->input('paragraph');

        // Count the total number of words
        $wordCount = str_word_count($paragraph);

        // Find the most repeated word
        $words = str_word_count($paragraph, 1); // Convert paragraph to an array of words
        $wordFrequency = array_count_values($words); // Count frequency of each word
        arsort($wordFrequency); // Sort by frequency in descending order
        $mostRepeatedWord = array_key_first($wordFrequency);

        // Find the first and last word
        $wordsArray = explode(' ', $paragraph);
        $firstWord = $wordsArray[0];
        $lastWord = end($wordsArray);

        // Return results to Blade view
        return view('paragraph-results', [
            'paragraph' => $paragraph,
            'wordCount' => $wordCount,
            'mostRepeatedWord' => $mostRepeatedWord,
            'firstWord' => $firstWord,
            'lastWord' => $lastWord,
        ]);
    }
}
