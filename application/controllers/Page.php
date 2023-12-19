<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Core_Controller {

	public function pages($slug)
	{
		$conditions = array(
			'tblName' =>'pages',
			'where' => array('is_visible'=>1,'page_slug'=>$slug)
		);
		$result=$this->select->getResult($conditions);
		
		$this->load->view('partials/header');
		if(!empty($result)){
			$data['page'] = $result[0];
			$this->load->view('template/'.$result[0]->page_template,$data);
		}else{
			$this->load->view('template/notFound');
		}
		$this->load->view('partials/footer');

	}
}
