<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends Core_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->is_not_logged_in();
		$this->table_name='video';
		$this->view_path='admin/video/';
		//$this->output->enable_profiler(TRUE);
		
	}

	public function index()
	{
		$header['pagecss']="contentCss";
		$header['title']='Video';
		$this->load->view('admin/partials/header',$header);
		$data['allitems']=$this->select->select_single_data('video','id',1);
		$this->load->view($this->view_path.'content',$data);
		$script['pagescript']='contentScript';
		$this->load->view('admin/partials/footer',$script);
	}
    public function process()
	{
		// echo $_FILES['file']['tmp_name'];
		if(is_uploaded_file($_FILES['file']['tmp_name'])) 
        {  
            $data['thumbnail']=$this->mediaupload->doUpload('file');
        }else{
            if($this->input->post('media_id', true)!=''){
                $data['thumbnail']=$this->input->post('media_id', true);
            }else{
                $data['thumbnail']=$this->input->post('hdn_media_id', true);	
            }
            
        }
        $id=1;
		// $video = $this->select->select_single_data('video','id',$id);
		$this->edit_model->edit($data,1,'id','video');
		$this->mediaupload->doUploadvideodata('filef',$id);
		// if (!empty($video)) {
			// $data['thumbnail']=$mid;
			// $this->edit_model->edit(array('is_main'=>1),$this->input->post('file_id'),'file_id','video');	
		// }else{
		// 	$this->mediaupload->doUploadProductImages($this->file_name,$this->input->post('product_id'),$this->input->post('file_id'));
        //         $data=array('is_main'=>0);
        //         $this->edit_model->edit($data,$product_id,'product_id','product_images');
        //         $this->edit_model->edit(array('is_main'=>1),$this->input->post('file_id'),'file_id','product_images');	
		// }
		redirect($this->agent->referrer());
	}

}