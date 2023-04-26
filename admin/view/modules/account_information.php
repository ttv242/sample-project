<div class="main-panel">
    <div class="content-wrapper pb-0 row">
        <!-- <div class="page-header flex-wrap">
            <h3 class="mb-0"> Xin chào, chào mừng đến với trang quản lý tài khoản!
                <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">
                    Quản lý tất cả tài khoản ADMIN - USER
                </span>
            </h3>
        </div> -->
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block text-center w-100">Avatar</span><br>
                    <div class="nav-profile-image d-flex mb-4">
                        <img class="m-auto rounded-circle w-75" src="view/images/faces/face1.jpg" alt="profile" />
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Họ và tên:</span>
                    <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block"><?=$_SESSION['username']?></span><br>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">ID:</span>
                    <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block"><?=$_SESSION['id']?></span><br>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Email:</span>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"><?=$_SESSION['email']?></span><br>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Số điện thoại:</span>
                    <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block"><?='0'.$_SESSION['numberphone']?></span><br>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Mật khẩu:</span>
                    <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block"><?=$_SESSION['pass']?></span><br>
                    <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Giới tính:</span>
                    <!-- <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block"><?=$_SESSION['pass']?></span> -->
                </div>
            </div>
        </div>
        <div class="col-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cập nhật thông tin tài khoản</h4>
                    <form class="forms-sample" action="index.php?action=update_information&id=<?=$id?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1">Họ và tên</label>
                            <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Name" name="id"
                                    value="<?= $kqone[0]['id'] ?>" />
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="username"
                                    value="<?= $kqone[0]['username'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Địa chỉ Email</label>
                            <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Name" name="id"
                                    value="<?= $kqone[0]['id'] ?>" />
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="email"
                                    value="<?= $kqone[0]['email'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Số điện thoại</label>
                            <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Name" name="id"
                                    value="<?= $kqone[0]['id'] ?>" />
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="numberphone"
                                    value="0<?= $kqone[0]['numberphone'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Mật khẩu</label>
                            <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Name" name="id"
                                    value="<?= $kqone[0]['id'] ?>" />
                            <input type="password" class="form-control" id="exampleInputName1" placeholder="Name" name="pass"
                                    value="<?= $kqone[0]['pass'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Giới tính</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" name="img[]" class="file-upload-default" />
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                </span>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value=" Cập nhật "></input>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    echo $id, $POST['username'];
?>