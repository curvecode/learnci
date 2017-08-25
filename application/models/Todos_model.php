<?php
class Todos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    /**
     * Add comment to function
     * Get all todo list
     **/
    public function getAllTodos() {
        return $this->db->get("todos");
    }

    /**
     * Insert a todo element
     **/
    public function insertTodo($data) {
        return $this->db->insert("todos", $data);
    }

    public function removeTodo($data) {
        $this->db->delete('todos', array('todoName' => $data));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        // $this->db->where('todoName', $data);
        // return $this->db->delete('todos');
    }
}