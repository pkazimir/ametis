<?php
class Delivery_model extends Model {
    
    function getFoodGroups() {
        
        $laFoodGroups = $this->db->query('SELECT * FROM food_groups ORDER BY id');
        
        return $laFoodGroups->result_array();
    }
    
    function getFood($liGroup) {
        
        $laFood = $this->db->query('SELECT * FROM food WHERE id_group = '.$liGroup);
        
        return $laFood->result_array();
    }
}
?>
