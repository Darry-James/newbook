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
			<h4 class="page-title">Edit User</h4>
			<div class="ml-auto text-right">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="">User</a></li>
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
    <form class="form-horizontal" method="POST" action="{{ route('adminEditUserPost', $user->id) }}" enctype="multipart/form-data">@csrf
        <div class="row">

        
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                            <div>
                                <img src="{{ asset('/profile_picture/'.$user->profile_picture) }}" alt="Profile Picture" class="img-fluid"> 
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="file" name="profile_picture" id="">
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Edit Ecover</h4> --}}
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                @if ($errors->has('name')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('name') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                @if ($errors->has('name')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('name') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}">
                                @if ($errors->has('name')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('name') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 text-right m-t-15">Role</label>
                            <div class="col-sm-9">
                                <select name="role" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option selected="selected" value="{{ $user->role }}"> {{ ucFirst($user->role) }} </option>
                                    <option value="subscriber">Subscriber</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @if ($errors->has('parent_id')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('parent_id') }}</p> @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 text-right">Status</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="status" value="true" class="custom-control-input" id="customControlAutosizing1" @if($user->status=="true") checked @endif>
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