<?php
	// Lớp database
	class HuyDB
	{
		private static $huy_db = null;
		// Các biến thông tin kết nối
		private $hostname = "localhost",
				$username = "root",
				$password = "",
				$dbname = "articles";


		// Biến lưu trữ kết nối
		private $cn = NULL;
		// Hàm kết nối
		public function Connect()
		{
			$this->cn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
		}

		// Hàm ngắt kết nối
		public function Close()
		{
			if ($this->cn)
			{
				mysqli_close($this->cn);
			}
		}
		public function Cn()
		{
			return $this->cn;
		}
		// Hàm truy vấn
		public function Query($sql = null) 
		{	
			$result = null;	
			if ($this->cn)
				$result = mysqli_query($this->cn, $sql);
			return $result;
		}

		// Hàm đếm số hàng
		public function Num_rows($sql = null) 
		{
			$row = 0;
			if ($this->cn)
			{
				$query = mysqli_query($this->cn, $sql);
				if ($query)
					$row = mysqli_num_rows($query);
			}	
			return $row;	
		}		
		//Lấy nhiều dữ liệu gán vào mảng
		public function Fetch_Assoc($sql = null)
		{
			$data = null;
			if ($this->cn)
			{
				mysqli_set_charset($this->cn, 'UTF8');
				$query = mysqli_query($this->cn, $sql);
				if ($query)
				{
					while ($row = mysqli_fetch_assoc($query))
					{
						$data[] = $row;
					}
				}		
			}else{
				echo "not connect!";
			}
			return  $data;
		}
		// Lấy một hàng dữ liệu gán vào biến
		public function Fetch_Assoc_One($sql = null)
		{
			$data = null;
			if ($this->cn)
			{
				$query = mysqli_query($this->cn, $sql);
				if ($query)
					$data = mysqli_fetch_assoc($query);
			}
			return $data;
		}

		// Hàm lấy ID cao nhất
		public function Insert_ID()
		{
			$count = 1;
			if ($this->cn)
			{
				$count = mysqli_insert_id($this->cn);
				if ($count == '0')
					$count = '1';
				else
					$count = $count;
			}
			return $count;
		}

		// Hàm charset cho database
		public function Set_Char($uni)
		{
			if ($this->cn)
			{
				mysqli_set_charset($this->cn, $uni);
			}
		}

		public static function GetHuyDB()
		{
			if(empty(self::$huy_db))
			{
				self::$huy_db = new HuyDB();
				self::$huy_db->Connect();
			}
			return self::$huy_db;
		}
		public static function CloseHuyDB()
		{
			if(empty(self::$huy_db))
				return;
			self::$huy_db->Close();
			self::$huy_db = null;
		}
	}
?>