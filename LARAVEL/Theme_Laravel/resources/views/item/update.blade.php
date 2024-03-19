<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout')
@section('title', 'Update Item')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Item {{ ' ' . $rs -> Code }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                        <form action="{{url("item/updateProcess/{$rs->Code}")}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" class="form-control" id="code" name="txtCode" value="{{$rs->Code}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control"  id="name" name="txtName" value="{{$rs->Name}}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="txtPrice" value="{{$rs->Price}}">
                            </div>
                            <!-- /.card -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
                            </div>
                        </form>
                    </div>
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