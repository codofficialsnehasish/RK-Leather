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
		if(is_uploaded_file($_FILES['file']['tmp_name'])) 
        {  
            $mid=$this->mediaupload->doUpload('file');
        }else{
            if($this->input->post('media_id', true)!=''){
                $mid=$this->input->post('media_id', true);
            }else{
                $mid=$this->input->post('hdn_media_id', true);	
            }
            
        }
        $id=1;
		$video = $this->select->select_single_data('video','id',$id);
		// if (!empty($video)) {
			$this->mediaupload->doUploadvideodata('filef',$id,$mid);
			// $data['thumbnail']=$mid;
			// $this->edit_model->edit($data,$id,'id','video');
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