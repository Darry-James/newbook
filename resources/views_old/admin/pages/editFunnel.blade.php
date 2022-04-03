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
			<h4 class="page-title">Edit Funnel, Created By: {{ $funnel->createdBy->name }}</h4>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="">Funnel</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
	@include('partials.message')
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
    <form class="form-horizontal" method="POST" action="{{ route('adminEditFunnelPost', $funnel->id) }}" enctype="multipart/form-data">@csrf
        <div class="row">

    
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Edit Ecover</h4> --}}

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $funnel->title }}">
                                @if ($errors->has('name')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('name') }}</p> @endif
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-sm-3 text-right">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="status" value="true" class="custom-control-input" id="customControlAutosizing1" @if($funnel->status=="true") checked @endif>
                                    <label class="custom-control-label" for="customControlAutosizing1">Active</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        
            
        </div>
    </form>
	
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


  
  <!-- Modal -->
  

@endsection