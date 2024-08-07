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
                                <h3 class="card-title">Messages</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px; ">ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Social media</th>
                                        <th style="width: 80px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)

                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>
                                                <p style="border-radius: 5px; opacity: 0.8; background: black; padding: 5px; display: -webkit-box;
                                                   -webkit-line-clamp: 7;
                                                   -webkit-box-orient: vertical;
                                                   overflow: hidden; color: white!important;">{{$message->name}}</p>
                                            </td>
                                            <td>
                                                <p style="border-radius: 5px; opacity: 0.8; background: black; padding: 5px; display: -webkit-box;
                                                   -webkit-line-clamp: 7;
                                                   -webkit-box-orient: vertical;
                                                   overflow: hidden; color: white!important;">{{$message->phone}}</p>
                                            </td>
                                            <td>
                                                <p style="border-radius: 5px; opacity: 0.8; background: black; padding: 5px; display: -webkit-box;
                                                   -webkit-line-clamp: 7;
                                                   -webkit-box-orient: vertical;
                                                   overflow: hidden; color: white!important;">{{$message->social}}</p>
                                            </td>

                                            <td>
                                                <form action="{{ route('admin.message.destroy', $message->id) }}"
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
{{--                                    {{ $messages->links() }}--}}
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
