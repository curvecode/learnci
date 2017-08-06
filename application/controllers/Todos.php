<?php
class Todos extends CI_Controller {

    public function index() {
        $this->load->view("todo");
    }

    public function getTodo() {
        $this->load->model('todos_model');
        $query = $this->todos_model->getAllTodos();
        echo json_encode($query->result());
    }

    public function insertTodo() {
        $data = array(
            'todoName' => $this->input->post('todoName'),
            'userName' => $this->input->post('userName')
        );
        $this->load->model('todos_model');
        return $this->todos_model->insertTodo($data);
    }

    public function removeTodo() {
        $data = $this->input->post('todoName');
        $this->load->model('todos_model');
        return $this->todos_model->removeTodo($data);
    }
}