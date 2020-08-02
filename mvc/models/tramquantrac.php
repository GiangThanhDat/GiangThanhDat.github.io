

<?php 
/**
 * 
 */
class tramquantrac extends data
{

	public function add($post_request){		
		echo $this->InsertObject("tramquantrac",$post_request);
	}

	public function edit($key,$column,$value){
		$result = $this->execute("UPDATE tramquantrac SET `$column` = '$value' WHERE ma_tram = '$key'");
		// echo "UPDATE tramquantrac SET `$column` = '$value' WHERE ma_tram = $key";
		if($result){
			$result = $this->execute("SELECT * FROM tramquantrac WHERE ma_tram = '$key'");
			$result = $result->fetch_assoc();
			return json_encode($result);
		}
		return 0;
	}

	public function remove($key){		
		$result = $this->execute("DELETE FROM tramquantrac WHERE ma_tram = '$key'");		
		if($result){			
			return 1;	
		}
		return 0;
	}

	public function listAll(){
		$result = $this->execute("SELECT * FROM tramquantrac LEFT JOIN `huyen` ON (`tramquantrac`.`ma_huyen` = `huyen`.`ma_huyen`) LEFT JOIN `tinh_tp` ON (`huyen`.`ma_tinhtp` = `tinh_tp`.`ma_tinhtp`)");
		$list = [];
		if($result){
			while ($row = $result->fetch_assoc()) {
				array_push($list,[
					"ma_tram"=>$row['ma_tram'],
					"ten_tram"=>$row['ten_tram'], 
					"chitietdiachi_tram" => ($row['chitietdiachi_tram']. ", Huyện " . $row['ten_huyen'] . ", Tỉnh " . $row['ten_tinhtp'] ),
					"taikhoan_nql"=>$row['taikhoan_nql']
				]);
			}			
			return json_encode($list);	
		}
		return 0;
	}

	public function getByKey($key){
		$result = $this->execute("SELECT * FROM tramquantrac  LEFT JOIN `huyen` ON (`tramquantrac`.`ma_huyen` = `huyen`.`ma_huyen`) LEFT JOIN `tinh_tp` ON (`huyen`.`ma_tinhtp` = `tinh_tp`.`ma_tinhtp`) WHERE ma_tram = '$key'");
		if($result){
			$tramquantrac = $result->fetch_assoc();
			return json_encode($tramquantrac);
		}
		return 0;
	}
}
 ?>