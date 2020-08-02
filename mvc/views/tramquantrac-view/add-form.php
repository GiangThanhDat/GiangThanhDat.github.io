
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div id="alert-success" class="alert alert-success alert-dismissible fade show text-center col-md-4" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Thêm thành công!!</strong><hr>
		</div>
		<div id="alert-fail" class="alert alert-danger alert-dismissible fade show text-center col-md-4" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Xẩy ra lổi, vui lòng kiểm tra lại</strong><hr>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form id="add-from">
				<input id="taikhoan_nql" name="taikhoan_nql" type="hidden" value="<?php echo $nguoiquanlyObj['taikhoan_nql'] ?>">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="ma_tram">Mả trạm</label>						
					</div>
					<div class="form-group col-md-9">
						<input type="text" class="form-control" name="ma_tram" placeholder="Mả trạm">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="ten_tram">Tên trạm</label>						
					</div>
					<div class="form-group col-md-9">
						<input type="text" class="form-control" name="ten_tram" placeholder="Tên trạm">
					</div>				
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Tỉnh-Thành Phố</label>
					</div> 	
					<div class="form-group col-md-9">
						<select id="ma_tinhtp" class="form-control">
							<option value="<?php echo $nguoiquanlyObj['ma_tinhtp'] ?>"><?php echo $nguoiquanlyObj['ten_tinhtp'] ?></option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Quận Huyện</label>
					</div> 	
					<div class="form-group col-md-9">
						<select name="ma_huyen" id="ma_huyen" class="form-control">
							<option value="<?php echo $nguoiquanlyObj['ma_huyen'] ?>"><?php echo $nguoiquanlyObj['ten_huyen'] ?></option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Địa chỉ chi tiết</label>
					</div> 	
					<div class="form-group col-md-9">
						<input type="text" name="chitietdiachi_tram" class="form-control" value="<?php echo $nguoiquanlyObj['chitietdiachi_nql'] ?>">
					</div>
				</div>					
				<button type="submit" class="btn btn-primary col-md-12">Lưu</button>
		</form>				
	</div>
	<!-- Ảnh trang trí -->
	<div class="col-lg-6 mb-4">
		<!-- Illustrations -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">ĐẠI LƯỢNG ĐO LÀ GÌ?</h6>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="./public/img/undraw_questions_75e0.svg" alt="">
				</div>
				<p>mô tả đại lượng đo ở đây</p>
			</div>
		</div>
	</div>
</div>

