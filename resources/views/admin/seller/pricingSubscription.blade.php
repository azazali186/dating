@extends('admin.layout.main')
@push('title')
    Company
@endpush
@section('main-section')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 94%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-align: end;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <?php $pagename = 'all-user-list'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pricing Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pricing Tables</li>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- <a href="{{ url('admincon/userForm') }}"><button class="btn btn-primary float-right"> <i
                                            class="fa fa-plus"></i> Add User</button></a> --}}
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Pricing Type</th>
                                            <th>Price</th>
                                            <th>join Date</th>
                                            <th>Expire Date</th>
                                            <th>Receipt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pricingTable as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item?->user?->name }}</td>
                                                <td>{{ $item?->user?->mobile }}</td>
                                                <td>{{ $item?->pricingTable?->pricing_type }}</td>
                                                <td>{{ $item?->pricingTable?->pricing }}</td>
                                                <td>{{ $item->join_date }}</td>
                                                <td>{{ $item->expiry_date }}</td>
                                                <td>
                                                    <button class="btn btn-info"
                                                        onclick="viewReceiptImage('{{ $item->image }}')">View</button>
                                                </td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <span class="badge badge-success">Approved</span>
                                                    @else
                                                        <button class="btn btn-primary"
                                                            onclick="edituser({{ $item->id }})">
                                                            Approve
                                                        </button>
                                                    @endif

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
    <div id="myModal1" class="modal">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <img src="" id="updateSrc" />
                    {{-- <form action="{{ url('pricing-subscription-upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="pricing_table_id" value="{{ $months->id }}" />
                        <div class="form-group">
                            <label>Please Upload Your Receipt</label>
                            <input required type="file" name="image" class="form-control" />
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button class="default-btn reverse" type="submit"><span>Submit</span></button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var modal1 = document.getElementById("myModal1");
        var span1 = document.getElementsByClassName("close")[0];

        function viewReceiptImage(image) {
            modal1.style.display = "block";
            // $("#updateSrc").src(image);
            $("#updateSrc").attr("src", image);
        }

        span1.onclick = function() {
            modal1.style.display = "none";
        }

        function edituser(id) {
            var url = '<?php echo url('admincon/pricing-subscription'); ?>' + '/' + id;
            swal({
                    title: `Are you sure you want Approve this record?`,
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
