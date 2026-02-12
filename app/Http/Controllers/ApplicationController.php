<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\ApplicationService;

use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;

class ApplicationController extends Controller
{
    public function __construct(
        private ApplicationService $service
    ) {}

    public function index()
    {
        $userId = auth()->id();

        return response()->json(
            $this->service->listForUser($userId)
        );
    }

    public function store(StoreApplicationRequest $request)
    {
        $userId = auth()->id();

        $application = $this->service->createForUser(
            $userId,
            $request->validated()
        );

        return response()->json($application, 201);
    }

    public function show($id)
    {
        return Application::findOrFail($id);
    }

    public function update(UpdateApplicationRequest $request, Application $application)
    {
        $updated = $this->service->update(
        $application,
        $request->validated()
        );

        return response()->json($updated);
    }

    public function destroy(Application $application)
    {
        $this->service->delete($application);

        return response()->json(null, 204);
    }

    public function destroyAll()
    {
        $this->service->deleteAll();

        return response()->json([
            'message' => 'All applications deleted'
        ]);
    }
}