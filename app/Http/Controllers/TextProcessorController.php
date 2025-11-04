<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class TextProcessorController extends Controller
{
    public function index()
    {
        $article = Article::first();
        return view('text', compact('article'));
    }

    public function search(Request $request)
    {
        $request->validate(['keyword' => 'required|string']);

        $article = Article::first();
        $keyword = strtolower($request->keyword);

        $count = substr_count(strtolower($article->content), $keyword);

        return view('text', [
            'article' => $article,
            'result' => "Kata '{$request->keyword}' ditemukan {$count} kali.",
        ]);
    }

    public function replace(Request $request)
    {
        $request->validate([
            'old_word' => 'required|string',
            'new_word' => 'required|string',
        ]);

        $article = Article::first();
        $updatedContent = str_ireplace($request->old_word, $request->new_word, $article->content);

        $article->update(['content' => $updatedContent]);

        return view('text', [
            'article' => $article,
            'result' => "Kata '{$request->old_word}' berhasil diganti menjadi '{$request->new_word}'.",
        ]);
    }

    public function sortWords()
    {
        $article = Article::first();

        $words = preg_split('/[\s,.\n]+/', strtolower($article->content), -1, PREG_SPLIT_NO_EMPTY);
        sort($words);

        return view('text', [
            'article' => $article,
            'sortedWords' => $words,
        ]);
    }
}
