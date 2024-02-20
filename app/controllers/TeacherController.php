<?php

namespace App\Controllers;

use App\Models\Teacher;

class TeacherController extends BaseController implements InterfaceController
{
    protected $model;
    public function __construct()
    {
        $this->model = new Teacher;
    }

    public function getTeacher()
    {
        $views = 'teacher.index';
        $data = ['teachers' => $this->model->getAll()];
        return $this->render($views, $data);
    }
    public function create()
    {
        $view = "teacher.create";
        $data = [];
        return $this->render($view, $data);
    }
    public function add()
    {
        $postData = [
            'name' => $_POST["name"],
            'email' => $_POST["email"],
            'salary' => $_POST["salary"],
            'school' => $_POST["school"]
        ];

        $this->model->create($postData);
        $url = BASE_URL;
        header("location: $url");
    }
    public function destroy($id)
    {
        $this->model->delete($id);
        $url = BASE_URL;
        header("location: $url");
    }

    public function edit($id)
    {
        $view = "teacher.edit";
        $data = ['teachers' => $this->model->getById($id)];

        return $this->render($view, $data);
    }
    public function update($id)
    {
        $currentTeacher = $this->model->getById($id);

        $postData = [
            'name' => $_POST["name"] ?? $currentTeacher->name,
            'email' => $_POST["email"] ?? $currentTeacher->email,
            'salary' => $_POST["salary"] ?? $currentTeacher->salary,
            'school' => $_POST["school"] ?? $currentTeacher->school
        ];
        $this->model->update($id, $postData);
        $url = BASE_URL;
        header("location: $url");
    }
}
