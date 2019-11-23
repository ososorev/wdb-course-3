<?php


class Note
{
    private $name;
    private $text;
    private $user_id;
    private $db;

    function __construct($name, $text, $user_id)
    {
        $this->name = $name;
        $this->text = $text;
        $this->user_id = $user_id;
        $this->db = new DataBase('localhost', 'root', '', 'users');

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


    public function delete(){


    }

    public function add(){
        $arrayToInsert = array(
            'name' => $this->name,
            'user_id' => $this->user_id,
            'text' => $this->text
        );
        $this->db->insert('notes', $arrayToInsert);

    }


    public function edit(){

    }

}