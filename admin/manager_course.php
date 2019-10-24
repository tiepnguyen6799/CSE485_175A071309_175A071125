<?php
include '../connection.php';
include 'add_course.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../bootstrap/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/style_home.css">
</head>
<body>
<body>
<div class="wrapper">
    <?php include "header.php"; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fa fa-th-list"></i> Quản lý
                <small>Khóa Học</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li class="active">Khóa học</li>
                <li class="active">Quản lí khóa học</li>
            </ul>
        </section>
        <section class="content">

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-plus-square"></i> Tạo khóa học mới</h3>
                </div>

                <form action="add_course.php" method="post">
                    <input type="hidden" name="_csrf">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group field-course_name required">
                                    <label class="control-label" for="course_name">Tên khóa học</label>
                                    <input type="text" id="course_name" class="form-control"
                                           name="txtNameCourse" maxlength="70"
                                           placeholder="Nhập tên khóa học" aria-required="true">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group field-academicyear-start_date">
                                    <label class="control-label" for="academicyear-start_date">Ngày bắt đầu</label>
                                    <input type="date" id="course_start_date" class="form-control"
                                           name="txtStartDateCourse" placeholder="Select Start Date">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group field-academicyear-end_date">
                                    <label class="control-label" for="academicyear-end_date">Ngày kết thúc</label>
                                    <input type="date" id="course_end_date" class="form-control"
                                           name="txtEndDateCourse" placeholder="Select End Date">


                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group field-academicyear-is_active required">
                                    <label class="control-label" for="academicyear-is_active">Trạng thái</label>
                                    <select id="academicyear-is_active" class="form-control"
                                            name="optStatusCourse" aria-required="true">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div><!--./row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <label><input type="checkbox" id="checkInsertCourse" name="isAddCourse" value="1">
                                    Bạn có chắc chắn muốn thêm khóa học này?</label></div>
                        </div><!--./row-->
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-create">Tạo mới</button>
                        <button type="reset" class="btn btn-default btn-create">Làm lại</button>
                    </div><!-- /.box-footer-->

                </form>
            </div>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-search"></i> Danh sách khóa học</h3>
                </div>
                <div class="box-body table-responsive">
                    <div id="p0" data-pjax-container="">
                        <div id="w1" class="grid-view">
                            <div class="summary">Hiển thị <b>1-1</b> của <b>1</b> trang.</div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <a href="" sort=academic_name"
                                           data-sort="academic_name">Tên khóa học</a></th>
                                    <th>
                                        <a href="" sort=start_date"
                                           data-sort="start_date">Ngày bắt đầu</a></th>
                                    <th>
                                        <a href="" sort=end_date"
                                           data-sort="end_date">Ngày kết thúc</a></th>
                                    <th style="text-align: center">
                                        <a href="" sort=is_active"
                                           data-sort="is_active">Trạng thái</a></th>
                                    <th class="action-column" style="text-align: center">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql_kh = "SELECT * FROM `monhoc`";
                                $result = mysqli_query($conn, $sql_kh);
                                if (mysqli_num_rows($result)){

                                while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr data-key="4">
                                    <td><?php echo $row['id_mh'] ?></td>
                                    <td><?php echo $row['ten_mh'] ?></td>
                                    <td><?php echo $row['ngaybd_mh'] ?></td>
                                    <td><?php echo $row['ngaykt_mh'] ?></td>
                                    <td class="text-center"><a class="toggle-column" href="#"
                                                               title="Inactive" data-method="post"><span
                                                    class="fas fa-check-circle"></span></a></td>
                                    <td>
                                        <a href="#" title="View" data-target="#globalModal"
                                           data-toggle="modal"
                                           style="width: 30%;display: inline-block;text-align: center"><i
                                                    class="fas fa-eye"></i></a>
                                        <a href="#" title="View" data-target="#globalModal"
                                           data-toggle="modal"
                                           style="width: 30%;display: inline-block;text-align: center"><i
                                                    class="fas fa-edit"></i></a>
                                        <a href="add_course.php?delete=<?php echo $row['id_mh'] ?>" title="View"
                                           style="width: 30%;display: inline-block;text-align: center"><i
                                                    class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                    <?php
                                }
                                }
                                else {
                                    ?>
                                    <tr data-key="4">
                                        <td colspan="5" style="padding: 20px 120px 10px;">
                                            <p style="background:#ff4d4d; color: #fff; text-align: center; height: 35px;border-radius: 5px;line-height: 35px;font-size: 14px;">Hiện tại chưa có khóa học nào</p>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box-->
        </section>
    </div>
    <div class="modal in" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="esModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><i class="fas fa-eye"></i> Xem khóa học |
                        <small>Khóa Học PHP</small>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </h3>
                </div> <!-- /.modal-header -->

                <div class="modal-body table-responsive">
                    <table id="w0" class="table table-striped table-bordered detail-view-course">
                        <tbody>
                        <tr>
                            <th style="width:150px">Tên khóa học</th>
                            <td>Khóa Học PHP</td>
                        </tr>
                        <tr>
                            <th style="width:150px">Ngày bắt đầu</th>
                            <td>August 16, 2018</td>
                        </tr>
                        <tr>
                            <th style="width:150px">Ngày kết thúc</th>
                            <td>August 16, 2018</td>
                        </tr>
                        <tr>
                            <th style="width:150px">Được tạo vào</th>
                            <td>Aug 16, 2018, 12:55:26 AM</td>
                        </tr>
                        <tr>
                            <th style="width:150px">Được tạo bởi</th>
                            <td>doanbh32@wru.vn</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-->
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>