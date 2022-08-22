@extends('owner.index')

@section('content')
    <div id="" class="col-lg-12" >
    <form>
        
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <div class="name-custom-class col-md-4">
                        <h4>Tạo Đơn Phép Cho User</h4>
                        <small style="color: red"><i>Tip: Tìm kiếm User sau đó chọn Class</i></small>
                    </div>
                    <div class="create-class col-md-3">
                        <div id="create-button-popup-x" type="submit" class="btn btn-lg  btn-block">
                            <i class="zmdi zmdi-close"></i>
                        </div>
                        <button id="create-button-popup-add" type="button" class="btn btn-lg btn-info btn-block">
                            <i class=" zmdi zmdi-check"></i>
                            Hoàn Tất
                        </button>
                    </div>
                    <div class="col-md-4 float-right">
                        <div class="search-rollcall-custom">
                            <div class="search-custom-focus">
                                <input type="text" class="form-control-custom" placeholder="username, phone hoặc email">
                            </div>
                            <button type='button' class="seachbox-icon">
                                <i class="zmdi zmdi-search zmdi-search-custom"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="form-group-custom-dayoff col-md-6">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" placeholder="name" class="form-control-custom-dayoff">
                        </div>
                        <div class="form-group-custom-dayoff col-md-6">
                            <label for="username" class=" form-control-label">Username</label>
                            <input type="text" id="username" placeholder="Username" class="form-control-custom-dayoff">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group-custom-dayoff col-md-6">
                            <label for="phone" class=" form-control-label">Phone</label>
                            <input type="text" id="phone" placeholder="Phone" class="form-control-custom-dayoff">
                        </div>
                        <div class="form-group-custom-dayoff col-md-6">
                            <label for="vat" class=" form-control-label">Email</label>
                            <input type="text" id="vat" placeholder="Email" class="form-control-custom-dayoff">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group-custom-dayoff col-md-6">
                            <div>
                                <label for="street" class="form-control-label">Class</label>
                            </div>
                            <div class="" >
                                <div >
                                    <select style="" class="select-class-custom">
                                        <option value="0">Select car</option>
                                        <option value="1">Audi</option>
                                        <option value="2">BMW</option>
                                        <option value="3">Citroen</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row date-time-row">
                        <div class="form-group-custom-dayoff col-md-4">
                            <div>
                                <label for="date" class=" form-control-label">Chọn Ngày Nghỉ</label>
                            </div>
                            <div class="form-group">
                                <input type="date" id="date" name="birthday">
                            </div>
                        </div>
                        <div class="form-group-custom-dayoff col-md-4">
                            <div>
                                <label for="time" class=" form-control-label">Chọn Ngày Nghỉ</label>
                            </div>
                            <div class="form-group">
                                <input type="time" id="date" name="birthday">
                            </div>
                        </div>
                        <div class="form-group-custom-dayoff col-md-4">
                            <div>
                                <label for="time" class=" form-control-label">Chọn Ngày Nghỉ</label>
                            </div>
                            <div class="form-group">
                                <input type="time" id="date" name="birthday">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection