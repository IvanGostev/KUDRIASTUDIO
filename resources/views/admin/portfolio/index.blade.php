@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{route('admin.work.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="src">
                                    <button class="btn btn-dark" type="submit">Add image</button>
                                </form>
                                <br>
                                <h3 class="card-title">Portfolio</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px; ">ID</th>
                                        <th>IMG</th>
                                        <th style="width: 80px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($works as $work)

                                        <tr>
                                            <td>{{$work->id}}</td>
                                            <td>
                                                <div>
                                                    <img  height="200px" style="padding: 15px"
                                                         src="{{ asset('storage/' . $work->src)}}">
                                                </div>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.work.destroy', $work->id) }}"
                                                      method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash">
                                                        </i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
{{--                                    {{ $works->links() }}--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
