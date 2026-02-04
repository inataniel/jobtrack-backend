<?php

namespace App\Services;

use App\Models\Application;
use Illuminate\Support\Collection;

class ApplicationService
{
    public function list(): Collection
    {
        return Application::orderByDesc('created_at')->get();
    }

    public function create(array $data): Application
    {
        return Application::create($data);
    }

    public function update(Application $application, array $data): Application
    {
        $application->update($data);

        return $application;
    }

    public function delete(Application $application): void
    {
        $application->delete();
    }

    public function deleteAll(): void
    {
        Application::query()->delete();
    }
}