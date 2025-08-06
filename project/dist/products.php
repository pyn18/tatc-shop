<?php
require '../connect.php';
$sql = "SELECT * FROM products";
$result = $con->query($sql);
?>

<!--begin::App Content Header-->
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Products</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Bordered Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="index.php?page=add_product" class="btn btn-success mb-4"><i class="bi bi-box-arrow-in-down"></i> add product</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>AMOUNT</th>
                                    <th>STATUS</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <tr class="align-middle">
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row['pro_id'] ?></td>
                                        <td><?php echo $row['pro_name'] ?></td>
                                        <td><?php echo $row['pro_price'] ?></td>
                                        <td><?php echo $row['pro_amount'] ?></td>
                                        <td><?php echo $row['pro_status'] ?></td>
                                        <td>
                                            <a href="index.php?page=edit_product&pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="index.php?page=del_product&pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>

                            </tbody>
                        <?php
                                    $i++;
                                }
                        ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item">
                                <a class="page-link" href="#">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
<!--end::App Main-->