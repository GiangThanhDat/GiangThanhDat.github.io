
<?php $nguoiquanlyObj = json_decode($data['obj'],true);  ?>
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
		<div class="col-md-12">
			<form action="ajax/edit/nguoiquanly/<?php echo $nguoiquanlyObj['taikhoan_nql'] ?>" enctype="multipart/form-data" method="post">
				<div class="form-row">
					<div class="form-group col-md-4">						
						<div class="profile-img">
							<img src="./public/img/upload/<?php echo $nguoiquanlyObj['avatar_nql'] ?>" alt=""/>
							<div class="file btn btn-lg btn-primary">
								Change Photo
								<input type="file" name="fileToUpload"/>
							</div>
						</div>
					</div>
					<div class="form-group col-md-8">
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Email</label>
							</div> 	
							<div class="form-group col-md-9">
								<input type="email" name="email" class="form-control" value="<?php echo $nguoiquanlyObj['email'] ?>">
							</div>
						</div>						
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Tài khoản</label>
							</div> 	
							<div class="form-group col-md-9">
								<input type="text" name="taikhoan_nql" class="form-control" value="<?php echo $nguoiquanlyObj['taikhoan_nql'] ?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Mật khẩu</label>
							</div> 	
							<div class="form-group col-md-9">
								<input type="password" name="matkhau_nql" class="form-control" value="<?php echo $nguoiquanlyObj['matkhau_nql'] ?>">
							</div>
						</div>												
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Họ tên</label>
							</div>
							<div class="form-group col-md-4">
								<input type="text" name="hoten_nql" class="form-control" value="<?php echo $nguoiquanlyObj['hoten_nql'] ?>"	 >
							</div>
							<div class="form-group col-md-2">
								<label>Ngày sinh</label>
							</div>
							<div class="form-group col-md-3	">
								<input type="date" id="ngaysinh_nql" name="ngaysinh_nql" class="form-control" value="<?php echo $nguoiquanlyObj['ngaysinh_nql'] ?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Tỉnh-Thành Phố</label>
							</div> 	
							<div class="form-group col-md-9">
								<select name="ma_tinhtp" id="ma_tinhtp" class="form-control">
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
								<input type="text" name="chitietdiachi_nql" class="form-control" value="<?php echo $nguoiquanlyObj['chitietdiachi_nql'] ?>">
							</div>
						</div>						
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Số điện thoại</label>
							</div> 	
							<div class="form-group col-md-9">
								<input type="text" name="sdt_nql" class="form-control" value="<?php echo $nguoiquanlyObj['sdt_nql'] ?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-3">
								<label>Facebook-link</label>
							</div> 	
							<div class="form-group col-md-9">
								<input type="text" name="fb_link" class="form-control" value="<?php echo $nguoiquanlyObj['fb_link'] ?>">
							</div>
						</div>						
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-10"></div>					
					<div class="form-group col-md-2">
						<button type="submit" class="btn btn-primary col-md-12">Lưu</button>
					</div>					
				</div>
				
			</form>				
		</div>
	</div>
</div>

