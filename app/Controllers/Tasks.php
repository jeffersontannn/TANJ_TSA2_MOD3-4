<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('task_date', date('Y-m-d'))
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('today', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }

    public function new()
    {
        return view('tasks/new');
    }

    public function create()
    {
        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Title and task date are required.');
        }

        $taskModel = new TaskModel();

        $taskModel->insert([
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status') ?: 'pending',
            'task_date' => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s'),
            'is_archived' => 0
        ]);

        return redirect()->to('/tasks')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('id', $id)
            ->where('is_archived', 0)
            ->first();

        if (!$task) {
            return redirect()->to('/tasks');
        }

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Title and task date are required.');
        }

        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks')->with('success', 'Task updated successfully.');
    }

    public function delete($id)
    {
        $taskModel = new TaskModel();

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks')->with('success', 'Task deleted successfully.');
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}