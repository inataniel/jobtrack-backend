<?php

namespace App\Services;

use App\Models\Application;
use Illuminate\Support\Collection;

class ApplicationService
{
    public function listForUser(int $userId)
    {
        return Application::where('user_id', $userId)
            ->orderByDesc('created_at')
            ->get();
    }

    public function createForUser(int $userId, array $data)
    {
        return Application::create([
            ...$data,
            'user_id' => $userId,
        ]);
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