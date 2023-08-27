@extends('admin.layout.main')
@push('title')
    Company
@endpush
@section('main-section')
    <?php $pagename = 'banner-list'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banner Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Banner Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Banner</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" action=""
                            method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputName">Photo</label>
                                        <input type="file" class="form-control" name="photos">
                                        <span id="photoswarning" style="color: red"></span>
                                    </div>

                                    <div class="form-group">
                                        <img class="image-fluid w-100" src="{{ $banner->photos }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </div>
@endsection
