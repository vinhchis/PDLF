<!-- Lưu tại resources/views/item/index.blade.php -->
@extends('layout.layout')
@section('title', 'item index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Item List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Using update | delete function to change data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <span><a href="{{url('item/create')}}">Create New</a></span>
                        <!--Chèn đoạn mả <table></table vào đây--> 
                        <table id="item" class="table table-bordered table-hover">
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th class="text-right">Function</th>
                            </tr>
                            @foreach($items as $it)
                            <tr>
                                <td>{{$it -> Code}}</td>
                                <td>{{$it -> Name}}</td>
                                <td>{{$it -> Price}}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{url("item/update/{$it -> Code}")}}">
                                        <i class="fas fa-pencil-alt"></i> Update
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{url("item/delete/{$it -> Code}")}}">
                                        <i class="fas fa-pencil-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script-section')
    <script>
        $(function () {
            $('#item').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection