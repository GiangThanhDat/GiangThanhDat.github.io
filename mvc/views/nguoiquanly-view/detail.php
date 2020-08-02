    <?php         
        $nguoiquanlyObj = json_decode($data['obj'],true);        
     ?>
<div class="container emp-profile">
    <form method="post" action="admin/edit/nguoiquanly/<?php echo $nguoiquanlyObj['taikhoan_nql'] ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="./public/img/upload/<?php echo $nguoiquanlyObj['avatar_nql'] ?>" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>Tên Người Quản Lý: <?php echo $nguoiquanlyObj['hoten_nql'] ?></h5>
                    <h6>Phú Trách : Quản lý hệ thống giám sát không khí tại các bải rác thải</h6>
                    <hr>                     
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="https://<?php echo $nguoiquanlyObj['fb_link'] ?>" target="_blank">Facebook</a></br>
                    <a href="https://chat.zalo.me/" target="_blank">Zalo</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tên tài khoản</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $nguoiquanlyObj['taikhoan_nql'] ?></p>
                            </div>
                        </div> 
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $nguoiquanlyObj['email'] ?></p>
                            </div>
                        </div>
                         <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Địa chỉ</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $nguoiquanlyObj['chitietdiachi_nql']. ", Huyện " . $nguoiquanlyObj['ten_huyen'] . ", Tỉnh " . $nguoiquanlyObj['ten_tinhtp']  ?></p>
                            </div>
                        </div>    
                         <hr>                    
                        <div class="row">
                            <div class="col-md-6">  
                                <label>Số điện thoại</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $nguoiquanlyObj['sdt_nql'] ?></p>
                            </div>
                        </div>
                         <hr>
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>   

