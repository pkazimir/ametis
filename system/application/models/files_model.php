<?php
class Files_model extends Model {

    function __construct() {
        
        parent::Model();
        
        $this->load->database();
    }
    
    function getFiles($keyword = null) {
        
        $sql = 'SELECT * FROM files';
        
        if ($keyword) {
            $search = ' WHERE name LIKE \'%'.$keyword.'%\' OR info LIKE \'%'.$keyword.'%\' OR date LIKE \'%'.$keyword.'%\'';
            $sql = $sql . $search;
        }
        
        $laFiles = $this->db->query($sql);
        
        return $laFiles->result_array();
    }
    
    function addFile($filename, $info) {
        
        return $this->db->query('INSERT INTO files (name, info, date) VALUES (\''.$filename.'\', \''.$info.'\', NOW())');
    }
    
    function deleteFile($id) {
        
        return $this->db->query('DELETE FROM files WHERE id_file = '.$id);
    }
}  
?>
