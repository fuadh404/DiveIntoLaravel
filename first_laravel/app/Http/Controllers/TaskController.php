<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
            [
                'id' => 1,
                'name' => 'Task 1',
                'description' => 'This is Task 1'
            ],
            [
                'id' => 2,
                'name' => 'Task 2',
                'description' => 'This is Task 2'
            ],
            [
                'id' => 3,
                'name' => 'Task 3',
                'description' => 'This is Task 3'
            ],
            [
                'id' => 4,
                'name' => 'Task 4',
                'description' => 'This is Task 4'
            ],
            [
                'id' => 5,
                'name' => 'Task 5',
                'description' => 'This is Task 5'
            ]
        ];

        function index(){
            // return response($this->tasks);
            return response()->json($this->tasks);
        }

        function show($taskId) {
            $actualTask = $taskId - 1;

            if($actualTask <= 0 || $actualTask >= count($this->tasks)){
                // abort(404);
                $result = [
                    'error' => 'Task Not Found'
                ];
                return response()->json($result, 404);
            }

            $task = $this->tasks [$actualTask];
            // return response("Task ID is {$taskId}, And Actual task ID id {$actualTask}");
            return response()->json($task);
        }
}
