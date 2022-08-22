@extends('owner.index')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="name-custom-class col-md-3">
                    <strong>Thêm Mới Class</strong>
                </div>
                <div class="create-class col-md-3">
                    <button id="cancel-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa-custom zmdi zmdi-close"></i>
                        <span id="payment-button-amount">Hủy Bỏ</span>
                    </button>
                    <button id="create-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa-custom zmdi zmdi-check"></i>
                        <span id="payment-button-amount">Tạo Mới</span>
                    </button>
                </div>
            </div>
            <form>
                <div class="card-body card-block col-md-12">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">Tên</label>
                        <input type="text" id="company" placeholder="Enter your class name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vat" class=" form-control-label">Mã Class</label>
                        <input type="text" id="vat" placeholder="Enter your class code" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="street" class=" form-control-label">Mô Tả</label>
                        <input type="text" id="street" placeholder="Enter your class description" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="card">
            <div class="card-header">
                <h3 class="title-5 m-b-35">Danh Sách Class</h3>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>description</th>
                        <th>date</th>
                        <th>status</th>
                        <th><p class="table-action-custom">Action</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="tr-shadow">
                        <td class="table-name-add"> <p> Lori Lynch </p> </td>
                        <td class="desc"> <p> Samsung S8 Black </p> </td>
                        <td>2018-09-27 02:12</td>
                        <td>
                            <span class="status--process">Processed</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">
                        <td>Lori Lynch</td>
                        <td class="desc">iPhone X 64Gb Grey</td>
                        <td>2018-09-29 05:57</td>
                        <td>
                            <span class="status--process">Processed</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">
                        <td>Lori Lynch</td>
                        <td class="desc">iPhone X 256Gb Black</td>
                        <td>2018-09-25 19:03</td>
                        <td>
                            <span class="status--denied">Denied</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">
                        <td>Lori Lynch</td>
                        <td class="desc">Camera C430W 4k</td>
                        <td>2018-09-24 19:10</td>
                        <td>
                            <span class="status--process">Processed</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
