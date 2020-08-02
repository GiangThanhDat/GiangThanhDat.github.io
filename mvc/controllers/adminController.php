<?php 
/**
 * 
 */
class adminController extends controller
{
	
	function __construct()
	{		
	}



	function index(){		
		$this->show("dailuongdo");
	}

	private $AttachModel = [	
		"dailuongdo"=>["donvido"],
		"huyen"		=>["tinhtp"],
		"tinhtp"	=>["huyen"],
		"nguoiquanly"=>["tinhtp","huyen"],
		"tramquantrac"=>["tinhtp","huyen","cambien","dailuongdo"]
	];

	/**
	*  Xây dưng các Action 
	*/


	//dùng để show tất cả obj của một model
	function show($model){
		$modelObject = $this->model($model);	
		$nguoiquanlyObject = $this->model("nguoiquanly");

		// thông tin mặc định cho một trang show
		$model_view = strtolower($model)."-view";		
		$pages		= "list-all";
		$myList		= $modelObject->listAll();				
		$nguoiquanlyObj = $nguoiquanlyObject->getByKey($_SESSION['taikhoan_nql'],$_SESSION['adm']);
		
		$data = [
			"model-view" =>$model_view, // cambien-view
			"model"		 =>$model, // CamBien
			"pages"		 =>$pages,
			"myList"	 =>$myList,			
			"nql_obj"	 =>$nguoiquanlyObj
		];

		//thông tin bổ sung nếu có
		if(array_key_exists($model,$this->AttachModel)){
			$attachModelNames = $this->AttachModel[$model];
			// sẽ lưu các obj là một danh sách đi kèm với key là tên model và value là danh sách dạng json
			$attachLists = [];
			foreach ($attachModelNames as $value) {				
				$attachObject 	 = $this->model($value);
				$attachLists[$value]=$attachObject->listAll();				
				// var_dump($attachLists);
			}
			// print_r($attachLists);
			$data['attachLists'] = $attachLists;
		}
		if($modelObject){
			$this->view("masterLayout",$data);			
		}
	}


	function add($model){ 		
		$modelObject = $this->model($model);
		$nguoiquanlyObject = $this->model("nguoiquanly");
		// thông tin mặc định cho một trang show
		$model_view = strtolower($model)."-view";		
		$pages		= "add-form";		
		$nguoiquanlyObj = $nguoiquanlyObject->getByKey($_SESSION['taikhoan_nql'],$_SESSION['adm']);
		$data = [
			"model-view"=>$model_view, // cambien-view
			"model"		=>$model, // CamBien
			"pages"		=>$pages,
			"nql_obj"	=>$nguoiquanlyObj
		];
	
		//thông tin bổ sung nếu có (danh sách bổ sung theo model)
		if(array_key_exists($model,$this->AttachModel)){
			$attachModelNames = $this->AttachModel[$model];
			// sẽ lưu các obj là một danh sách đi kèm với key là tên model và value là danh sách dạng json
			$attachLists = [];
			foreach ($attachModelNames as $key => $value) {				
				$attachObject 	 = $this->model($value);
				$attachLists[$value]=$attachObject->listAll();				
			}
			$data['attachLists'] = $attachLists;
		}
		if($modelObject){
			$this->view("masterLayout",$data);			
		}
	}

	//Dùng để show thông tin chi tiết của một obj nhưng chỉ được xem không cho phép sửa thông
	function detail($model, $key){		
		$modelObject = $this->model($model,$_SESSION['adm']);
		$nguoiquanlyObject = $this->model("nguoiquanly"); // mặc định vì phải có vì phải đang nhập mới sử dụng được hệ thống
		// thông tin mặc định cho một trang show
		$model_view = strtolower($model)."-view";		
		$pages		= "detail";
		$obj		= $modelObject->getByKey($key);

		$nguoiquanlyObj = $nguoiquanlyObject->getByKey($_SESSION['taikhoan_nql'],$_SESSION['adm']);
		$data = [
			"model-view"=>$model_view, // cambien-view
			"model"		=>$model, // CamBien
			"pages"		=>$pages,	
			"obj"		=>$obj,
			"nql_obj"   =>$nguoiquanlyObj
		];
		//thông tin bổ sung nếu có (danh sách bổ sung theo model)
		if(array_key_exists($model, $this->AttachModel)){
			$attachModelNames = $this->AttachModel[$model];			
			if (count($attachModelNames) > 1) { // có nhiều danh sách kèm theo
				// sẽ lưu các obj là một danh sách đi kèm với key là tên model và value là danh sách dạng json
				$attachLists = [];
				foreach ($attachModelNames as $value) {				
					$attachObject 	 = $this->model($value);
					$attachLists[$value]=$attachObject->listAll();						
				}
				// print_r($attachLists);
				$data['attachLists'] = $attachLists;	
			}else{ // chỉ một, biểu diễn dạng datatable
				$attachObject = $this->model($attachModelNames[0]); // danh sách đính kèm

				 // lấy danh sách những thằng(obj) ở attachModel thuộc obj hiện tại của $model chính dựa trên key của nó
				$attachList = $attachObject->listFkey($key);				
				// dùng datatable hiển thị nhiều thằng(obj) của attachModel thuộc obj hiện tại của model chính nên dùng myList
				$data['myList'] = $attachList; 				
			}
		}

		if($modelObject){
			$this->view("masterLayout",$data);			
		}
	}

	//dùng để show thông tin chi tiết một obj và có thể sửa được các trường thông tin của obj đó
	function edit($model,$key){
		$modelObject = $this->model($model);
		$nguoiquanlyObject = $this->model("nguoiquanly");

		$model_view = strtolower($model) . '-view';
		$model = strtolower($model);
		$pages = "edit";
		$obj = $modelObject->getByKey($key);
		$nguoiquanlyObj = $nguoiquanlyObject->getByKey($_SESSION['taikhoan_nql'],$_SESSION['adm']);
		$data = [
			"model-view" => $model_view,
			"model" 	 => $model,
			"pages"  	 => $pages,
			"obj"		 => $obj, // edit thì gửi thêm obj
			"nql_obj"	 => $nguoiquanlyObj
		];
		if(array_key_exists($model,$this->AttachModel)){
			$attachModelNames = $this->AttachModel[$model];
			// sẽ lưu các obj là một danh sách đi kèm với key là tên model và value là danh sách dạng json
			$attachLists = [];
			foreach ($attachModelNames as $key => $value) {				
				$attachObject 	 = $this->model($value);
				$attachLists[$value]=$attachObject->listAll();	
				// var_dump($attachLists);
			}
			// print_r($attachLists);
			$data['attachLists'] = $attachLists;
		}
		if($modelObject){
			$this->view("masterLayout",$data);
		}
	}
}
?>
