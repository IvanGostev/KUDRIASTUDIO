@extends('admin.layouts.app')
@section('content')

    <div class="content-wrapper" style="min-height: 1345.6px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Edit Post</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.post.update', $post->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('patch')
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"
                                                       placeholder="Enter ..." value="{{$post->title}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>SEO slug</label>
                                                <input type="text" name="slug" class="form-control"
                                                       placeholder="Enter ..." value="{{$post->slug}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <!-- <label for="customFile">Custom File</label> -->
                                                <div style="height: 200px">
                                                    <img id="blah1" alt="insert an image" width="auto" height="200px" src="{{asset('storage/' . $post->img)}}">
                                                </div>
                                                <br>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                           name="img"
                                                           onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        banner</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label>About</label>
                                                <textarea  required="" class="form-control" rows="5"
                                                           name="about">{{$post->about}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Main text</label>
                                                <textarea id="summernote" required="" class="form-control" rows="15"
                                                          name="content">{{$post->content}}</textarea>
                                            </div>
                                        </div>



                                    <div class="row">
                                            <div class="col-sm-6">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>SEO description</label>
                                                    <textarea class="form-control" rows="10"
                                                              name="description">{{$post->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SEO keywords</label>
                                                    <textarea class="form-control" rows="10"
                                                              name="keywords">{{$post->keywords}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>


                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


@endsection
