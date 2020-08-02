
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
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="ma_huyen">Mả Huyện</label>
						<input type="text" class="form-control" name="ma_huyen" id="ma_huyen" placeholder="Nhập tên">
					</div>
					<div class="form-group col-md-8">
						<label for="ten_huyen">Tên Huyện</label>
						<input type="text" class="form-control" name="ten_huyen" id="ten_huyen" placeholder="Nhập tên">
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">		
					<?php $tinhtpObj = json_decode($data['attachObj'],true); ?>				
							<label for="ma_tinhtp">Thuộc Tỉnh-Thành Phố : <?php echo $tinhtpObj['ten_tinhtp'] ?></label>
	<!-- 						<select class="form-control" id="ma_tinhtp" name="ma_tinhtp">
								<option selected>chọn Tỉnh</option> 
							</select>      -->
							<input id="ma_tinhtp" name="ma_tinhtp" type="hidden" value="<?php echo $tinhtpObj['ma_tinhtp'] ?>">
					</div>						
				</div>			
				<!-- Illustrations -->
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="text-center">
							<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="./public/img/undraw_two_factor_authentication_namy.svg" alt="">
						</div>					
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
					<h6 class="m-0 font-weight-bold text-primary">Đơn vị đo là gì?</h6>
				</div>
				<div class="card-body">
					<div class="text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="./public/img/undraw_code_inspection_bdl7.svg" alt="">
					</div>
					<p>mô tả đơn vị ở đây</p>
				</div>
			</div>
		</div>
	</div>

