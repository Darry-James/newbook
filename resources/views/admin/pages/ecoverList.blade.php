@extends('admin.layouts.design')

@section('extra_css')
    <style>
        th{
            color: #000;
        }
    </style>
@endsection

@section('content')


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Ecover List</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ecovers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

                <div class="card" style="background-color:transparent;">
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg mb-3">Back</button>
                            {{-- <button type="button" class="btn btn-secondary btn-lg mb-3">Add 3D Book Cover</button>
                            <button type="button" class="btn btn-success btn-lg mb-3">Add 3D CD Cover</button> --}}
                            <!-- <button type="button" class="btn btn-danger btn-lg">Danger</button>
                            <button type="button" class="btn btn-warning btn-lg">Warning</button>
                            <button type="button" class="btn btn-info btn-lg">Info</button>
                            <button type="button" class="btn btn-light btn-lg">Light</button>
                            <button type="button" class="btn btn-dark btn-lg">Dark</button>
                            <button type="button" class="btn btn-link btn-lg">Link</button> -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title"></h5> -->
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cover Image</th>
                                        <th>Title</th>
                                        <th>Created By</th>
                                        <th>Type</th>
                                        <th>Dimension</th>

                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($ecoverList->count() > 0)
                                        @foreach ($ecoverList as $ecover)
                                        <tr>
                                            <td style="width: 10%;">
                                                <img src="{{ $ecover->thumbnail }}" alt="" class="img-fluid">
                                            </td>
                                            <td>{{ $ecover->title }}</td>
                                            <td>{{ isset($ecover->createdBy) ? $ecover->createdBy->name : 'None' }}</td>
                                            <td>{{ $ecover->type }}</td>
                                            <td>{{ isset($ecover->dimension) ?
                                                $ecover->dimension->width .' by '. $ecover->dimension->height .'px' : 'None'}}</td>
                                            
                                            <td>{{ $ecover->status }}</td>
                                            <td>{{ $ecover->created_at->format('d M Y, g:ia') }}</td>
                                            <td>
                                                <a href="{{ route('adminEditEcoverList', $ecover->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr><td colspan="7" class="text-center">No Contents Available</td></tr>
                                    @endif
                                    
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cover Image</th>
                                        <th>Title</th>
                                        <th>Created By</th>
                                        <th>Type</th>
                                        <th>Dimension</th>
                                        
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->



@endsection

@section('extra_js')
@endsection