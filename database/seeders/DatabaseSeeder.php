<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ChildTask;
use App\Models\Folder;
use App\Models\ListTasks;
use App\Models\Priority;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(20)->create();
        Category::factory(10)->create();
        Folder::factory(10)->create();
        Priority::factory(3)->create();
        ListTasks::factory(100)->create();
        Task::factory(100)->create();
        ChildTask::factory(50)->create();

    }
}
