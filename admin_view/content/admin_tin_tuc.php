<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Xin chào Admin</h1>
        <h3 class="h5 mb-0 text-gray-800">Quản lý tin nhắn</h3>
    </div>


    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Khách hàng</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hoi_thoai as $key => $val) { ?>
                    <tr>
                        <th scope="row"><?=$key+1?></th>
                        <td class='fs-bold'><?= $val['ho_ten'] ?></td>
                        <td>
                            <div class="alert alert-success" role="alert">
                                Online
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Nhắn tin <span class="badge text-bg-danger bg-danger">4</span>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title fs-5" id="exampleModalLabel">Gửi đến : <?= $val['ho_ten'] ?></h3>
                                            <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="height: 450px;" class="m-3 w-100 border border-2 border-secondary overflow-auto">
                                            <div class="alert alert-danger" role="alert">
                                                    <?=$tin_nhan[$key]?>
                                                </div>

                                            </div>
                                            <form action="" class="w-100 d-flex my-3">
                                                <input class='form-control' type="text" placeholder="Nhập tin nhắn ...">
                                                <button type="submit" id="mes1" class="btn btn-success mx-1">Gửi</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

    <script>

    </script>