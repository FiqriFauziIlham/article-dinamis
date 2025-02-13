<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): JsonResponse
    {
        $articles = Article::all(); // Mendapatkan semua artikel
        return response()->json($articles);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article = Article::create($validated);

        return response()->json([
            'message' => 'Article created successfully',
            'article' => $article
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        return response()->json($article);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
        ]);

        $article->update($validated);

        return response()->json([
            'message' => 'Article updated successfully',
            'article' => $article
        ]);
    }

    public function destroy($id): JsonResponse
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        $article->delete();

        return response()->json(['message' => 'Article deleted successfully']);
    }
}
