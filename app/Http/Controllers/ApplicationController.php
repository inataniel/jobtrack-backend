<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return Application::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'status' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $application = Application::create($validated);

        return response()->json($application, 201);
    }

    public function show($id)
    {
        return Application::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $application = Application::findOrFail($id);
        $application->update($request->all());
        return response()->json($application, 200);
    }

    public function destroy($id)
    {
        Application::destroy($id);
        return response()->json(null, 204);
    }
}