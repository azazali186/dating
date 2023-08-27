@extends('admin.layout.main')
@push('title')
    Banner List
@endpush
@section('main-section')
    <?php $pagename = 'banner-list'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Banner</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Banner</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Banner</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $key => $banner)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img src="{{ $banner->photos }}" class="img-fluid" /></td>
                                                <td>{{ $banner->created_at }}</td>
                                                <td>
                                                    <a href="javascript:void(0);" onClick="editbanner({{ $banner->id }})">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <script type="text/javascript">
        function editbanner(id) {
            var url = '{{ url('admincon/edit-banner') }}' + '/' + id;
            swal({
                    title: `Are you sure you want to edit this record?`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        location.replace(url);
                    }
                });
        }
    </script>
@endsection
