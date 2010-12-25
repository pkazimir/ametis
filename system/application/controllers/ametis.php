<?php
class Ametis extends Controller {
    
    function index() {
        
//        $this->showHeader();
        $this->showDelivery();
    }
    
    function showHeader() {
        
        $this->load->model('ametis_model');
        
        $laMenuItems = $this->ametis_model->getMenu();
        $data['laMenuItems'] = $laMenuItems;

        $this->load->view('header', $data);
    }
    
    /**
    * DELIVERY MODULE
    * 
    */
    
    function showDelivery() {
        
        $this->showHeader();
        
        $this->load->model('delivery_model');
        $this->load->model('ametis_model');
        
        //get groups
        $laFoodGroups = $this->delivery_model->getFoodGroups();
        
        foreach($laFoodGroups as $laFoodGroup) {
            
            $laFoodGroupsSorted[$laFoodGroup['id']] = $laFoodGroup['name'];
            
            //get food for current category
            $laFood = $this->delivery_model->getFood($laFoodGroup['id']);
            
            $laFoodSorted[$laFoodGroup['id']] = $laFood;
        }
        
        $data['laFoodGroups'] = $laFoodGroupsSorted;
        $data['laFood'] = $laFoodSorted;
        $data['laRooms'] = $this->ametis_model->getRooms();
        
        $this->load->view('delivery/delivery', $data);
    }
    
    /**
    * MINIBAR MODULE
    * 
    */
    
    function showMinibar() {
        
        $this->showHeader();
        
        $this->load->view('minibar/minibar');
    }
    
    /**
    * BREAKFAST MODULE
    * 
    */
    
    function showBreakfast($aaBfEditData = array()) {
        
        $this->showHeader();
        
        $this->load->model('breakfast_model');
        $this->load->model('ametis_model');
        
        if ($aaBfEditData)
            $data['laBfEditData'] = $aaBfEditData;
        else
            $data['laBfEditData'] = null;
        $data['laRooms'] = $this->ametis_model->getRooms();
        $data['laBfInfo'] = $this->breakfast_model->getBreakfastInfo();
        
        $this->load->view('breakfast/breakfast', $data);
    }
    
    function saveBreakfast() {
        
        $lsBfRoomId = $this->input->post('bfroom', TRUE);
        $lsBfName = $this->input->post('bfname', TRUE);
        $lsBfWakeup = $this->input->post('bfwakeup', TRUE);
        $lsBfTime = $this->input->post('bftime', TRUE);
        $lsBfInfo = $this->input->post('bfinfo', TRUE);
        
        $this->load->model('breakfast_model');
        
        $this->breakfast_model->saveBreakfastInfo($lsBfRoomId, $lsBfName, $lsBfWakeup, $lsBfTime, $lsBfInfo);
        
        //show screen!
        $this->showBreakfast();
    }
    
    function deleteBreakfast($aiRoomId){
        
        $this->load->model('breakfast_model');
        
        $this->breakfast_model->deleteBreakfastInfo($aiRoomId);
        
        //show screen!
        $this->showBreakfast();
    }
    
    function editBreakfast($aiBfEditId) {
        
        $this->load->model('breakfast_model');
        
        $laBfInfoRow = $this->breakfast_model->getBreakfastInfoRow($aiBfEditId);
        
        //show screen!
        $this->showBreakfast($laBfInfoRow);
    }
    
    /**
    * FILES MODULE
    * 
    */
    
    function showFiles($postData = array()) {
        
        $this->showHeader();
        
        $this->load->helper(array('form', 'url'));
        
        $this->load->model('files_model');
        
        $data = array();
        $data['laFiles'] = $this->files_model->getFiles($this->input->post('keyword'));
        
        $data['lsKeyword'] = $this->input->post('keyword');
        
        if ($postData && $postData['upload_status'] == 'success') {
            $data['liUploadStatus'] = 2;
            $data['laUploadData'] = $postData['upload_data'];
        } elseif ($postData && $postData['upload_status'] == 'failed') {
            $data['liUploadStatus'] = 1;
        } elseif ($postData && $postData['upload_status'] == 'exists') {
            $data['liUploadStatus'] = 3;
        } else {
            $data['liUploadStatus'] = 0;
        }
        
        $this->load->view('files/files', $data);
    }
    
    function uploadFiles() {
        
        $lsInfo = $this->input->post('info', TRUE);
        
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'all';

        $this->load->library('myupload', $config);
        $this->load->model('files_model');
        
        $postData = array();
        
        if (! $this->myupload->testIfExists()) {
            if ( ! $result = $this->myupload->do_upload())
            {
                $postData['upload_status'] = 'failed';
                $this->showFiles($postData);
            }    
            else
            {
                $fileData = $this->myupload->data();
                $this->files_model->addFile($fileData['file_name'], $lsInfo);
                $postData['upload_status'] = 'success';
                $postData['upload_data'] = $fileData;
            }
        } else {
            $postData['upload_status'] = 'exists';    
        }
        $this->showFiles($postData);
    }
    
    function deleteFile($id, $filename) {
        
        $this->load->model('files_model');
        
        $this->files_model->deleteFile($id);
        @$del = unlink("uploads/".$filename);
        
        $this->showFiles();
    }
    
    function searchFiles() {
        
        $lsSearchStr = $this->input->post('keyword');
        
        $this->showFiles();
    }
}
?>
