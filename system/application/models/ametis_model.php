<?php
  class Ametis_model extends Model {
      
      function getMenu() {
          
          $this->load->database();
          
          $laQuery = $this->db->query('SELECT * FROM menu', '', TRUE);
          
          return $laMenuItems = $laQuery->result();
      }
      
      function getRooms() {
        
        //get all rooms in the hotel
        $laQuery = $this->db->query('SELECT id, room FROM rooms');
        
        $laRooms = $laQuery->result();
        
        foreach($laRooms as $laRoom) {
            $temp[$laRoom->id] = $laRoom->room;
        }
        $laRooms = (array)null;
        $laRooms = $temp;
                
        return $laRooms;
    }
  }
?>
