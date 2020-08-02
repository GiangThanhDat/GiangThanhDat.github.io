<?php 
/**
 * 
 */
class huyen extends data
{
	

	public function add($post_request){		
		echo $this->InsertObject("huyen",$post_request);
	}

	public function edit($key,$column,$value){
		$result = $this->execute("UPDATE huyen SET `$column` = '$value' WHERE ma_huyen = $key");
		// echo "UPDATE huyen SET `$column` = '$value' WHERE ma_huyen = $key";
		if($result){
			$result = $this->execute("SELECT * FROM huyen WHERE ma_huyen = '$key'");
			$result = $result->fetch_assoc();
			return json_encode($result);
		}
		return 0;
	}

	public function remove($key){		
		$result = $this->execute("DELETE FROM huyen WHERE ma_huyen = $key");		
		if($result){			
			return 1;	
		}
		return 0;
	}

	public function listAll(){
		$result = $this->execute("SELECT * FROM huyen");
		$list = [];
		if($result){
			while ($row = $result->fetch_assoc()) {
				array_push($list,[
					"ma_huyen"=>$row['ma_huyen'],
					"ten_huyen"=>$row['ten_huyen'],
					"ma_tinhtp"=>$row['ma_tinhtp']
				]);
			}			
			return json_encode($list);
		}
		return 0;
	}

	public function listFkey($fkey){
		$result = $this->execute("SELECT * FROM huyen WHERE ma_tinhtp = '$fkey'");
		$list = [];
		if($result){
			while ($row = $result->fetch_assoc()) {
				array_push($list,[
					"ma_huyen"=>$row['ma_huyen'],
					"ten_huyen"=>$row['ten_huyen'],
					"ma_tinhtp"=>$row['ma_tinhtp']
				]);
			}			
			return json_encode($list);
		}
		return 0;		
	}

	public function getByKey($key){
		$result = $this->execute("SELECT * FROM huyen WHERE ma_huyen = '$key'");
		if($result){
			$huyen = $result->fetch_assoc();
			return json_encode($huyen);
		}
		return 0;
	}
}
 ?>