@extends('admin.layouts.design')

@section('extra_css')
@endsection

@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Create Ebook</h4>
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
            <form action="{{ route('addAdminUploadEbooksPost') }}" method="post" enctype="multipart/form-data">@csrf
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- editor -->
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Topic</h4>
                                    <!-- Create the editor container -->
                                    <input type="text" name="keywords" id="" class="form-control" placeholder="Topic">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload PDF</h4>
                                    <!-- Create the editor container -->
                                    <input type="file" name="pdf_file" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-lg mb-3" id="hide_and_show">SHOW/HIDE OPTIONS</button>
                            </div>
                        </div>
                    </div>

                    <div class="hide_or_show" style="display:none;">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="ebook_author">AUTHOR</label>
                                    <input id="author_name" class="form-control no-shadow input-signin" type="text" name="ebook_author" required value="{{ Auth::user()->name }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#exampleModal">BROWSE ECOVERS</button>
                                    <input class="file_link" type="hidden" name="thumbnail" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Description</h4>
                                        <!-- Create the editor container -->
                                        <textarea class="tinymce" name="description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Summary</h4>
                                        <!-- Create the editor container -->
                                        <textarea class="tinymce" name="summary" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-success btn-lg mb-3 float-right">SUBMIT</button>
                            
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
            </form>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="container-fluid" id="approved">
                    
                        <div class="row el-element-overlay">
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img class="selected_file" src="{{asset('/admin/assets/images/big/img3.jpg')}}" alt="img3.jpg" />
                                            
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img class="selected_file" src="{{asset('/admin/assets/images/big/img5.jpg')}}" alt="img5" />
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/admin/assets/images/big/img6.jpg')}}" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="list-style-none el-info">
                                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/admin/assets/images/big/img6.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img class="selected_file" src="{{asset('/admin/assets/images/big/img1.jpg')}}" alt="img1.jpg" />
                                            <div class="el-overlay">
                                                <ul class="list-style-none el-info">
                                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/admin/assets/images/big/img1.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img class="selected_file" src="{{asset('/admin/assets/images/big/img1.jpg')}}" alt="user" />
                                            
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/admin/assets/images/big/img2.jpg')}}" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="list-style-none el-info">
                                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/admin/assets/images/big/img2.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/admin/assets/images/big/img3.jpg')}}" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="list-style-none el-info">
                                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/admin/assets/images/big/img3.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('/admin/assets/images/big/img4.jpg')}}" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="list-style-none el-info">
                                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('/admin/assets/images/big/img4.jpg')}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                            <h4 class="m-b-0">Cover Title</h4> <span class="text-muted">subtitle of project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>


@endsection

@section('extra_js')

<script>

file_link = $('.file_link');
    //each img. select file for post request
    $( ".selected_file" ).each(function(index) {
            $(this).on("click", function(){
                
                var imgSrc = $(this).attr('src');
                console.log(imgSrc);
                $(this).parents('div.el-card-avatar').css({'borderWidth':'3px', 'borderStyle':'solid', 'borderColor':'red'});
                $( ".selected_file" ).not(this).css({'borderWidth':'', 'borderStyle':'', 'borderColor':''});
                file_link.val(imgSrc);
            });
        });

</script>


    
    <script>
        $("button#hide_and_show").click(function(){
            $("div.hide_or_show").toggle();
        });
    </script>
 

@endsection