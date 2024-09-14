<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('nama_kategori', 'asc')->get();

        return response()->json([
            'status' => 'success',
            'data' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => ['required', 'string', 'unique:categories,nama_kategori']
        ]);

        if ($validated) {
            $category = Category::create([
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => $validated['nama_kategori']
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $category
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'nama_kategori' => ['required', 'string', 'unique:categories,nama_kategori']
        ]);

        if ($validated) {
            $category->update([
                'nama_kategori' => $validated['nama_kategori']
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $category
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return response()->json([
                'status' => 'success'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }
}
