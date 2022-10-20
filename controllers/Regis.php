<?php  

  
class Regis extends CI_Controller {  
      
    public function __construct()
    {  
        parent:: __construct();
        $this->load->database();
        $this->load->model("reg_model");  
    }  
    public function savedata()  
    $this->load->view('')
        //this array is used to get fetch data from the view page.  
        if($this->input->post('save')){
       
                       $data ['name'] =$this->input->post('name'),  
                       $data ['photo']  => $this->input->post('photo'),  
                       $data ['email']   => $this->input->post('email'),  
                       $data ['phone'] => $this->input->post('phone') , 
                       $data ['address'] => $this->input->post('address') ,
                       $data['city'] => $this->input->post('city') ,
                       $data ['state'] => $this->input->post('state') 
                       $response =$this->curd->saverecords($data)
                           if($response==true){
                            echo "inserted successfully";
                           }else {
                            echo "inserted failed";
                           }
           
                }  
            }  
            ?>  