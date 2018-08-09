<?php 

    require_once __DIR__."/../../layouts/header.php"; 
    $error ="";
    session_start();
    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
      
      $data = [
        "title" => $_POST['title'],
        "keyword" =>$_POST['keyword'],
        "description" =>$_POST['description'],
        "content" => $_POST['content'],
        
      ];    
      if($data['title'] && $data['keyword'] && $data['content'] && $data['description'] != NULL){
        
          $post= $db->insert("news",$data);
          header("location:".baseUrl()."admin/modules/news");
      }
      else{

        $error = "Vui lòng điền đầy đủ thông tin";
       
        }
    }
?>

<div id="main">
         <ol class="breadcrumb">
            <li><a href="<?php echo baseUrl()."admin"; ?>"><i class="fa fa-home"></i> Trang quản trị</a></li>
            <li class="active"><a href="index.php">Bài viết</a></li>
            <li class="active"><a href="add-news.php">Thêm bài viết mới</a></li>
         </ol>
         <div class="col-xs-12">
            <form id="post-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="POST" action="" enctype="multipart/form-data" role="form">
               <input name="id" type="hidden" value="0">
               <?php  if ($error != ""): ?>
               <div class="alert alert-danger text-center" role="alert">
                 <strong><?php echo $error; ?></strong> 
               </div>
             <?php  endif; ?>
               <div class="form-group">
                  <label for="title" class="col-sm-2 control-label required">Tiêu đề</label>
                  <div class="col-sm-10">
                     <input name="title" type="text" value="" class="form-control" id="title" placeholder="Tên bài viết ( ~ 70 ký tự )" required="" maxlength="100" >
                  </div>
               </div>
               <div class="form-group">
                  <label for="keyword" class="col-sm-2 control-label">Từ khóa</label>
                  <div class="col-sm-10">
                     <input name="keyword" type="text" value="" class="form-control" id="keyword" placeholder="meta keywords" maxlength="255">
                  </div>
               </div>
               <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Mô tả</label>
                  <div class="col-sm-10">
                     <textarea name="description" class="form-control" id="description" placeholder="meta description ( ~ 160 ký tự )" maxlength="255"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label for="content" class="col-sm-2 control-label">Nội dung</label>
                  <div class="col-sm-10">
                       <textarea name="content" rows="5" class="form-control ckeditor" id="content" placeholder="Nội dung bài viết" ></textarea>
                   </div>
                <div class="form-group" >
                     <label class="col-sm-2 control-label">Ảnh</label>
                      <div class="col-sm-10 col-sm-offset-2">
                      <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#img-file" role="tab" data-toggle="tab">Upload từ máy tính</a></li>
                       <li><a href="#img-url" role="tab" data-toggle="tab">Lấy từ URL</a></li>
                     </ul>
                      <div class="tab-content" style="margin-top: 15px; min-height: 100px;">
                          <div class="tab-pane active" id="img-file">
                              <label for="image" class="col-sm-3 control-label">Từ máy tính</label>
                              <div class="col-sm-9">
                                 <input name="image" type="file" class="form-control" id="image" accept="image/*">
                              </div>
                          </div>
                          <div class="tab-pane" id="img-url">
                              <label for="url" class="col-sm-3 control-label"> Từ URL</label>
                              <div class="col-sm-9">
                                 <input name="image" type="text" value="" class="form-control" id="url" placeholder="Đường dẫn tới hình ảnh" maxlength="255">
                              </div>
                          </div>
                        </div>
                     </div>
                  </div>
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-submit"><small><i class="fa fa-plus" name="btn-add" ></i></small> Thêm mới</button>
                        <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu nháp</button>
                        <a class="btn btn-warning" href="#"><small><i class="fa fa-reply"></i></small> Trở về</a>
                     </div>
                  </div>
            </form>
            </div>
         </div>
         <!--END #main-->
      </div>
<script type="text/javascript" src="<?php echo baseUrl(); ?>/public/frontend/admin/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo baseUrl(); ?>/public/frontend/admin/plugins/ckfinder/ckfinder.js"></script>

<style>
   .btn {margin-bottom: 10px;}
</style>
   </body>
</html>
