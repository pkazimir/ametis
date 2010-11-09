<?php
class Breakfast_model extends Model {
    
    function __construct() {
        
        parent::Model();
        
        $this->load->database();
    }
    
    function getBreakfastInfo() {
        
        $laQuery = $this->db->query('SELECT b.id, b.room, a.guestname, a.wakeup, a.bftime, a.info, a.id_room 
                                    FROM breakfast a, rooms b 
                                    WHERE a.id_room = b.id');
        
        return $laBfInfo = $laQuery->result();
    }
    
    function getBreakfastInfoRow($aiBfEditId) {
        
        $laQuery = $this->db->query('SELECT id_room, guestname, wakeup, bftime, info
                                    FROM breakfast
                                    WHERE id_room = '.$aiBfEditId);
        
        return $laBfInfo = $laQuery->row();
    }
    
    function saveBreakfastInfo($asBfRoomId, $asBfName, $asBfWakeup, $asBfTime, $asBfInfo) {
        
        //if fields are empty
        if (!$asBfName && !$asBfWakeup && !$asBfTime && !$asBfInfo) return;
        
        //check if already exists in the DB
        $checkDB = $this->db->query('SELECT * FROM breakfast WHERE id_room = '.$asBfRoomId);
        if ($checkDB->result()) {
            $sql = "UPDATE breakfast SET guestname = \"$asBfName\", wakeup = \"$asBfWakeup\", bftime = \"$asBfTime\", info = \"$asBfInfo\" WHERE id_room = $asBfRoomId";
            return $this->db->query($sql);
        }else{
            return $this->db->query('INSERT INTO breakfast (id_room, guestname, wakeup, bftime, info) VALUES ('.$asBfRoomId.',
                                                                                                             \''.$asBfName.'\', 
                                                                                                             \''.$asBfWakeup.'\', 
                                                                                                             \''.$asBfTime.'\', 
                                                                                                             \''.$asBfInfo.'\')');
        }
        
    }
    
    function deleteBreakfastInfo($aiRoomId) {
        
       return $this->db->query('DELETE FROM breakfast WHERE id_room = '.$aiRoomId); 
    }
}
?>