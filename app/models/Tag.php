<?php


class Tag
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTags()
    {
        $this->db->query('SELECT * FROM tags');
        $result = $this->db->getAll();
        return $result;
    }
    
      public function getTagById($id)
    {
        $this->db->query('SELECT * FROM tags WHERE id=:id');
        $this->db->bind(':id', $id);
        $post = $this->db->getOne();
        return $post;
    }

    public function getPostTags($id){
        $this->db->query('
        SELECT*FROM tags 
        INNER JOIN post_tags 
        ON post_tags.tag_id=tags.id
        WHERE post_tags.post_id=:id'
        );
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
    }

}
