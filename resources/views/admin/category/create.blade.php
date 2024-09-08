@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.6px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Category</h3>
                            </div>
                            <form action="{{ route('admin.category.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Ru Title</label>
                                            <input type="text" name="ru_title" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Es Title</label>
                                            <input type="text" name="es_title" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
