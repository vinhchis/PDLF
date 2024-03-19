<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout')
@section('title', 'item - create new')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create item</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                        <form action="{{url("item/createProcess")}}" method="post">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" class="form-control"  id="name" name="txtName" placeholder="Enter product name">
                            </div>
                            <div class="form-group">
                                <label for="price">Item Price</label>
                                <input type="text" class="form-control" id="price" name="txtPrice" placeholder="Enter product price">
                            </div>
                            <div class="form-group">
                                <label for="code">Item Code</label>
                                <input type="text" class="form-control" id="code" name="txtCode" placeholder="Enter product code">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnAdd">Add new Item</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection