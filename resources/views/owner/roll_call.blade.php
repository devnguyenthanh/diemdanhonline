@extends('owner.index')

@section('content')
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="card">
            <div class="card-header">
                    <h3 class="title-5 m-b-35">Điểm Danh  <i class="check-custom-i zmdi zmdi-check"></i></h3><small>Chọn Class để điểm danh</small>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th><i class="zmdi zmdi-accounts"></i></th>
                        <th>description</th>
                        <th>date</th>
                        <th>status</th>
                        <th><p class="table-action-custom">Action</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="tr-shadow" onclick="window.location='{{URL::asset('/owner/class/1')}}';">
                            <td class="table-name-add"> <p> Lori Lynch </p>  </td>
                            <td> 28 <i class="zmdi zmdi-account"></i></td>
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
                    <tr class="tr-shadow" onclick="window.location='{{URL::asset('/owner/class/1')}}';">
                        <td>Lori Lynch</td>
                        <td> 28 <i class="zmdi zmdi-account"></i></td>
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
                    <tr class="tr-shadow onclick="window.location='#'">
                        <td>Lori Lynch</td>
                        <td> 30 <i class="zmdi zmdi-account"></i></td>
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
                    <tr class="tr-shadow onclick="window.location='#'">
                        <td>Lori Lynch</td>
                        <td> 40 <i class="zmdi zmdi-account"></i></td>
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
        <!-- END DATA TABLE -->
    </div>

@endsection