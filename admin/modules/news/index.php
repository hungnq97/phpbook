
<?php require_once __DIR__."/../../layouts/header.php"; 
    $Allpost = $db ->fetchAll("news");
?>


    <div id="main">
        <ol class="breadcrumb" id="step2">
            <li><a href="<?php echo baseUrl()."admin"; ?>"><i class="fa fa-home"></i> Trang quản trị</a></li>
            <li class="active"><a href="index.php">Bài viết</a></li>
        </ol>
        <div class="col-xs-12">
            <form id="admin-form" method="POST" action="" role="form">
                <div class="col-xs-12">
                    <div class="form-group">
                        <!-- Single button -->
                        <div class="btn-group" id="step3">
                            <select id="task" name="task" class="form-control">
                                <option>Tác vụ</option>
                                <option value="delete">Xóa bài viết</option>
                                <option value="deactive">Ẩn bài viết</option>
                                <option value="active">Hiện bài viết</option>
                            </select>
                        </div>
                        <a href="add-news.php" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
                        <div class="btn-group pull-right hidden-xs" id="div-search">
                            <input id="search" name="search" type="text" value="" class="form-control" placeholder="Tìm kiếm">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="step4">
                        <thead>
                            <tr>
                                <th><input id="check_all" type="checkbox"></th>
                                <th class="hidden-xs">ID</th>
                                <th>Bài viết</th>
                                <th class="hidden-sm hidden-xs">Ngày đăng</th>
                                <th>Sửa</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="id[]" type="checkbox" value="1">
                                </td>
                                <td class="hidden-xs">1</td>
                                <td>
                                    <a href="new-post.html">SH4TinyMCE</a>
                                </td>
                                <td class="hidden-sm hidden-xs">2014-06-19 01:05:13</td>
                                <td>
                                    <a href="new-post.html"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                                </td>
                                <td>
                                    <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Đang hiển thị"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="id[]" type="checkbox" value="2">
                                </td>
                                <td class="hidden-xs">2</td>
                                <td>
                                    <a href="new-post.html">Cuộc đời truyền kỳ của Đức Pháp Vương Gyalwang Drukpa</a>
                                </td>
                                <td class="hidden-sm hidden-xs">2014-06-19 01:05:13</td>
                                <td>
                                    <a href="new-post.html"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                                </td>
                                <td>
                                    <i class="fa fa-times text-danger" data-toggle="tooltip" data-placement="top" title="Đã ẩn với người dùng"></i>
                                </td>
                            </tr>
                            <?php foreach ($Allpost as $post) { ?>
                            <tr>
                                <td>
                                    <input name="id[]" type="checkbox" value="3">
                                </td>
                                <td class="hidden-xs"><?php echo $post['id']; ?></td>
                                <td>
                                    <a href=""><?php echo $post['title']; ?></a>
                                </td>
                                <td class="hidden-sm hidden-xs"><?php echo $post['updated_at']; ?></td>
                                <td>
                                    <a href="edit-news.php?id=<?=$post['id']?>"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                                </td>
                                <td>
                                    <?php if(($post['status'])==1){ ?>
                                        <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Đang hiển thị"></i>
                                    <?php }else { ?>
                                        <i class="fa fa-times text-danger" data-toggle="tooltip" data-placement="top" title="Đã ẩn với người dùng"></i>
                                    <?php } ?>    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <ul class="pagination" id="step5">
                            <li class="disabled"><span>«</span></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a>
                            </li>
                        </ul>
                    </div>
                    <div id="step6">
                        <p><strong><i class="fa fa-bookmark"></i>Ghi chú: </strong></p>
                        <p class="note-items"><i class="fa fa-check text-success"></i> Hiển thị với người dùng.</p>
                        <p class="note-items"><i class="fa fa-times text-danger"></i> Ẩn với người dùng</p>
                    </div>
                </div>
            </form>
        </div>
    </div>  
    <!--END #main-->
</div>