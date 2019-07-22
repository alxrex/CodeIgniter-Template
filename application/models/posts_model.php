<?php
class Posts_model extends CI_Model {

    public $titulo;
    public $fecha_publicacion;
    public $contenido;

    public function get_last_ten_entries()
    {
            $query = $this->db->get('posts', 10);
            return $query->result();
    }

    public function insert(){
        
        $this->titulo = $this->input->post('title');
        $this->fecha_publicacion = $this->input->post('fecha_publicacion');
        $this->contenido = $this->input->post('contenido');
        $this->db->insert('posts',$this);
    }

    public function insert_entry()
    {
            $this->title    = $_POST['titulo']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('posts', $this, array('id' => $_POST['id']));
    }

    
    public function getAll(){
            return $this->db->get('posts');
    }

}