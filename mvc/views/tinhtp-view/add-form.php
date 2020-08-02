
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
						<label for="ma_tinhtp">Mả Tỉnh-TP</label>
						<input type="text" class="form-control" name="ma_tinhtp" id="ma_tinhtp" placeholder="Nhập số nhé...">
					</div>
					<div class="form-group col-md-8">
						<label for="ten_tinhtp">Tên Tỉnh TP</label>
						<input type="text" class="form-control" name="ten_tinhtp" id="ten_tinhtp" placeholder="Nhập tên...">
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
				<h6 class="m-0 font-weight-bold text-primary">Các Tỉnh và thành phố trên cả nước</h6>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="./public/img/undraw_code_inspection_bdl7.svg" alt="">
				</div>
				<p>mô tả tỉnh thành ở đây</p>
			</div>
		</div>
	</div>
</div>

