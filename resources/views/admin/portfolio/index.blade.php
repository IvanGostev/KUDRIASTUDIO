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
                                <form action="{{route('admin.work.store')}}" method="post"
                                      enctype="multipart/form-data" style="display: flex; flex-direction: row; gap: 10px">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" accept="video/mp4,video/x-m4v,video/*" name="src" style="border: 1px black solid">
                                    </div>
                                    <div class="form-group">
                                        <p>OR</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter the url" name="url">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark" type="submit">Add video</button>
                                    </div>
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
                                                    @if($work->url)
                                                        <iframe src="{{$work->url}}" height="200" frameborder="0"
                                                                allow="autoplay; fullscreen"
                                                                allowfullscreen></iframe>
                                                    @else
                                                        <video height="200" controls>
                                                            <source src="{{ asset('storage/' . $work->src)}}"
                                                                    type="video/mp4">
                                                        </video>
                                                    @endif
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
