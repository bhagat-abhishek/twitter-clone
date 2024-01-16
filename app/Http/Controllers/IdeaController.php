<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:150'
        ]);

        Idea::create([
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard')->with('success', 'Idea created successfully.');
    }
}
