@php
   
@endphp
@extends('admin.layouts.design')

@section('extra_css')
@endsection

@section('content')


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <!-- <h4 class="page-title">Ecover Gallery</h4> -->
                <button type="button" class="btn btn-primary btn-lg mb-3 mr-3 approved">Approved Covers</button>
                <button type="button" class="btn btn-secondary btn-lg mb-3 mr-3 unapproved">UnApproved Covers</button>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
            <div class="container-fluid" id="approved">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @if ($adminEcovers->count() > 0)
    
                <div class="row el-element-overlay">
                    
                    @foreach ($adminEcovers as $ecover)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/'.$ecover->thumbnail)}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img1.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img1.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">Flat Cover</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>

                @else
                <div class="row el-element-overlay">
                    No data available...
                </div>
                @endif
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

            <div class="container-fluid" id="un-approved">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">

                    <!---if ecover is added, don't show--->
                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img1.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img1.jpg')}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img1.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img1.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">Flat Cover</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img2.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img2.jpg')}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img2.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img2.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">Flat Cover</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img3.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img3.jpg')}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img3.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img3.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">Flat Cover</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img4.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img4.jpg')}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img4.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img4.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img5.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                           <div class="el-card-item">
                               <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img5.jpg')}}" alt="user" />
                                   <div class="el-overlay">
                                       <ul class="list-style-none el-info">
                                           <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img5.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                           <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img5.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="el-card-content">
                                   <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                               </div>
                           </div>
                       </div>
                   </div>
                    @endif

                    @if (!(\App\Models\AdminEcover::checkApprovedEcovers('img6.jpg')))
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/backend/assets/images/big/img6.jpg')}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/backend/assets/images/big/img6.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="{{ route('addAdminEcovers', ['img6.jpg','flat_cover']) }}"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    
                    
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
<script>
    $(function() {
        $('#un-approved').hide();
    })
    $('.approved').on('click', function(){
        $('#un-approved').hide();
        $('#approved').show();
    });

    $('.unapproved').on('click', function(){
        $('#approved').hide();
        $('#un-approved').show();
    });
</script>

@endsection