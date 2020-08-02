

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div id="list-all-alert-success" class="alert alert-success alert-dismissible fade show text-center col-md-4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Cập nhật thành công!!</strong><hr>
    </div>
    <div id="list-all-alert-fail" class="alert alert-danger alert-dismissible fade show text-center col-md-4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Xẩy ra lổi, vui lòng kiểm tra lại</strong><hr>
    </div>
    <div class="col-md-4"></div>
  </div>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800" ><?php echo $data['model'] ?></h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>                
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6  class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>    
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mả đại lượng đo</th>
              <th>Tên đại lượng đo</th>
              <th>Tên đơn vị đo</th>
              <th>Ngưỡn trên</th>
              <th>Ngưỡn dưới</th>
              <th>Màu cảnh báo</th>              
              <th class="text-center">Delete</th>
            </tr>
          </thead>
          <tfoot>
            <th>Mả đại lượng đo</th>
            <th>Tên đại lượng đo</th>
            <th>Tên đơn vị đo</th>
            <th>Ngưỡn trên</th>
            <th>Ngưỡn dưới</th>
            <th>Màu cảnh báo</th>            
            <th class="text-center">Delete</th>
          </tr>
        </tfoot>
        <tbody>               
        </tbody>
      </table>
    </div>
  </div>
</div>
<h2>MODAL TEST</h2>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Đơn vị modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Đơn vị đo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>          
      </div>
      <div class="modal-body">
        <select class="form-control" id="ma_donvi"> 
        </select>        
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary col-md-12" data-dismiss="modal" id="close-donvi">Lưu</button>
      </div>
    </div>

  </div>

</div>

<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#colorModal">Màu Modal</button>

<div class="modal fade" id="colorModal" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Màu cảnh báo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>          
      </div>
      <div class="modal-body">
        <select class="form-control" id="mau-canh-bao"  style="background-color:#1231">
          <option value="red" style="background-color:red;height: 45px; border-radius: 50px;">              
          </option>
          <option value="blue" style="background-color:blue;height: 45px; border-radius: 50px;">              
          </option>
          <option value="yellow" style="background-color:yellow;height: 45px; border-radius: 50px;">              
          </option>            
        </select>        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal" id="close-mau">Lưu</button> -->
        <button type="button" class="btn btn-primary col-md-12" data-dismiss="modal" id="close-mau">Lưu</button>
      </div>
    </div>

  </div>

</div>
<!-- /.container-fluid -->
