<?php

namespace App\Repositories;

use App\User;

class TaskRepository
{
    function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}