<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends Core_Controller {
    
    function __construct() {
        parent::__construct();
    	// $this->output->enable_profiler(TRUE);
    }
    
		public function all_products()
       {
        $data['title'] ='Products';
		$conditions['returnType'] = 'count';
		$conditions['tblName'] = 'products';
		$totalRec = $this->select->getProducts($conditions);
		$link = base_url("products/");
        $pagination = $this->paginate($link, $totalRec, $this->perPage);
		$conditions1['start'] = $pagination['offset'];
		$conditions1['limit'] = $pagination['per_page'];

        if($this->input->get('sort_by')!=''){
            if($this->input->get('sort_by')=='low_to_high'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'ASC';
            }
            if($this->input->get('sort_by')=='high_to_low'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'DESC';
            }
            if($this->input->get('sort_by')=='latest'){
                $conditions1['order_by'] = 'id';
                $conditions1['order'] = 'DESC';
            }

        }else{
            $conditions1['order_by'] = 'id';
            $conditions1['order'] = 'ASC';
        }

        $conditions1['tblName'] = 'products';
        $data['allproducts'] = $this->select->getProducts($conditions1);
          $cagtegoriesconditions = array(
			'tblName' =>'categories',
			'where' => array('is_visible'=>1,'is_special'=>0)
		);
        $data['cagtegories']= $this->select->getResult($cagtegoriesconditions); //$this->select->select_table('categories','cat_id','asc');
        $data['parentcategories'] = $this->select->get_parent_categories();
        $this->load->view('partials/header', $data);
        $this->load->view('products/listing', $data);
        $this->load->view('partials/footer');
    }

	public function products()
    {
        $slug=$this->uri->segment(2);
        $cat_id="";
        $data = array();
		if($slug!=''){
			$cat_id=get_id_by_name('categories','cat_slug',$slug,'cat_id');	
		}
		if($cat_id!=''){
			$conditions['filter']['category_id'] = $cat_id;
            $conditions1['filter']['category_id'] = $cat_id;
		}
    	//echo $cat_id;die;
        $data['title'] = select_value_by_id('categories','cat_id',$cat_id,'cat_name');
		$conditions['returnType'] = 'count';
		$conditions['tblName'] = 'products';
        // print_r($conditions1);
		$totalRec = $this->select->getProducts($conditions);
		$link = base_url("category/".$slug.'/');
        $pagination = $this->paginate($link, $totalRec, $this->perPage);
		$conditions1['start'] = $pagination['offset'];
		$conditions1['limit'] = $pagination['per_page'];

        if($this->input->get('sort_by')!=''){
            if($this->input->get('sort_by')=='low_to_high'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'ASC';
            }
            if($this->input->get('sort_by')=='high_to_low'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'DESC';
            }
            if($this->input->get('sort_by')=='latest'){
                $conditions1['order_by'] = 'id';
                $conditions1['order'] = 'DESC';
            }

        }else{
            $conditions1['order_by'] = 'id';
            $conditions1['order'] = 'ASC';
        }

		 $conditions1['tblName'] = 'products';
		 // print_r($conditions1);
         // print_r($pagination);
         $data['allproducts'] = $this->select->getProducts($conditions1);
         $cagtegoriesconditions = array(
			'tblName' =>'categories',
			'where' => array('is_visible'=>1,'is_special'=>0)
		);
        $data['cagtegories']= $this->select->getResult($cagtegoriesconditions); //$this->select->select_table('categories','cat_id','asc');
        $data['parentcategories'] = $this->select->get_parent_categories();
        $this->load->view('partials/header', $data);
        $this->load->view('products/listing', $data);
        $this->load->view('partials/footer');
    }

    public function details()
    {
        $slug=$this->uri->segment(2);
        $product_id="";
        $data = array();
		if($slug!=''){
			$product_id=get_id_by_name('products','slug',$slug,'id');	
		}

        $data['title'] = "products";

        $conditions=array(
            'tblName' => 'products',
            'where'   => array(
                'id' => $product_id,
                'is_visible' => 1,
            	'is_draft' => 0
            )
            );
        $allproducts = $this->select->getResult($conditions);
        $data['product']= $allproducts[0];
		$data['product_images']=$this->select->select_single_data('product_images','product_id',$product_id);
        ////////Similar Products
		$sconditions['tblName']='products';
		$sconditions['where']=array(
            'id!='=>$allproducts[0]->id,
            'is_visible'=>1,
            'is_draft' => 0
        );
        if(!empty($allproducts[0]->subcategory_id)){
            $sconditions['where']['subcategory_id']=$allproducts[0]->subcategory_id;
        }else{
            $sconditions['where']['category_id']=$allproducts[0]->category_id; 
        }
		$data['similarproducts']=$this->select->getResult($sconditions);
        //  echo '<pre>';
        // print_r($data['similarproducts']);
        //  echo $allproducts[0]->id;
        //$data['product_variations'] = $this->variation_model->get_full_width_product_variations($allproducts[0]->id);

        $data["half_width_product_variations"] = $this->variation_model->get_half_width_product_variations($allproducts[0]->id);
        $data["full_width_product_variations"] = $this->variation_model->get_full_width_product_variations($allproducts[0]->id);

        $this->load->view('partials/header', $data);
    	
    	$reviewconditions = array(
                'tblName' =>'product_review',
        		'where' => array('product_id'=>$product_id,'status'=>1)
        );
        $data['productReview']=$this->select->getResult($reviewconditions);
        $data['productRating']=$this->select->custom_qry("SELECT rating,count(`rating`) rating_count FROM `product_review` where product_id=".$product_id." group by rating order by rating DESC");
        $this->load->view('products/details/_product_details', $data);
        $this->load->view('partials/footer');
    }

    public function all_products_new()
       {
	    $slug=$this->uri->segment(3);
        $cat_id="";
        $data = array();
		if($slug!=''){
			$cat_id=get_id_by_name('categories','cat_slug',$slug,'cat_id');	
		}
		if($cat_id!=''){
			$conditions['filter']['category_id'] = $cat_id;
            $conditions1['filter']['category_id'] = $cat_id;
		}
        $data['title'] ='Products';
		$conditions['returnType'] = 'count';
		$conditions['tblName'] = 'products';
		$totalRec = $this->select->getProducts($conditions);
		$link = base_url("products/");
        $pagination = $this->paginate($link, $totalRec, $this->perPage);
		$conditions1['start'] = $pagination['offset'];
		$conditions1['limit'] = $pagination['per_page'];

        if($this->input->get('sort_by')!=''){
            if($this->input->get('sort_by')=='low_to_high'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'ASC';
            }
            if($this->input->get('sort_by')=='high_to_low'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'DESC';
            }
            if($this->input->get('sort_by')=='latest'){
                $conditions1['order_by'] = 'id';
                $conditions1['order'] = 'DESC';
            }

        }else{
            $conditions1['order_by'] = 'id';
            $conditions1['order'] = 'ASC';
        }

        $conditions1['tblName'] = 'products';
        $data['allproducts'] = $this->select->getProducts($conditions1);
          $cagtegoriesconditions = array(
			'tblName' =>'categories',
			'where' => array('is_visible'=>1,'is_special'=>0)
		);
        $data['cagtegories']= $this->select->getResult($cagtegoriesconditions); 
      //$this->select->select_table('categories','cat_id','asc');
        $parent_id = get_parentCategory_by_cat_id($cat_id);
		 $parentcatconditions = array(
			'tblName' =>'categories',
			'where' => array('is_visible'=>1,
                             'parent_id'=>$parent_id,
                             'is_special'=>0
                            )
		);
		$data['parentcategories'] = $this->select->getResult($parentcatconditions); 		
        //$data['parentcategories'] = $this->select->get_parent_categories();
        $this->load->view('partials/header', $data);
        $this->load->view('products/listing_new', $data);
        $this->load->view('partials/footer');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////
		public function special_products()
   	    {
        $slug=$this->uri->segment(3);
        $cat_id="";
        $data = array();
		if($slug!=''){
			$cat_id=get_id_by_name('categories','cat_slug',$slug,'cat_id');	
		}
		// if($cat_id!=''){
		// 	$conditions['filter']['category_id'] = $cat_id;
		// $conditions1['filter']['category_id'] = $cat_id;
		// }
		// category_id_in
    	//echo $cat_id;die;
        $productIds = $this->select->custom_qry("select product_id from special_products where cat_id=".$cat_id);
       // json_decode(json_encode($productIds), true);
       // print_r(json_decode(json_encode($productIds), true));
        $productIdsArray = array();
        foreach($productIds as $pId){
        $productIdsArray[] = $pId->product_id;
        }
        $conditions1['filter']['product_ids'] =  $productIdsArray;
        $data['title'] = select_value_by_id('categories','cat_id',$cat_id,'cat_name');
		$conditions['returnType'] = 'count';
		$conditions['tblName'] = 'products';
        // print_r($conditions1);
		$totalRec = $this->select->getProducts($conditions);
		$link = base_url("products/".$slug.'/');
        $pagination = $this->paginate($link, $totalRec, $this->perPage);
		$conditions1['start'] = $pagination['offset'];
		$conditions1['limit'] = 100;

        if($this->input->get('sort_by')!=''){
            if($this->input->get('sort_by')=='low_to_high'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'ASC';
            }
            if($this->input->get('sort_by')=='high_to_low'){
                $conditions1['order_by'] = 'price';
                $conditions1['order'] = 'DESC';
            }
            if($this->input->get('sort_by')=='latest'){
                $conditions1['order_by'] = 'id';
                $conditions1['order'] = 'DESC';
            }

        }else{
            $conditions1['order_by'] = 'id';
            $conditions1['order'] = 'ASC';
        }

		$conditions1['tblName'] = 'products';
		// print_r($conditions1);
       // print_r($pagination);
        $data['allproducts'] = $this->select->getProducts($conditions1);
        
        $cagtegoriesconditions = array(
			'tblName' =>'categories',
			'where' => array('is_visible'=>1,'is_special'=>0)
		);
        $data['cagtegories']= $this->select->getResult($cagtegoriesconditions); //$this->select->select_table('categories','cat_id','asc');
        $this->load->view('partials/header', $data);
        $this->load->view('products/listing', $data);
        $this->load->view('partials/footer');
    }


}