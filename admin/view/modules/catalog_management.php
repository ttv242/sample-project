<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <h3 class="mb-0"> Xin chào, chào mừng đến với trang quản lý danh mục!
                <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">
                    Quản lý tất cả danh mục - thêm - sửa - xóa
                </span>
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tất cả danh mục</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped" style="table-layout: fixed; width: 100%; text-align:center;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 12%;">Tên danh mục</th>
                                    <th style="width: 40%;">Mô tả</th>
                                    <th style="width: 15%;">Số lượng sản phẩm</th>
                                    <th style="width: 15%;">Ngày cập nhật</th>
                                    <th style="width: 15%;">Xóa danh mục</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($kq) && (count($kq) > 0)) {
                                    $index = 1;
                                    foreach ($kq as $item) {
                                        echo '<tr>
                                        <td class="py-1">
                                        ' . $index . '
                                        </td>
                                        <td>' . $item['category_name'] . '</td>
                                        <td style="word-wrap: break-word;">
                                        ' . $item['category_description'] . '
                                        </td>
                                        <td>88</td>
                                        <td>May 15, 2015</td>
                                        <td>
                                            <a href="index.php?action=catalog_management&id=' . $item['id'] . '"
                                            class="mdi text-light">
                                                <button class="btn btn-warning btn-rounded btn-sm"> Sửa </button>
                                            </a>
                                            <a href="index.php?action=delete_category&id=' . $item['id'] . '"
                                            class="mdi text-light">
                                                <button class="btn btn-danger btn-rounded btn-sm"> Xóa </button>
                                            </a>
                                        </td>
                                    </tr>';
                                        $index++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Quản lý danh mục</h4>
                    <form class="form-group" action="index.php?action=option_category" method="POST"
                        enctype="multipart/form-data">
                        <label>Chọn chức năng</label>
                        <select class="js-example-basic-single" style="width: 45%;" name="category_function">
                            <option value="update_catalog">Cập nhật danh mục</option>
                            <option value="add_category">Thêm danh mục</option>
                        </select>
                        <input type="submit" name="option_category" class="btn btn-primary mr-2"
                            value="Thực hiện"></input>
                    </form>
                </div>
            </div>
        </div> -->
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm danh mục</h4>
                        <form class="forms-sample" action="index.php?action=add_category" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="category_name"
                                    placeholder="Tên danh mục" />
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả danh mục</label>
                                <textarea class="form-control" id="exampleTextarea1" name="category_description"
                                    rows="4"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary mr-2" name="add_category"
                                value=" Thêm "></input>
                            <!-- <button class="btn btn-light">Trở lại</button> -->
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kqone = get_catalog($id);
                $kq = get_all_categories();
                ?>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <form class="card-body" action="index.php?action=update_category" method="POST">
                            <div class="row mb-1">
                            <h4 class="card-title mb-0">Cập nhật danh mục</h4>
                            <span class="pl-0 h4 pl-sm-2 text-muted d-inline-block" name="category_name" value=''>
                                <?= $kqone[0]['category_name'] ?>
                            </span>
                            </div>
                            <div class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên danh mục mới</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="Tên danh mục mới" name="category_name"
                                        value='<?= $kqone[0]['category_name'] ?>' />
                                    <input type="hidden" class="form-control" id="exampleInputName1"
                                        placeholder="Tên danh mục mới" name="id" value='<?= $kqone[0]['id'] ?>' />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Mô tả danh mục mới</label>
                                    <input class="form-control" id="exampleTextarea1" rows="4"
                                        name="category_description"
                                        value='<?= $kqone[0]['category_description'] ?>'></input>
                                </div>
                                <input type="submit" class="btn btn-primary mr-2" value=" Cập nhật "></input>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $category_name = $_POST['category_name'];
                $category_description = $_POST['category_description'];
                update_category($id, $category_name, $category_description);
                $kq = get_all_categories();
                header('location: index.php?action=catalog_management');
            }
            ?>
        </div>
    </div>