<?php
require 'restful_api.php';
require 'HuyDB.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}

	function catalog(){
		if ($this->method == 'GET'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			$query = "SELECT category_id,category_name FROM categories";

			$data = $huy_db->Fetch_Assoc($query);

			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'POST'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			$query = "SELECT category_id,category_name FROM categories";

			$data = $huy_db->Fetch_Assoc($query);

			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'PUT'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			$query = "SELECT category_id,category_name FROM categories";

			$data = $huy_db->Fetch_Assoc($query);

			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'DELETE'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			$query = "SELECT category_id,category_name FROM categories";

			$data = $huy_db->Fetch_Assoc($query);

			 
			$this->response(200, $data);
		}
	}

	function list_artical_by_id(){
		if ($this->method == 'GET'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$id_cat= $this->params[0];
				$query =  "SELECT `article_id`,`title`,`sub_content`,`author`,`date_posted`,`picture` FROM `article` WHERE category_id = ".$id_cat;
			}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'POST'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$id_cat= $this->params[0];
				$query =  "SELECT `article_id`,`title`,`sub_content`,`author`,`date_posted`,`picture` FROM `article` WHERE category_id = ".$id_cat;
			}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'PUT'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$id_cat= $this->params[0];
				$query =  "SELECT `article_id`,`title`,`sub_content`,`author`,`date_posted`,`picture` FROM `article` WHERE category_id = ".$id_cat;
			}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'DELETE'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$id_cat= $this->params[0];
				$query =  "SELECT `article_id`,`title`,`sub_content`,`author`,`date_posted`,`picture` FROM `article` WHERE category_id = ".$id_cat;
			}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
	}

	function get_artical(){
		if ($this->method == 'GET'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'POST'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'PUT'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'DELETE'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
	}

	function get_relate(){
		if ($this->method == 'GET'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$cate_id = $this->params[1];
				$query ="SELECT `article_id`,`title`,`sub_content`,`author`,`date_posted`,`picture` FROM `article` WHERE category_id =".$cate_id. " AND article_id!=".$article_id;
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'POST'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'PUT'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'DELETE'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
	}
	
	function get_comments(){
		if ($this->method == 'GET'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `user_name`,`content`,`date-time` FROM `comment` WHERE article_id=".$article_id . " ORDER BY `date-time` DESC LIMIT 5";
  
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'POST'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'PUT'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
		elseif ($this->method == 'DELETE'){
			$huy_db = HuyDB::GetHuyDB();
			$huy_db->Connect();

			if(isset($this->params) && !empty($this->params)){
				$article_id= $this->params[0];
				$query = "SELECT `category_id`,`article_id`,`title`,`sub_content`,`author`,`date_posted`,`content`,`picture`,`tags` FROM `article` WHERE article_id = " . $article_id;	
					
				}
			$data = $huy_db->Fetch_Assoc($query);
			 
			$this->response(200, $data);
		}
	}
	
}

$user_api = new api();

?>
