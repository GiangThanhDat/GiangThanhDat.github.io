<?php 

/**
 * 
 */
class tinhtp extends data
{
	public function add($post_request){
		echo $this->InsertObject("tinh_tp",$post_request);
	}

	public function edit($key,$column,$value){
		$result = $this->execute("UPDATE tinh_tp SET `$column` = '$value' WHERE ma_tinhtp = $key");
		// echo "UPDATE tinh_tp SET `$column` = '$value' WHERE ma_tinhtp = $key";
		if($result){
			$result = $this->execute("SELECT * FROM tinh_tp WHERE ma_tinhtp = $key");
			$result = $result->fetch_assoc();
			return json_encode($result);
		}
		return 0;
	}

	public function remove($key){		
		$result = $this->execute("DELETE FROM tinh_tp WHERE ma_tinhtp = $key");		
		echo 'DELETE FROM tinh_tp WHERE ma_tinhtp = $key';
		if($result){				
			return 1;	
		}
		return 0;
	}		
	public function listAll(){
		$result = $this->execute("SELECT * FROM tinh_tp");
		$list = [];
		if($result){
			while ($row = $result->fetch_assoc()) {
				array_push($list,["ma_tinhtp"=>$row['ma_tinhtp'],"ten_tinhtp"=>$row['ten_tinhtp']]);
			}			
			return json_encode($list);
		}
		return 0;		
	}

	public function getByKey($key){
		$result = $this->execute("SELECT * FROM tinh_tp WHERE ma_tinhtp = '$key'");		
		if($result){
			$tinh_tp = $result->fetch_assoc();
			// print_r($tinh_tp);
			return json_encode($tinh_tp);
		}
		return 0;
	}
}