<?php


class Note
{
    private $id;
    private $name;
    private $text;
    private $user_id;
    private $db;

    function __construct($note_id)
    {
        $this->id = $note_id;
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
        $query = "SELECT * FROM `notes` WHERE `id` LIKE '" . $this->id . "'";
        $this->user_id =  $this->db->select($query)[0]['user_id'];
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    public  function  update($newName, $newDate, $newText){
        $query = "UPDATE `notes` SET `name` = '" . $newName . "', `text` = '" . $newText . "', `date_create` = '" . $newDate . "' WHERE `notes`.`id` LIKE '" . $this->id . "'";
        $this->db->query($query);
        return $query;
    }

    public function delete(){
        $this->db->query("DELETE FROM `notes` WHERE `id` LIKE '".$this->id."'" );
    }

    public function add($name, $text, $user_id){
        $arrayToInsert = array(
            'name' => $name,
            'user_id' => $user_id,
            'text' => $text
        );
        $this->db->insert('notes', $arrayToInsert);

    }


    public function edit(){

    }

}