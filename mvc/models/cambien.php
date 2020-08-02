<?php 
/**
 * 
 */
class cambien extends data
{
	

	public function add($post_request){		
		echo $this->InsertObject("cambien",$post_request);
	}

	public function edit($key,$column,$value){
		$result = $this->execute("UPDATE cambien SET `$column` = '$value' WHERE ma_cambien = $key");
		// echo "UPDATE cambien SET `$column` = '$value' WHERE ma_cambien = $key";
		if($result){
			$result = $this->execute("SELECT * FROM cambien WHERE ma_cambien = '$key'");
			$result = $result->fetch_assoc();
			return json_encode($result);
		}
		return 0;
	}

	public function remove($key){		
		$result = $this->execute("DELETE FROM cambien WHERE ma_cambien = $key");		
		if($result){			
			return 1;	
		}
		return 0;
	}

	public function listAll(){
		$result = $this->execute("SELECT * FROM cambien");
		$list = [];
		if($result){
			while ($row = $result->fetch_assoc()) {
				array_push($list,["ma_cambien"=>$row['ma_cambien'],"ten_cambien"=>$row['ten_cambien']]);
			}			
			return json_encode($list);
		}
		return 0;
	}

	public function getByKey($key){
		$result = $this->execute("SELECT * FROM cambien WHERE ma_cambien = '$key'");
		if($result){
			$cambien = $result->fetch_assoc();
			return json_encode($cambien);
		}
		return 0;
	}
}
 ?>