@extends('admin.layout.main')
@push('title')
    Company
@endpush
@section('main-section')
    <?php $pagename = 'all-seller-list'; ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pricing Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pricing Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                @foreach ($pricingTable as $item)
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ $item->pricing_type }} Information</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <form enctype="multipart/form-data" action="{{ url('admincon/price-update') }}/{{ $item->id }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputClientCompany">Pricing Type</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $item->pricing_type }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Price</label>
                                            <input type="text" class="form-control" value="{{ $item->pricing }}"
                                                name="pricing" placeholder="Enter the price">
                                            <span id="pricingwarning" style="color: red"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">QR Photo</label>
                                            <input type="file" class="form-control" name="qr_image">
                                            <span id="qr_imagewarning" style="color: red"></span>
                                        </div>

                                        <div class="form-group">
                                            <img class="image-fluid" src="{{ $item->qr_image }}" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                                            <input type="submit" value="Save Changes" class="btn btn-success float-right">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endforeach
            </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
