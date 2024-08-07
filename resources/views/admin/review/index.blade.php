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
                                <a href="{{ route('admin.review.create') }}" class="btn btn-block btn-light">Add</a>
                                <br>
                                <h3 class="card-title">Reviews</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px; ">ID</th>
                                        <th>IMG</th>
                                        <th>Title</th>
                                        <th style="width: 80px!important;">Edit</th>
                                        <th style="width: 80px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reviews as $review)

                                        <tr>
                                            <td>{{$review->id}}</td>
                                            <td>
                                                <div>
                                                    <img width="200px" height="200px" style="padding: 15px"
                                                         src="{{ asset('storage/' . $review->img)}}">
                                                </div>
                                            </td>
                                            <td>
                                                <p style="border-radius: 5px; opacity: 0.8; background: black; padding: 5px; display: -webkit-box;
                                                   -webkit-line-clamp: 7;
                                                   -webkit-box-orient: vertical;
                                                   overflow: hidden; color: white!important;">{{$review->title}}</p>
                                            </td>

                                            <td><a class="btn btn-info btn-sm"
                                                   href="{{route('admin.review.edit', $review->id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                            </td>

                                            <td>
                                                <form action="{{ route('admin.review.destroy', $review->id) }}"
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
{{--                                    {{ $reviews->links() }}--}}
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
