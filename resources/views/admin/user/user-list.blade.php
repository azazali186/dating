@extends('admin.layout.main')
@push('title')
    Company
@endpush
@section('main-section')
    <?php $pagename = 'all-user-list'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Seller</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">All Seller</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            {{-- <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div> --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- <a href="{{ url('admincon/userForm') }}"><button class="btn btn-primary float-right"> <i
                                            class="fa fa-plus"></i> Add User</button></a> --}}
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Looking For</th>
                                            <th>Married status</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $key => $user) { $key++; ?>
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>
                                                @if ($user['name'] != '')
                                                    {{ $user['name'] }}
                                                @else
                                                    -----------
                                                @endif
                                            </td>
                                            <td>{{ $user['mobile'] }}</td>
                                            <td>
                                                @if ($user['email'] != '')
                                                    {{ $user['email'] }}
                                                @else
                                                    --------------------------
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user['city'] != '')
                                                    {{ $user['city'] }}
                                                @else
                                                    --------------------------
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user['gender'] }}
                                            </td>
                                            <td>
                                                @if ($user['lookingfor'] != '')
                                                    {{ $user['lookingfor'] }}
                                                @else
                                                    --------------------------
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user['matrital_status'] != '')
                                                    {{ $user['matrital_status'] }}
                                                @else
                                                    --------------------------
                                                @endif
                                            </td>

                                            <td>
                                                @if ($user['status'] == 1)
                                                    <span onClick="changeStatus({{ $user['id'] }}, 0)"
                                                        class="btn btn-success">Active</span>
                                                @else
                                                    <span onClick="changeStatus({{ $user['id'] }}, 1)"
                                                        class="btn btn-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $user['created_at'] }}</td>
                                            <td>
                                                <a href="javascript:void(0);" onClick="edituser('<?php echo base64_encode($user['id']); ?>')"><i
                                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="javascript:void(0);" onClick="removeuser({{ $user['id'] }})"><i
                                                        class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>

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
        var url = {!! json_encode(url('admincon/userForm')) !!}
        $('#addRow').click(function() {
            location.replace(url);
        });

        function changeStatus(id, val) {
            var url = '<?php echo url('admincon/userChangeStatus'); ?>' + '/' + id + '?status=' + val;
            swal({
                    title: `Are you sure you want to change the status of this record?`,
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

        function edituser(id) {
            var url = '<?php echo url('admincon/userForm'); ?>' + '/' + id;
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

        function removeuser(id) {
            var url = '<?php echo url('admincon/userDelete'); ?>' + '/' + id;
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
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
