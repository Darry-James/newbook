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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row d-none">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Single Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Multiple Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM" selected>New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD" selected>South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation1">First One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation2">Second One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                            <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                            <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Forms Control</h4>
                                <div class="form-group">
                                    <label for="hue-demo">Hue</label>
                                    <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">Bottom left (default)</label>
                                    <input type="text" id="position-bottom-left" class="form-control demo" data-position="bottom left" value="#0088cc">
                                </div>
                                <div class="form-group">
                                    <label for="position-top-right">Top right</label>
                                    <input type="text" id="position-top-right" class="form-control demo" data-position="top right" value="#0088cc">
                                </div>
                                <label>Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <label class="m-t-15">Autoclose Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="submit" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Form Elements</h5>
                                <div class="form-group m-t-20">
                                    <label>Date Mask <small class="text-muted">dd/mm/yyyy</small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>Phone <small class="text-muted">(999) 999-9999</small></label>
                                    <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>International Number <small class="text-muted">+19 999 999 999</small></label>
                                    <input type="text" class="form-control international-inputmask" id="international-mask" placeholder="International Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Phone / xEx <small class="text-muted">(999) 999-9999 / x999999</small></label>
                                    <input type="text" class="form-control xphone-inputmask" id="xphone-mask" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Order <small class="text-muted">aaaa 9999-****</small></label>
                                    <input type="text" class="form-control purchase-inputmask" id="purchase-mask" placeholder="Enter Purchase Order">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Tooltip Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" data-toggle="tooltip" title="A Tooltip for the input !" class="form-control" id="validationDefault05" placeholder="Hover For tooltip" required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Type Ahead Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control" placeholder="Type here for auto complete.." required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Prepended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">#</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Prepend" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Appended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span class="text-success">Input with Sccess</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-valid" id="validationServer01">
                                        <div class="valid-feedback">
                                            Woohoo!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span class="text-danger">Input with Error</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-invalid" id="validationServer01">
                                        <div class="invalid-feedback">
                                            Please correct the error
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" placeholder="col-md-12">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-11">
                                        <input type="text" class="form-control" placeholder="col-md-11">
                                    </div>
                                    <div class="col-lg-1 p-l-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-1 p-l-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Topic</h4>
                                <!-- Create the editor container -->
                                <input type="text" name="keywords" id="" class="form-control" placeholder="Topic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#exampleModal">Browse Ecovers</button>
                            <input class="file_link" type="hidden" name="thumbnail" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ebook_author">AUTHOR</label>
                            <input id="author_name" class="form-control no-shadow input-signin" type="text" name="ebook_author" required value="{{ Auth::user()->name }}">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="page_numbering">PAGE NUMBERING</label>
                            <select id="page_numbering" class="form-control no-shadow input-signin" name="page_numbering">
                                <option value="none">None</option>
                                <option value="in_header">In Header</option>
                                <option value="in_footer">In Footer</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="number_format">NUMBER FORMAT</label>
                            <select id="number_format" class="form-control no-shadow input-signin" name="numbering_format">
                                <option value="[page]">[page]</option>
                                <option value="-[page]-">-[page]-</option>
                                <option value="Page [page]">Page [page]</option>
                                <option value="Page [page] of [topage]">Page [page] of [topage]</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!---Header--->
                <div class="row mb-5">
                    
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_text">HEADER TEXT</label>
                            <input id="header_text" class="form-control no-shadow input-signin" type="text"  name="header_text" placeholder="header text">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_text_link">HEADER LINK(OPTIONAL)</label>
                            <input id="header_text_link" class="form-control no-shadow input-signin" type="text"
                                name="header_text_link" placeholder="header text link">
                        </div> 
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_text_align">HEADER ALIGN</label>
                            <select id="header_text_align" class="form-control no-shadow input-signin" name="header_text_align">
                                <option value="left">Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_text_color">HEADER Color</label>
                            <input id="header_text_color" name="header_text_color" class="form-control no-shadow input-signin" type="color">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_font_size">HEADER TEXT SIZE</label>
                            <select id="header_font_size" name="header_font_size" class="form-control no-shadow input-signin">
                                <option value="8">8px</option>
                                <option value="9">9px</option>
                                <option value="10">10px</option>
                                <option value="11">11px</option>
                                <option value="12">12px</option>
                                <option value="13">13px</option>
                                <option value="14" selected="">14px</option>
                                <option value="15">15px</option>
                                <option value="16">16px</option>
                                <option value="18">18px</option>
                                <option value="20">20px</option>
                                <option value="22">22px</option>
                                <option value="24">24px</option>
                                <option value="26">26px</option>
                                <option value="28">28px</option>
                                <option value="36">36px</option>
                                <option value="48">48px</option>
                                <option value="72">72px</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="header_font_family">HEADER FONT FAMILY</label>
                            <select id="header_font_family" class="form-control no-shadow input-signin" name="header_font_family">
                                <option value="">Please Select</option>
                                <option value="Roboto">Roboto</option>
                                <option value="Open Sans" selected>Open Sans</option>
                                <option value="Noto Sans JP">Noto Sans JP</option>
                                <option value="Lato">Lato</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Roboto Condensed">Roboto Condensed</option>
                                <option value="Source Sans Pro">Source Sans Pro</option>
                                <option value="Poppins">Poppins</option>
                                <option value="Oswald">Oswald</option>
                                <option value="Roboto Mono">Roboto Mono</option>
                                <option value="Raleway">Raleway</option>
                                <option value="Noto Sans">Noto Sans</option>
                                <option value="Nunito">Nunito</option>
                                <option value="Ubuntu">Ubuntu</option>
                                <option value="Merriweather">Merriweather</option>
                                <option value="PT Sans">PT Sans</option>
                                <option value="Roboto Slab">Roboto Slab</option>
                                <option value="Playfair Display">Playfair Display</option>
                                <option value="Open Sans Condensed">Open Sans Condensed</option>
                                <option value="Rubik">Rubik</option>
                                <option value="Mukta">Mukta</option>
                                <option value="Noto Sans KR">Noto Sans KR</option>
                                <option value="Lora">Lora</option>
                                <option value="Inter">Inter</option>
                                <option value="Work Sans">Work Sans</option>
                                <option value="Nunito Sans">Nunito Sans</option>
                                <option value="Hind Siliguri">Hind Siliguri</option>
                                <option value="Nanum Gothic">Nanum Gothic</option>
                                <option value="Titillium Web">Titillium Web</option>
                                <option value="Fira Sans">Fira Sans</option>
                                <option value="Quicksand">Quicksand</option>
                                <option value="PT Serif">PT Serif</option>
                                <option value="Noto Serif">Noto Serif</option>
                                <option value="Noto Sans TC">Noto Sans TC</option>
                                <option value="Karla">Karla</option>
                                <option value="Barlow">Barlow</option>
                                <option value="Heebo">Heebo</option>
                                <option value="Libre Franklin">Libre Franklin</option>
                                <option value="Oxygen">Oxygen</option>
                                <option value="Libre Baskerville">Libre Baskerville</option>
                                <option value="PT Sans Narrow">PT Sans Narrow</option>
                                <option value="Inconsolata">Inconsolata</option>
                                <option value="Arimo">Arimo</option>
                                <option value="IBM Plex Sans">IBM Plex Sans</option>
                                <option value="Dosis">Dosis</option>
                                <option value="Josefin Sans">Josefin Sans</option>
                                <option value="Dancing Script">Dancing Script</option>
                                <option value="Anton">Anton</option>
                                <option value="Cabin">Cabin</option>
                                <option value="Cairo">Cairo</option>
                                <option value="Lobster">Lobster</option>
                                <option value="EB Garamond">EB Garamond</option>
                                <option value="Bebas Neue">Bebas Neue</option>
                                <option value="Bitter">Bitter</option>
                                <option value="Varela Round">Varela Round</option>
                                <option value="Crimson Text">Crimson Text</option>
                                <option value="Mulish">Mulish</option>
                                <option value="DM Sans">DM Sans</option>
                                <option value="Source Code Pro">Source Code Pro</option>
                                <option value="Source Serif Pro">Source Serif Pro</option>
                                <option value="Abel">Abel</option>
                                <option value="Prompt">Prompt</option>
                                <option value="Hind">Hind</option>
                                <option value="Comfortaa">Comfortaa</option>
                                <option value="Kanit">Kanit</option>
                                <option value="Fjalla One">Fjalla One</option>
                                <option value="Noto Sans SC">Noto Sans SC</option>
                                <option value="Barlow Condensed">Barlow Condensed</option>
                                <option value="Exo 2">Exo 2</option>
                                <option value="Signika Negative">Signika Negative</option>
                                <option value="Pacifico">Pacifico</option>
                                <option value="Hind Madurai">Hind Madurai</option>
                                <option value="Arvo">Arvo</option>
                                <option value="Overpass">Overpass</option>
                                <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
                                <option value="Teko">Teko</option>
                                <option value="Merriweather Sans">Merriweather Sans</option>
                                <option value="Abril Fatface">Abril Fatface</option>
                                <option value="Shadows Into Light">Shadows Into Light</option>
                                <option value="Manrope">Manrope</option>
                                <option value="Slabo 27px">Slabo 27px</option>
                                <option value="Maven Pro">Maven Pro</option>
                                <option value="Indie Flower">Indie Flower</option>
                                <option value="Saira Condensed">Saira Condensed</option>
                                <option value="Asap">Asap</option>
                                <option value="Noto Serif JP">Noto Serif JP</option>
                                <option value="IBM Plex Serif">IBM Plex Serif</option>
                                <option value="Questrial">Questrial</option>
                                <option value="Tajawal">Tajawal</option>
                                <option value="Assistant">Assistant</option>
                                <option value="Fira Sans Condensed">Fira Sans Condensed</option>
                                <option value="Cormorant Garamond">Cormorant Garamond</option>
                                <option value="Catamaran">Catamaran</option>
                                <option value="Exo">Exo</option>
                                <option value="Rajdhani">Rajdhani</option>
                                <option value="Caveat">Caveat</option>
                                <option value="Architects Daughter">Architects Daughter</option>
                                <option value="Play">Play</option>
                                <option value="Permanent Marker">Permanent Marker</option>
                                <option value="Alfa Slab One">Alfa Slab One</option>
                                <option value="M PLUS Rounded 1c">M PLUS Rounded 1c</option>
                                <option value="Domine">Domine</option>
                                <option value="Archivo Narrow">Archivo Narrow</option>
                                <option value="Nanum Myeongjo">Nanum Myeongjo</option>
                                <option value="Acme">Acme</option>
                                <option value="Secular One">Secular One</option>
                                <option value="Zilla Slab">Zilla Slab</option>
                                <option value="Amatic SC">Amatic SC</option>
                                <option value="Signika">Signika</option>
                                <option value="Balsamiq Sans">Balsamiq Sans</option>
                                <option value="Patrick Hand">Patrick Hand</option>
                                <option value="Bree Serif">Bree Serif</option>
                                <option value="Spartan">Spartan</option>
                                <option value="Patua One">Patua One</option>
                                <option value="Righteous">Righteous</option>
                                <option value="Noto Sans HK">Noto Sans HK</option>
                                <option value="Jost">Jost</option>
                                <option value="ABeeZee">ABeeZee</option>
                                <option value="Crimson Pro">Crimson Pro</option>
                                <option value="Alegreya Sans">Alegreya Sans</option>
                                <option value="Public Sans">Public Sans</option>
                                <option value="Vollkorn">Vollkorn</option>
                                <option value="Crete Round">Crete Round</option>
                                <option value="M PLUS 1p">M PLUS 1p</option>
                                <option value="Satisfy">Satisfy</option>
                                <option value="Martel">Martel</option>
                                <option value="Barlow Semi Condensed">Barlow Semi Condensed</option>
                                <option value="Encode Sans">Encode Sans</option>
                                <option value="Antic Slab">Antic Slab</option>
                                <option value="Montserrat Alternates">Montserrat Alternates</option>
                                <option value="Archivo">Archivo</option>
                                <option value="Cinzel">Cinzel</option>
                                <option value="Cookie">Cookie</option>
                                <option value="Chakra Petch">Chakra Petch</option>
                                <option value="Padauk">Padauk</option>
                                <option value="Space Mono">Space Mono</option>
                                <option value="Fredoka One">Fredoka One</option>
                                <option value="Tinos">Tinos</option>
                                <option value="Sarabun">Sarabun</option>
                                <option value="Recursive">Recursive</option>
                                <option value="Amiri">Amiri</option>
                                <option value="Courgette">Courgette</option>
                                <option value="Ubuntu Condensed">Ubuntu Condensed</option>
                                <option value="DM Serif Display">DM Serif Display</option>
                                <option value="Red Hat Display">Red Hat Display</option>
                                <option value="Lobster Two">Lobster Two</option>
                                <option value="Great Vibes">Great Vibes</option>
                                <option value="Prata">Prata</option>
                                <option value="Alegreya">Alegreya</option>
                                <option value="Almarai">Almarai</option>
                                <option value="Didact Gothic">Didact Gothic</option>
                                <option value="Archivo Black">Archivo Black</option>
                                <option value="IBM Plex Mono">IBM Plex Mono</option>
                                <option value="Space Grotesk">Space Grotesk</option>
                                <option value="Baloo 2">Baloo 2</option>
                                <option value="PT Sans Caption">PT Sans Caption</option>
                                <option value="Cardo">Cardo</option>
                                <option value="Yantramanav">Yantramanav</option>
                                <option value="Asap Condensed">Asap Condensed</option>
                                <option value="Frank Ruhl Libre">Frank Ruhl Libre</option>
                                <option value="Russo One">Russo One</option>
                                <option value="Spectral">Spectral</option>
                                <option value="Kaushan Script">Kaushan Script</option>
                                <option value="Kalam">Kalam</option>
                                <option value="Noticia Text">Noticia Text</option>
                                <option value="Staatliches">Staatliches</option>
                                <option value="Francois One">Francois One</option>
                                <option value="Gothic A1">Gothic A1</option>
                                <option value="Old Standard TT">Old Standard TT</option>
                                <option value="Concert One">Concert One</option>
                                <option value="Orbitron">Orbitron</option>
                                <option value="Sacramento">Sacramento</option>
                                <option value="Passion One">Passion One</option>
                                <option value="Changa">Changa</option>
                                <option value="Quattrocento Sans">Quattrocento Sans</option>
                                <option value="Rokkitt">Rokkitt</option>
                                <option value="Pathway Gothic One">Pathway Gothic One</option>
                                <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                                <option value="Cormorant">Cormorant</option>
                                <option value="Cuprum">Cuprum</option>
                                <option value="Cantarell">Cantarell</option>
                                <option value="Special Elite">Special Elite</option>
                                <option value="Unna">Unna</option>
                                <option value="Parisienne">Parisienne</option>
                                <option value="Luckiest Guy">Luckiest Guy</option>
                                <option value="Noto Serif TC">Noto Serif TC</option>
                                <option value="Sawarabi Mincho">Sawarabi Mincho</option>
                                <option value="Noto Kufi Arabic">Noto Kufi Arabic</option>
                                <option value="Merienda">Merienda</option>
                                <option value="Josefin Slab">Josefin Slab</option>
                                <option value="Faustina">Faustina</option>
                                <option value="Chivo">Chivo</option>
                                <option value="Ropa Sans">Ropa Sans</option>
                                <option value="Carter One">Carter One</option>
                                <option value="Volkhov">Volkhov</option>
                                <option value="Press Start 2P">Press Start 2P</option>
                                <option value="Sigmar One">Sigmar One</option>
                                <option value="Philosopher">Philosopher</option>
                                <option value="Quattrocento">Quattrocento</option>
                                <option value="Khand">Khand</option>
                                <option value="Saira">Saira</option>
                                <option value="Alata">Alata</option>
                                <option value="Monda">Monda</option>
                                <option value="Poiret One">Poiret One</option>
                                <option value="Eczar">Eczar</option>
                                <option value="Taviraj">Taviraj</option>
                                <option value="Neuton">Neuton</option>
                                <option value="Advent Pro">Advent Pro</option>
                                <option value="News Cycle">News Cycle</option>
                                <option value="Lusitana">Lusitana</option>
                                <option value="Ultra">Ultra</option>
                                <option value="PT Mono">PT Mono</option>
                                <option value="Playfair Display SC">Playfair Display SC</option>
                                <option value="Marcellus">Marcellus</option>
                                <option value="Playball">Playball</option>
                                <option value="Vidaloka">Vidaloka</option>
                                <option value="Arima Madurai">Arima Madurai</option>
                                <option value="El Messiri">El Messiri</option>
                                <option value="Tangerine">Tangerine</option>
                                <option value="Fira Sans Extra Condensed">Fira Sans Extra Condensed</option>
                                <option value="Sawarabi Gothic">Sawarabi Gothic</option>
                                <option value="Yellowtail">Yellowtail</option>
                                <option value="Karma">Karma</option>
                                <option value="Hammersmith One">Hammersmith One</option>
                                <option value="Bangers">Bangers</option>
                                <option value="Sanchez">Sanchez</option>
                                <option value="Viga">Viga</option>
                                <option value="Nanum Gothic Coding">Nanum Gothic Coding</option>
                                <option value="Pragati Narrow">Pragati Narrow</option>
                                <option value="Actor">Actor</option>
                                <option value="Handlee">Handlee</option>
                                <option value="IM Fell English SC">IM Fell English SC</option>
                                <option value="Gelasio">Gelasio</option>
                                <option value="Alice">Alice</option>
                                <option value="Ruda">Ruda</option>
                                <option value="Neucha">Neucha</option>
                                <option value="Mali">Mali</option>
                                <option value="Marck Script">Marck Script</option>
                                <option value="Istok Web">Istok Web</option>
                                <option value="Jura">Jura</option>
                                <option value="Yeseva One">Yeseva One</option>
                                <option value="Ubuntu Mono">Ubuntu Mono</option>
                                <option value="Adamina">Adamina</option>
                                <option value="Arapey">Arapey</option>
                                <option value="Economica">Economica</option>
                                <option value="Gudea">Gudea</option>
                                <option value="Aleo">Aleo</option>
                                <option value="DM Serif Text">DM Serif Text</option>
                                <option value="Allura">Allura</option>
                                <option value="Lexend Deca">Lexend Deca</option>
                                <option value="Mitr">Mitr</option>
                                <option value="Itim">Itim</option>
                                <option value="Paytone One">Paytone One</option>
                                <option value="Gochi Hand">Gochi Hand</option>
                                <option value="Palanquin">Palanquin</option>
                                <option value="Sen">Sen</option>
                                <option value="BenchNine">BenchNine</option>
                                <option value="Quantico">Quantico</option>
                                <option value="Abhaya Libre">Abhaya Libre</option>
                                <option value="Alef">Alef</option>
                                <option value="Bai Jamjuree">Bai Jamjuree</option>
                                <option value="Noto Serif SC">Noto Serif SC</option>
                                <option value="Saira Semi Condensed">Saira Semi Condensed</option>
                                <option value="Amaranth">Amaranth</option>
                                <option value="Yrsa">Yrsa</option>
                                <option value="Unica One">Unica One</option>
                                <option value="Noto Serif KR">Noto Serif KR</option>
                                <option value="Hind Vadodara">Hind Vadodara</option>
                                <option value="Nothing You Could Do">Nothing You Could Do</option>
                                <option value="Allerta">Allerta</option>
                                <option value="Bungee">Bungee</option>
                                <option value="Mr Dafoe">Mr Dafoe</option>
                                <option value="Bad Script">Bad Script</option>
                                <option value="Londrina Solid">Londrina Solid</option>
                                <option value="Cabin Condensed">Cabin Condensed</option>
                                <option value="Syncopate">Syncopate</option>
                                <option value="Khula">Khula</option>
                                <option value="Electrolize">Electrolize</option>
                                <option value="Homemade Apple">Homemade Apple</option>
                                <option value="Armata">Armata</option>
                                <option value="Suez One">Suez One</option>
                                <option value="Rock Salt">Rock Salt</option>
                                <option value="Cantata One">Cantata One</option>
                                <option value="Aclonica">Aclonica</option>
                                <option value="Varela">Varela</option>
                                <option value="Julius Sans One">Julius Sans One</option>
                                <option value="Rufina">Rufina</option>
                                <option value="Tenor Sans">Tenor Sans</option>
                                <option value="Sora">Sora</option>
                                <option value="Pontano Sans">Pontano Sans</option>
                                <option value="Gentium Basic">Gentium Basic</option>
                                <option value="Arsenal">Arsenal</option>
                                <option value="Mukta Malar">Mukta Malar</option>
                                <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
                                <option value="Share Tech Mono">Share Tech Mono</option>
                                <option value="Kosugi Maru">Kosugi Maru</option>
                                <option value="Alex Brush">Alex Brush</option>
                                <option value="Courier Prime">Courier Prime</option>
                                <option value="Lilita One">Lilita One</option>
                                <option value="Sarala">Sarala</option>
                                <option value="Monoton">Monoton</option>
                                <option value="Fugaz One">Fugaz One</option>
                                <option value="Gruppo">Gruppo</option>
                                <option value="Gentium Book Basic">Gentium Book Basic</option>
                                <option value="Mate SC">Mate SC</option>
                                <option value="Ramabhadra">Ramabhadra</option>
                                <option value="Changa One">Changa One</option>
                                <option value="Krub">Krub</option>
                                <option value="Nanum Pen Script">Nanum Pen Script</option>
                                <option value="Jaldi">Jaldi</option>
                                <option value="Forum">Forum</option>
                                <option value="Pangolin">Pangolin</option>
                                <option value="Damion">Damion</option>
                                <option value="Audiowide">Audiowide</option>
                                <option value="Black Ops One">Black Ops One</option>
                                <option value="Commissioner">Commissioner</option>
                                <option value="Overlock">Overlock</option>
                                <option value="Bubblegum Sans">Bubblegum Sans</option>
                                <option value="Mandali">Mandali</option>
                                <option value="Days One">Days One</option>
                                <option value="Coda">Coda</option>
                                <option value="Bowlby One SC">Bowlby One SC</option>
                                <option value="Sansita">Sansita</option>
                                <option value="Sintony">Sintony</option>
                                <option value="Shadows Into Light Two">Shadows Into Light Two</option>
                                <option value="Red Hat Text">Red Hat Text</option>
                                <option value="Lalezar">Lalezar</option>
                                <option value="Oleo Script">Oleo Script</option>
                                <option value="Martel Sans">Martel Sans</option>
                                <option value="Six Caps">Six Caps</option>
                                <option value="Markazi Text">Markazi Text</option>
                                <option value="Italianno">Italianno</option>
                                <option value="Voltaire">Voltaire</option>
                                <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
                                <option value="Candal">Candal</option>
                                <option value="Cousine">Cousine</option>
                                <option value="Noto Naskh Arabic">Noto Naskh Arabic</option>
                                <option value="Scheherazade">Scheherazade</option>
                                <option value="Literata">Literata</option>
                                <option value="Mada">Mada</option>
                                <option value="Basic">Basic</option>
                                <option value="Berkshire Swash">Berkshire Swash</option>
                                <option value="Squada One">Squada One</option>
                                <option value="Chewy">Chewy</option>
                                <option value="Niramit">Niramit</option>
                                <option value="Average">Average</option>
                                <option value="Hind Guntur">Hind Guntur</option>
                                <option value="Pinyon Script">Pinyon Script</option>
                                <option value="Sriracha">Sriracha</option>
                                <option value="Encode Sans Condensed">Encode Sans Condensed</option>
                                <option value="Shrikhand">Shrikhand</option>
                                <option value="IBM Plex Sans Condensed">IBM Plex Sans Condensed</option>
                                <option value="Alatsi">Alatsi</option>
                                <option value="Anonymous Pro">Anonymous Pro</option>
                                <option value="Arizonia">Arizonia</option>
                                <option value="Glegoo">Glegoo</option>
                                <option value="Belgrano">Belgrano</option>
                                <option value="Rubik Mono One">Rubik Mono One</option>
                                <option value="Alegreya Sans SC">Alegreya Sans SC</option>
                                <option value="Black Han Sans">Black Han Sans</option>
                                <option value="Palanquin Dark">Palanquin Dark</option>
                                <option value="Lemonada">Lemonada</option>
                                <option value="Fredericka the Great">Fredericka the Great</option>
                                <option value="Spinnaker">Spinnaker</option>
                                <option value="Judson">Judson</option>
                                <option value="Caveat Brush">Caveat Brush</option>
                                <option value="Antic">Antic</option>
                                <option value="Racing Sans One">Racing Sans One</option>
                                <option value="Reenie Beanie">Reenie Beanie</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Lateef">Lateef</option>
                                <option value="Holtwood One SC">Holtwood One SC</option>
                                <option value="Kreon">Kreon</option>
                                <option value="Kameron">Kameron</option>
                                <option value="Darker Grotesque">Darker Grotesque</option>
                                <option value="Rancho">Rancho</option>
                                <option value="Castoro">Castoro</option>
                                <option value="Overpass Mono">Overpass Mono</option>
                                <option value="Michroma">Michroma</option>
                                <option value="Syne">Syne</option>
                                <option value="PT Serif Caption">PT Serif Caption</option>
                                <option value="Bevan">Bevan</option>
                                <option value="Boogaloo">Boogaloo</option>
                                <option value="Enriqueta">Enriqueta</option>
                                <option value="Reem Kufi">Reem Kufi</option>
                                <option value="Laila">Laila</option>
                                <option value="Titan One">Titan One</option>
                                <option value="Blinker">Blinker</option>
                                <option value="Aldrich">Aldrich</option>
                                <option value="Fira Mono">Fira Mono</option>
                                <option value="Niconne">Niconne</option>
                                <option value="Gilda Display">Gilda Display</option>
                                <option value="Alike">Alike</option>
                                <option value="Cinzel Decorative">Cinzel Decorative</option>
                                <option value="Comic Neue">Comic Neue</option>
                                <option value="Leckerli One">Leckerli One</option>
                                <option value="Norican">Norican</option>
                                <option value="Lexend">Lexend</option>
                                <option value="Biryani">Biryani</option>
                                <option value="Henny Penny">Henny Penny</option>
                                <option value="Covered By Your Grace">Covered By Your Grace</option>
                                <option value="Amita">Amita</option>
                                <option value="GFS Didot">GFS Didot</option>
                                <option value="Capriola">Capriola</option>
                                <option value="VT323">VT323</option>
                                <option value="Arbutus Slab">Arbutus Slab</option>
                                <option value="Pridi">Pridi</option>
                                <option value="Rye">Rye</option>
                                <option value="Cabin Sketch">Cabin Sketch</option>
                                <option value="Saira Extra Condensed">Saira Extra Condensed</option>
                                <option value="Charm">Charm</option>
                                <option value="Lustria">Lustria</option>
                                <option value="Rambla">Rambla</option>
                                <option value="Knewave">Knewave</option>
                                <option value="Allerta Stencil">Allerta Stencil</option>
                                <option value="Duru Sans">Duru Sans</option>
                                <option value="Noto Sans Devanagari">Noto Sans Devanagari</option>
                                <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
                                <option value="Suranna">Suranna</option>
                                <option value="Podkova">Podkova</option>
                                <option value="Baskervville">Baskervville</option>
                                <option value="Share">Share</option>
                                <option value="Be Vietnam">Be Vietnam</option>
                                <option value="Rozha One">Rozha One</option>
                                <option value="Mate">Mate</option>
                                <option value="Hepta Slab">Hepta Slab</option>
                                <option value="Contrail One">Contrail One</option>
                                <option value="Mukta Vaani">Mukta Vaani</option>
                                <option value="Bowlby One">Bowlby One</option>
                                <option value="Caudex">Caudex</option>
                                <option value="Alegreya SC">Alegreya SC</option>
                                <option value="Corben">Corben</option>
                                <option value="Coming Soon">Coming Soon</option>
                                <option value="Yesteryear">Yesteryear</option>
                                <option value="K2D">K2D</option>
                                <option value="IM Fell DW Pica">IM Fell DW Pica</option>
                                <option value="Average Sans">Average Sans</option>
                                <option value="Magra">Magra</option>
                                <option value="Kumbh Sans">Kumbh Sans</option>
                                <option value="Trocchi">Trocchi</option>
                                <option value="JetBrains Mono">JetBrains Mono</option>
                                <option value="Do Hyeon">Do Hyeon</option>
                                <option value="Nixie One">Nixie One</option>
                                <option value="Allan">Allan</option>
                                <option value="Belleza">Belleza</option>
                                <option value="Copse">Copse</option>
                                <option value="Seaweed Script">Seaweed Script</option>
                                <option value="Trirong">Trirong</option>
                                <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
                                <option value="Marcellus SC">Marcellus SC</option>
                                <option value="Scada">Scada</option>
                                <option value="Athiti">Athiti</option>
                                <option value="Libre Caslon Text">Libre Caslon Text</option>
                                <option value="Nanum Brush Script">Nanum Brush Script</option>
                                <option value="Delius">Delius</option>
                                <option value="Oranienbaum">Oranienbaum</option>
                                <option value="Just Another Hand">Just Another Hand</option>
                                <option value="Epilogue">Epilogue</option>
                                <option value="Kristi">Kristi</option>
                                <option value="Krona One">Krona One</option>
                                <option value="Rochester">Rochester</option>
                                <option value="Jua">Jua</option>
                                <option value="Telex">Telex</option>
                                <option value="Poller One">Poller One</option>
                                <option value="Bodoni Moda">Bodoni Moda</option>
                                <option value="Skranji">Skranji</option>
                                <option value="Carrois Gothic">Carrois Gothic</option>
                                <option value="Miriam Libre">Miriam Libre</option>
                                <option value="Amiko">Amiko</option>
                                <option value="Averia Serif Libre">Averia Serif Libre</option>
                                <option value="Amethysta">Amethysta</option>
                                <option value="Merienda One">Merienda One</option>
                                <option value="Pattaya">Pattaya</option>
                                <option value="Big Shoulders Display">Big Shoulders Display</option>
                                <option value="Cambay">Cambay</option>
                                <option value="Nobile">Nobile</option>
                                <option value="Molengo">Molengo</option>
                                <option value="Fauna One">Fauna One</option>
                                <option value="Cedarville Cursive">Cedarville Cursive</option>
                                <option value="Chonburi">Chonburi</option>
                                <option value="Baloo Da 2">Baloo Da 2</option>
                                <option value="Bungee Inline">Bungee Inline</option>
                                <option value="Cormorant Infant">Cormorant Infant</option>
                                <option value="Ovo">Ovo</option>
                                <option value="Calligraffitti">Calligraffitti</option>
                                <option value="Alike Angular">Alike Angular</option>
                                <option value="Oxygen Mono">Oxygen Mono</option>
                                <option value="Wallpoet">Wallpoet</option>
                                <option value="Grand Hotel">Grand Hotel</option>
                                <option value="Esteban">Esteban</option>
                                <option value="Schoolbell">Schoolbell</option>
                                <option value="Petit Formal Script">Petit Formal Script</option>
                                <option value="Grandstander">Grandstander</option>
                                <option value="Kosugi">Kosugi</option>
                                <option value="Creepster">Creepster</option>
                                <option value="Bellefair">Bellefair</option>
                                <option value="Fira Code">Fira Code</option>
                                <option value="Averia Libre">Averia Libre</option>
                                <option value="Jockey One">Jockey One</option>
                                <option value="Manjari">Manjari</option>
                                <option value="Marmelad">Marmelad</option>
                                <option value="Rosario">Rosario</option>
                                <option value="Farro">Farro</option>
                                <option value="Montez">Montez</option>
                                <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
                                <option value="Noto Sans Tamil">Noto Sans Tamil</option>
                                <option value="Coustard">Coustard</option>
                                <option value="Aladin">Aladin</option>
                                <option value="Halant">Halant</option>
                                <option value="Metrophobic">Metrophobic</option>
                                <option value="Slabo 13px">Slabo 13px</option>
                                <option value="David Libre">David Libre</option>
                                <option value="Marvel">Marvel</option>
                                <option value="Georama">Georama</option>
                                <option value="Antonio">Antonio</option>
                                <option value="Sunflower">Sunflower</option>
                                <option value="Oxanium">Oxanium</option>
                                <option value="Harmattan">Harmattan</option>
                                <option value="IM Fell Double Pica">IM Fell Double Pica</option>
                                <option value="Rammetto One">Rammetto One</option>
                                <option value="Gabriela">Gabriela</option>
                                <option value="Noto Sans Mandaic">Noto Sans Mandaic</option>
                                <option value="Mr De Haviland">Mr De Haviland</option>
                                <option value="Cutive Mono">Cutive Mono</option>
                                <option value="Carme">Carme</option>
                                <option value="Convergence">Convergence</option>
                                <option value="Hanuman">Hanuman</option>
                                <option value="Spectral SC">Spectral SC</option>
                                <option value="Stardos Stencil">Stardos Stencil</option>
                                <option value="Emilys Candy">Emilys Candy</option>
                                <option value="Bentham">Bentham</option>
                                <option value="Urbanist">Urbanist</option>
                                <option value="Fanwood Text">Fanwood Text</option>
                                <option value="NTR">NTR</option>
                                <option value="Sofia">Sofia</option>
                                <option value="Sniglet">Sniglet</option>
                                <option value="ZCOOL XiaoWei">ZCOOL XiaoWei</option>
                                <option value="Radley">Radley</option>
                                <option value="IM Fell English">IM Fell English</option>
                                <option value="Libre Barcode 39">Libre Barcode 39</option>
                                <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
                                <option value="Thasadith">Thasadith</option>
                                <option value="Happy Monkey">Happy Monkey</option>
                                <option value="La Belle Aurore">La Belle Aurore</option>
                                <option value="Kelly Slab">Kelly Slab</option>
                                <option value="Irish Grover">Irish Grover</option>
                                <option value="Maitree">Maitree</option>
                                <option value="Shippori Mincho">Shippori Mincho</option>
                                <option value="Proza Libre">Proza Libre</option>
                                <option value="Encode Sans Semi Condensed">Encode Sans Semi Condensed</option>
                                <option value="Hi Melody">Hi Melody</option>
                                <option value="Gugi">Gugi</option>
                                <option value="Andika">Andika</option>
                                <option value="Buenard">Buenard</option>
                                <option value="Mallanna">Mallanna</option>
                                <option value="Cutive">Cutive</option>
                                <option value="Noto Sans Malayalam">Noto Sans Malayalam</option>
                                <option value="Turret Road">Turret Road</option>
                                <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                <option value="Grenze Gotisch">Grenze Gotisch</option>
                                <option value="Tillana">Tillana</option>
                                <option value="Qwigley">Qwigley</option>
                                <option value="Oregano">Oregano</option>
                                <option value="Chelsea Market">Chelsea Market</option>
                                <option value="Poly">Poly</option>
                                <option value="Original Surfer">Original Surfer</option>
                                <option value="Major Mono Display">Major Mono Display</option>
                                <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
                                <option value="BioRhyme">BioRhyme</option>
                                <option value="Cormorant SC">Cormorant SC</option>
                                <option value="Brawler">Brawler</option>
                                <option value="Livvic">Livvic</option>
                                <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
                                <option value="Della Respira">Della Respira</option>
                                <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
                                <option value="Mansalva">Mansalva</option>
                                <option value="Doppio One">Doppio One</option>
                                <option value="Limelight">Limelight</option>
                                <option value="Noto Serif Display">Noto Serif Display</option>
                                <option value="Baloo Tamma 2">Baloo Tamma 2</option>
                                <option value="Rasa">Rasa</option>
                                <option value="Noto Sans Thai">Noto Sans Thai</option>
                                <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
                                <option value="Mirza">Mirza</option>
                                <option value="Kadwa">Kadwa</option>
                                <option value="Dawning of a New Day">Dawning of a New Day</option>
                                <option value="Noto Sans Bengali">Noto Sans Bengali</option>
                                <option value="Galada">Galada</option>
                                <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
                                <option value="Quando">Quando</option>
                                <option value="Ceviche One">Ceviche One</option>
                                <option value="Lemon">Lemon</option>
                                <option value="Goblin One">Goblin One</option>
                                <option value="Expletus Sans">Expletus Sans</option>
                                <option value="Rouge Script">Rouge Script</option>
                                <option value="Kurale">Kurale</option>
                                <option value="Noto Sans Hebrew">Noto Sans Hebrew</option>
                                <option value="Meddon">Meddon</option>
                                <option value="B612 Mono">B612 Mono</option>
                                <option value="Ranchers">Ranchers</option>
                                <option value="Inknut Antiqua">Inknut Antiqua</option>
                                <option value="Gravitas One">Gravitas One</option>
                                <option value="ZCOOL QingKe HuangYou">ZCOOL QingKe HuangYou</option>
                                <option value="Freckle Face">Freckle Face</option>
                                <option value="Sarpanch">Sarpanch</option>
                                <option value="Wendy One">Wendy One</option>
                                <option value="Homenaje">Homenaje</option>
                                <option value="Tenali Ramakrishna">Tenali Ramakrishna</option>
                                <option value="Rakkas">Rakkas</option>
                                <option value="Baloo Thambi 2">Baloo Thambi 2</option>
                                <option value="Amarante">Amarante</option>
                                <option value="Federo">Federo</option>
                                <option value="Bungee Shade">Bungee Shade</option>
                                <option value="Metamorphous">Metamorphous</option>
                                <option value="Patrick Hand SC">Patrick Hand SC</option>
                                <option value="Anaheim">Anaheim</option>
                                <option value="Vast Shadow">Vast Shadow</option>
                                <option value="Give You Glory">Give You Glory</option>
                                <option value="Fondamento">Fondamento</option>
                                <option value="Aref Ruqaa">Aref Ruqaa</option>
                                <option value="Zeyada">Zeyada</option>
                                <option value="Antic Didone">Antic Didone</option>
                                <option value="Finger Paint">Finger Paint</option>
                                <option value="Yatra One">Yatra One</option>
                                <option value="Coda Caption">Coda Caption</option>
                                <option value="Share Tech">Share Tech</option>
                                <option value="Crafty Girls">Crafty Girls</option>
                                <option value="KoHo">KoHo</option>
                                <option value="Big Shoulders Text">Big Shoulders Text</option>
                                <option value="Mountains of Christmas">Mountains of Christmas</option>
                                <option value="Vollkorn SC">Vollkorn SC</option>
                                <option value="Notable">Notable</option>
                                <option value="Atma">Atma</option>
                                <option value="Cormorant Upright">Cormorant Upright</option>
                                <option value="Sedgwick Ave">Sedgwick Ave</option>
                                <option value="Trykker">Trykker</option>
                                <option value="Euphoria Script">Euphoria Script</option>
                                <option value="Praise">Praise</option>
                                <option value="Baumans">Baumans</option>
                                <option value="Noto Sans Kannada">Noto Sans Kannada</option>
                                <option value="Calistoga">Calistoga</option>
                                <option value="Road Rage">Road Rage</option>
                                <option value="Pompiere">Pompiere</option>
                                <option value="Clicker Script">Clicker Script</option>
                                <option value="Katibeh">Katibeh</option>
                                <option value="Sail">Sail</option>
                                <option value="Lexend Zetta">Lexend Zetta</option>
                                <option value="Frijole">Frijole</option>
                                <option value="Italiana">Italiana</option>
                                <option value="Battambang">Battambang</option>
                                <option value="Nova Mono">Nova Mono</option>
                                <option value="Chau Philomene One">Chau Philomene One</option>
                                <option value="Mukta Mahee">Mukta Mahee</option>
                                <option value="Megrim">Megrim</option>
                                <option value="Codystar">Codystar</option>
                                <option value="Newsreader">Newsreader</option>
                                <option value="Nova Round">Nova Round</option>
                                <option value="Raleway Dots">Raleway Dots</option>
                                <option value="Walter Turncoat">Walter Turncoat</option>
                                <option value="Noto Sans Telugu">Noto Sans Telugu</option>
                                <option value="McLaren">McLaren</option>
                                <option value="Delius Swash Caps">Delius Swash Caps</option>
                                <option value="Lekton">Lekton</option>
                                <option value="Noto Sans Oriya">Noto Sans Oriya</option>
                                <option value="Unkempt">Unkempt</option>
                                <option value="Dokdo">Dokdo</option>
                                <option value="RocknRoll One">RocknRoll One</option>
                                <option value="Strait">Strait</option>
                                <option value="Balthazar">Balthazar</option>
                                <option value="B612">B612</option>
                                <option value="DM Mono">DM Mono</option>
                                <option value="STIX Two Text">STIX Two Text</option>
                                <option value="Reggae One">Reggae One</option>
                                <option value="Aguafina Script">Aguafina Script</option>
                                <option value="Faster One">Faster One</option>
                                <option value="Noto Sans Gujarati">Noto Sans Gujarati</option>
                                <option value="Coiny">Coiny</option>
                                <option value="Inder">Inder</option>
                                <option value="Noto Sans Gurmukhi">Noto Sans Gurmukhi</option>
                                <option value="Baloo Chettan 2">Baloo Chettan 2</option>
                                <option value="Bellota Text">Bellota Text</option>
                                <option value="Ma Shan Zheng">Ma Shan Zheng</option>
                                <option value="Arya">Arya</option>
                                <option value="Fraunces">Fraunces</option>
                                <option value="Ruslan Display">Ruslan Display</option>
                                <option value="Mouse Memoirs">Mouse Memoirs</option>
                                <option value="Short Stack">Short Stack</option>
                                <option value="Orienta">Orienta</option>
                                <option value="Montaga">Montaga</option>
                                <option value="Timmana">Timmana</option>
                                <option value="Vesper Libre">Vesper Libre</option>
                                <option value="Gurajada">Gurajada</option>
                                <option value="Ledger">Ledger</option>
                                <option value="Prosto One">Prosto One</option>
                                <option value="Over the Rainbow">Over the Rainbow</option>
                                <option value="Odibee Sans">Odibee Sans</option>
                                <option value="Mako">Mako</option>
                                <option value="Just Me Again Down Here">Just Me Again Down Here</option>
                                <option value="Encode Sans Expanded">Encode Sans Expanded</option>
                                <option value="Meera Inimai">Meera Inimai</option>
                                <option value="Asul">Asul</option>
                                <option value="Montserrat Subrayada">Montserrat Subrayada</option>
                                <option value="Baloo Tammudu 2">Baloo Tammudu 2</option>
                                <option value="Cambo">Cambo</option>
                                <option value="Flamenco">Flamenco</option>
                                <option value="Salsa">Salsa</option>
                                <option value="Loved by the King">Loved by the King</option>
                                <option value="Caladea">Caladea</option>
                                <option value="Geo">Geo</option>
                                <option value="Pirata One">Pirata One</option>
                                <option value="Port Lligat Slab">Port Lligat Slab</option>
                                <option value="Atkinson Hyperlegible">Atkinson Hyperlegible</option>
                                <option value="Averia Sans Libre">Averia Sans Libre</option>
                                <option value="Cherry Cream Soda">Cherry Cream Soda</option>
                                <option value="Nova Square">Nova Square</option>
                                <option value="Numans">Numans</option>
                                <option value="Kiwi Maru">Kiwi Maru</option>
                                <option value="Mina">Mina</option>
                                <option value="Delius Unicase">Delius Unicase</option>
                                <option value="Autour One">Autour One</option>
                                <option value="Imprima">Imprima</option>
                                <option value="Elsie">Elsie</option>
                                <option value="Festive">Festive</option>
                                <option value="The Girl Next Door">The Girl Next Door</option>
                                <option value="Headland One">Headland One</option>
                                <option value="Ephesis">Ephesis</option>
                                <option value="Gafata">Gafata</option>
                                <option value="Dela Gothic One">Dela Gothic One</option>
                                <option value="Cherry Swash">Cherry Swash</option>
                                <option value="Wire One">Wire One</option>
                                <option value="MedievalSharp">MedievalSharp</option>
                                <option value="Life Savers">Life Savers</option>
                                <option value="Mochiy Pop One">Mochiy Pop One</option>
                                <option value="Shojumaru">Shojumaru</option>
                                <option value="Carrois Gothic SC">Carrois Gothic SC</option>
                                <option value="Puritan">Puritan</option>
                                <option value="Azeret Mono">Azeret Mono</option>
                                <option value="Artifika">Artifika</option>
                                <option value="Goldman">Goldman</option>
                                <option value="Tienne">Tienne</option>
                                <option value="Peralta">Peralta</option>
                                <option value="Gaegu">Gaegu</option>
                                <option value="Style Script">Style Script</option>
                                <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
                                <option value="Scope One">Scope One</option>
                                <option value="Cormorant Unicase">Cormorant Unicase</option>
                                <option value="Vibur">Vibur</option>
                                <option value="Yusei Magic">Yusei Magic</option>
                                <option value="Shanti">Shanti</option>
                                <option value="Denk One">Denk One</option>
                                <option value="Almendra">Almendra</option>
                                <option value="Baloo Bhaina 2">Baloo Bhaina 2</option>
                                <option value="Slackey">Slackey</option>
                                <option value="Fjord One">Fjord One</option>
                                <option value="MuseoModerno">MuseoModerno</option>
                                <option value="Ribeye">Ribeye</option>
                                <option value="Pavanam">Pavanam</option>
                                <option value="Trade Winds">Trade Winds</option>
                                <option value="Asar">Asar</option>
                                <option value="Kite One">Kite One</option>
                                <option value="Lily Script One">Lily Script One</option>
                                <option value="Germania One">Germania One</option>
                                <option value="Jomhuria">Jomhuria</option>
                                <option value="Engagement">Engagement</option>
                                <option value="Dynalight">Dynalight</option>
                                <option value="UnifrakturCook">UnifrakturCook</option>
                                <option value="Kranky">Kranky</option>
                                <option value="Eater">Eater</option>
                                <option value="Lakki Reddy">Lakki Reddy</option>
                                <option value="Macondo Swash Caps">Macondo Swash Caps</option>
                                <option value="Kodchasan">Kodchasan</option>
                                <option value="Song Myung">Song Myung</option>
                                <option value="Ramaraja">Ramaraja</option>
                                <option value="Baloo Paaji 2">Baloo Paaji 2</option>
                                <option value="Paprika">Paprika</option>
                                <option value="Voces">Voces</option>
                                <option value="Tauri">Tauri</option>
                                <option value="Medula One">Medula One</option>
                                <option value="Sarina">Sarina</option>
                                <option value="League Script">League Script</option>
                                <option value="ZCOOL KuaiLe">ZCOOL KuaiLe</option>
                                <option value="Encode Sans Semi Expanded">Encode Sans Semi Expanded</option>
                                <option value="Fresca">Fresca</option>
                                <option value="Noto Sans Display">Noto Sans Display</option>
                                <option value="Modak">Modak</option>
                                <option value="Shippori Mincho B1">Shippori Mincho B1</option>
                                <option value="Allison">Allison</option>
                                <option value="New Rocker">New Rocker</option>
                                <option value="Englebert">Englebert</option>
                                <option value="Julee">Julee</option>
                                <option value="Poor Story">Poor Story</option>
                                <option value="IM Fell French Canon">IM Fell French Canon</option>
                                <option value="Lovers Quarrel">Lovers Quarrel</option>
                                <option value="Lexend Exa">Lexend Exa</option>
                                <option value="DotGothic16">DotGothic16</option>
                                <option value="Bilbo">Bilbo</option>
                                <option value="Libre Barcode 39 Text">Libre Barcode 39 Text</option>
                                <option value="Noto Sans Sinhala">Noto Sans Sinhala</option>
                                <option value="Sumana">Sumana</option>
                                <option value="Stoke">Stoke</option>
                                <option value="Charmonman">Charmonman</option>
                                <option value="Spicy Rice">Spicy Rice</option>
                                <option value="Gamja Flower">Gamja Flower</option>
                                <option value="Milonga">Milonga</option>
                                <option value="Mogra">Mogra</option>
                                <option value="Varta">Varta</option>
                                <option value="Kulim Park">Kulim Park</option>
                                <option value="Iceberg">Iceberg</option>
                                <option value="Mystery Quest">Mystery Quest</option>
                                <option value="Habibi">Habibi</option>
                                <option value="Chango">Chango</option>
                                <option value="Khmer">Khmer</option>
                                <option value="Londrina Outline">Londrina Outline</option>
                                <option value="Fahkwang">Fahkwang</option>
                                <option value="Simonetta">Simonetta</option>
                                <option value="Rum Raisin">Rum Raisin</option>
                                <option value="Libre Caslon Display">Libre Caslon Display</option>
                                <option value="Cantora One">Cantora One</option>
                                <option value="Andika New Basic">Andika New Basic</option>
                                <option value="Stalemate">Stalemate</option>
                                <option value="Akaya Telivigala">Akaya Telivigala</option>
                                <option value="Baloo Bhai 2">Baloo Bhai 2</option>
                                <option value="Solway">Solway</option>
                                <option value="Donegal One">Donegal One</option>
                                <option value="Ranga">Ranga</option>
                                <option value="Sancreek">Sancreek</option>
                                <option value="Tomorrow">Tomorrow</option>
                                <option value="Barriecito">Barriecito</option>
                                <option value="Rosarivo">Rosarivo</option>
                                <option value="Rationale">Rationale</option>
                                <option value="Fontdiner Swanky">Fontdiner Swanky</option>
                                <option value="Prociono">Prociono</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Uncial Antiqua">Uncial Antiqua</option>
                                <option value="Almendra SC">Almendra SC</option>
                                <option value="Saira Stencil One">Saira Stencil One</option>
                                <option value="Dekko">Dekko</option>
                                <option value="Chicle">Chicle</option>
                                <option value="Text Me One">Text Me One</option>
                                <option value="Nokora">Nokora</option>
                                <option value="Buda">Buda</option>
                                <option value="Yeon Sung">Yeon Sung</option>
                                <option value="Sonsie One">Sonsie One</option>
                                <option value="Port Lligat Sans">Port Lligat Sans</option>
                                <option value="Bellota">Bellota</option>
                                <option value="Piazzolla">Piazzolla</option>
                                <option value="Bubbler One">Bubbler One</option>
                                <option value="Ibarra Real Nova">Ibarra Real Nova</option>
                                <option value="Yuji Mai">Yuji Mai</option>
                                <option value="Chilanka">Chilanka</option>
                                <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
                                <option value="Zilla Slab Highlight">Zilla Slab Highlight</option>
                                <option value="Yuji Syuku">Yuji Syuku</option>
                                <option value="Farsan">Farsan</option>
                                <option value="Fenix">Fenix</option>
                                <option value="Kotta One">Kotta One</option>
                                <option value="Libre Barcode 39 Extended Text">Libre Barcode 39 Extended Text</option>
                                <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
                                <option value="Underdog">Underdog</option>
                                <option value="Yuji Boku">Yuji Boku</option>
                                <option value="Besley">Besley</option>
                                <option value="IM Fell Great Primer">IM Fell Great Primer</option>
                                <option value="Manuale">Manuale</option>
                                <option value="Akronim">Akronim</option>
                                <option value="Sree Krushnadevaraya">Sree Krushnadevaraya</option>
                                <option value="Potta One">Potta One</option>
                                <option value="Croissant One">Croissant One</option>
                                <option value="Angkor">Angkor</option>
                                <option value="Crushed">Crushed</option>
                                <option value="Noto Nastaliq Urdu">Noto Nastaliq Urdu</option>
                                <option value="Gayathri">Gayathri</option>
                                <option value="Redressed">Redressed</option>
                                <option value="Condiment">Condiment</option>
                                <option value="Nova Flat">Nova Flat</option>
                                <option value="Quintessential">Quintessential</option>
                                <option value="Nosifer">Nosifer</option>
                                <option value="Inika">Inika</option>
                                <option value="Eagle Lake">Eagle Lake</option>
                                <option value="Barrio">Barrio</option>
                                <option value="Cagliostro">Cagliostro</option>
                                <option value="Ruluko">Ruluko</option>
                                <option value="Kavivanar">Kavivanar</option>
                                <option value="Rhodium Libre">Rhodium Libre</option>
                                <option value="Margarine">Margarine</option>
                                <option value="Overlock SC">Overlock SC</option>
                                <option value="Be Vietnam Pro">Be Vietnam Pro</option>
                                <option value="Scheherazade New">Scheherazade New</option>
                                <option value="Sulphur Point">Sulphur Point</option>
                                <option value="Wellfleet">Wellfleet</option>
                                <option value="Single Day">Single Day</option>
                                <option value="Hachi Maru Pop">Hachi Maru Pop</option>
                                <option value="Petemoss">Petemoss</option>
                                <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
                                <option value="Piedra">Piedra</option>
                                <option value="Asset">Asset</option>
                                <option value="Bayon">Bayon</option>
                                <option value="Kantumruy">Kantumruy</option>
                                <option value="Big Shoulders Stencil Display">Big Shoulders Stencil Display</option>
                                <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
                                <option value="Kumar One">Kumar One</option>
                                <option value="Londrina Shadow">Londrina Shadow</option>
                                <option value="Molle">Molle</option>
                                <option value="Stylish">Stylish</option>
                                <option value="Ruthie">Ruthie</option>
                                <option value="Griffy">Griffy</option>
                                <option value="Petrona">Petrona</option>
                                <option value="Inria Serif">Inria Serif</option>
                                <option value="Cute Font">Cute Font</option>
                                <option value="Sura">Sura</option>
                                <option value="Monofett">Monofett</option>
                                <option value="Sahitya">Sahitya</option>
                                <option value="Libre Barcode 128">Libre Barcode 128</option>
                                <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
                                <option value="Moul">Moul</option>
                                <option value="Chathura">Chathura</option>
                                <option value="Offside">Offside</option>
                                <option value="Dorsa">Dorsa</option>
                                <option value="Tulpen One">Tulpen One</option>
                                <option value="Gotu">Gotu</option>
                                <option value="Tourney">Tourney</option>
                                <option value="Akaya Kanadaka">Akaya Kanadaka</option>
                                <option value="Miniver">Miniver</option>
                                <option value="East Sea Dokdo">East Sea Dokdo</option>
                                <option value="Sirin Stencil">Sirin Stencil</option>
                                <option value="Maiden Orange">Maiden Orange</option>
                                <option value="Ribeye Marrow">Ribeye Marrow</option>
                                <option value="Kufam">Kufam</option>
                                <option value="Rowdies">Rowdies</option>
                                <option value="Sansita Swashed">Sansita Swashed</option>
                                <option value="Linden Hill">Linden Hill</option>
                                <option value="Spirax">Spirax</option>
                                <option value="Ravi Prakash">Ravi Prakash</option>
                                <option value="Modern Antiqua">Modern Antiqua</option>
                                <option value="Zen Dots">Zen Dots</option>
                                <option value="Metal Mania">Metal Mania</option>
                                <option value="Meie Script">Meie Script</option>
                                <option value="Vampiro One">Vampiro One</option>
                                <option value="Bigelow Rules">Bigelow Rules</option>
                                <option value="Bona Nova">Bona Nova</option>
                                <option value="Metal">Metal</option>
                                <option value="Arbutus">Arbutus</option>
                                <option value="Content">Content</option>
                                <option value="Glory">Glory</option>
                                <option value="Junge">Junge</option>
                                <option value="Montagu Slab">Montagu Slab</option>
                                <option value="Lexend Mega">Lexend Mega</option>
                                <option value="Marko One">Marko One</option>
                                <option value="Joti One">Joti One</option>
                                <option value="Elsie Swash Caps">Elsie Swash Caps</option>
                                <option value="Caesar Dressing">Caesar Dressing</option>
                                <option value="Koulen">Koulen</option>
                                <option value="Kavoon">Kavoon</option>
                                <option value="Lancelot">Lancelot</option>
                                <option value="Stick">Stick</option>
                                <option value="Jolly Lodger">Jolly Lodger</option>
                                <option value="Beth Ellen">Beth Ellen</option>
                                <option value="Girassol">Girassol</option>
                                <option value="Jomolhari">Jomolhari</option>
                                <option value="Viaoda Libre">Viaoda Libre</option>
                                <option value="Mrs Sheppards">Mrs Sheppards</option>
                                <option value="Risque">Risque</option>
                                <option value="MonteCarlo">MonteCarlo</option>
                                <option value="Dr Sugiyama">Dr Sugiyama</option>
                                <option value="Gorditas">Gorditas</option>
                                <option value="Romanesco">Romanesco</option>
                                <option value="Bigshot One">Bigshot One</option>
                                <option value="Chela One">Chela One</option>
                                <option value="Galdeano">Galdeano</option>
                                <option value="Shalimar">Shalimar</option>
                                <option value="WindSong">WindSong</option>
                                <option value="Rampart One">Rampart One</option>
                                <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
                                <option value="Srisakdi">Srisakdi</option>
                                <option value="Revalia">Revalia</option>
                                <option value="Felipa">Felipa</option>
                                <option value="Diplomata">Diplomata</option>
                                <option value="Bahiana">Bahiana</option>
                                <option value="Jim Nightshade">Jim Nightshade</option>
                                <option value="Atomic Age">Atomic Age</option>
                                <option value="Glass Antiqua">Glass Antiqua</option>
                                <option value="Hanalei Fill">Hanalei Fill</option>
                                <option value="Libre Barcode 128 Text">Libre Barcode 128 Text</option>
                                <option value="Gupter">Gupter</option>
                                <option value="Smythe">Smythe</option>
                                <option value="Inria Sans">Inria Sans</option>
                                <option value="Diplomata SC">Diplomata SC</option>
                                <option value="Chenla">Chenla</option>
                                <option value="Kaisei Tokumin">Kaisei Tokumin</option>
                                <option value="Lexend Giga">Lexend Giga</option>
                                <option value="Flavors">Flavors</option>
                                <option value="Ewert">Ewert</option>
                                <option value="Macondo">Macondo</option>
                                <option value="Devonshire">Devonshire</option>
                                <option value="Miltonian">Miltonian</option>
                                <option value="Peddana">Peddana</option>
                                <option value="Grenze">Grenze</option>
                                <option value="Smokum">Smokum</option>
                                <option value="Londrina Sketch">Londrina Sketch</option>
                                <option value="Miss Fajardose">Miss Fajardose</option>
                                <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
                                <option value="Kirang Haerang">Kirang Haerang</option>
                                <option value="Train One">Train One</option>
                                <option value="Oldenburg">Oldenburg</option>
                                <option value="Kumar One Outline">Kumar One Outline</option>
                                <option value="Brygada 1918">Brygada 1918</option>
                                <option value="Red Rose">Red Rose</option>
                                <option value="Princess Sofia">Princess Sofia</option>
                                <option value="Odor Mean Chey">Odor Mean Chey</option>
                                <option value="Fascinate">Fascinate</option>
                                <option value="Zhi Mang Xing">Zhi Mang Xing</option>
                                <option value="Galindo">Galindo</option>
                                <option value="Plaster">Plaster</option>
                                <option value="Nova Slim">Nova Slim</option>
                                <option value="Kdam Thmor">Kdam Thmor</option>
                                <option value="Combo">Combo</option>
                                <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
                                <option value="Fascinate Inline">Fascinate Inline</option>
                                <option value="Keania One">Keania One</option>
                                <option value="Jacques Francois">Jacques Francois</option>
                                <option value="Emblema One">Emblema One</option>
                                <option value="Siemreap">Siemreap</option>
                                <option value="Bungee Outline">Bungee Outline</option>
                                <option value="Sassy Frass">Sassy Frass</option>
                                <option value="Snippet">Snippet</option>
                                <option value="Almendra Display">Almendra Display</option>
                                <option value="Unlock">Unlock</option>
                                <option value="Ballet">Ballet</option>
                                <option value="IBM Plex Sans Arabic">IBM Plex Sans Arabic</option>
                                <option value="Dangrek">Dangrek</option>
                                <option value="Butterfly Kids">Butterfly Kids</option>
                                <option value="GFS Neohellenic">GFS Neohellenic</option>
                                <option value="Gemunu Libre">Gemunu Libre</option>
                                <option value="Yomogi">Yomogi</option>
                                <option value="Texturina">Texturina</option>
                                <option value="Kaisei Opti">Kaisei Opti</option>
                                <option value="Purple Purse">Purple Purse</option>
                                <option value="Fruktur">Fruktur</option>
                                <option value="IBM Plex Sans Thai">IBM Plex Sans Thai</option>
                                <option value="Bahianita">Bahianita</option>
                                <option value="Black And White Picture">Black And White Picture</option>
                                <option value="Klee One">Klee One</option>
                                <option value="Noto Sans Arabic">Noto Sans Arabic</option>
                                <option value="Noto Sans Myanmar">Noto Sans Myanmar</option>
                                <option value="Libre Barcode 39 Extended">Libre Barcode 39 Extended</option>
                                <option value="Liu Jian Mao Cao">Liu Jian Mao Cao</option>
                                <option value="Sedgwick Ave Display">Sedgwick Ave Display</option>
                                <option value="Big Shoulders Stencil Text">Big Shoulders Stencil Text</option>
                                <option value="Stalinist One">Stalinist One</option>
                                <option value="Sunshiney">Sunshiney</option>
                                <option value="Zen Old Mincho">Zen Old Mincho</option>
                                <option value="Otomanopee One">Otomanopee One</option>
                                <option value="Seymour One">Seymour One</option>
                                <option value="Erica One">Erica One</option>
                                <option value="Passero One">Passero One</option>
                                <option value="Mr Bedfort">Mr Bedfort</option>
                                <option value="Bokor">Bokor</option>
                                <option value="Suwannaphum">Suwannaphum</option>
                                <option value="Zen Kaku Gothic New">Zen Kaku Gothic New</option>
                                <option value="Freehand">Freehand</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Federant">Federant</option>
                                <option value="Trochut">Trochut</option>
                                <option value="Butcherman">Butcherman</option>
                                <option value="Kaisei Decol">Kaisei Decol</option>
                                <option value="Hina Mincho">Hina Mincho</option>
                                <option value="Benne">Benne</option>
                                <option value="Bonbon">Bonbon</option>
                                <option value="Lexend Tera">Lexend Tera</option>
                                <option value="Snowburst One">Snowburst One</option>
                                <option value="Astloch">Astloch</option>
                                <option value="Noto Sans Armenian">Noto Sans Armenian</option>
                                <option value="Stick No Bills">Stick No Bills</option>
                                <option value="Gidugu">Gidugu</option>
                                <option value="Noto Sans Gothic">Noto Sans Gothic</option>
                                <option value="Miltonian Tattoo">Miltonian Tattoo</option>
                                <option value="Lacquer">Lacquer</option>
                                <option value="Nova Oval">Nova Oval</option>
                                <option value="Nova Cut">Nova Cut</option>
                                <option value="Supermercado One">Supermercado One</option>
                                <option value="Yaldevi">Yaldevi</option>
                                <option value="Zen Maru Gothic">Zen Maru Gothic</option>
                                <option value="Long Cang">Long Cang</option>
                                <option value="Ruge Boogie">Ruge Boogie</option>
                                <option value="Shippori Antique B1">Shippori Antique B1</option>
                                <option value="Nova Script">Nova Script</option>
                                <option value="Geostar Fill">Geostar Fill</option>
                                <option value="Noto Sans Symbols">Noto Sans Symbols</option>
                                <option value="Zen Kurenaido">Zen Kurenaido</option>
                                <option value="Noto Sans Mono">Noto Sans Mono</option>
                                <option value="New Tegomin">New Tegomin</option>
                                <option value="Preahvihear">Preahvihear</option>
                                <option value="Zen Kaku Gothic Antique">Zen Kaku Gothic Antique</option>
                                <option value="Zen Antique">Zen Antique</option>
                                <option value="Karantina">Karantina</option>
                                <option value="Vibes">Vibes</option>
                                <option value="Bungee Hairline">Bungee Hairline</option>
                                <option value="Palette Mosaic">Palette Mosaic</option>
                                <option value="Puppies Play">Puppies Play</option>
                                <option value="Hahmlet">Hahmlet</option>
                                <option value="Taprom">Taprom</option>
                                <option value="Suravaram">Suravaram</option>
                                <option value="Truculenta">Truculenta</option>
                                <option value="Sevillana">Sevillana</option>
                                <option value="Mochiy Pop P One">Mochiy Pop P One</option>
                                <option value="Orelega One">Orelega One</option>
                                <option value="Sofadi One">Sofadi One</option>
                                <option value="Aubrey">Aubrey</option>
                                <option value="Passions Conflict">Passions Conflict</option>
                                <option value="Fuggles">Fuggles</option>
                                <option value="Nerko One">Nerko One</option>
                                <option value="Moulpali">Moulpali</option>
                                <option value="Big Shoulders Inline Text">Big Shoulders Inline Text</option>
                                <option value="Andada Pro">Andada Pro</option>
                                <option value="Kaisei HarunoUmi">Kaisei HarunoUmi</option>
                                <option value="Hanalei">Hanalei</option>
                                <option value="Genos">Genos</option>
                                <option value="Gluten">Gluten</option>
                                <option value="Syne Mono">Syne Mono</option>
                                <option value="Gowun Batang">Gowun Batang</option>
                                <option value="Alumni Sans">Alumni Sans</option>
                                <option value="Encode Sans SC">Encode Sans SC</option>
                                <option value="Zen Antique Soft">Zen Antique Soft</option>
                                <option value="Shippori Antique">Shippori Antique</option>
                                <option value="Kenia">Kenia</option>
                                <option value="Zen Loop">Zen Loop</option>
                                <option value="Bonheur Royale">Bonheur Royale</option>
                                <option value="Hurricane">Hurricane</option>
                                <option value="Kings">Kings</option>
                                <option value="Imbue">Imbue</option>
                                <option value="Mohave">Mohave</option>
                                <option value="BioRhyme Expanded">BioRhyme Expanded</option>
                                <option value="Flow Circular">Flow Circular</option>
                                <option value="Fasthand">Fasthand</option>
                                <option value="Noto Serif Sinhala">Noto Serif Sinhala</option>
                                <option value="Birthstone Bounce">Birthstone Bounce</option>
                                <option value="Dongle">Dongle</option>
                                <option value="Dhurjati">Dhurjati</option>
                                <option value="Flow Block">Flow Block</option>
                                <option value="Flow Rounded">Flow Rounded</option>
                                <option value="Noto Sans Georgian">Noto Sans Georgian</option>
                                <option value="Carattere">Carattere</option>
                                <option value="Xanh Mono">Xanh Mono</option>
                                <option value="Lexend Peta">Lexend Peta</option>
                                <option value="Fleur De Leah">Fleur De Leah</option>
                                <option value="Grechen Fuemen">Grechen Fuemen</option>
                                <option value="Langar">Langar</option>
                                <option value="Comforter">Comforter</option>
                                <option value="Birthstone">Birthstone</option>
                                <option value="Gowun Dodum">Gowun Dodum</option>
                                <option value="Warnes">Warnes</option>
                                <option value="M PLUS Code Latin">M PLUS Code Latin</option>
                                <option value="IBM Plex Sans KR">IBM Plex Sans KR</option>
                                <option value="Noto Serif Bengali">Noto Serif Bengali</option>
                                <option value="Comforter Brush">Comforter Brush</option>
                                <option value="Libre Barcode EAN13 Text">Libre Barcode EAN13 Text</option>
                                <option value="M PLUS 1">M PLUS 1</option>
                                <option value="Noto Serif Tamil">Noto Serif Tamil</option>
                                <option value="Trispace">Trispace</option>
                                <option value="Noto Sans Tamil Supplement">Noto Sans Tamil Supplement</option>
                                <option value="Geostar">Geostar</option>
                                <option value="Cherish">Cherish</option>
                                <option value="Are You Serious">Are You Serious</option>
                                <option value="Qahiri">Qahiri</option>
                                <option value="Zen Tokyo Zoo">Zen Tokyo Zoo</option>
                                <option value="M PLUS 2">M PLUS 2</option>
                                <option value="Rubik Beastly">Rubik Beastly</option>
                                <option value="Red Hat Mono">Red Hat Mono</option>
                                <option value="Grey Qo">Grey Qo</option>
                                <option value="Outfit">Outfit</option>
                                <option value="Koh Santepheap">Koh Santepheap</option>
                                <option value="Gideon Roman">Gideon Roman</option>
                                <option value="M PLUS 1 Code">M PLUS 1 Code</option>
                                <option value="Big Shoulders Inline Display">Big Shoulders Inline Display</option>
                                <option value="Oi">Oi</option>
                                <option value="IBM Plex Sans Thai Looped">IBM Plex Sans Thai Looped</option>
                                <option value="Syne Tactile">Syne Tactile</option>
                                <option value="Explora">Explora</option>
                                <option value="Uchen">Uchen</option>
                                <option value="IBM Plex Sans Hebrew">IBM Plex Sans Hebrew</option>
                                <option value="Caramel">Caramel</option>
                                <option value="IBM Plex Sans Devanagari">IBM Plex Sans Devanagari</option>
                                <option value="Noto Sans Lao">Noto Sans Lao</option>
                                <option value="Noto Sans Deseret">Noto Sans Deseret</option>
                                <option value="Noto Serif Yezidi">Noto Serif Yezidi</option>
                                <option value="Noto Serif Armenian">Noto Serif Armenian</option>
                                <option value="Noto Serif Georgian">Noto Serif Georgian</option>
                                <option value="Noto Serif Thai">Noto Serif Thai</option>
                                <option value="Noto Sans Tai Viet">Noto Sans Tai Viet</option>
                                <option value="Noto Sans Khmer">Noto Sans Khmer</option>
                                <option value="Noto Serif Malayalam">Noto Serif Malayalam</option>
                                <option value="Noto Sans Coptic">Noto Sans Coptic</option>
                                <option value="Noto Sans Javanese">Noto Sans Javanese</option>
                                <option value="Noto Sans Brahmi">Noto Sans Brahmi</option>
                                <option value="Noto Sans Meetei Mayek">Noto Sans Meetei Mayek</option>
                                <option value="Noto Sans Cuneiform">Noto Sans Cuneiform</option>
                                <option value="Noto Sans Thai Looped">Noto Sans Thai Looped</option>
                                <option value="Noto Serif Ethiopic">Noto Serif Ethiopic</option>
                                <option value="Noto Sans Thaana">Noto Sans Thaana</option>
                                <option value="Noto Sans Cherokee">Noto Sans Cherokee</option>
                                <option value="Noto Sans Imperial Aramaic">Noto Sans Imperial Aramaic</option>
                                <option value="Noto Sans Ol Chiki">Noto Sans Ol Chiki</option>
                                <option value="Noto Serif Lao">Noto Serif Lao</option>
                                <option value="Noto Sans Lisu">Noto Sans Lisu</option>
                                <option value="Noto Serif Devanagari">Noto Serif Devanagari</option>
                                <option value="Noto Sans Osmanya">Noto Sans Osmanya</option>
                                <option value="Noto Serif Khmer">Noto Serif Khmer</option>
                                <option value="Noto Sans Tagalog">Noto Sans Tagalog</option>
                                <option value="Noto Serif Hebrew">Noto Serif Hebrew</option>
                                <option value="Noto Rashi Hebrew">Noto Rashi Hebrew</option>
                                <option value="Noto Serif Gujarati">Noto Serif Gujarati</option>
                                <option value="Noto Sans Cypriot">Noto Sans Cypriot</option>
                                <option value="Noto Sans Old Turkic">Noto Sans Old Turkic</option>
                                <option value="Noto Sans Lycian">Noto Sans Lycian</option>
                                <option value="Noto Sans Mongolian">Noto Sans Mongolian</option>
                                <option value="Noto Serif Kannada">Noto Serif Kannada</option>
                                <option value="Noto Sans Tifinagh">Noto Sans Tifinagh</option>
                                <option value="Noto Sans Cham">Noto Sans Cham</option>
                                <option value="Noto Sans Old Italic">Noto Sans Old Italic</option>
                                <option value="Noto Sans Limbu">Noto Sans Limbu</option>
                                <option value="Noto Serif Myanmar">Noto Serif Myanmar</option>
                                <option value="Noto Serif Telugu">Noto Serif Telugu</option>
                                <option value="Noto Serif Tibetan">Noto Serif Tibetan</option>
                                <option value="Noto Sans Canadian Aboriginal">Noto Sans Canadian Aboriginal</option>
                                <option value="Noto Serif Gurmukhi">Noto Serif Gurmukhi</option>
                                <option value="Noto Sans Carian">Noto Sans Carian</option>
                                <option value="Noto Music">Noto Music</option>
                                <option value="Noto Sans Anatolian Hieroglyphs">Noto Sans Anatolian Hieroglyphs</option>
                                <option value="Noto Sans Old Persian">Noto Sans Old Persian</option>
                                <option value="Noto Sans Sora Sompeng">Noto Sans Sora Sompeng</option>
                                <option value="Noto Sans Sundanese">Noto Sans Sundanese</option>
                                <option value="Noto Sans Balinese">Noto Sans Balinese</option>
                                <option value="Noto Sans Grantha">Noto Sans Grantha</option>
                                <option value="Noto Sans Old Permic">Noto Sans Old Permic</option>
                                <option value="Noto Sans Phoenician">Noto Sans Phoenician</option>
                                <option value="Noto Serif Nyiakeng Puachue Hmong">Noto Serif Nyiakeng Puachue Hmong</option>
                                <option value="Noto Sans Linear B">Noto Sans Linear B</option>
                                <option value="Noto Sans Egyptian Hieroglyphs">Noto Sans Egyptian Hieroglyphs</option>
                                <option value="Noto Sans Kaithi">Noto Sans Kaithi</option>
                                <option value="Noto Sans Adlam">Noto Sans Adlam</option>
                                <option value="Noto Sans Adlam Unjoined">Noto Sans Adlam Unjoined</option>
                                <option value="Noto Sans Bamum">Noto Sans Bamum</option>
                                <option value="Noto Sans Tai Tham">Noto Sans Tai Tham</option>
                                <option value="Noto Sans Medefaidrin">Noto Sans Medefaidrin</option>
                                <option value="Noto Sans Samaritan">Noto Sans Samaritan</option>
                                <option value="Noto Sans Hanifi Rohingya">Noto Sans Hanifi Rohingya</option>
                                <option value="Noto Sans Kayah Li">Noto Sans Kayah Li</option>
                                <option value="Noto Sans Hanunoo">Noto Sans Hanunoo</option>
                                <option value="Noto Sans Symbols 2">Noto Sans Symbols 2</option>
                                <option value="Noto Sans Kharoshthi">Noto Sans Kharoshthi</option>
                                <option value="Noto Sans Yi">Noto Sans Yi</option>
                                <option value="Noto Serif Balinese">Noto Serif Balinese</option>
                                <option value="Noto Sans Old Hungarian">Noto Sans Old Hungarian</option>
                                <option value="Noto Serif Dogra">Noto Serif Dogra</option>
                                <option value="Noto Sans Syriac">Noto Sans Syriac</option>
                                <option value="Noto Serif Grantha">Noto Serif Grantha</option>
                                <option value="Noto Serif Ahom">Noto Serif Ahom</option>
                                <option value="Noto Sans Inscriptional Pahlavi">Noto Sans Inscriptional Pahlavi</option>
                                <option value="Noto Sans Old South Arabian">Noto Sans Old South Arabian</option>
                                <option value="Noto Sans Inscriptional Parthian">Noto Sans Inscriptional Parthian</option>
                                <option value="Noto Sans Batak">Noto Sans Batak</option>
                                <option value="Noto Serif Tangut">Noto Serif Tangut</option>
                                <option value="Noto Sans Tirhuta">Noto Sans Tirhuta</option>
                                <option value="Noto Sans Runic">Noto Sans Runic</option>
                                <option value="Noto Sans Old North Arabian">Noto Sans Old North Arabian</option>
                                <option value="Noto Sans Math">Noto Sans Math</option>
                                <option value="Noto Sans New Tai Lue">Noto Sans New Tai Lue</option>
                                <option value="Noto Sans Caucasian Albanian">Noto Sans Caucasian Albanian</option>
                                <option value="Noto Sans Avestan">Noto Sans Avestan</option>
                                <option value="Noto Sans Mahajani">Noto Sans Mahajani</option>
                                <option value="Noto Sans Mayan Numerals">Noto Sans Mayan Numerals</option>
                                <option value="Noto Sans Zanabazar Square">Noto Sans Zanabazar Square</option>
                                <option value="Noto Sans Saurashtra">Noto Sans Saurashtra</option>
                                <option value="Noto Sans Syloti Nagri">Noto Sans Syloti Nagri</option>
                                <option value="Noto Sans Buginese">Noto Sans Buginese</option>
                                <option value="Noto Sans Elbasan">Noto Sans Elbasan</option>
                                <option value="Noto Sans Tagbanwa">Noto Sans Tagbanwa</option>
                                <option value="Noto Sans Marchen">Noto Sans Marchen</option>
                                <option value="Noto Sans Rejang">Noto Sans Rejang</option>
                                <option value="Noto Sans Palmyrene">Noto Sans Palmyrene</option>
                                <option value="Noto Sans Multani">Noto Sans Multani</option>
                                <option value="Noto Sans Nushu">Noto Sans Nushu</option>
                                <option value="Noto Sans Siddham">Noto Sans Siddham</option>
                                <option value="Noto Sans Takri">Noto Sans Takri</option>
                                <option value="Noto Sans Old Sogdian">Noto Sans Old Sogdian</option>
                                <option value="Noto Sans Tai Le">Noto Sans Tai Le</option>
                                <option value="Noto Sans Phags Pa">Noto Sans Phags Pa</option>
                                <option value="Noto Sans Sogdian">Noto Sans Sogdian</option>
                                <option value="Noto Sans Vai">Noto Sans Vai</option>
                                <option value="Noto Sans Bassa Vah">Noto Sans Bassa Vah</option>
                                <option value="Noto Sans Miao">Noto Sans Miao</option>
                                <option value="Noto Sans Newa">Noto Sans Newa</option>
                                <option value="Noto Sans Pau Cin Hau">Noto Sans Pau Cin Hau</option>
                                <option value="Noto Sans Psalter Pahlavi">Noto Sans Psalter Pahlavi</option>
                                <option value="Noto Sans Warang Citi">Noto Sans Warang Citi</option>
                                <option value="Noto Sans Modi">Noto Sans Modi</option>
                                <option value="Noto Sans Indic Siyaq Numbers">Noto Sans Indic Siyaq Numbers</option>
                                <option value="Noto Sans Glagolitic">Noto Sans Glagolitic</option>
                                <option value="Noto Sans Chakma">Noto Sans Chakma</option>
                                <option value="Noto Sans Pahawh Hmong">Noto Sans Pahawh Hmong</option>
                                <option value="Noto Sans Gunjala Gondi">Noto Sans Gunjala Gondi</option>
                                <option value="Noto Sans Duployan">Noto Sans Duployan</option>
                                <option value="Noto Sans Buhid">Noto Sans Buhid</option>
                                <option value="Noto Traditional Nushu">Noto Traditional Nushu</option>
                                <option value="Noto Sans Elymaic">Noto Sans Elymaic</option>
                                <option value="Noto Sans Mro">Noto Sans Mro</option>
                                <option value="Noto Sans Ogham">Noto Sans Ogham</option>
                                <option value="Noto Sans Ugaritic">Noto Sans Ugaritic</option>
                                <option value="Noto Sans Bhaiksuki">Noto Sans Bhaiksuki</option>
                                <option value="Noto Sans Osage">Noto Sans Osage</option>
                                <option value="Noto Sans Shavian">Noto Sans Shavian</option>
                                <option value="Noto Sans Masaram Gondi">Noto Sans Masaram Gondi</option>
                                <option value="Noto Sans Lydian">Noto Sans Lydian</option>
                                <option value="Noto Sans Sharada">Noto Sans Sharada</option>
                                <option value="Noto Sans Linear A">Noto Sans Linear A</option>
                                <option value="Noto Sans N Ko">Noto Sans N Ko</option>
                                <option value="Noto Sans Manichaean">Noto Sans Manichaean</option>
                                <option value="Noto Sans Nabataean">Noto Sans Nabataean</option>
                                <option value="Noto Sans Wancho">Noto Sans Wancho</option>
                                <option value="Noto Sans Soyombo">Noto Sans Soyombo</option>
                                <option value="Noto Sans Khudawadi">Noto Sans Khudawadi</option>
                                <option value="Noto Sans Lepcha">Noto Sans Lepcha</option>
                                <option value="Noto Sans Meroitic">Noto Sans Meroitic</option>
                                <option value="Noto Sans Hatran">Noto Sans Hatran</option>
                                <option value="Noto Sans Khojki">Noto Sans Khojki</option>
                                        
                            </select>
                        </div>
                    </div>
                        
                </div>
                <!---Header--->

                <div class="row x-pd-r mb-5">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_text">SUBHEADER TEXT</label>
                            <input id="subheader_text" class="form-control no-shadow input-signin" type="text" name="subheader_text">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_text_link">SUBHEADER LINK(OPTIONAL)</label>
                            <input id="subheader_text_link" class="form-control no-shadow input-signin" type="text" name="subheader_text_link">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_text_align">SUBHEADER ALIGN</label>
                            <select id="subheader_text_align" class="form-control no-shadow input-signin" name="subheader_text_align">
                                <option value="left">Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_text_color">SUBHEADER Color</label>
                            <input id="subheader_text_color" class="form-control no-shadow input-signin" type="color" name="subheader_text_color">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_font_size">SUBHEADER TEXT SIZE</label>
                            <select id="subheader_font_size" name="subheader_font_size" class="form-control no-shadow input-signin">
                                <option value="8">8px</option>
                                <option value="9">9px</option>
                                <option value="10">10px</option>
                                <option value="11">11px</option>
                                <option value="12">12px</option>
                                <option value="13">13px</option>
                                <option value="14" selected="">14px</option>
                                <option value="15">15px</option>
                                <option value="16">16px</option>
                                <option value="18">18px</option>
                                <option value="20">20px</option>
                                <option value="22">22px</option>
                                <option value="24">24px</option>
                                <option value="26">26px</option>
                                <option value="28">28px</option>
                                <option value="36">36px</option>
                                <option value="48">48px</option>
                                <option value="72">72px</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="subheader_font_family">SUBHEADER FONT FAMILY</label>
                            
                            <select id="subheader_font_family" class="form-control no-shadow input-signin" name="subheader_font_family">
                                <option value="">Please Select</option>
                                <option value="Roboto">Roboto</option>
                                <option value="Open Sans" selected>Open Sans</option>
                                <option value="Noto Sans JP">Noto Sans JP</option>
                                <option value="Lato">Lato</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Roboto Condensed">Roboto Condensed</option>
                                <option value="Source Sans Pro">Source Sans Pro</option>
                                <option value="Poppins">Poppins</option>
                                <option value="Oswald">Oswald</option>
                                <option value="Roboto Mono">Roboto Mono</option>
                                <option value="Raleway">Raleway</option>
                                <option value="Noto Sans">Noto Sans</option>
                                <option value="Nunito">Nunito</option>
                                <option value="Ubuntu">Ubuntu</option>
                                <option value="Merriweather">Merriweather</option>
                                <option value="PT Sans">PT Sans</option>
                                <option value="Roboto Slab">Roboto Slab</option>
                                <option value="Playfair Display">Playfair Display</option>
                                <option value="Open Sans Condensed">Open Sans Condensed</option>
                                <option value="Rubik">Rubik</option>
                                <option value="Mukta">Mukta</option>
                                <option value="Noto Sans KR">Noto Sans KR</option>
                                <option value="Lora">Lora</option>
                                <option value="Inter">Inter</option>
                                <option value="Work Sans">Work Sans</option>
                                <option value="Nunito Sans">Nunito Sans</option>
                                <option value="Hind Siliguri">Hind Siliguri</option>
                                <option value="Nanum Gothic">Nanum Gothic</option>
                                <option value="Titillium Web">Titillium Web</option>
                                <option value="Fira Sans">Fira Sans</option>
                                <option value="Quicksand">Quicksand</option>
                                <option value="PT Serif">PT Serif</option>
                                <option value="Noto Serif">Noto Serif</option>
                                <option value="Noto Sans TC">Noto Sans TC</option>
                                <option value="Karla">Karla</option>
                                <option value="Barlow">Barlow</option>
                                <option value="Heebo">Heebo</option>
                                <option value="Libre Franklin">Libre Franklin</option>
                                <option value="Oxygen">Oxygen</option>
                                <option value="Libre Baskerville">Libre Baskerville</option>
                                <option value="PT Sans Narrow">PT Sans Narrow</option>
                                <option value="Inconsolata">Inconsolata</option>
                                <option value="Arimo">Arimo</option>
                                <option value="IBM Plex Sans">IBM Plex Sans</option>
                                <option value="Dosis">Dosis</option>
                                <option value="Josefin Sans">Josefin Sans</option>
                                <option value="Dancing Script">Dancing Script</option>
                                <option value="Anton">Anton</option>
                                <option value="Cabin">Cabin</option>
                                <option value="Cairo">Cairo</option>
                                <option value="Lobster">Lobster</option>
                                <option value="EB Garamond">EB Garamond</option>
                                <option value="Bebas Neue">Bebas Neue</option>
                                <option value="Bitter">Bitter</option>
                                <option value="Varela Round">Varela Round</option>
                                <option value="Crimson Text">Crimson Text</option>
                                <option value="Mulish">Mulish</option>
                                <option value="DM Sans">DM Sans</option>
                                <option value="Source Code Pro">Source Code Pro</option>
                                <option value="Source Serif Pro">Source Serif Pro</option>
                                <option value="Abel">Abel</option>
                                <option value="Prompt">Prompt</option>
                                <option value="Hind">Hind</option>
                                <option value="Comfortaa">Comfortaa</option>
                                <option value="Kanit">Kanit</option>
                                <option value="Fjalla One">Fjalla One</option>
                                <option value="Noto Sans SC">Noto Sans SC</option>
                                <option value="Barlow Condensed">Barlow Condensed</option>
                                <option value="Exo 2">Exo 2</option>
                                <option value="Signika Negative">Signika Negative</option>
                                <option value="Pacifico">Pacifico</option>
                                <option value="Hind Madurai">Hind Madurai</option>
                                <option value="Arvo">Arvo</option>
                                <option value="Overpass">Overpass</option>
                                <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
                                <option value="Teko">Teko</option>
                                <option value="Merriweather Sans">Merriweather Sans</option>
                                <option value="Abril Fatface">Abril Fatface</option>
                                <option value="Shadows Into Light">Shadows Into Light</option>
                                <option value="Manrope">Manrope</option>
                                <option value="Slabo 27px">Slabo 27px</option>
                                <option value="Maven Pro">Maven Pro</option>
                                <option value="Indie Flower">Indie Flower</option>
                                <option value="Saira Condensed">Saira Condensed</option>
                                <option value="Asap">Asap</option>
                                <option value="Noto Serif JP">Noto Serif JP</option>
                                <option value="IBM Plex Serif">IBM Plex Serif</option>
                                <option value="Questrial">Questrial</option>
                                <option value="Tajawal">Tajawal</option>
                                <option value="Assistant">Assistant</option>
                                <option value="Fira Sans Condensed">Fira Sans Condensed</option>
                                <option value="Cormorant Garamond">Cormorant Garamond</option>
                                <option value="Catamaran">Catamaran</option>
                                <option value="Exo">Exo</option>
                                <option value="Rajdhani">Rajdhani</option>
                                <option value="Caveat">Caveat</option>
                                <option value="Architects Daughter">Architects Daughter</option>
                                <option value="Play">Play</option>
                                <option value="Permanent Marker">Permanent Marker</option>
                                <option value="Alfa Slab One">Alfa Slab One</option>
                                <option value="M PLUS Rounded 1c">M PLUS Rounded 1c</option>
                                <option value="Domine">Domine</option>
                                <option value="Archivo Narrow">Archivo Narrow</option>
                                <option value="Nanum Myeongjo">Nanum Myeongjo</option>
                                <option value="Acme">Acme</option>
                                <option value="Secular One">Secular One</option>
                                <option value="Zilla Slab">Zilla Slab</option>
                                <option value="Amatic SC">Amatic SC</option>
                                <option value="Signika">Signika</option>
                                <option value="Balsamiq Sans">Balsamiq Sans</option>
                                <option value="Patrick Hand">Patrick Hand</option>
                                <option value="Bree Serif">Bree Serif</option>
                                <option value="Spartan">Spartan</option>
                                <option value="Patua One">Patua One</option>
                                <option value="Righteous">Righteous</option>
                                <option value="Noto Sans HK">Noto Sans HK</option>
                                <option value="Jost">Jost</option>
                                <option value="ABeeZee">ABeeZee</option>
                                <option value="Crimson Pro">Crimson Pro</option>
                                <option value="Alegreya Sans">Alegreya Sans</option>
                                <option value="Public Sans">Public Sans</option>
                                <option value="Vollkorn">Vollkorn</option>
                                <option value="Crete Round">Crete Round</option>
                                <option value="M PLUS 1p">M PLUS 1p</option>
                                <option value="Satisfy">Satisfy</option>
                                <option value="Martel">Martel</option>
                                <option value="Barlow Semi Condensed">Barlow Semi Condensed</option>
                                <option value="Encode Sans">Encode Sans</option>
                                <option value="Antic Slab">Antic Slab</option>
                                <option value="Montserrat Alternates">Montserrat Alternates</option>
                                <option value="Archivo">Archivo</option>
                                <option value="Cinzel">Cinzel</option>
                                <option value="Cookie">Cookie</option>
                                <option value="Chakra Petch">Chakra Petch</option>
                                <option value="Padauk">Padauk</option>
                                <option value="Space Mono">Space Mono</option>
                                <option value="Fredoka One">Fredoka One</option>
                                <option value="Tinos">Tinos</option>
                                <option value="Sarabun">Sarabun</option>
                                <option value="Recursive">Recursive</option>
                                <option value="Amiri">Amiri</option>
                                <option value="Courgette">Courgette</option>
                                <option value="Ubuntu Condensed">Ubuntu Condensed</option>
                                <option value="DM Serif Display">DM Serif Display</option>
                                <option value="Red Hat Display">Red Hat Display</option>
                                <option value="Lobster Two">Lobster Two</option>
                                <option value="Great Vibes">Great Vibes</option>
                                <option value="Prata">Prata</option>
                                <option value="Alegreya">Alegreya</option>
                                <option value="Almarai">Almarai</option>
                                <option value="Didact Gothic">Didact Gothic</option>
                                <option value="Archivo Black">Archivo Black</option>
                                <option value="IBM Plex Mono">IBM Plex Mono</option>
                                <option value="Space Grotesk">Space Grotesk</option>
                                <option value="Baloo 2">Baloo 2</option>
                                <option value="PT Sans Caption">PT Sans Caption</option>
                                <option value="Cardo">Cardo</option>
                                <option value="Yantramanav">Yantramanav</option>
                                <option value="Asap Condensed">Asap Condensed</option>
                                <option value="Frank Ruhl Libre">Frank Ruhl Libre</option>
                                <option value="Russo One">Russo One</option>
                                <option value="Spectral">Spectral</option>
                                <option value="Kaushan Script">Kaushan Script</option>
                                <option value="Kalam">Kalam</option>
                                <option value="Noticia Text">Noticia Text</option>
                                <option value="Staatliches">Staatliches</option>
                                <option value="Francois One">Francois One</option>
                                <option value="Gothic A1">Gothic A1</option>
                                <option value="Old Standard TT">Old Standard TT</option>
                                <option value="Concert One">Concert One</option>
                                <option value="Orbitron">Orbitron</option>
                                <option value="Sacramento">Sacramento</option>
                                <option value="Passion One">Passion One</option>
                                <option value="Changa">Changa</option>
                                <option value="Quattrocento Sans">Quattrocento Sans</option>
                                <option value="Rokkitt">Rokkitt</option>
                                <option value="Pathway Gothic One">Pathway Gothic One</option>
                                <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                                <option value="Cormorant">Cormorant</option>
                                <option value="Cuprum">Cuprum</option>
                                <option value="Cantarell">Cantarell</option>
                                <option value="Special Elite">Special Elite</option>
                                <option value="Unna">Unna</option>
                                <option value="Parisienne">Parisienne</option>
                                <option value="Luckiest Guy">Luckiest Guy</option>
                                <option value="Noto Serif TC">Noto Serif TC</option>
                                <option value="Sawarabi Mincho">Sawarabi Mincho</option>
                                <option value="Noto Kufi Arabic">Noto Kufi Arabic</option>
                                <option value="Merienda">Merienda</option>
                                <option value="Josefin Slab">Josefin Slab</option>
                                <option value="Faustina">Faustina</option>
                                <option value="Chivo">Chivo</option>
                                <option value="Ropa Sans">Ropa Sans</option>
                                <option value="Carter One">Carter One</option>
                                <option value="Volkhov">Volkhov</option>
                                <option value="Press Start 2P">Press Start 2P</option>
                                <option value="Sigmar One">Sigmar One</option>
                                <option value="Philosopher">Philosopher</option>
                                <option value="Quattrocento">Quattrocento</option>
                                <option value="Khand">Khand</option>
                                <option value="Saira">Saira</option>
                                <option value="Alata">Alata</option>
                                <option value="Monda">Monda</option>
                                <option value="Poiret One">Poiret One</option>
                                <option value="Eczar">Eczar</option>
                                <option value="Taviraj">Taviraj</option>
                                <option value="Neuton">Neuton</option>
                                <option value="Advent Pro">Advent Pro</option>
                                <option value="News Cycle">News Cycle</option>
                                <option value="Lusitana">Lusitana</option>
                                <option value="Ultra">Ultra</option>
                                <option value="PT Mono">PT Mono</option>
                                <option value="Playfair Display SC">Playfair Display SC</option>
                                <option value="Marcellus">Marcellus</option>
                                <option value="Playball">Playball</option>
                                <option value="Vidaloka">Vidaloka</option>
                                <option value="Arima Madurai">Arima Madurai</option>
                                <option value="El Messiri">El Messiri</option>
                                <option value="Tangerine">Tangerine</option>
                                <option value="Fira Sans Extra Condensed">Fira Sans Extra Condensed</option>
                                <option value="Sawarabi Gothic">Sawarabi Gothic</option>
                                <option value="Yellowtail">Yellowtail</option>
                                <option value="Karma">Karma</option>
                                <option value="Hammersmith One">Hammersmith One</option>
                                <option value="Bangers">Bangers</option>
                                <option value="Sanchez">Sanchez</option>
                                <option value="Viga">Viga</option>
                                <option value="Nanum Gothic Coding">Nanum Gothic Coding</option>
                                <option value="Pragati Narrow">Pragati Narrow</option>
                                <option value="Actor">Actor</option>
                                <option value="Handlee">Handlee</option>
                                <option value="IM Fell English SC">IM Fell English SC</option>
                                <option value="Gelasio">Gelasio</option>
                                <option value="Alice">Alice</option>
                                <option value="Ruda">Ruda</option>
                                <option value="Neucha">Neucha</option>
                                <option value="Mali">Mali</option>
                                <option value="Marck Script">Marck Script</option>
                                <option value="Istok Web">Istok Web</option>
                                <option value="Jura">Jura</option>
                                <option value="Yeseva One">Yeseva One</option>
                                <option value="Ubuntu Mono">Ubuntu Mono</option>
                                <option value="Adamina">Adamina</option>
                                <option value="Arapey">Arapey</option>
                                <option value="Economica">Economica</option>
                                <option value="Gudea">Gudea</option>
                                <option value="Aleo">Aleo</option>
                                <option value="DM Serif Text">DM Serif Text</option>
                                <option value="Allura">Allura</option>
                                <option value="Lexend Deca">Lexend Deca</option>
                                <option value="Mitr">Mitr</option>
                                <option value="Itim">Itim</option>
                                <option value="Paytone One">Paytone One</option>
                                <option value="Gochi Hand">Gochi Hand</option>
                                <option value="Palanquin">Palanquin</option>
                                <option value="Sen">Sen</option>
                                <option value="BenchNine">BenchNine</option>
                                <option value="Quantico">Quantico</option>
                                <option value="Abhaya Libre">Abhaya Libre</option>
                                <option value="Alef">Alef</option>
                                <option value="Bai Jamjuree">Bai Jamjuree</option>
                                <option value="Noto Serif SC">Noto Serif SC</option>
                                <option value="Saira Semi Condensed">Saira Semi Condensed</option>
                                <option value="Amaranth">Amaranth</option>
                                <option value="Yrsa">Yrsa</option>
                                <option value="Unica One">Unica One</option>
                                <option value="Noto Serif KR">Noto Serif KR</option>
                                <option value="Hind Vadodara">Hind Vadodara</option>
                                <option value="Nothing You Could Do">Nothing You Could Do</option>
                                <option value="Allerta">Allerta</option>
                                <option value="Bungee">Bungee</option>
                                <option value="Mr Dafoe">Mr Dafoe</option>
                                <option value="Bad Script">Bad Script</option>
                                <option value="Londrina Solid">Londrina Solid</option>
                                <option value="Cabin Condensed">Cabin Condensed</option>
                                <option value="Syncopate">Syncopate</option>
                                <option value="Khula">Khula</option>
                                <option value="Electrolize">Electrolize</option>
                                <option value="Homemade Apple">Homemade Apple</option>
                                <option value="Armata">Armata</option>
                                <option value="Suez One">Suez One</option>
                                <option value="Rock Salt">Rock Salt</option>
                                <option value="Cantata One">Cantata One</option>
                                <option value="Aclonica">Aclonica</option>
                                <option value="Varela">Varela</option>
                                <option value="Julius Sans One">Julius Sans One</option>
                                <option value="Rufina">Rufina</option>
                                <option value="Tenor Sans">Tenor Sans</option>
                                <option value="Sora">Sora</option>
                                <option value="Pontano Sans">Pontano Sans</option>
                                <option value="Gentium Basic">Gentium Basic</option>
                                <option value="Arsenal">Arsenal</option>
                                <option value="Mukta Malar">Mukta Malar</option>
                                <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
                                <option value="Share Tech Mono">Share Tech Mono</option>
                                <option value="Kosugi Maru">Kosugi Maru</option>
                                <option value="Alex Brush">Alex Brush</option>
                                <option value="Courier Prime">Courier Prime</option>
                                <option value="Lilita One">Lilita One</option>
                                <option value="Sarala">Sarala</option>
                                <option value="Monoton">Monoton</option>
                                <option value="Fugaz One">Fugaz One</option>
                                <option value="Gruppo">Gruppo</option>
                                <option value="Gentium Book Basic">Gentium Book Basic</option>
                                <option value="Mate SC">Mate SC</option>
                                <option value="Ramabhadra">Ramabhadra</option>
                                <option value="Changa One">Changa One</option>
                                <option value="Krub">Krub</option>
                                <option value="Nanum Pen Script">Nanum Pen Script</option>
                                <option value="Jaldi">Jaldi</option>
                                <option value="Forum">Forum</option>
                                <option value="Pangolin">Pangolin</option>
                                <option value="Damion">Damion</option>
                                <option value="Audiowide">Audiowide</option>
                                <option value="Black Ops One">Black Ops One</option>
                                <option value="Commissioner">Commissioner</option>
                                <option value="Overlock">Overlock</option>
                                <option value="Bubblegum Sans">Bubblegum Sans</option>
                                <option value="Mandali">Mandali</option>
                                <option value="Days One">Days One</option>
                                <option value="Coda">Coda</option>
                                <option value="Bowlby One SC">Bowlby One SC</option>
                                <option value="Sansita">Sansita</option>
                                <option value="Sintony">Sintony</option>
                                <option value="Shadows Into Light Two">Shadows Into Light Two</option>
                                <option value="Red Hat Text">Red Hat Text</option>
                                <option value="Lalezar">Lalezar</option>
                                <option value="Oleo Script">Oleo Script</option>
                                <option value="Martel Sans">Martel Sans</option>
                                <option value="Six Caps">Six Caps</option>
                                <option value="Markazi Text">Markazi Text</option>
                                <option value="Italianno">Italianno</option>
                                <option value="Voltaire">Voltaire</option>
                                <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
                                <option value="Candal">Candal</option>
                                <option value="Cousine">Cousine</option>
                                <option value="Noto Naskh Arabic">Noto Naskh Arabic</option>
                                <option value="Scheherazade">Scheherazade</option>
                                <option value="Literata">Literata</option>
                                <option value="Mada">Mada</option>
                                <option value="Basic">Basic</option>
                                <option value="Berkshire Swash">Berkshire Swash</option>
                                <option value="Squada One">Squada One</option>
                                <option value="Chewy">Chewy</option>
                                <option value="Niramit">Niramit</option>
                                <option value="Average">Average</option>
                                <option value="Hind Guntur">Hind Guntur</option>
                                <option value="Pinyon Script">Pinyon Script</option>
                                <option value="Sriracha">Sriracha</option>
                                <option value="Encode Sans Condensed">Encode Sans Condensed</option>
                                <option value="Shrikhand">Shrikhand</option>
                                <option value="IBM Plex Sans Condensed">IBM Plex Sans Condensed</option>
                                <option value="Alatsi">Alatsi</option>
                                <option value="Anonymous Pro">Anonymous Pro</option>
                                <option value="Arizonia">Arizonia</option>
                                <option value="Glegoo">Glegoo</option>
                                <option value="Belgrano">Belgrano</option>
                                <option value="Rubik Mono One">Rubik Mono One</option>
                                <option value="Alegreya Sans SC">Alegreya Sans SC</option>
                                <option value="Black Han Sans">Black Han Sans</option>
                                <option value="Palanquin Dark">Palanquin Dark</option>
                                <option value="Lemonada">Lemonada</option>
                                <option value="Fredericka the Great">Fredericka the Great</option>
                                <option value="Spinnaker">Spinnaker</option>
                                <option value="Judson">Judson</option>
                                <option value="Caveat Brush">Caveat Brush</option>
                                <option value="Antic">Antic</option>
                                <option value="Racing Sans One">Racing Sans One</option>
                                <option value="Reenie Beanie">Reenie Beanie</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Lateef">Lateef</option>
                                <option value="Holtwood One SC">Holtwood One SC</option>
                                <option value="Kreon">Kreon</option>
                                <option value="Kameron">Kameron</option>
                                <option value="Darker Grotesque">Darker Grotesque</option>
                                <option value="Rancho">Rancho</option>
                                <option value="Castoro">Castoro</option>
                                <option value="Overpass Mono">Overpass Mono</option>
                                <option value="Michroma">Michroma</option>
                                <option value="Syne">Syne</option>
                                <option value="PT Serif Caption">PT Serif Caption</option>
                                <option value="Bevan">Bevan</option>
                                <option value="Boogaloo">Boogaloo</option>
                                <option value="Enriqueta">Enriqueta</option>
                                <option value="Reem Kufi">Reem Kufi</option>
                                <option value="Laila">Laila</option>
                                <option value="Titan One">Titan One</option>
                                <option value="Blinker">Blinker</option>
                                <option value="Aldrich">Aldrich</option>
                                <option value="Fira Mono">Fira Mono</option>
                                <option value="Niconne">Niconne</option>
                                <option value="Gilda Display">Gilda Display</option>
                                <option value="Alike">Alike</option>
                                <option value="Cinzel Decorative">Cinzel Decorative</option>
                                <option value="Comic Neue">Comic Neue</option>
                                <option value="Leckerli One">Leckerli One</option>
                                <option value="Norican">Norican</option>
                                <option value="Lexend">Lexend</option>
                                <option value="Biryani">Biryani</option>
                                <option value="Henny Penny">Henny Penny</option>
                                <option value="Covered By Your Grace">Covered By Your Grace</option>
                                <option value="Amita">Amita</option>
                                <option value="GFS Didot">GFS Didot</option>
                                <option value="Capriola">Capriola</option>
                                <option value="VT323">VT323</option>
                                <option value="Arbutus Slab">Arbutus Slab</option>
                                <option value="Pridi">Pridi</option>
                                <option value="Rye">Rye</option>
                                <option value="Cabin Sketch">Cabin Sketch</option>
                                <option value="Saira Extra Condensed">Saira Extra Condensed</option>
                                <option value="Charm">Charm</option>
                                <option value="Lustria">Lustria</option>
                                <option value="Rambla">Rambla</option>
                                <option value="Knewave">Knewave</option>
                                <option value="Allerta Stencil">Allerta Stencil</option>
                                <option value="Duru Sans">Duru Sans</option>
                                <option value="Noto Sans Devanagari">Noto Sans Devanagari</option>
                                <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
                                <option value="Suranna">Suranna</option>
                                <option value="Podkova">Podkova</option>
                                <option value="Baskervville">Baskervville</option>
                                <option value="Share">Share</option>
                                <option value="Be Vietnam">Be Vietnam</option>
                                <option value="Rozha One">Rozha One</option>
                                <option value="Mate">Mate</option>
                                <option value="Hepta Slab">Hepta Slab</option>
                                <option value="Contrail One">Contrail One</option>
                                <option value="Mukta Vaani">Mukta Vaani</option>
                                <option value="Bowlby One">Bowlby One</option>
                                <option value="Caudex">Caudex</option>
                                <option value="Alegreya SC">Alegreya SC</option>
                                <option value="Corben">Corben</option>
                                <option value="Coming Soon">Coming Soon</option>
                                <option value="Yesteryear">Yesteryear</option>
                                <option value="K2D">K2D</option>
                                <option value="IM Fell DW Pica">IM Fell DW Pica</option>
                                <option value="Average Sans">Average Sans</option>
                                <option value="Magra">Magra</option>
                                <option value="Kumbh Sans">Kumbh Sans</option>
                                <option value="Trocchi">Trocchi</option>
                                <option value="JetBrains Mono">JetBrains Mono</option>
                                <option value="Do Hyeon">Do Hyeon</option>
                                <option value="Nixie One">Nixie One</option>
                                <option value="Allan">Allan</option>
                                <option value="Belleza">Belleza</option>
                                <option value="Copse">Copse</option>
                                <option value="Seaweed Script">Seaweed Script</option>
                                <option value="Trirong">Trirong</option>
                                <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
                                <option value="Marcellus SC">Marcellus SC</option>
                                <option value="Scada">Scada</option>
                                <option value="Athiti">Athiti</option>
                                <option value="Libre Caslon Text">Libre Caslon Text</option>
                                <option value="Nanum Brush Script">Nanum Brush Script</option>
                                <option value="Delius">Delius</option>
                                <option value="Oranienbaum">Oranienbaum</option>
                                <option value="Just Another Hand">Just Another Hand</option>
                                <option value="Epilogue">Epilogue</option>
                                <option value="Kristi">Kristi</option>
                                <option value="Krona One">Krona One</option>
                                <option value="Rochester">Rochester</option>
                                <option value="Jua">Jua</option>
                                <option value="Telex">Telex</option>
                                <option value="Poller One">Poller One</option>
                                <option value="Bodoni Moda">Bodoni Moda</option>
                                <option value="Skranji">Skranji</option>
                                <option value="Carrois Gothic">Carrois Gothic</option>
                                <option value="Miriam Libre">Miriam Libre</option>
                                <option value="Amiko">Amiko</option>
                                <option value="Averia Serif Libre">Averia Serif Libre</option>
                                <option value="Amethysta">Amethysta</option>
                                <option value="Merienda One">Merienda One</option>
                                <option value="Pattaya">Pattaya</option>
                                <option value="Big Shoulders Display">Big Shoulders Display</option>
                                <option value="Cambay">Cambay</option>
                                <option value="Nobile">Nobile</option>
                                <option value="Molengo">Molengo</option>
                                <option value="Fauna One">Fauna One</option>
                                <option value="Cedarville Cursive">Cedarville Cursive</option>
                                <option value="Chonburi">Chonburi</option>
                                <option value="Baloo Da 2">Baloo Da 2</option>
                                <option value="Bungee Inline">Bungee Inline</option>
                                <option value="Cormorant Infant">Cormorant Infant</option>
                                <option value="Ovo">Ovo</option>
                                <option value="Calligraffitti">Calligraffitti</option>
                                <option value="Alike Angular">Alike Angular</option>
                                <option value="Oxygen Mono">Oxygen Mono</option>
                                <option value="Wallpoet">Wallpoet</option>
                                <option value="Grand Hotel">Grand Hotel</option>
                                <option value="Esteban">Esteban</option>
                                <option value="Schoolbell">Schoolbell</option>
                                <option value="Petit Formal Script">Petit Formal Script</option>
                                <option value="Grandstander">Grandstander</option>
                                <option value="Kosugi">Kosugi</option>
                                <option value="Creepster">Creepster</option>
                                <option value="Bellefair">Bellefair</option>
                                <option value="Fira Code">Fira Code</option>
                                <option value="Averia Libre">Averia Libre</option>
                                <option value="Jockey One">Jockey One</option>
                                <option value="Manjari">Manjari</option>
                                <option value="Marmelad">Marmelad</option>
                                <option value="Rosario">Rosario</option>
                                <option value="Farro">Farro</option>
                                <option value="Montez">Montez</option>
                                <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
                                <option value="Noto Sans Tamil">Noto Sans Tamil</option>
                                <option value="Coustard">Coustard</option>
                                <option value="Aladin">Aladin</option>
                                <option value="Halant">Halant</option>
                                <option value="Metrophobic">Metrophobic</option>
                                <option value="Slabo 13px">Slabo 13px</option>
                                <option value="David Libre">David Libre</option>
                                <option value="Marvel">Marvel</option>
                                <option value="Georama">Georama</option>
                                <option value="Antonio">Antonio</option>
                                <option value="Sunflower">Sunflower</option>
                                <option value="Oxanium">Oxanium</option>
                                <option value="Harmattan">Harmattan</option>
                                <option value="IM Fell Double Pica">IM Fell Double Pica</option>
                                <option value="Rammetto One">Rammetto One</option>
                                <option value="Gabriela">Gabriela</option>
                                <option value="Noto Sans Mandaic">Noto Sans Mandaic</option>
                                <option value="Mr De Haviland">Mr De Haviland</option>
                                <option value="Cutive Mono">Cutive Mono</option>
                                <option value="Carme">Carme</option>
                                <option value="Convergence">Convergence</option>
                                <option value="Hanuman">Hanuman</option>
                                <option value="Spectral SC">Spectral SC</option>
                                <option value="Stardos Stencil">Stardos Stencil</option>
                                <option value="Emilys Candy">Emilys Candy</option>
                                <option value="Bentham">Bentham</option>
                                <option value="Urbanist">Urbanist</option>
                                <option value="Fanwood Text">Fanwood Text</option>
                                <option value="NTR">NTR</option>
                                <option value="Sofia">Sofia</option>
                                <option value="Sniglet">Sniglet</option>
                                <option value="ZCOOL XiaoWei">ZCOOL XiaoWei</option>
                                <option value="Radley">Radley</option>
                                <option value="IM Fell English">IM Fell English</option>
                                <option value="Libre Barcode 39">Libre Barcode 39</option>
                                <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
                                <option value="Thasadith">Thasadith</option>
                                <option value="Happy Monkey">Happy Monkey</option>
                                <option value="La Belle Aurore">La Belle Aurore</option>
                                <option value="Kelly Slab">Kelly Slab</option>
                                <option value="Irish Grover">Irish Grover</option>
                                <option value="Maitree">Maitree</option>
                                <option value="Shippori Mincho">Shippori Mincho</option>
                                <option value="Proza Libre">Proza Libre</option>
                                <option value="Encode Sans Semi Condensed">Encode Sans Semi Condensed</option>
                                <option value="Hi Melody">Hi Melody</option>
                                <option value="Gugi">Gugi</option>
                                <option value="Andika">Andika</option>
                                <option value="Buenard">Buenard</option>
                                <option value="Mallanna">Mallanna</option>
                                <option value="Cutive">Cutive</option>
                                <option value="Noto Sans Malayalam">Noto Sans Malayalam</option>
                                <option value="Turret Road">Turret Road</option>
                                <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                <option value="Grenze Gotisch">Grenze Gotisch</option>
                                <option value="Tillana">Tillana</option>
                                <option value="Qwigley">Qwigley</option>
                                <option value="Oregano">Oregano</option>
                                <option value="Chelsea Market">Chelsea Market</option>
                                <option value="Poly">Poly</option>
                                <option value="Original Surfer">Original Surfer</option>
                                <option value="Major Mono Display">Major Mono Display</option>
                                <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
                                <option value="BioRhyme">BioRhyme</option>
                                <option value="Cormorant SC">Cormorant SC</option>
                                <option value="Brawler">Brawler</option>
                                <option value="Livvic">Livvic</option>
                                <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
                                <option value="Della Respira">Della Respira</option>
                                <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
                                <option value="Mansalva">Mansalva</option>
                                <option value="Doppio One">Doppio One</option>
                                <option value="Limelight">Limelight</option>
                                <option value="Noto Serif Display">Noto Serif Display</option>
                                <option value="Baloo Tamma 2">Baloo Tamma 2</option>
                                <option value="Rasa">Rasa</option>
                                <option value="Noto Sans Thai">Noto Sans Thai</option>
                                <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
                                <option value="Mirza">Mirza</option>
                                <option value="Kadwa">Kadwa</option>
                                <option value="Dawning of a New Day">Dawning of a New Day</option>
                                <option value="Noto Sans Bengali">Noto Sans Bengali</option>
                                <option value="Galada">Galada</option>
                                <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
                                <option value="Quando">Quando</option>
                                <option value="Ceviche One">Ceviche One</option>
                                <option value="Lemon">Lemon</option>
                                <option value="Goblin One">Goblin One</option>
                                <option value="Expletus Sans">Expletus Sans</option>
                                <option value="Rouge Script">Rouge Script</option>
                                <option value="Kurale">Kurale</option>
                                <option value="Noto Sans Hebrew">Noto Sans Hebrew</option>
                                <option value="Meddon">Meddon</option>
                                <option value="B612 Mono">B612 Mono</option>
                                <option value="Ranchers">Ranchers</option>
                                <option value="Inknut Antiqua">Inknut Antiqua</option>
                                <option value="Gravitas One">Gravitas One</option>
                                <option value="ZCOOL QingKe HuangYou">ZCOOL QingKe HuangYou</option>
                                <option value="Freckle Face">Freckle Face</option>
                                <option value="Sarpanch">Sarpanch</option>
                                <option value="Wendy One">Wendy One</option>
                                <option value="Homenaje">Homenaje</option>
                                <option value="Tenali Ramakrishna">Tenali Ramakrishna</option>
                                <option value="Rakkas">Rakkas</option>
                                <option value="Baloo Thambi 2">Baloo Thambi 2</option>
                                <option value="Amarante">Amarante</option>
                                <option value="Federo">Federo</option>
                                <option value="Bungee Shade">Bungee Shade</option>
                                <option value="Metamorphous">Metamorphous</option>
                                <option value="Patrick Hand SC">Patrick Hand SC</option>
                                <option value="Anaheim">Anaheim</option>
                                <option value="Vast Shadow">Vast Shadow</option>
                                <option value="Give You Glory">Give You Glory</option>
                                <option value="Fondamento">Fondamento</option>
                                <option value="Aref Ruqaa">Aref Ruqaa</option>
                                <option value="Zeyada">Zeyada</option>
                                <option value="Antic Didone">Antic Didone</option>
                                <option value="Finger Paint">Finger Paint</option>
                                <option value="Yatra One">Yatra One</option>
                                <option value="Coda Caption">Coda Caption</option>
                                <option value="Share Tech">Share Tech</option>
                                <option value="Crafty Girls">Crafty Girls</option>
                                <option value="KoHo">KoHo</option>
                                <option value="Big Shoulders Text">Big Shoulders Text</option>
                                <option value="Mountains of Christmas">Mountains of Christmas</option>
                                <option value="Vollkorn SC">Vollkorn SC</option>
                                <option value="Notable">Notable</option>
                                <option value="Atma">Atma</option>
                                <option value="Cormorant Upright">Cormorant Upright</option>
                                <option value="Sedgwick Ave">Sedgwick Ave</option>
                                <option value="Trykker">Trykker</option>
                                <option value="Euphoria Script">Euphoria Script</option>
                                <option value="Praise">Praise</option>
                                <option value="Baumans">Baumans</option>
                                <option value="Noto Sans Kannada">Noto Sans Kannada</option>
                                <option value="Calistoga">Calistoga</option>
                                <option value="Road Rage">Road Rage</option>
                                <option value="Pompiere">Pompiere</option>
                                <option value="Clicker Script">Clicker Script</option>
                                <option value="Katibeh">Katibeh</option>
                                <option value="Sail">Sail</option>
                                <option value="Lexend Zetta">Lexend Zetta</option>
                                <option value="Frijole">Frijole</option>
                                <option value="Italiana">Italiana</option>
                                <option value="Battambang">Battambang</option>
                                <option value="Nova Mono">Nova Mono</option>
                                <option value="Chau Philomene One">Chau Philomene One</option>
                                <option value="Mukta Mahee">Mukta Mahee</option>
                                <option value="Megrim">Megrim</option>
                                <option value="Codystar">Codystar</option>
                                <option value="Newsreader">Newsreader</option>
                                <option value="Nova Round">Nova Round</option>
                                <option value="Raleway Dots">Raleway Dots</option>
                                <option value="Walter Turncoat">Walter Turncoat</option>
                                <option value="Noto Sans Telugu">Noto Sans Telugu</option>
                                <option value="McLaren">McLaren</option>
                                <option value="Delius Swash Caps">Delius Swash Caps</option>
                                <option value="Lekton">Lekton</option>
                                <option value="Noto Sans Oriya">Noto Sans Oriya</option>
                                <option value="Unkempt">Unkempt</option>
                                <option value="Dokdo">Dokdo</option>
                                <option value="RocknRoll One">RocknRoll One</option>
                                <option value="Strait">Strait</option>
                                <option value="Balthazar">Balthazar</option>
                                <option value="B612">B612</option>
                                <option value="DM Mono">DM Mono</option>
                                <option value="STIX Two Text">STIX Two Text</option>
                                <option value="Reggae One">Reggae One</option>
                                <option value="Aguafina Script">Aguafina Script</option>
                                <option value="Faster One">Faster One</option>
                                <option value="Noto Sans Gujarati">Noto Sans Gujarati</option>
                                <option value="Coiny">Coiny</option>
                                <option value="Inder">Inder</option>
                                <option value="Noto Sans Gurmukhi">Noto Sans Gurmukhi</option>
                                <option value="Baloo Chettan 2">Baloo Chettan 2</option>
                                <option value="Bellota Text">Bellota Text</option>
                                <option value="Ma Shan Zheng">Ma Shan Zheng</option>
                                <option value="Arya">Arya</option>
                                <option value="Fraunces">Fraunces</option>
                                <option value="Ruslan Display">Ruslan Display</option>
                                <option value="Mouse Memoirs">Mouse Memoirs</option>
                                <option value="Short Stack">Short Stack</option>
                                <option value="Orienta">Orienta</option>
                                <option value="Montaga">Montaga</option>
                                <option value="Timmana">Timmana</option>
                                <option value="Vesper Libre">Vesper Libre</option>
                                <option value="Gurajada">Gurajada</option>
                                <option value="Ledger">Ledger</option>
                                <option value="Prosto One">Prosto One</option>
                                <option value="Over the Rainbow">Over the Rainbow</option>
                                <option value="Odibee Sans">Odibee Sans</option>
                                <option value="Mako">Mako</option>
                                <option value="Just Me Again Down Here">Just Me Again Down Here</option>
                                <option value="Encode Sans Expanded">Encode Sans Expanded</option>
                                <option value="Meera Inimai">Meera Inimai</option>
                                <option value="Asul">Asul</option>
                                <option value="Montserrat Subrayada">Montserrat Subrayada</option>
                                <option value="Baloo Tammudu 2">Baloo Tammudu 2</option>
                                <option value="Cambo">Cambo</option>
                                <option value="Flamenco">Flamenco</option>
                                <option value="Salsa">Salsa</option>
                                <option value="Loved by the King">Loved by the King</option>
                                <option value="Caladea">Caladea</option>
                                <option value="Geo">Geo</option>
                                <option value="Pirata One">Pirata One</option>
                                <option value="Port Lligat Slab">Port Lligat Slab</option>
                                <option value="Atkinson Hyperlegible">Atkinson Hyperlegible</option>
                                <option value="Averia Sans Libre">Averia Sans Libre</option>
                                <option value="Cherry Cream Soda">Cherry Cream Soda</option>
                                <option value="Nova Square">Nova Square</option>
                                <option value="Numans">Numans</option>
                                <option value="Kiwi Maru">Kiwi Maru</option>
                                <option value="Mina">Mina</option>
                                <option value="Delius Unicase">Delius Unicase</option>
                                <option value="Autour One">Autour One</option>
                                <option value="Imprima">Imprima</option>
                                <option value="Elsie">Elsie</option>
                                <option value="Festive">Festive</option>
                                <option value="The Girl Next Door">The Girl Next Door</option>
                                <option value="Headland One">Headland One</option>
                                <option value="Ephesis">Ephesis</option>
                                <option value="Gafata">Gafata</option>
                                <option value="Dela Gothic One">Dela Gothic One</option>
                                <option value="Cherry Swash">Cherry Swash</option>
                                <option value="Wire One">Wire One</option>
                                <option value="MedievalSharp">MedievalSharp</option>
                                <option value="Life Savers">Life Savers</option>
                                <option value="Mochiy Pop One">Mochiy Pop One</option>
                                <option value="Shojumaru">Shojumaru</option>
                                <option value="Carrois Gothic SC">Carrois Gothic SC</option>
                                <option value="Puritan">Puritan</option>
                                <option value="Azeret Mono">Azeret Mono</option>
                                <option value="Artifika">Artifika</option>
                                <option value="Goldman">Goldman</option>
                                <option value="Tienne">Tienne</option>
                                <option value="Peralta">Peralta</option>
                                <option value="Gaegu">Gaegu</option>
                                <option value="Style Script">Style Script</option>
                                <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
                                <option value="Scope One">Scope One</option>
                                <option value="Cormorant Unicase">Cormorant Unicase</option>
                                <option value="Vibur">Vibur</option>
                                <option value="Yusei Magic">Yusei Magic</option>
                                <option value="Shanti">Shanti</option>
                                <option value="Denk One">Denk One</option>
                                <option value="Almendra">Almendra</option>
                                <option value="Baloo Bhaina 2">Baloo Bhaina 2</option>
                                <option value="Slackey">Slackey</option>
                                <option value="Fjord One">Fjord One</option>
                                <option value="MuseoModerno">MuseoModerno</option>
                                <option value="Ribeye">Ribeye</option>
                                <option value="Pavanam">Pavanam</option>
                                <option value="Trade Winds">Trade Winds</option>
                                <option value="Asar">Asar</option>
                                <option value="Kite One">Kite One</option>
                                <option value="Lily Script One">Lily Script One</option>
                                <option value="Germania One">Germania One</option>
                                <option value="Jomhuria">Jomhuria</option>
                                <option value="Engagement">Engagement</option>
                                <option value="Dynalight">Dynalight</option>
                                <option value="UnifrakturCook">UnifrakturCook</option>
                                <option value="Kranky">Kranky</option>
                                <option value="Eater">Eater</option>
                                <option value="Lakki Reddy">Lakki Reddy</option>
                                <option value="Macondo Swash Caps">Macondo Swash Caps</option>
                                <option value="Kodchasan">Kodchasan</option>
                                <option value="Song Myung">Song Myung</option>
                                <option value="Ramaraja">Ramaraja</option>
                                <option value="Baloo Paaji 2">Baloo Paaji 2</option>
                                <option value="Paprika">Paprika</option>
                                <option value="Voces">Voces</option>
                                <option value="Tauri">Tauri</option>
                                <option value="Medula One">Medula One</option>
                                <option value="Sarina">Sarina</option>
                                <option value="League Script">League Script</option>
                                <option value="ZCOOL KuaiLe">ZCOOL KuaiLe</option>
                                <option value="Encode Sans Semi Expanded">Encode Sans Semi Expanded</option>
                                <option value="Fresca">Fresca</option>
                                <option value="Noto Sans Display">Noto Sans Display</option>
                                <option value="Modak">Modak</option>
                                <option value="Shippori Mincho B1">Shippori Mincho B1</option>
                                <option value="Allison">Allison</option>
                                <option value="New Rocker">New Rocker</option>
                                <option value="Englebert">Englebert</option>
                                <option value="Julee">Julee</option>
                                <option value="Poor Story">Poor Story</option>
                                <option value="IM Fell French Canon">IM Fell French Canon</option>
                                <option value="Lovers Quarrel">Lovers Quarrel</option>
                                <option value="Lexend Exa">Lexend Exa</option>
                                <option value="DotGothic16">DotGothic16</option>
                                <option value="Bilbo">Bilbo</option>
                                <option value="Libre Barcode 39 Text">Libre Barcode 39 Text</option>
                                <option value="Noto Sans Sinhala">Noto Sans Sinhala</option>
                                <option value="Sumana">Sumana</option>
                                <option value="Stoke">Stoke</option>
                                <option value="Charmonman">Charmonman</option>
                                <option value="Spicy Rice">Spicy Rice</option>
                                <option value="Gamja Flower">Gamja Flower</option>
                                <option value="Milonga">Milonga</option>
                                <option value="Mogra">Mogra</option>
                                <option value="Varta">Varta</option>
                                <option value="Kulim Park">Kulim Park</option>
                                <option value="Iceberg">Iceberg</option>
                                <option value="Mystery Quest">Mystery Quest</option>
                                <option value="Habibi">Habibi</option>
                                <option value="Chango">Chango</option>
                                <option value="Khmer">Khmer</option>
                                <option value="Londrina Outline">Londrina Outline</option>
                                <option value="Fahkwang">Fahkwang</option>
                                <option value="Simonetta">Simonetta</option>
                                <option value="Rum Raisin">Rum Raisin</option>
                                <option value="Libre Caslon Display">Libre Caslon Display</option>
                                <option value="Cantora One">Cantora One</option>
                                <option value="Andika New Basic">Andika New Basic</option>
                                <option value="Stalemate">Stalemate</option>
                                <option value="Akaya Telivigala">Akaya Telivigala</option>
                                <option value="Baloo Bhai 2">Baloo Bhai 2</option>
                                <option value="Solway">Solway</option>
                                <option value="Donegal One">Donegal One</option>
                                <option value="Ranga">Ranga</option>
                                <option value="Sancreek">Sancreek</option>
                                <option value="Tomorrow">Tomorrow</option>
                                <option value="Barriecito">Barriecito</option>
                                <option value="Rosarivo">Rosarivo</option>
                                <option value="Rationale">Rationale</option>
                                <option value="Fontdiner Swanky">Fontdiner Swanky</option>
                                <option value="Prociono">Prociono</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Uncial Antiqua">Uncial Antiqua</option>
                                <option value="Almendra SC">Almendra SC</option>
                                <option value="Saira Stencil One">Saira Stencil One</option>
                                <option value="Dekko">Dekko</option>
                                <option value="Chicle">Chicle</option>
                                <option value="Text Me One">Text Me One</option>
                                <option value="Nokora">Nokora</option>
                                <option value="Buda">Buda</option>
                                <option value="Yeon Sung">Yeon Sung</option>
                                <option value="Sonsie One">Sonsie One</option>
                                <option value="Port Lligat Sans">Port Lligat Sans</option>
                                <option value="Bellota">Bellota</option>
                                <option value="Piazzolla">Piazzolla</option>
                                <option value="Bubbler One">Bubbler One</option>
                                <option value="Ibarra Real Nova">Ibarra Real Nova</option>
                                <option value="Yuji Mai">Yuji Mai</option>
                                <option value="Chilanka">Chilanka</option>
                                <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
                                <option value="Zilla Slab Highlight">Zilla Slab Highlight</option>
                                <option value="Yuji Syuku">Yuji Syuku</option>
                                <option value="Farsan">Farsan</option>
                                <option value="Fenix">Fenix</option>
                                <option value="Kotta One">Kotta One</option>
                                <option value="Libre Barcode 39 Extended Text">Libre Barcode 39 Extended Text</option>
                                <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
                                <option value="Underdog">Underdog</option>
                                <option value="Yuji Boku">Yuji Boku</option>
                                <option value="Besley">Besley</option>
                                <option value="IM Fell Great Primer">IM Fell Great Primer</option>
                                <option value="Manuale">Manuale</option>
                                <option value="Akronim">Akronim</option>
                                <option value="Sree Krushnadevaraya">Sree Krushnadevaraya</option>
                                <option value="Potta One">Potta One</option>
                                <option value="Croissant One">Croissant One</option>
                                <option value="Angkor">Angkor</option>
                                <option value="Crushed">Crushed</option>
                                <option value="Noto Nastaliq Urdu">Noto Nastaliq Urdu</option>
                                <option value="Gayathri">Gayathri</option>
                                <option value="Redressed">Redressed</option>
                                <option value="Condiment">Condiment</option>
                                <option value="Nova Flat">Nova Flat</option>
                                <option value="Quintessential">Quintessential</option>
                                <option value="Nosifer">Nosifer</option>
                                <option value="Inika">Inika</option>
                                <option value="Eagle Lake">Eagle Lake</option>
                                <option value="Barrio">Barrio</option>
                                <option value="Cagliostro">Cagliostro</option>
                                <option value="Ruluko">Ruluko</option>
                                <option value="Kavivanar">Kavivanar</option>
                                <option value="Rhodium Libre">Rhodium Libre</option>
                                <option value="Margarine">Margarine</option>
                                <option value="Overlock SC">Overlock SC</option>
                                <option value="Be Vietnam Pro">Be Vietnam Pro</option>
                                <option value="Scheherazade New">Scheherazade New</option>
                                <option value="Sulphur Point">Sulphur Point</option>
                                <option value="Wellfleet">Wellfleet</option>
                                <option value="Single Day">Single Day</option>
                                <option value="Hachi Maru Pop">Hachi Maru Pop</option>
                                <option value="Petemoss">Petemoss</option>
                                <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
                                <option value="Piedra">Piedra</option>
                                <option value="Asset">Asset</option>
                                <option value="Bayon">Bayon</option>
                                <option value="Kantumruy">Kantumruy</option>
                                <option value="Big Shoulders Stencil Display">Big Shoulders Stencil Display</option>
                                <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
                                <option value="Kumar One">Kumar One</option>
                                <option value="Londrina Shadow">Londrina Shadow</option>
                                <option value="Molle">Molle</option>
                                <option value="Stylish">Stylish</option>
                                <option value="Ruthie">Ruthie</option>
                                <option value="Griffy">Griffy</option>
                                <option value="Petrona">Petrona</option>
                                <option value="Inria Serif">Inria Serif</option>
                                <option value="Cute Font">Cute Font</option>
                                <option value="Sura">Sura</option>
                                <option value="Monofett">Monofett</option>
                                <option value="Sahitya">Sahitya</option>
                                <option value="Libre Barcode 128">Libre Barcode 128</option>
                                <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
                                <option value="Moul">Moul</option>
                                <option value="Chathura">Chathura</option>
                                <option value="Offside">Offside</option>
                                <option value="Dorsa">Dorsa</option>
                                <option value="Tulpen One">Tulpen One</option>
                                <option value="Gotu">Gotu</option>
                                <option value="Tourney">Tourney</option>
                                <option value="Akaya Kanadaka">Akaya Kanadaka</option>
                                <option value="Miniver">Miniver</option>
                                <option value="East Sea Dokdo">East Sea Dokdo</option>
                                <option value="Sirin Stencil">Sirin Stencil</option>
                                <option value="Maiden Orange">Maiden Orange</option>
                                <option value="Ribeye Marrow">Ribeye Marrow</option>
                                <option value="Kufam">Kufam</option>
                                <option value="Rowdies">Rowdies</option>
                                <option value="Sansita Swashed">Sansita Swashed</option>
                                <option value="Linden Hill">Linden Hill</option>
                                <option value="Spirax">Spirax</option>
                                <option value="Ravi Prakash">Ravi Prakash</option>
                                <option value="Modern Antiqua">Modern Antiqua</option>
                                <option value="Zen Dots">Zen Dots</option>
                                <option value="Metal Mania">Metal Mania</option>
                                <option value="Meie Script">Meie Script</option>
                                <option value="Vampiro One">Vampiro One</option>
                                <option value="Bigelow Rules">Bigelow Rules</option>
                                <option value="Bona Nova">Bona Nova</option>
                                <option value="Metal">Metal</option>
                                <option value="Arbutus">Arbutus</option>
                                <option value="Content">Content</option>
                                <option value="Glory">Glory</option>
                                <option value="Junge">Junge</option>
                                <option value="Montagu Slab">Montagu Slab</option>
                                <option value="Lexend Mega">Lexend Mega</option>
                                <option value="Marko One">Marko One</option>
                                <option value="Joti One">Joti One</option>
                                <option value="Elsie Swash Caps">Elsie Swash Caps</option>
                                <option value="Caesar Dressing">Caesar Dressing</option>
                                <option value="Koulen">Koulen</option>
                                <option value="Kavoon">Kavoon</option>
                                <option value="Lancelot">Lancelot</option>
                                <option value="Stick">Stick</option>
                                <option value="Jolly Lodger">Jolly Lodger</option>
                                <option value="Beth Ellen">Beth Ellen</option>
                                <option value="Girassol">Girassol</option>
                                <option value="Jomolhari">Jomolhari</option>
                                <option value="Viaoda Libre">Viaoda Libre</option>
                                <option value="Mrs Sheppards">Mrs Sheppards</option>
                                <option value="Risque">Risque</option>
                                <option value="MonteCarlo">MonteCarlo</option>
                                <option value="Dr Sugiyama">Dr Sugiyama</option>
                                <option value="Gorditas">Gorditas</option>
                                <option value="Romanesco">Romanesco</option>
                                <option value="Bigshot One">Bigshot One</option>
                                <option value="Chela One">Chela One</option>
                                <option value="Galdeano">Galdeano</option>
                                <option value="Shalimar">Shalimar</option>
                                <option value="WindSong">WindSong</option>
                                <option value="Rampart One">Rampart One</option>
                                <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
                                <option value="Srisakdi">Srisakdi</option>
                                <option value="Revalia">Revalia</option>
                                <option value="Felipa">Felipa</option>
                                <option value="Diplomata">Diplomata</option>
                                <option value="Bahiana">Bahiana</option>
                                <option value="Jim Nightshade">Jim Nightshade</option>
                                <option value="Atomic Age">Atomic Age</option>
                                <option value="Glass Antiqua">Glass Antiqua</option>
                                <option value="Hanalei Fill">Hanalei Fill</option>
                                <option value="Libre Barcode 128 Text">Libre Barcode 128 Text</option>
                                <option value="Gupter">Gupter</option>
                                <option value="Smythe">Smythe</option>
                                <option value="Inria Sans">Inria Sans</option>
                                <option value="Diplomata SC">Diplomata SC</option>
                                <option value="Chenla">Chenla</option>
                                <option value="Kaisei Tokumin">Kaisei Tokumin</option>
                                <option value="Lexend Giga">Lexend Giga</option>
                                <option value="Flavors">Flavors</option>
                                <option value="Ewert">Ewert</option>
                                <option value="Macondo">Macondo</option>
                                <option value="Devonshire">Devonshire</option>
                                <option value="Miltonian">Miltonian</option>
                                <option value="Peddana">Peddana</option>
                                <option value="Grenze">Grenze</option>
                                <option value="Smokum">Smokum</option>
                                <option value="Londrina Sketch">Londrina Sketch</option>
                                <option value="Miss Fajardose">Miss Fajardose</option>
                                <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
                                <option value="Kirang Haerang">Kirang Haerang</option>
                                <option value="Train One">Train One</option>
                                <option value="Oldenburg">Oldenburg</option>
                                <option value="Kumar One Outline">Kumar One Outline</option>
                                <option value="Brygada 1918">Brygada 1918</option>
                                <option value="Red Rose">Red Rose</option>
                                <option value="Princess Sofia">Princess Sofia</option>
                                <option value="Odor Mean Chey">Odor Mean Chey</option>
                                <option value="Fascinate">Fascinate</option>
                                <option value="Zhi Mang Xing">Zhi Mang Xing</option>
                                <option value="Galindo">Galindo</option>
                                <option value="Plaster">Plaster</option>
                                <option value="Nova Slim">Nova Slim</option>
                                <option value="Kdam Thmor">Kdam Thmor</option>
                                <option value="Combo">Combo</option>
                                <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
                                <option value="Fascinate Inline">Fascinate Inline</option>
                                <option value="Keania One">Keania One</option>
                                <option value="Jacques Francois">Jacques Francois</option>
                                <option value="Emblema One">Emblema One</option>
                                <option value="Siemreap">Siemreap</option>
                                <option value="Bungee Outline">Bungee Outline</option>
                                <option value="Sassy Frass">Sassy Frass</option>
                                <option value="Snippet">Snippet</option>
                                <option value="Almendra Display">Almendra Display</option>
                                <option value="Unlock">Unlock</option>
                                <option value="Ballet">Ballet</option>
                                <option value="IBM Plex Sans Arabic">IBM Plex Sans Arabic</option>
                                <option value="Dangrek">Dangrek</option>
                                <option value="Butterfly Kids">Butterfly Kids</option>
                                <option value="GFS Neohellenic">GFS Neohellenic</option>
                                <option value="Gemunu Libre">Gemunu Libre</option>
                                <option value="Yomogi">Yomogi</option>
                                <option value="Texturina">Texturina</option>
                                <option value="Kaisei Opti">Kaisei Opti</option>
                                <option value="Purple Purse">Purple Purse</option>
                                <option value="Fruktur">Fruktur</option>
                                <option value="IBM Plex Sans Thai">IBM Plex Sans Thai</option>
                                <option value="Bahianita">Bahianita</option>
                                <option value="Black And White Picture">Black And White Picture</option>
                                <option value="Klee One">Klee One</option>
                                <option value="Noto Sans Arabic">Noto Sans Arabic</option>
                                <option value="Noto Sans Myanmar">Noto Sans Myanmar</option>
                                <option value="Libre Barcode 39 Extended">Libre Barcode 39 Extended</option>
                                <option value="Liu Jian Mao Cao">Liu Jian Mao Cao</option>
                                <option value="Sedgwick Ave Display">Sedgwick Ave Display</option>
                                <option value="Big Shoulders Stencil Text">Big Shoulders Stencil Text</option>
                                <option value="Stalinist One">Stalinist One</option>
                                <option value="Sunshiney">Sunshiney</option>
                                <option value="Zen Old Mincho">Zen Old Mincho</option>
                                <option value="Otomanopee One">Otomanopee One</option>
                                <option value="Seymour One">Seymour One</option>
                                <option value="Erica One">Erica One</option>
                                <option value="Passero One">Passero One</option>
                                <option value="Mr Bedfort">Mr Bedfort</option>
                                <option value="Bokor">Bokor</option>
                                <option value="Suwannaphum">Suwannaphum</option>
                                <option value="Zen Kaku Gothic New">Zen Kaku Gothic New</option>
                                <option value="Freehand">Freehand</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Federant">Federant</option>
                                <option value="Trochut">Trochut</option>
                                <option value="Butcherman">Butcherman</option>
                                <option value="Kaisei Decol">Kaisei Decol</option>
                                <option value="Hina Mincho">Hina Mincho</option>
                                <option value="Benne">Benne</option>
                                <option value="Bonbon">Bonbon</option>
                                <option value="Lexend Tera">Lexend Tera</option>
                                <option value="Snowburst One">Snowburst One</option>
                                <option value="Astloch">Astloch</option>
                                <option value="Noto Sans Armenian">Noto Sans Armenian</option>
                                <option value="Stick No Bills">Stick No Bills</option>
                                <option value="Gidugu">Gidugu</option>
                                <option value="Noto Sans Gothic">Noto Sans Gothic</option>
                                <option value="Miltonian Tattoo">Miltonian Tattoo</option>
                                <option value="Lacquer">Lacquer</option>
                                <option value="Nova Oval">Nova Oval</option>
                                <option value="Nova Cut">Nova Cut</option>
                                <option value="Supermercado One">Supermercado One</option>
                                <option value="Yaldevi">Yaldevi</option>
                                <option value="Zen Maru Gothic">Zen Maru Gothic</option>
                                <option value="Long Cang">Long Cang</option>
                                <option value="Ruge Boogie">Ruge Boogie</option>
                                <option value="Shippori Antique B1">Shippori Antique B1</option>
                                <option value="Nova Script">Nova Script</option>
                                <option value="Geostar Fill">Geostar Fill</option>
                                <option value="Noto Sans Symbols">Noto Sans Symbols</option>
                                <option value="Zen Kurenaido">Zen Kurenaido</option>
                                <option value="Noto Sans Mono">Noto Sans Mono</option>
                                <option value="New Tegomin">New Tegomin</option>
                                <option value="Preahvihear">Preahvihear</option>
                                <option value="Zen Kaku Gothic Antique">Zen Kaku Gothic Antique</option>
                                <option value="Zen Antique">Zen Antique</option>
                                <option value="Karantina">Karantina</option>
                                <option value="Vibes">Vibes</option>
                                <option value="Bungee Hairline">Bungee Hairline</option>
                                <option value="Palette Mosaic">Palette Mosaic</option>
                                <option value="Puppies Play">Puppies Play</option>
                                <option value="Hahmlet">Hahmlet</option>
                                <option value="Taprom">Taprom</option>
                                <option value="Suravaram">Suravaram</option>
                                <option value="Truculenta">Truculenta</option>
                                <option value="Sevillana">Sevillana</option>
                                <option value="Mochiy Pop P One">Mochiy Pop P One</option>
                                <option value="Orelega One">Orelega One</option>
                                <option value="Sofadi One">Sofadi One</option>
                                <option value="Aubrey">Aubrey</option>
                                <option value="Passions Conflict">Passions Conflict</option>
                                <option value="Fuggles">Fuggles</option>
                                <option value="Nerko One">Nerko One</option>
                                <option value="Moulpali">Moulpali</option>
                                <option value="Big Shoulders Inline Text">Big Shoulders Inline Text</option>
                                <option value="Andada Pro">Andada Pro</option>
                                <option value="Kaisei HarunoUmi">Kaisei HarunoUmi</option>
                                <option value="Hanalei">Hanalei</option>
                                <option value="Genos">Genos</option>
                                <option value="Gluten">Gluten</option>
                                <option value="Syne Mono">Syne Mono</option>
                                <option value="Gowun Batang">Gowun Batang</option>
                                <option value="Alumni Sans">Alumni Sans</option>
                                <option value="Encode Sans SC">Encode Sans SC</option>
                                <option value="Zen Antique Soft">Zen Antique Soft</option>
                                <option value="Shippori Antique">Shippori Antique</option>
                                <option value="Kenia">Kenia</option>
                                <option value="Zen Loop">Zen Loop</option>
                                <option value="Bonheur Royale">Bonheur Royale</option>
                                <option value="Hurricane">Hurricane</option>
                                <option value="Kings">Kings</option>
                                <option value="Imbue">Imbue</option>
                                <option value="Mohave">Mohave</option>
                                <option value="BioRhyme Expanded">BioRhyme Expanded</option>
                                <option value="Flow Circular">Flow Circular</option>
                                <option value="Fasthand">Fasthand</option>
                                <option value="Noto Serif Sinhala">Noto Serif Sinhala</option>
                                <option value="Birthstone Bounce">Birthstone Bounce</option>
                                <option value="Dongle">Dongle</option>
                                <option value="Dhurjati">Dhurjati</option>
                                <option value="Flow Block">Flow Block</option>
                                <option value="Flow Rounded">Flow Rounded</option>
                                <option value="Noto Sans Georgian">Noto Sans Georgian</option>
                                <option value="Carattere">Carattere</option>
                                <option value="Xanh Mono">Xanh Mono</option>
                                <option value="Lexend Peta">Lexend Peta</option>
                                <option value="Fleur De Leah">Fleur De Leah</option>
                                <option value="Grechen Fuemen">Grechen Fuemen</option>
                                <option value="Langar">Langar</option>
                                <option value="Comforter">Comforter</option>
                                <option value="Birthstone">Birthstone</option>
                                <option value="Gowun Dodum">Gowun Dodum</option>
                                <option value="Warnes">Warnes</option>
                                <option value="M PLUS Code Latin">M PLUS Code Latin</option>
                                <option value="IBM Plex Sans KR">IBM Plex Sans KR</option>
                                <option value="Noto Serif Bengali">Noto Serif Bengali</option>
                                <option value="Comforter Brush">Comforter Brush</option>
                                <option value="Libre Barcode EAN13 Text">Libre Barcode EAN13 Text</option>
                                <option value="M PLUS 1">M PLUS 1</option>
                                <option value="Noto Serif Tamil">Noto Serif Tamil</option>
                                <option value="Trispace">Trispace</option>
                                <option value="Noto Sans Tamil Supplement">Noto Sans Tamil Supplement</option>
                                <option value="Geostar">Geostar</option>
                                <option value="Cherish">Cherish</option>
                                <option value="Are You Serious">Are You Serious</option>
                                <option value="Qahiri">Qahiri</option>
                                <option value="Zen Tokyo Zoo">Zen Tokyo Zoo</option>
                                <option value="M PLUS 2">M PLUS 2</option>
                                <option value="Rubik Beastly">Rubik Beastly</option>
                                <option value="Red Hat Mono">Red Hat Mono</option>
                                <option value="Grey Qo">Grey Qo</option>
                                <option value="Outfit">Outfit</option>
                                <option value="Koh Santepheap">Koh Santepheap</option>
                                <option value="Gideon Roman">Gideon Roman</option>
                                <option value="M PLUS 1 Code">M PLUS 1 Code</option>
                                <option value="Big Shoulders Inline Display">Big Shoulders Inline Display</option>
                                <option value="Oi">Oi</option>
                                <option value="IBM Plex Sans Thai Looped">IBM Plex Sans Thai Looped</option>
                                <option value="Syne Tactile">Syne Tactile</option>
                                <option value="Explora">Explora</option>
                                <option value="Uchen">Uchen</option>
                                <option value="IBM Plex Sans Hebrew">IBM Plex Sans Hebrew</option>
                                <option value="Caramel">Caramel</option>
                                <option value="IBM Plex Sans Devanagari">IBM Plex Sans Devanagari</option>
                                <option value="Noto Sans Lao">Noto Sans Lao</option>
                                <option value="Noto Sans Deseret">Noto Sans Deseret</option>
                                <option value="Noto Serif Yezidi">Noto Serif Yezidi</option>
                                <option value="Noto Serif Armenian">Noto Serif Armenian</option>
                                <option value="Noto Serif Georgian">Noto Serif Georgian</option>
                                <option value="Noto Serif Thai">Noto Serif Thai</option>
                                <option value="Noto Sans Tai Viet">Noto Sans Tai Viet</option>
                                <option value="Noto Sans Khmer">Noto Sans Khmer</option>
                                <option value="Noto Serif Malayalam">Noto Serif Malayalam</option>
                                <option value="Noto Sans Coptic">Noto Sans Coptic</option>
                                <option value="Noto Sans Javanese">Noto Sans Javanese</option>
                                <option value="Noto Sans Brahmi">Noto Sans Brahmi</option>
                                <option value="Noto Sans Meetei Mayek">Noto Sans Meetei Mayek</option>
                                <option value="Noto Sans Cuneiform">Noto Sans Cuneiform</option>
                                <option value="Noto Sans Thai Looped">Noto Sans Thai Looped</option>
                                <option value="Noto Serif Ethiopic">Noto Serif Ethiopic</option>
                                <option value="Noto Sans Thaana">Noto Sans Thaana</option>
                                <option value="Noto Sans Cherokee">Noto Sans Cherokee</option>
                                <option value="Noto Sans Imperial Aramaic">Noto Sans Imperial Aramaic</option>
                                <option value="Noto Sans Ol Chiki">Noto Sans Ol Chiki</option>
                                <option value="Noto Serif Lao">Noto Serif Lao</option>
                                <option value="Noto Sans Lisu">Noto Sans Lisu</option>
                                <option value="Noto Serif Devanagari">Noto Serif Devanagari</option>
                                <option value="Noto Sans Osmanya">Noto Sans Osmanya</option>
                                <option value="Noto Serif Khmer">Noto Serif Khmer</option>
                                <option value="Noto Sans Tagalog">Noto Sans Tagalog</option>
                                <option value="Noto Serif Hebrew">Noto Serif Hebrew</option>
                                <option value="Noto Rashi Hebrew">Noto Rashi Hebrew</option>
                                <option value="Noto Serif Gujarati">Noto Serif Gujarati</option>
                                <option value="Noto Sans Cypriot">Noto Sans Cypriot</option>
                                <option value="Noto Sans Old Turkic">Noto Sans Old Turkic</option>
                                <option value="Noto Sans Lycian">Noto Sans Lycian</option>
                                <option value="Noto Sans Mongolian">Noto Sans Mongolian</option>
                                <option value="Noto Serif Kannada">Noto Serif Kannada</option>
                                <option value="Noto Sans Tifinagh">Noto Sans Tifinagh</option>
                                <option value="Noto Sans Cham">Noto Sans Cham</option>
                                <option value="Noto Sans Old Italic">Noto Sans Old Italic</option>
                                <option value="Noto Sans Limbu">Noto Sans Limbu</option>
                                <option value="Noto Serif Myanmar">Noto Serif Myanmar</option>
                                <option value="Noto Serif Telugu">Noto Serif Telugu</option>
                                <option value="Noto Serif Tibetan">Noto Serif Tibetan</option>
                                <option value="Noto Sans Canadian Aboriginal">Noto Sans Canadian Aboriginal</option>
                                <option value="Noto Serif Gurmukhi">Noto Serif Gurmukhi</option>
                                <option value="Noto Sans Carian">Noto Sans Carian</option>
                                <option value="Noto Music">Noto Music</option>
                                <option value="Noto Sans Anatolian Hieroglyphs">Noto Sans Anatolian Hieroglyphs</option>
                                <option value="Noto Sans Old Persian">Noto Sans Old Persian</option>
                                <option value="Noto Sans Sora Sompeng">Noto Sans Sora Sompeng</option>
                                <option value="Noto Sans Sundanese">Noto Sans Sundanese</option>
                                <option value="Noto Sans Balinese">Noto Sans Balinese</option>
                                <option value="Noto Sans Grantha">Noto Sans Grantha</option>
                                <option value="Noto Sans Old Permic">Noto Sans Old Permic</option>
                                <option value="Noto Sans Phoenician">Noto Sans Phoenician</option>
                                <option value="Noto Serif Nyiakeng Puachue Hmong">Noto Serif Nyiakeng Puachue Hmong</option>
                                <option value="Noto Sans Linear B">Noto Sans Linear B</option>
                                <option value="Noto Sans Egyptian Hieroglyphs">Noto Sans Egyptian Hieroglyphs</option>
                                <option value="Noto Sans Kaithi">Noto Sans Kaithi</option>
                                <option value="Noto Sans Adlam">Noto Sans Adlam</option>
                                <option value="Noto Sans Adlam Unjoined">Noto Sans Adlam Unjoined</option>
                                <option value="Noto Sans Bamum">Noto Sans Bamum</option>
                                <option value="Noto Sans Tai Tham">Noto Sans Tai Tham</option>
                                <option value="Noto Sans Medefaidrin">Noto Sans Medefaidrin</option>
                                <option value="Noto Sans Samaritan">Noto Sans Samaritan</option>
                                <option value="Noto Sans Hanifi Rohingya">Noto Sans Hanifi Rohingya</option>
                                <option value="Noto Sans Kayah Li">Noto Sans Kayah Li</option>
                                <option value="Noto Sans Hanunoo">Noto Sans Hanunoo</option>
                                <option value="Noto Sans Symbols 2">Noto Sans Symbols 2</option>
                                <option value="Noto Sans Kharoshthi">Noto Sans Kharoshthi</option>
                                <option value="Noto Sans Yi">Noto Sans Yi</option>
                                <option value="Noto Serif Balinese">Noto Serif Balinese</option>
                                <option value="Noto Sans Old Hungarian">Noto Sans Old Hungarian</option>
                                <option value="Noto Serif Dogra">Noto Serif Dogra</option>
                                <option value="Noto Sans Syriac">Noto Sans Syriac</option>
                                <option value="Noto Serif Grantha">Noto Serif Grantha</option>
                                <option value="Noto Serif Ahom">Noto Serif Ahom</option>
                                <option value="Noto Sans Inscriptional Pahlavi">Noto Sans Inscriptional Pahlavi</option>
                                <option value="Noto Sans Old South Arabian">Noto Sans Old South Arabian</option>
                                <option value="Noto Sans Inscriptional Parthian">Noto Sans Inscriptional Parthian</option>
                                <option value="Noto Sans Batak">Noto Sans Batak</option>
                                <option value="Noto Serif Tangut">Noto Serif Tangut</option>
                                <option value="Noto Sans Tirhuta">Noto Sans Tirhuta</option>
                                <option value="Noto Sans Runic">Noto Sans Runic</option>
                                <option value="Noto Sans Old North Arabian">Noto Sans Old North Arabian</option>
                                <option value="Noto Sans Math">Noto Sans Math</option>
                                <option value="Noto Sans New Tai Lue">Noto Sans New Tai Lue</option>
                                <option value="Noto Sans Caucasian Albanian">Noto Sans Caucasian Albanian</option>
                                <option value="Noto Sans Avestan">Noto Sans Avestan</option>
                                <option value="Noto Sans Mahajani">Noto Sans Mahajani</option>
                                <option value="Noto Sans Mayan Numerals">Noto Sans Mayan Numerals</option>
                                <option value="Noto Sans Zanabazar Square">Noto Sans Zanabazar Square</option>
                                <option value="Noto Sans Saurashtra">Noto Sans Saurashtra</option>
                                <option value="Noto Sans Syloti Nagri">Noto Sans Syloti Nagri</option>
                                <option value="Noto Sans Buginese">Noto Sans Buginese</option>
                                <option value="Noto Sans Elbasan">Noto Sans Elbasan</option>
                                <option value="Noto Sans Tagbanwa">Noto Sans Tagbanwa</option>
                                <option value="Noto Sans Marchen">Noto Sans Marchen</option>
                                <option value="Noto Sans Rejang">Noto Sans Rejang</option>
                                <option value="Noto Sans Palmyrene">Noto Sans Palmyrene</option>
                                <option value="Noto Sans Multani">Noto Sans Multani</option>
                                <option value="Noto Sans Nushu">Noto Sans Nushu</option>
                                <option value="Noto Sans Siddham">Noto Sans Siddham</option>
                                <option value="Noto Sans Takri">Noto Sans Takri</option>
                                <option value="Noto Sans Old Sogdian">Noto Sans Old Sogdian</option>
                                <option value="Noto Sans Tai Le">Noto Sans Tai Le</option>
                                <option value="Noto Sans Phags Pa">Noto Sans Phags Pa</option>
                                <option value="Noto Sans Sogdian">Noto Sans Sogdian</option>
                                <option value="Noto Sans Vai">Noto Sans Vai</option>
                                <option value="Noto Sans Bassa Vah">Noto Sans Bassa Vah</option>
                                <option value="Noto Sans Miao">Noto Sans Miao</option>
                                <option value="Noto Sans Newa">Noto Sans Newa</option>
                                <option value="Noto Sans Pau Cin Hau">Noto Sans Pau Cin Hau</option>
                                <option value="Noto Sans Psalter Pahlavi">Noto Sans Psalter Pahlavi</option>
                                <option value="Noto Sans Warang Citi">Noto Sans Warang Citi</option>
                                <option value="Noto Sans Modi">Noto Sans Modi</option>
                                <option value="Noto Sans Indic Siyaq Numbers">Noto Sans Indic Siyaq Numbers</option>
                                <option value="Noto Sans Glagolitic">Noto Sans Glagolitic</option>
                                <option value="Noto Sans Chakma">Noto Sans Chakma</option>
                                <option value="Noto Sans Pahawh Hmong">Noto Sans Pahawh Hmong</option>
                                <option value="Noto Sans Gunjala Gondi">Noto Sans Gunjala Gondi</option>
                                <option value="Noto Sans Duployan">Noto Sans Duployan</option>
                                <option value="Noto Sans Buhid">Noto Sans Buhid</option>
                                <option value="Noto Traditional Nushu">Noto Traditional Nushu</option>
                                <option value="Noto Sans Elymaic">Noto Sans Elymaic</option>
                                <option value="Noto Sans Mro">Noto Sans Mro</option>
                                <option value="Noto Sans Ogham">Noto Sans Ogham</option>
                                <option value="Noto Sans Ugaritic">Noto Sans Ugaritic</option>
                                <option value="Noto Sans Bhaiksuki">Noto Sans Bhaiksuki</option>
                                <option value="Noto Sans Osage">Noto Sans Osage</option>
                                <option value="Noto Sans Shavian">Noto Sans Shavian</option>
                                <option value="Noto Sans Masaram Gondi">Noto Sans Masaram Gondi</option>
                                <option value="Noto Sans Lydian">Noto Sans Lydian</option>
                                <option value="Noto Sans Sharada">Noto Sans Sharada</option>
                                <option value="Noto Sans Linear A">Noto Sans Linear A</option>
                                <option value="Noto Sans N Ko">Noto Sans N Ko</option>
                                <option value="Noto Sans Manichaean">Noto Sans Manichaean</option>
                                <option value="Noto Sans Nabataean">Noto Sans Nabataean</option>
                                <option value="Noto Sans Wancho">Noto Sans Wancho</option>
                                <option value="Noto Sans Soyombo">Noto Sans Soyombo</option>
                                <option value="Noto Sans Khudawadi">Noto Sans Khudawadi</option>
                                <option value="Noto Sans Lepcha">Noto Sans Lepcha</option>
                                <option value="Noto Sans Meroitic">Noto Sans Meroitic</option>
                                <option value="Noto Sans Hatran">Noto Sans Hatran</option>
                                <option value="Noto Sans Khojki">Noto Sans Khojki</option>
                                        
                            </select>
                        </div>
                    </div>

                </div>

                <!---footer--->
                <div class="row x-pd-r MB-5">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="footer_text">FOOTER TEXT</label>
                                <input id="footer_text" class="form-control no-shadow input-signin" type="text" name="footer_text">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="footer_text_link">FOOTER LINK(OPTIONAL)</label>
                                <input id="footer_text_link" class="form-control no-shadow input-signin" type="text" name="footer_text_link">
                            </div>
                        </div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_text_align">FOOTER ALIGN</label>
                                <select id="footer_text_align" class="form-control no-shadow input-signin" name="footer_text_align">
                                    <option value="left">Left</option>
                                    <option value="center">Center</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_text_color">FOOTER Color</label>
                                <input id="footer_text_color" class="form-control no-shadow input-signin" type="color"  name="footer_text_color">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_size">FOOTER TEXT SIZE</label>
                                <select id="footer_font_size" name="footer_font_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_family">FOOTER FONT FAMILY</label>
                                <select id="footer_font_family" class="form-control no-shadow input-signin" name="footer_font_family">
                                    <option value="">Please Select</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Open Sans" selected>Open Sans</option>
                                    <option value="Noto Sans JP">Noto Sans JP</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Roboto Condensed">Roboto Condensed</option>
                                    <option value="Source Sans Pro">Source Sans Pro</option>
                                    <option value="Poppins">Poppins</option>
                                    <option value="Oswald">Oswald</option>
                                    <option value="Roboto Mono">Roboto Mono</option>
                                    <option value="Raleway">Raleway</option>
                                    <option value="Noto Sans">Noto Sans</option>
                                    <option value="Nunito">Nunito</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Merriweather">Merriweather</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Roboto Slab">Roboto Slab</option>
                                    <option value="Playfair Display">Playfair Display</option>
                                    <option value="Open Sans Condensed">Open Sans Condensed</option>
                                    <option value="Rubik">Rubik</option>
                                    <option value="Mukta">Mukta</option>
                                    <option value="Noto Sans KR">Noto Sans KR</option>
                                    <option value="Lora">Lora</option>
                                    <option value="Inter">Inter</option>
                                    <option value="Work Sans">Work Sans</option>
                                    <option value="Nunito Sans">Nunito Sans</option>
                                    <option value="Hind Siliguri">Hind Siliguri</option>
                                    <option value="Nanum Gothic">Nanum Gothic</option>
                                    <option value="Titillium Web">Titillium Web</option>
                                    <option value="Fira Sans">Fira Sans</option>
                                    <option value="Quicksand">Quicksand</option>
                                    <option value="PT Serif">PT Serif</option>
                                    <option value="Noto Serif">Noto Serif</option>
                                    <option value="Noto Sans TC">Noto Sans TC</option>
                                    <option value="Karla">Karla</option>
                                    <option value="Barlow">Barlow</option>
                                    <option value="Heebo">Heebo</option>
                                    <option value="Libre Franklin">Libre Franklin</option>
                                    <option value="Oxygen">Oxygen</option>
                                    <option value="Libre Baskerville">Libre Baskerville</option>
                                    <option value="PT Sans Narrow">PT Sans Narrow</option>
                                    <option value="Inconsolata">Inconsolata</option>
                                    <option value="Arimo">Arimo</option>
                                    <option value="IBM Plex Sans">IBM Plex Sans</option>
                                    <option value="Dosis">Dosis</option>
                                    <option value="Josefin Sans">Josefin Sans</option>
                                    <option value="Dancing Script">Dancing Script</option>
                                    <option value="Anton">Anton</option>
                                    <option value="Cabin">Cabin</option>
                                    <option value="Cairo">Cairo</option>
                                    <option value="Lobster">Lobster</option>
                                    <option value="EB Garamond">EB Garamond</option>
                                    <option value="Bebas Neue">Bebas Neue</option>
                                    <option value="Bitter">Bitter</option>
                                    <option value="Varela Round">Varela Round</option>
                                    <option value="Crimson Text">Crimson Text</option>
                                    <option value="Mulish">Mulish</option>
                                    <option value="DM Sans">DM Sans</option>
                                    <option value="Source Code Pro">Source Code Pro</option>
                                    <option value="Source Serif Pro">Source Serif Pro</option>
                                    <option value="Abel">Abel</option>
                                    <option value="Prompt">Prompt</option>
                                    <option value="Hind">Hind</option>
                                    <option value="Comfortaa">Comfortaa</option>
                                    <option value="Kanit">Kanit</option>
                                    <option value="Fjalla One">Fjalla One</option>
                                    <option value="Noto Sans SC">Noto Sans SC</option>
                                    <option value="Barlow Condensed">Barlow Condensed</option>
                                    <option value="Exo 2">Exo 2</option>
                                    <option value="Signika Negative">Signika Negative</option>
                                    <option value="Pacifico">Pacifico</option>
                                    <option value="Hind Madurai">Hind Madurai</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Overpass">Overpass</option>
                                    <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
                                    <option value="Teko">Teko</option>
                                    <option value="Merriweather Sans">Merriweather Sans</option>
                                    <option value="Abril Fatface">Abril Fatface</option>
                                    <option value="Shadows Into Light">Shadows Into Light</option>
                                    <option value="Manrope">Manrope</option>
                                    <option value="Slabo 27px">Slabo 27px</option>
                                    <option value="Maven Pro">Maven Pro</option>
                                    <option value="Indie Flower">Indie Flower</option>
                                    <option value="Saira Condensed">Saira Condensed</option>
                                    <option value="Asap">Asap</option>
                                    <option value="Noto Serif JP">Noto Serif JP</option>
                                    <option value="IBM Plex Serif">IBM Plex Serif</option>
                                    <option value="Questrial">Questrial</option>
                                    <option value="Tajawal">Tajawal</option>
                                    <option value="Assistant">Assistant</option>
                                    <option value="Fira Sans Condensed">Fira Sans Condensed</option>
                                    <option value="Cormorant Garamond">Cormorant Garamond</option>
                                    <option value="Catamaran">Catamaran</option>
                                    <option value="Exo">Exo</option>
                                    <option value="Rajdhani">Rajdhani</option>
                                    <option value="Caveat">Caveat</option>
                                    <option value="Architects Daughter">Architects Daughter</option>
                                    <option value="Play">Play</option>
                                    <option value="Permanent Marker">Permanent Marker</option>
                                    <option value="Alfa Slab One">Alfa Slab One</option>
                                    <option value="M PLUS Rounded 1c">M PLUS Rounded 1c</option>
                                    <option value="Domine">Domine</option>
                                    <option value="Archivo Narrow">Archivo Narrow</option>
                                    <option value="Nanum Myeongjo">Nanum Myeongjo</option>
                                    <option value="Acme">Acme</option>
                                    <option value="Secular One">Secular One</option>
                                    <option value="Zilla Slab">Zilla Slab</option>
                                    <option value="Amatic SC">Amatic SC</option>
                                    <option value="Signika">Signika</option>
                                    <option value="Balsamiq Sans">Balsamiq Sans</option>
                                    <option value="Patrick Hand">Patrick Hand</option>
                                    <option value="Bree Serif">Bree Serif</option>
                                    <option value="Spartan">Spartan</option>
                                    <option value="Patua One">Patua One</option>
                                    <option value="Righteous">Righteous</option>
                                    <option value="Noto Sans HK">Noto Sans HK</option>
                                    <option value="Jost">Jost</option>
                                    <option value="ABeeZee">ABeeZee</option>
                                    <option value="Crimson Pro">Crimson Pro</option>
                                    <option value="Alegreya Sans">Alegreya Sans</option>
                                    <option value="Public Sans">Public Sans</option>
                                    <option value="Vollkorn">Vollkorn</option>
                                    <option value="Crete Round">Crete Round</option>
                                    <option value="M PLUS 1p">M PLUS 1p</option>
                                    <option value="Satisfy">Satisfy</option>
                                    <option value="Martel">Martel</option>
                                    <option value="Barlow Semi Condensed">Barlow Semi Condensed</option>
                                    <option value="Encode Sans">Encode Sans</option>
                                    <option value="Antic Slab">Antic Slab</option>
                                    <option value="Montserrat Alternates">Montserrat Alternates</option>
                                    <option value="Archivo">Archivo</option>
                                    <option value="Cinzel">Cinzel</option>
                                    <option value="Cookie">Cookie</option>
                                    <option value="Chakra Petch">Chakra Petch</option>
                                    <option value="Padauk">Padauk</option>
                                    <option value="Space Mono">Space Mono</option>
                                    <option value="Fredoka One">Fredoka One</option>
                                    <option value="Tinos">Tinos</option>
                                    <option value="Sarabun">Sarabun</option>
                                    <option value="Recursive">Recursive</option>
                                    <option value="Amiri">Amiri</option>
                                    <option value="Courgette">Courgette</option>
                                    <option value="Ubuntu Condensed">Ubuntu Condensed</option>
                                    <option value="DM Serif Display">DM Serif Display</option>
                                    <option value="Red Hat Display">Red Hat Display</option>
                                    <option value="Lobster Two">Lobster Two</option>
                                    <option value="Great Vibes">Great Vibes</option>
                                    <option value="Prata">Prata</option>
                                    <option value="Alegreya">Alegreya</option>
                                    <option value="Almarai">Almarai</option>
                                    <option value="Didact Gothic">Didact Gothic</option>
                                    <option value="Archivo Black">Archivo Black</option>
                                    <option value="IBM Plex Mono">IBM Plex Mono</option>
                                    <option value="Space Grotesk">Space Grotesk</option>
                                    <option value="Baloo 2">Baloo 2</option>
                                    <option value="PT Sans Caption">PT Sans Caption</option>
                                    <option value="Cardo">Cardo</option>
                                    <option value="Yantramanav">Yantramanav</option>
                                    <option value="Asap Condensed">Asap Condensed</option>
                                    <option value="Frank Ruhl Libre">Frank Ruhl Libre</option>
                                    <option value="Russo One">Russo One</option>
                                    <option value="Spectral">Spectral</option>
                                    <option value="Kaushan Script">Kaushan Script</option>
                                    <option value="Kalam">Kalam</option>
                                    <option value="Noticia Text">Noticia Text</option>
                                    <option value="Staatliches">Staatliches</option>
                                    <option value="Francois One">Francois One</option>
                                    <option value="Gothic A1">Gothic A1</option>
                                    <option value="Old Standard TT">Old Standard TT</option>
                                    <option value="Concert One">Concert One</option>
                                    <option value="Orbitron">Orbitron</option>
                                    <option value="Sacramento">Sacramento</option>
                                    <option value="Passion One">Passion One</option>
                                    <option value="Changa">Changa</option>
                                    <option value="Quattrocento Sans">Quattrocento Sans</option>
                                    <option value="Rokkitt">Rokkitt</option>
                                    <option value="Pathway Gothic One">Pathway Gothic One</option>
                                    <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                                    <option value="Cormorant">Cormorant</option>
                                    <option value="Cuprum">Cuprum</option>
                                    <option value="Cantarell">Cantarell</option>
                                    <option value="Special Elite">Special Elite</option>
                                    <option value="Unna">Unna</option>
                                    <option value="Parisienne">Parisienne</option>
                                    <option value="Luckiest Guy">Luckiest Guy</option>
                                    <option value="Noto Serif TC">Noto Serif TC</option>
                                    <option value="Sawarabi Mincho">Sawarabi Mincho</option>
                                    <option value="Noto Kufi Arabic">Noto Kufi Arabic</option>
                                    <option value="Merienda">Merienda</option>
                                    <option value="Josefin Slab">Josefin Slab</option>
                                    <option value="Faustina">Faustina</option>
                                    <option value="Chivo">Chivo</option>
                                    <option value="Ropa Sans">Ropa Sans</option>
                                    <option value="Carter One">Carter One</option>
                                    <option value="Volkhov">Volkhov</option>
                                    <option value="Press Start 2P">Press Start 2P</option>
                                    <option value="Sigmar One">Sigmar One</option>
                                    <option value="Philosopher">Philosopher</option>
                                    <option value="Quattrocento">Quattrocento</option>
                                    <option value="Khand">Khand</option>
                                    <option value="Saira">Saira</option>
                                    <option value="Alata">Alata</option>
                                    <option value="Monda">Monda</option>
                                    <option value="Poiret One">Poiret One</option>
                                    <option value="Eczar">Eczar</option>
                                    <option value="Taviraj">Taviraj</option>
                                    <option value="Neuton">Neuton</option>
                                    <option value="Advent Pro">Advent Pro</option>
                                    <option value="News Cycle">News Cycle</option>
                                    <option value="Lusitana">Lusitana</option>
                                    <option value="Ultra">Ultra</option>
                                    <option value="PT Mono">PT Mono</option>
                                    <option value="Playfair Display SC">Playfair Display SC</option>
                                    <option value="Marcellus">Marcellus</option>
                                    <option value="Playball">Playball</option>
                                    <option value="Vidaloka">Vidaloka</option>
                                    <option value="Arima Madurai">Arima Madurai</option>
                                    <option value="El Messiri">El Messiri</option>
                                    <option value="Tangerine">Tangerine</option>
                                    <option value="Fira Sans Extra Condensed">Fira Sans Extra Condensed</option>
                                    <option value="Sawarabi Gothic">Sawarabi Gothic</option>
                                    <option value="Yellowtail">Yellowtail</option>
                                    <option value="Karma">Karma</option>
                                    <option value="Hammersmith One">Hammersmith One</option>
                                    <option value="Bangers">Bangers</option>
                                    <option value="Sanchez">Sanchez</option>
                                    <option value="Viga">Viga</option>
                                    <option value="Nanum Gothic Coding">Nanum Gothic Coding</option>
                                    <option value="Pragati Narrow">Pragati Narrow</option>
                                    <option value="Actor">Actor</option>
                                    <option value="Handlee">Handlee</option>
                                    <option value="IM Fell English SC">IM Fell English SC</option>
                                    <option value="Gelasio">Gelasio</option>
                                    <option value="Alice">Alice</option>
                                    <option value="Ruda">Ruda</option>
                                    <option value="Neucha">Neucha</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Marck Script">Marck Script</option>
                                    <option value="Istok Web">Istok Web</option>
                                    <option value="Jura">Jura</option>
                                    <option value="Yeseva One">Yeseva One</option>
                                    <option value="Ubuntu Mono">Ubuntu Mono</option>
                                    <option value="Adamina">Adamina</option>
                                    <option value="Arapey">Arapey</option>
                                    <option value="Economica">Economica</option>
                                    <option value="Gudea">Gudea</option>
                                    <option value="Aleo">Aleo</option>
                                    <option value="DM Serif Text">DM Serif Text</option>
                                    <option value="Allura">Allura</option>
                                    <option value="Lexend Deca">Lexend Deca</option>
                                    <option value="Mitr">Mitr</option>
                                    <option value="Itim">Itim</option>
                                    <option value="Paytone One">Paytone One</option>
                                    <option value="Gochi Hand">Gochi Hand</option>
                                    <option value="Palanquin">Palanquin</option>
                                    <option value="Sen">Sen</option>
                                    <option value="BenchNine">BenchNine</option>
                                    <option value="Quantico">Quantico</option>
                                    <option value="Abhaya Libre">Abhaya Libre</option>
                                    <option value="Alef">Alef</option>
                                    <option value="Bai Jamjuree">Bai Jamjuree</option>
                                    <option value="Noto Serif SC">Noto Serif SC</option>
                                    <option value="Saira Semi Condensed">Saira Semi Condensed</option>
                                    <option value="Amaranth">Amaranth</option>
                                    <option value="Yrsa">Yrsa</option>
                                    <option value="Unica One">Unica One</option>
                                    <option value="Noto Serif KR">Noto Serif KR</option>
                                    <option value="Hind Vadodara">Hind Vadodara</option>
                                    <option value="Nothing You Could Do">Nothing You Could Do</option>
                                    <option value="Allerta">Allerta</option>
                                    <option value="Bungee">Bungee</option>
                                    <option value="Mr Dafoe">Mr Dafoe</option>
                                    <option value="Bad Script">Bad Script</option>
                                    <option value="Londrina Solid">Londrina Solid</option>
                                    <option value="Cabin Condensed">Cabin Condensed</option>
                                    <option value="Syncopate">Syncopate</option>
                                    <option value="Khula">Khula</option>
                                    <option value="Electrolize">Electrolize</option>
                                    <option value="Homemade Apple">Homemade Apple</option>
                                    <option value="Armata">Armata</option>
                                    <option value="Suez One">Suez One</option>
                                    <option value="Rock Salt">Rock Salt</option>
                                    <option value="Cantata One">Cantata One</option>
                                    <option value="Aclonica">Aclonica</option>
                                    <option value="Varela">Varela</option>
                                    <option value="Julius Sans One">Julius Sans One</option>
                                    <option value="Rufina">Rufina</option>
                                    <option value="Tenor Sans">Tenor Sans</option>
                                    <option value="Sora">Sora</option>
                                    <option value="Pontano Sans">Pontano Sans</option>
                                    <option value="Gentium Basic">Gentium Basic</option>
                                    <option value="Arsenal">Arsenal</option>
                                    <option value="Mukta Malar">Mukta Malar</option>
                                    <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
                                    <option value="Share Tech Mono">Share Tech Mono</option>
                                    <option value="Kosugi Maru">Kosugi Maru</option>
                                    <option value="Alex Brush">Alex Brush</option>
                                    <option value="Courier Prime">Courier Prime</option>
                                    <option value="Lilita One">Lilita One</option>
                                    <option value="Sarala">Sarala</option>
                                    <option value="Monoton">Monoton</option>
                                    <option value="Fugaz One">Fugaz One</option>
                                    <option value="Gruppo">Gruppo</option>
                                    <option value="Gentium Book Basic">Gentium Book Basic</option>
                                    <option value="Mate SC">Mate SC</option>
                                    <option value="Ramabhadra">Ramabhadra</option>
                                    <option value="Changa One">Changa One</option>
                                    <option value="Krub">Krub</option>
                                    <option value="Nanum Pen Script">Nanum Pen Script</option>
                                    <option value="Jaldi">Jaldi</option>
                                    <option value="Forum">Forum</option>
                                    <option value="Pangolin">Pangolin</option>
                                    <option value="Damion">Damion</option>
                                    <option value="Audiowide">Audiowide</option>
                                    <option value="Black Ops One">Black Ops One</option>
                                    <option value="Commissioner">Commissioner</option>
                                    <option value="Overlock">Overlock</option>
                                    <option value="Bubblegum Sans">Bubblegum Sans</option>
                                    <option value="Mandali">Mandali</option>
                                    <option value="Days One">Days One</option>
                                    <option value="Coda">Coda</option>
                                    <option value="Bowlby One SC">Bowlby One SC</option>
                                    <option value="Sansita">Sansita</option>
                                    <option value="Sintony">Sintony</option>
                                    <option value="Shadows Into Light Two">Shadows Into Light Two</option>
                                    <option value="Red Hat Text">Red Hat Text</option>
                                    <option value="Lalezar">Lalezar</option>
                                    <option value="Oleo Script">Oleo Script</option>
                                    <option value="Martel Sans">Martel Sans</option>
                                    <option value="Six Caps">Six Caps</option>
                                    <option value="Markazi Text">Markazi Text</option>
                                    <option value="Italianno">Italianno</option>
                                    <option value="Voltaire">Voltaire</option>
                                    <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
                                    <option value="Candal">Candal</option>
                                    <option value="Cousine">Cousine</option>
                                    <option value="Noto Naskh Arabic">Noto Naskh Arabic</option>
                                    <option value="Scheherazade">Scheherazade</option>
                                    <option value="Literata">Literata</option>
                                    <option value="Mada">Mada</option>
                                    <option value="Basic">Basic</option>
                                    <option value="Berkshire Swash">Berkshire Swash</option>
                                    <option value="Squada One">Squada One</option>
                                    <option value="Chewy">Chewy</option>
                                    <option value="Niramit">Niramit</option>
                                    <option value="Average">Average</option>
                                    <option value="Hind Guntur">Hind Guntur</option>
                                    <option value="Pinyon Script">Pinyon Script</option>
                                    <option value="Sriracha">Sriracha</option>
                                    <option value="Encode Sans Condensed">Encode Sans Condensed</option>
                                    <option value="Shrikhand">Shrikhand</option>
                                    <option value="IBM Plex Sans Condensed">IBM Plex Sans Condensed</option>
                                    <option value="Alatsi">Alatsi</option>
                                    <option value="Anonymous Pro">Anonymous Pro</option>
                                    <option value="Arizonia">Arizonia</option>
                                    <option value="Glegoo">Glegoo</option>
                                    <option value="Belgrano">Belgrano</option>
                                    <option value="Rubik Mono One">Rubik Mono One</option>
                                    <option value="Alegreya Sans SC">Alegreya Sans SC</option>
                                    <option value="Black Han Sans">Black Han Sans</option>
                                    <option value="Palanquin Dark">Palanquin Dark</option>
                                    <option value="Lemonada">Lemonada</option>
                                    <option value="Fredericka the Great">Fredericka the Great</option>
                                    <option value="Spinnaker">Spinnaker</option>
                                    <option value="Judson">Judson</option>
                                    <option value="Caveat Brush">Caveat Brush</option>
                                    <option value="Antic">Antic</option>
                                    <option value="Racing Sans One">Racing Sans One</option>
                                    <option value="Reenie Beanie">Reenie Beanie</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Lateef">Lateef</option>
                                    <option value="Holtwood One SC">Holtwood One SC</option>
                                    <option value="Kreon">Kreon</option>
                                    <option value="Kameron">Kameron</option>
                                    <option value="Darker Grotesque">Darker Grotesque</option>
                                    <option value="Rancho">Rancho</option>
                                    <option value="Castoro">Castoro</option>
                                    <option value="Overpass Mono">Overpass Mono</option>
                                    <option value="Michroma">Michroma</option>
                                    <option value="Syne">Syne</option>
                                    <option value="PT Serif Caption">PT Serif Caption</option>
                                    <option value="Bevan">Bevan</option>
                                    <option value="Boogaloo">Boogaloo</option>
                                    <option value="Enriqueta">Enriqueta</option>
                                    <option value="Reem Kufi">Reem Kufi</option>
                                    <option value="Laila">Laila</option>
                                    <option value="Titan One">Titan One</option>
                                    <option value="Blinker">Blinker</option>
                                    <option value="Aldrich">Aldrich</option>
                                    <option value="Fira Mono">Fira Mono</option>
                                    <option value="Niconne">Niconne</option>
                                    <option value="Gilda Display">Gilda Display</option>
                                    <option value="Alike">Alike</option>
                                    <option value="Cinzel Decorative">Cinzel Decorative</option>
                                    <option value="Comic Neue">Comic Neue</option>
                                    <option value="Leckerli One">Leckerli One</option>
                                    <option value="Norican">Norican</option>
                                    <option value="Lexend">Lexend</option>
                                    <option value="Biryani">Biryani</option>
                                    <option value="Henny Penny">Henny Penny</option>
                                    <option value="Covered By Your Grace">Covered By Your Grace</option>
                                    <option value="Amita">Amita</option>
                                    <option value="GFS Didot">GFS Didot</option>
                                    <option value="Capriola">Capriola</option>
                                    <option value="VT323">VT323</option>
                                    <option value="Arbutus Slab">Arbutus Slab</option>
                                    <option value="Pridi">Pridi</option>
                                    <option value="Rye">Rye</option>
                                    <option value="Cabin Sketch">Cabin Sketch</option>
                                    <option value="Saira Extra Condensed">Saira Extra Condensed</option>
                                    <option value="Charm">Charm</option>
                                    <option value="Lustria">Lustria</option>
                                    <option value="Rambla">Rambla</option>
                                    <option value="Knewave">Knewave</option>
                                    <option value="Allerta Stencil">Allerta Stencil</option>
                                    <option value="Duru Sans">Duru Sans</option>
                                    <option value="Noto Sans Devanagari">Noto Sans Devanagari</option>
                                    <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
                                    <option value="Suranna">Suranna</option>
                                    <option value="Podkova">Podkova</option>
                                    <option value="Baskervville">Baskervville</option>
                                    <option value="Share">Share</option>
                                    <option value="Be Vietnam">Be Vietnam</option>
                                    <option value="Rozha One">Rozha One</option>
                                    <option value="Mate">Mate</option>
                                    <option value="Hepta Slab">Hepta Slab</option>
                                    <option value="Contrail One">Contrail One</option>
                                    <option value="Mukta Vaani">Mukta Vaani</option>
                                    <option value="Bowlby One">Bowlby One</option>
                                    <option value="Caudex">Caudex</option>
                                    <option value="Alegreya SC">Alegreya SC</option>
                                    <option value="Corben">Corben</option>
                                    <option value="Coming Soon">Coming Soon</option>
                                    <option value="Yesteryear">Yesteryear</option>
                                    <option value="K2D">K2D</option>
                                    <option value="IM Fell DW Pica">IM Fell DW Pica</option>
                                    <option value="Average Sans">Average Sans</option>
                                    <option value="Magra">Magra</option>
                                    <option value="Kumbh Sans">Kumbh Sans</option>
                                    <option value="Trocchi">Trocchi</option>
                                    <option value="JetBrains Mono">JetBrains Mono</option>
                                    <option value="Do Hyeon">Do Hyeon</option>
                                    <option value="Nixie One">Nixie One</option>
                                    <option value="Allan">Allan</option>
                                    <option value="Belleza">Belleza</option>
                                    <option value="Copse">Copse</option>
                                    <option value="Seaweed Script">Seaweed Script</option>
                                    <option value="Trirong">Trirong</option>
                                    <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
                                    <option value="Marcellus SC">Marcellus SC</option>
                                    <option value="Scada">Scada</option>
                                    <option value="Athiti">Athiti</option>
                                    <option value="Libre Caslon Text">Libre Caslon Text</option>
                                    <option value="Nanum Brush Script">Nanum Brush Script</option>
                                    <option value="Delius">Delius</option>
                                    <option value="Oranienbaum">Oranienbaum</option>
                                    <option value="Just Another Hand">Just Another Hand</option>
                                    <option value="Epilogue">Epilogue</option>
                                    <option value="Kristi">Kristi</option>
                                    <option value="Krona One">Krona One</option>
                                    <option value="Rochester">Rochester</option>
                                    <option value="Jua">Jua</option>
                                    <option value="Telex">Telex</option>
                                    <option value="Poller One">Poller One</option>
                                    <option value="Bodoni Moda">Bodoni Moda</option>
                                    <option value="Skranji">Skranji</option>
                                    <option value="Carrois Gothic">Carrois Gothic</option>
                                    <option value="Miriam Libre">Miriam Libre</option>
                                    <option value="Amiko">Amiko</option>
                                    <option value="Averia Serif Libre">Averia Serif Libre</option>
                                    <option value="Amethysta">Amethysta</option>
                                    <option value="Merienda One">Merienda One</option>
                                    <option value="Pattaya">Pattaya</option>
                                    <option value="Big Shoulders Display">Big Shoulders Display</option>
                                    <option value="Cambay">Cambay</option>
                                    <option value="Nobile">Nobile</option>
                                    <option value="Molengo">Molengo</option>
                                    <option value="Fauna One">Fauna One</option>
                                    <option value="Cedarville Cursive">Cedarville Cursive</option>
                                    <option value="Chonburi">Chonburi</option>
                                    <option value="Baloo Da 2">Baloo Da 2</option>
                                    <option value="Bungee Inline">Bungee Inline</option>
                                    <option value="Cormorant Infant">Cormorant Infant</option>
                                    <option value="Ovo">Ovo</option>
                                    <option value="Calligraffitti">Calligraffitti</option>
                                    <option value="Alike Angular">Alike Angular</option>
                                    <option value="Oxygen Mono">Oxygen Mono</option>
                                    <option value="Wallpoet">Wallpoet</option>
                                    <option value="Grand Hotel">Grand Hotel</option>
                                    <option value="Esteban">Esteban</option>
                                    <option value="Schoolbell">Schoolbell</option>
                                    <option value="Petit Formal Script">Petit Formal Script</option>
                                    <option value="Grandstander">Grandstander</option>
                                    <option value="Kosugi">Kosugi</option>
                                    <option value="Creepster">Creepster</option>
                                    <option value="Bellefair">Bellefair</option>
                                    <option value="Fira Code">Fira Code</option>
                                    <option value="Averia Libre">Averia Libre</option>
                                    <option value="Jockey One">Jockey One</option>
                                    <option value="Manjari">Manjari</option>
                                    <option value="Marmelad">Marmelad</option>
                                    <option value="Rosario">Rosario</option>
                                    <option value="Farro">Farro</option>
                                    <option value="Montez">Montez</option>
                                    <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
                                    <option value="Noto Sans Tamil">Noto Sans Tamil</option>
                                    <option value="Coustard">Coustard</option>
                                    <option value="Aladin">Aladin</option>
                                    <option value="Halant">Halant</option>
                                    <option value="Metrophobic">Metrophobic</option>
                                    <option value="Slabo 13px">Slabo 13px</option>
                                    <option value="David Libre">David Libre</option>
                                    <option value="Marvel">Marvel</option>
                                    <option value="Georama">Georama</option>
                                    <option value="Antonio">Antonio</option>
                                    <option value="Sunflower">Sunflower</option>
                                    <option value="Oxanium">Oxanium</option>
                                    <option value="Harmattan">Harmattan</option>
                                    <option value="IM Fell Double Pica">IM Fell Double Pica</option>
                                    <option value="Rammetto One">Rammetto One</option>
                                    <option value="Gabriela">Gabriela</option>
                                    <option value="Noto Sans Mandaic">Noto Sans Mandaic</option>
                                    <option value="Mr De Haviland">Mr De Haviland</option>
                                    <option value="Cutive Mono">Cutive Mono</option>
                                    <option value="Carme">Carme</option>
                                    <option value="Convergence">Convergence</option>
                                    <option value="Hanuman">Hanuman</option>
                                    <option value="Spectral SC">Spectral SC</option>
                                    <option value="Stardos Stencil">Stardos Stencil</option>
                                    <option value="Emilys Candy">Emilys Candy</option>
                                    <option value="Bentham">Bentham</option>
                                    <option value="Urbanist">Urbanist</option>
                                    <option value="Fanwood Text">Fanwood Text</option>
                                    <option value="NTR">NTR</option>
                                    <option value="Sofia">Sofia</option>
                                    <option value="Sniglet">Sniglet</option>
                                    <option value="ZCOOL XiaoWei">ZCOOL XiaoWei</option>
                                    <option value="Radley">Radley</option>
                                    <option value="IM Fell English">IM Fell English</option>
                                    <option value="Libre Barcode 39">Libre Barcode 39</option>
                                    <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
                                    <option value="Thasadith">Thasadith</option>
                                    <option value="Happy Monkey">Happy Monkey</option>
                                    <option value="La Belle Aurore">La Belle Aurore</option>
                                    <option value="Kelly Slab">Kelly Slab</option>
                                    <option value="Irish Grover">Irish Grover</option>
                                    <option value="Maitree">Maitree</option>
                                    <option value="Shippori Mincho">Shippori Mincho</option>
                                    <option value="Proza Libre">Proza Libre</option>
                                    <option value="Encode Sans Semi Condensed">Encode Sans Semi Condensed</option>
                                    <option value="Hi Melody">Hi Melody</option>
                                    <option value="Gugi">Gugi</option>
                                    <option value="Andika">Andika</option>
                                    <option value="Buenard">Buenard</option>
                                    <option value="Mallanna">Mallanna</option>
                                    <option value="Cutive">Cutive</option>
                                    <option value="Noto Sans Malayalam">Noto Sans Malayalam</option>
                                    <option value="Turret Road">Turret Road</option>
                                    <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                    <option value="Grenze Gotisch">Grenze Gotisch</option>
                                    <option value="Tillana">Tillana</option>
                                    <option value="Qwigley">Qwigley</option>
                                    <option value="Oregano">Oregano</option>
                                    <option value="Chelsea Market">Chelsea Market</option>
                                    <option value="Poly">Poly</option>
                                    <option value="Original Surfer">Original Surfer</option>
                                    <option value="Major Mono Display">Major Mono Display</option>
                                    <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
                                    <option value="BioRhyme">BioRhyme</option>
                                    <option value="Cormorant SC">Cormorant SC</option>
                                    <option value="Brawler">Brawler</option>
                                    <option value="Livvic">Livvic</option>
                                    <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
                                    <option value="Della Respira">Della Respira</option>
                                    <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
                                    <option value="Mansalva">Mansalva</option>
                                    <option value="Doppio One">Doppio One</option>
                                    <option value="Limelight">Limelight</option>
                                    <option value="Noto Serif Display">Noto Serif Display</option>
                                    <option value="Baloo Tamma 2">Baloo Tamma 2</option>
                                    <option value="Rasa">Rasa</option>
                                    <option value="Noto Sans Thai">Noto Sans Thai</option>
                                    <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
                                    <option value="Mirza">Mirza</option>
                                    <option value="Kadwa">Kadwa</option>
                                    <option value="Dawning of a New Day">Dawning of a New Day</option>
                                    <option value="Noto Sans Bengali">Noto Sans Bengali</option>
                                    <option value="Galada">Galada</option>
                                    <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
                                    <option value="Quando">Quando</option>
                                    <option value="Ceviche One">Ceviche One</option>
                                    <option value="Lemon">Lemon</option>
                                    <option value="Goblin One">Goblin One</option>
                                    <option value="Expletus Sans">Expletus Sans</option>
                                    <option value="Rouge Script">Rouge Script</option>
                                    <option value="Kurale">Kurale</option>
                                    <option value="Noto Sans Hebrew">Noto Sans Hebrew</option>
                                    <option value="Meddon">Meddon</option>
                                    <option value="B612 Mono">B612 Mono</option>
                                    <option value="Ranchers">Ranchers</option>
                                    <option value="Inknut Antiqua">Inknut Antiqua</option>
                                    <option value="Gravitas One">Gravitas One</option>
                                    <option value="ZCOOL QingKe HuangYou">ZCOOL QingKe HuangYou</option>
                                    <option value="Freckle Face">Freckle Face</option>
                                    <option value="Sarpanch">Sarpanch</option>
                                    <option value="Wendy One">Wendy One</option>
                                    <option value="Homenaje">Homenaje</option>
                                    <option value="Tenali Ramakrishna">Tenali Ramakrishna</option>
                                    <option value="Rakkas">Rakkas</option>
                                    <option value="Baloo Thambi 2">Baloo Thambi 2</option>
                                    <option value="Amarante">Amarante</option>
                                    <option value="Federo">Federo</option>
                                    <option value="Bungee Shade">Bungee Shade</option>
                                    <option value="Metamorphous">Metamorphous</option>
                                    <option value="Patrick Hand SC">Patrick Hand SC</option>
                                    <option value="Anaheim">Anaheim</option>
                                    <option value="Vast Shadow">Vast Shadow</option>
                                    <option value="Give You Glory">Give You Glory</option>
                                    <option value="Fondamento">Fondamento</option>
                                    <option value="Aref Ruqaa">Aref Ruqaa</option>
                                    <option value="Zeyada">Zeyada</option>
                                    <option value="Antic Didone">Antic Didone</option>
                                    <option value="Finger Paint">Finger Paint</option>
                                    <option value="Yatra One">Yatra One</option>
                                    <option value="Coda Caption">Coda Caption</option>
                                    <option value="Share Tech">Share Tech</option>
                                    <option value="Crafty Girls">Crafty Girls</option>
                                    <option value="KoHo">KoHo</option>
                                    <option value="Big Shoulders Text">Big Shoulders Text</option>
                                    <option value="Mountains of Christmas">Mountains of Christmas</option>
                                    <option value="Vollkorn SC">Vollkorn SC</option>
                                    <option value="Notable">Notable</option>
                                    <option value="Atma">Atma</option>
                                    <option value="Cormorant Upright">Cormorant Upright</option>
                                    <option value="Sedgwick Ave">Sedgwick Ave</option>
                                    <option value="Trykker">Trykker</option>
                                    <option value="Euphoria Script">Euphoria Script</option>
                                    <option value="Praise">Praise</option>
                                    <option value="Baumans">Baumans</option>
                                    <option value="Noto Sans Kannada">Noto Sans Kannada</option>
                                    <option value="Calistoga">Calistoga</option>
                                    <option value="Road Rage">Road Rage</option>
                                    <option value="Pompiere">Pompiere</option>
                                    <option value="Clicker Script">Clicker Script</option>
                                    <option value="Katibeh">Katibeh</option>
                                    <option value="Sail">Sail</option>
                                    <option value="Lexend Zetta">Lexend Zetta</option>
                                    <option value="Frijole">Frijole</option>
                                    <option value="Italiana">Italiana</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Nova Mono">Nova Mono</option>
                                    <option value="Chau Philomene One">Chau Philomene One</option>
                                    <option value="Mukta Mahee">Mukta Mahee</option>
                                    <option value="Megrim">Megrim</option>
                                    <option value="Codystar">Codystar</option>
                                    <option value="Newsreader">Newsreader</option>
                                    <option value="Nova Round">Nova Round</option>
                                    <option value="Raleway Dots">Raleway Dots</option>
                                    <option value="Walter Turncoat">Walter Turncoat</option>
                                    <option value="Noto Sans Telugu">Noto Sans Telugu</option>
                                    <option value="McLaren">McLaren</option>
                                    <option value="Delius Swash Caps">Delius Swash Caps</option>
                                    <option value="Lekton">Lekton</option>
                                    <option value="Noto Sans Oriya">Noto Sans Oriya</option>
                                    <option value="Unkempt">Unkempt</option>
                                    <option value="Dokdo">Dokdo</option>
                                    <option value="RocknRoll One">RocknRoll One</option>
                                    <option value="Strait">Strait</option>
                                    <option value="Balthazar">Balthazar</option>
                                    <option value="B612">B612</option>
                                    <option value="DM Mono">DM Mono</option>
                                    <option value="STIX Two Text">STIX Two Text</option>
                                    <option value="Reggae One">Reggae One</option>
                                    <option value="Aguafina Script">Aguafina Script</option>
                                    <option value="Faster One">Faster One</option>
                                    <option value="Noto Sans Gujarati">Noto Sans Gujarati</option>
                                    <option value="Coiny">Coiny</option>
                                    <option value="Inder">Inder</option>
                                    <option value="Noto Sans Gurmukhi">Noto Sans Gurmukhi</option>
                                    <option value="Baloo Chettan 2">Baloo Chettan 2</option>
                                    <option value="Bellota Text">Bellota Text</option>
                                    <option value="Ma Shan Zheng">Ma Shan Zheng</option>
                                    <option value="Arya">Arya</option>
                                    <option value="Fraunces">Fraunces</option>
                                    <option value="Ruslan Display">Ruslan Display</option>
                                    <option value="Mouse Memoirs">Mouse Memoirs</option>
                                    <option value="Short Stack">Short Stack</option>
                                    <option value="Orienta">Orienta</option>
                                    <option value="Montaga">Montaga</option>
                                    <option value="Timmana">Timmana</option>
                                    <option value="Vesper Libre">Vesper Libre</option>
                                    <option value="Gurajada">Gurajada</option>
                                    <option value="Ledger">Ledger</option>
                                    <option value="Prosto One">Prosto One</option>
                                    <option value="Over the Rainbow">Over the Rainbow</option>
                                    <option value="Odibee Sans">Odibee Sans</option>
                                    <option value="Mako">Mako</option>
                                    <option value="Just Me Again Down Here">Just Me Again Down Here</option>
                                    <option value="Encode Sans Expanded">Encode Sans Expanded</option>
                                    <option value="Meera Inimai">Meera Inimai</option>
                                    <option value="Asul">Asul</option>
                                    <option value="Montserrat Subrayada">Montserrat Subrayada</option>
                                    <option value="Baloo Tammudu 2">Baloo Tammudu 2</option>
                                    <option value="Cambo">Cambo</option>
                                    <option value="Flamenco">Flamenco</option>
                                    <option value="Salsa">Salsa</option>
                                    <option value="Loved by the King">Loved by the King</option>
                                    <option value="Caladea">Caladea</option>
                                    <option value="Geo">Geo</option>
                                    <option value="Pirata One">Pirata One</option>
                                    <option value="Port Lligat Slab">Port Lligat Slab</option>
                                    <option value="Atkinson Hyperlegible">Atkinson Hyperlegible</option>
                                    <option value="Averia Sans Libre">Averia Sans Libre</option>
                                    <option value="Cherry Cream Soda">Cherry Cream Soda</option>
                                    <option value="Nova Square">Nova Square</option>
                                    <option value="Numans">Numans</option>
                                    <option value="Kiwi Maru">Kiwi Maru</option>
                                    <option value="Mina">Mina</option>
                                    <option value="Delius Unicase">Delius Unicase</option>
                                    <option value="Autour One">Autour One</option>
                                    <option value="Imprima">Imprima</option>
                                    <option value="Elsie">Elsie</option>
                                    <option value="Festive">Festive</option>
                                    <option value="The Girl Next Door">The Girl Next Door</option>
                                    <option value="Headland One">Headland One</option>
                                    <option value="Ephesis">Ephesis</option>
                                    <option value="Gafata">Gafata</option>
                                    <option value="Dela Gothic One">Dela Gothic One</option>
                                    <option value="Cherry Swash">Cherry Swash</option>
                                    <option value="Wire One">Wire One</option>
                                    <option value="MedievalSharp">MedievalSharp</option>
                                    <option value="Life Savers">Life Savers</option>
                                    <option value="Mochiy Pop One">Mochiy Pop One</option>
                                    <option value="Shojumaru">Shojumaru</option>
                                    <option value="Carrois Gothic SC">Carrois Gothic SC</option>
                                    <option value="Puritan">Puritan</option>
                                    <option value="Azeret Mono">Azeret Mono</option>
                                    <option value="Artifika">Artifika</option>
                                    <option value="Goldman">Goldman</option>
                                    <option value="Tienne">Tienne</option>
                                    <option value="Peralta">Peralta</option>
                                    <option value="Gaegu">Gaegu</option>
                                    <option value="Style Script">Style Script</option>
                                    <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
                                    <option value="Scope One">Scope One</option>
                                    <option value="Cormorant Unicase">Cormorant Unicase</option>
                                    <option value="Vibur">Vibur</option>
                                    <option value="Yusei Magic">Yusei Magic</option>
                                    <option value="Shanti">Shanti</option>
                                    <option value="Denk One">Denk One</option>
                                    <option value="Almendra">Almendra</option>
                                    <option value="Baloo Bhaina 2">Baloo Bhaina 2</option>
                                    <option value="Slackey">Slackey</option>
                                    <option value="Fjord One">Fjord One</option>
                                    <option value="MuseoModerno">MuseoModerno</option>
                                    <option value="Ribeye">Ribeye</option>
                                    <option value="Pavanam">Pavanam</option>
                                    <option value="Trade Winds">Trade Winds</option>
                                    <option value="Asar">Asar</option>
                                    <option value="Kite One">Kite One</option>
                                    <option value="Lily Script One">Lily Script One</option>
                                    <option value="Germania One">Germania One</option>
                                    <option value="Jomhuria">Jomhuria</option>
                                    <option value="Engagement">Engagement</option>
                                    <option value="Dynalight">Dynalight</option>
                                    <option value="UnifrakturCook">UnifrakturCook</option>
                                    <option value="Kranky">Kranky</option>
                                    <option value="Eater">Eater</option>
                                    <option value="Lakki Reddy">Lakki Reddy</option>
                                    <option value="Macondo Swash Caps">Macondo Swash Caps</option>
                                    <option value="Kodchasan">Kodchasan</option>
                                    <option value="Song Myung">Song Myung</option>
                                    <option value="Ramaraja">Ramaraja</option>
                                    <option value="Baloo Paaji 2">Baloo Paaji 2</option>
                                    <option value="Paprika">Paprika</option>
                                    <option value="Voces">Voces</option>
                                    <option value="Tauri">Tauri</option>
                                    <option value="Medula One">Medula One</option>
                                    <option value="Sarina">Sarina</option>
                                    <option value="League Script">League Script</option>
                                    <option value="ZCOOL KuaiLe">ZCOOL KuaiLe</option>
                                    <option value="Encode Sans Semi Expanded">Encode Sans Semi Expanded</option>
                                    <option value="Fresca">Fresca</option>
                                    <option value="Noto Sans Display">Noto Sans Display</option>
                                    <option value="Modak">Modak</option>
                                    <option value="Shippori Mincho B1">Shippori Mincho B1</option>
                                    <option value="Allison">Allison</option>
                                    <option value="New Rocker">New Rocker</option>
                                    <option value="Englebert">Englebert</option>
                                    <option value="Julee">Julee</option>
                                    <option value="Poor Story">Poor Story</option>
                                    <option value="IM Fell French Canon">IM Fell French Canon</option>
                                    <option value="Lovers Quarrel">Lovers Quarrel</option>
                                    <option value="Lexend Exa">Lexend Exa</option>
                                    <option value="DotGothic16">DotGothic16</option>
                                    <option value="Bilbo">Bilbo</option>
                                    <option value="Libre Barcode 39 Text">Libre Barcode 39 Text</option>
                                    <option value="Noto Sans Sinhala">Noto Sans Sinhala</option>
                                    <option value="Sumana">Sumana</option>
                                    <option value="Stoke">Stoke</option>
                                    <option value="Charmonman">Charmonman</option>
                                    <option value="Spicy Rice">Spicy Rice</option>
                                    <option value="Gamja Flower">Gamja Flower</option>
                                    <option value="Milonga">Milonga</option>
                                    <option value="Mogra">Mogra</option>
                                    <option value="Varta">Varta</option>
                                    <option value="Kulim Park">Kulim Park</option>
                                    <option value="Iceberg">Iceberg</option>
                                    <option value="Mystery Quest">Mystery Quest</option>
                                    <option value="Habibi">Habibi</option>
                                    <option value="Chango">Chango</option>
                                    <option value="Khmer">Khmer</option>
                                    <option value="Londrina Outline">Londrina Outline</option>
                                    <option value="Fahkwang">Fahkwang</option>
                                    <option value="Simonetta">Simonetta</option>
                                    <option value="Rum Raisin">Rum Raisin</option>
                                    <option value="Libre Caslon Display">Libre Caslon Display</option>
                                    <option value="Cantora One">Cantora One</option>
                                    <option value="Andika New Basic">Andika New Basic</option>
                                    <option value="Stalemate">Stalemate</option>
                                    <option value="Akaya Telivigala">Akaya Telivigala</option>
                                    <option value="Baloo Bhai 2">Baloo Bhai 2</option>
                                    <option value="Solway">Solway</option>
                                    <option value="Donegal One">Donegal One</option>
                                    <option value="Ranga">Ranga</option>
                                    <option value="Sancreek">Sancreek</option>
                                    <option value="Tomorrow">Tomorrow</option>
                                    <option value="Barriecito">Barriecito</option>
                                    <option value="Rosarivo">Rosarivo</option>
                                    <option value="Rationale">Rationale</option>
                                    <option value="Fontdiner Swanky">Fontdiner Swanky</option>
                                    <option value="Prociono">Prociono</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Uncial Antiqua">Uncial Antiqua</option>
                                    <option value="Almendra SC">Almendra SC</option>
                                    <option value="Saira Stencil One">Saira Stencil One</option>
                                    <option value="Dekko">Dekko</option>
                                    <option value="Chicle">Chicle</option>
                                    <option value="Text Me One">Text Me One</option>
                                    <option value="Nokora">Nokora</option>
                                    <option value="Buda">Buda</option>
                                    <option value="Yeon Sung">Yeon Sung</option>
                                    <option value="Sonsie One">Sonsie One</option>
                                    <option value="Port Lligat Sans">Port Lligat Sans</option>
                                    <option value="Bellota">Bellota</option>
                                    <option value="Piazzolla">Piazzolla</option>
                                    <option value="Bubbler One">Bubbler One</option>
                                    <option value="Ibarra Real Nova">Ibarra Real Nova</option>
                                    <option value="Yuji Mai">Yuji Mai</option>
                                    <option value="Chilanka">Chilanka</option>
                                    <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
                                    <option value="Zilla Slab Highlight">Zilla Slab Highlight</option>
                                    <option value="Yuji Syuku">Yuji Syuku</option>
                                    <option value="Farsan">Farsan</option>
                                    <option value="Fenix">Fenix</option>
                                    <option value="Kotta One">Kotta One</option>
                                    <option value="Libre Barcode 39 Extended Text">Libre Barcode 39 Extended Text</option>
                                    <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
                                    <option value="Underdog">Underdog</option>
                                    <option value="Yuji Boku">Yuji Boku</option>
                                    <option value="Besley">Besley</option>
                                    <option value="IM Fell Great Primer">IM Fell Great Primer</option>
                                    <option value="Manuale">Manuale</option>
                                    <option value="Akronim">Akronim</option>
                                    <option value="Sree Krushnadevaraya">Sree Krushnadevaraya</option>
                                    <option value="Potta One">Potta One</option>
                                    <option value="Croissant One">Croissant One</option>
                                    <option value="Angkor">Angkor</option>
                                    <option value="Crushed">Crushed</option>
                                    <option value="Noto Nastaliq Urdu">Noto Nastaliq Urdu</option>
                                    <option value="Gayathri">Gayathri</option>
                                    <option value="Redressed">Redressed</option>
                                    <option value="Condiment">Condiment</option>
                                    <option value="Nova Flat">Nova Flat</option>
                                    <option value="Quintessential">Quintessential</option>
                                    <option value="Nosifer">Nosifer</option>
                                    <option value="Inika">Inika</option>
                                    <option value="Eagle Lake">Eagle Lake</option>
                                    <option value="Barrio">Barrio</option>
                                    <option value="Cagliostro">Cagliostro</option>
                                    <option value="Ruluko">Ruluko</option>
                                    <option value="Kavivanar">Kavivanar</option>
                                    <option value="Rhodium Libre">Rhodium Libre</option>
                                    <option value="Margarine">Margarine</option>
                                    <option value="Overlock SC">Overlock SC</option>
                                    <option value="Be Vietnam Pro">Be Vietnam Pro</option>
                                    <option value="Scheherazade New">Scheherazade New</option>
                                    <option value="Sulphur Point">Sulphur Point</option>
                                    <option value="Wellfleet">Wellfleet</option>
                                    <option value="Single Day">Single Day</option>
                                    <option value="Hachi Maru Pop">Hachi Maru Pop</option>
                                    <option value="Petemoss">Petemoss</option>
                                    <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
                                    <option value="Piedra">Piedra</option>
                                    <option value="Asset">Asset</option>
                                    <option value="Bayon">Bayon</option>
                                    <option value="Kantumruy">Kantumruy</option>
                                    <option value="Big Shoulders Stencil Display">Big Shoulders Stencil Display</option>
                                    <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
                                    <option value="Kumar One">Kumar One</option>
                                    <option value="Londrina Shadow">Londrina Shadow</option>
                                    <option value="Molle">Molle</option>
                                    <option value="Stylish">Stylish</option>
                                    <option value="Ruthie">Ruthie</option>
                                    <option value="Griffy">Griffy</option>
                                    <option value="Petrona">Petrona</option>
                                    <option value="Inria Serif">Inria Serif</option>
                                    <option value="Cute Font">Cute Font</option>
                                    <option value="Sura">Sura</option>
                                    <option value="Monofett">Monofett</option>
                                    <option value="Sahitya">Sahitya</option>
                                    <option value="Libre Barcode 128">Libre Barcode 128</option>
                                    <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
                                    <option value="Moul">Moul</option>
                                    <option value="Chathura">Chathura</option>
                                    <option value="Offside">Offside</option>
                                    <option value="Dorsa">Dorsa</option>
                                    <option value="Tulpen One">Tulpen One</option>
                                    <option value="Gotu">Gotu</option>
                                    <option value="Tourney">Tourney</option>
                                    <option value="Akaya Kanadaka">Akaya Kanadaka</option>
                                    <option value="Miniver">Miniver</option>
                                    <option value="East Sea Dokdo">East Sea Dokdo</option>
                                    <option value="Sirin Stencil">Sirin Stencil</option>
                                    <option value="Maiden Orange">Maiden Orange</option>
                                    <option value="Ribeye Marrow">Ribeye Marrow</option>
                                    <option value="Kufam">Kufam</option>
                                    <option value="Rowdies">Rowdies</option>
                                    <option value="Sansita Swashed">Sansita Swashed</option>
                                    <option value="Linden Hill">Linden Hill</option>
                                    <option value="Spirax">Spirax</option>
                                    <option value="Ravi Prakash">Ravi Prakash</option>
                                    <option value="Modern Antiqua">Modern Antiqua</option>
                                    <option value="Zen Dots">Zen Dots</option>
                                    <option value="Metal Mania">Metal Mania</option>
                                    <option value="Meie Script">Meie Script</option>
                                    <option value="Vampiro One">Vampiro One</option>
                                    <option value="Bigelow Rules">Bigelow Rules</option>
                                    <option value="Bona Nova">Bona Nova</option>
                                    <option value="Metal">Metal</option>
                                    <option value="Arbutus">Arbutus</option>
                                    <option value="Content">Content</option>
                                    <option value="Glory">Glory</option>
                                    <option value="Junge">Junge</option>
                                    <option value="Montagu Slab">Montagu Slab</option>
                                    <option value="Lexend Mega">Lexend Mega</option>
                                    <option value="Marko One">Marko One</option>
                                    <option value="Joti One">Joti One</option>
                                    <option value="Elsie Swash Caps">Elsie Swash Caps</option>
                                    <option value="Caesar Dressing">Caesar Dressing</option>
                                    <option value="Koulen">Koulen</option>
                                    <option value="Kavoon">Kavoon</option>
                                    <option value="Lancelot">Lancelot</option>
                                    <option value="Stick">Stick</option>
                                    <option value="Jolly Lodger">Jolly Lodger</option>
                                    <option value="Beth Ellen">Beth Ellen</option>
                                    <option value="Girassol">Girassol</option>
                                    <option value="Jomolhari">Jomolhari</option>
                                    <option value="Viaoda Libre">Viaoda Libre</option>
                                    <option value="Mrs Sheppards">Mrs Sheppards</option>
                                    <option value="Risque">Risque</option>
                                    <option value="MonteCarlo">MonteCarlo</option>
                                    <option value="Dr Sugiyama">Dr Sugiyama</option>
                                    <option value="Gorditas">Gorditas</option>
                                    <option value="Romanesco">Romanesco</option>
                                    <option value="Bigshot One">Bigshot One</option>
                                    <option value="Chela One">Chela One</option>
                                    <option value="Galdeano">Galdeano</option>
                                    <option value="Shalimar">Shalimar</option>
                                    <option value="WindSong">WindSong</option>
                                    <option value="Rampart One">Rampart One</option>
                                    <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
                                    <option value="Srisakdi">Srisakdi</option>
                                    <option value="Revalia">Revalia</option>
                                    <option value="Felipa">Felipa</option>
                                    <option value="Diplomata">Diplomata</option>
                                    <option value="Bahiana">Bahiana</option>
                                    <option value="Jim Nightshade">Jim Nightshade</option>
                                    <option value="Atomic Age">Atomic Age</option>
                                    <option value="Glass Antiqua">Glass Antiqua</option>
                                    <option value="Hanalei Fill">Hanalei Fill</option>
                                    <option value="Libre Barcode 128 Text">Libre Barcode 128 Text</option>
                                    <option value="Gupter">Gupter</option>
                                    <option value="Smythe">Smythe</option>
                                    <option value="Inria Sans">Inria Sans</option>
                                    <option value="Diplomata SC">Diplomata SC</option>
                                    <option value="Chenla">Chenla</option>
                                    <option value="Kaisei Tokumin">Kaisei Tokumin</option>
                                    <option value="Lexend Giga">Lexend Giga</option>
                                    <option value="Flavors">Flavors</option>
                                    <option value="Ewert">Ewert</option>
                                    <option value="Macondo">Macondo</option>
                                    <option value="Devonshire">Devonshire</option>
                                    <option value="Miltonian">Miltonian</option>
                                    <option value="Peddana">Peddana</option>
                                    <option value="Grenze">Grenze</option>
                                    <option value="Smokum">Smokum</option>
                                    <option value="Londrina Sketch">Londrina Sketch</option>
                                    <option value="Miss Fajardose">Miss Fajardose</option>
                                    <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
                                    <option value="Kirang Haerang">Kirang Haerang</option>
                                    <option value="Train One">Train One</option>
                                    <option value="Oldenburg">Oldenburg</option>
                                    <option value="Kumar One Outline">Kumar One Outline</option>
                                    <option value="Brygada 1918">Brygada 1918</option>
                                    <option value="Red Rose">Red Rose</option>
                                    <option value="Princess Sofia">Princess Sofia</option>
                                    <option value="Odor Mean Chey">Odor Mean Chey</option>
                                    <option value="Fascinate">Fascinate</option>
                                    <option value="Zhi Mang Xing">Zhi Mang Xing</option>
                                    <option value="Galindo">Galindo</option>
                                    <option value="Plaster">Plaster</option>
                                    <option value="Nova Slim">Nova Slim</option>
                                    <option value="Kdam Thmor">Kdam Thmor</option>
                                    <option value="Combo">Combo</option>
                                    <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
                                    <option value="Fascinate Inline">Fascinate Inline</option>
                                    <option value="Keania One">Keania One</option>
                                    <option value="Jacques Francois">Jacques Francois</option>
                                    <option value="Emblema One">Emblema One</option>
                                    <option value="Siemreap">Siemreap</option>
                                    <option value="Bungee Outline">Bungee Outline</option>
                                    <option value="Sassy Frass">Sassy Frass</option>
                                    <option value="Snippet">Snippet</option>
                                    <option value="Almendra Display">Almendra Display</option>
                                    <option value="Unlock">Unlock</option>
                                    <option value="Ballet">Ballet</option>
                                    <option value="IBM Plex Sans Arabic">IBM Plex Sans Arabic</option>
                                    <option value="Dangrek">Dangrek</option>
                                    <option value="Butterfly Kids">Butterfly Kids</option>
                                    <option value="GFS Neohellenic">GFS Neohellenic</option>
                                    <option value="Gemunu Libre">Gemunu Libre</option>
                                    <option value="Yomogi">Yomogi</option>
                                    <option value="Texturina">Texturina</option>
                                    <option value="Kaisei Opti">Kaisei Opti</option>
                                    <option value="Purple Purse">Purple Purse</option>
                                    <option value="Fruktur">Fruktur</option>
                                    <option value="IBM Plex Sans Thai">IBM Plex Sans Thai</option>
                                    <option value="Bahianita">Bahianita</option>
                                    <option value="Black And White Picture">Black And White Picture</option>
                                    <option value="Klee One">Klee One</option>
                                    <option value="Noto Sans Arabic">Noto Sans Arabic</option>
                                    <option value="Noto Sans Myanmar">Noto Sans Myanmar</option>
                                    <option value="Libre Barcode 39 Extended">Libre Barcode 39 Extended</option>
                                    <option value="Liu Jian Mao Cao">Liu Jian Mao Cao</option>
                                    <option value="Sedgwick Ave Display">Sedgwick Ave Display</option>
                                    <option value="Big Shoulders Stencil Text">Big Shoulders Stencil Text</option>
                                    <option value="Stalinist One">Stalinist One</option>
                                    <option value="Sunshiney">Sunshiney</option>
                                    <option value="Zen Old Mincho">Zen Old Mincho</option>
                                    <option value="Otomanopee One">Otomanopee One</option>
                                    <option value="Seymour One">Seymour One</option>
                                    <option value="Erica One">Erica One</option>
                                    <option value="Passero One">Passero One</option>
                                    <option value="Mr Bedfort">Mr Bedfort</option>
                                    <option value="Bokor">Bokor</option>
                                    <option value="Suwannaphum">Suwannaphum</option>
                                    <option value="Zen Kaku Gothic New">Zen Kaku Gothic New</option>
                                    <option value="Freehand">Freehand</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Federant">Federant</option>
                                    <option value="Trochut">Trochut</option>
                                    <option value="Butcherman">Butcherman</option>
                                    <option value="Kaisei Decol">Kaisei Decol</option>
                                    <option value="Hina Mincho">Hina Mincho</option>
                                    <option value="Benne">Benne</option>
                                    <option value="Bonbon">Bonbon</option>
                                    <option value="Lexend Tera">Lexend Tera</option>
                                    <option value="Snowburst One">Snowburst One</option>
                                    <option value="Astloch">Astloch</option>
                                    <option value="Noto Sans Armenian">Noto Sans Armenian</option>
                                    <option value="Stick No Bills">Stick No Bills</option>
                                    <option value="Gidugu">Gidugu</option>
                                    <option value="Noto Sans Gothic">Noto Sans Gothic</option>
                                    <option value="Miltonian Tattoo">Miltonian Tattoo</option>
                                    <option value="Lacquer">Lacquer</option>
                                    <option value="Nova Oval">Nova Oval</option>
                                    <option value="Nova Cut">Nova Cut</option>
                                    <option value="Supermercado One">Supermercado One</option>
                                    <option value="Yaldevi">Yaldevi</option>
                                    <option value="Zen Maru Gothic">Zen Maru Gothic</option>
                                    <option value="Long Cang">Long Cang</option>
                                    <option value="Ruge Boogie">Ruge Boogie</option>
                                    <option value="Shippori Antique B1">Shippori Antique B1</option>
                                    <option value="Nova Script">Nova Script</option>
                                    <option value="Geostar Fill">Geostar Fill</option>
                                    <option value="Noto Sans Symbols">Noto Sans Symbols</option>
                                    <option value="Zen Kurenaido">Zen Kurenaido</option>
                                    <option value="Noto Sans Mono">Noto Sans Mono</option>
                                    <option value="New Tegomin">New Tegomin</option>
                                    <option value="Preahvihear">Preahvihear</option>
                                    <option value="Zen Kaku Gothic Antique">Zen Kaku Gothic Antique</option>
                                    <option value="Zen Antique">Zen Antique</option>
                                    <option value="Karantina">Karantina</option>
                                    <option value="Vibes">Vibes</option>
                                    <option value="Bungee Hairline">Bungee Hairline</option>
                                    <option value="Palette Mosaic">Palette Mosaic</option>
                                    <option value="Puppies Play">Puppies Play</option>
                                    <option value="Hahmlet">Hahmlet</option>
                                    <option value="Taprom">Taprom</option>
                                    <option value="Suravaram">Suravaram</option>
                                    <option value="Truculenta">Truculenta</option>
                                    <option value="Sevillana">Sevillana</option>
                                    <option value="Mochiy Pop P One">Mochiy Pop P One</option>
                                    <option value="Orelega One">Orelega One</option>
                                    <option value="Sofadi One">Sofadi One</option>
                                    <option value="Aubrey">Aubrey</option>
                                    <option value="Passions Conflict">Passions Conflict</option>
                                    <option value="Fuggles">Fuggles</option>
                                    <option value="Nerko One">Nerko One</option>
                                    <option value="Moulpali">Moulpali</option>
                                    <option value="Big Shoulders Inline Text">Big Shoulders Inline Text</option>
                                    <option value="Andada Pro">Andada Pro</option>
                                    <option value="Kaisei HarunoUmi">Kaisei HarunoUmi</option>
                                    <option value="Hanalei">Hanalei</option>
                                    <option value="Genos">Genos</option>
                                    <option value="Gluten">Gluten</option>
                                    <option value="Syne Mono">Syne Mono</option>
                                    <option value="Gowun Batang">Gowun Batang</option>
                                    <option value="Alumni Sans">Alumni Sans</option>
                                    <option value="Encode Sans SC">Encode Sans SC</option>
                                    <option value="Zen Antique Soft">Zen Antique Soft</option>
                                    <option value="Shippori Antique">Shippori Antique</option>
                                    <option value="Kenia">Kenia</option>
                                    <option value="Zen Loop">Zen Loop</option>
                                    <option value="Bonheur Royale">Bonheur Royale</option>
                                    <option value="Hurricane">Hurricane</option>
                                    <option value="Kings">Kings</option>
                                    <option value="Imbue">Imbue</option>
                                    <option value="Mohave">Mohave</option>
                                    <option value="BioRhyme Expanded">BioRhyme Expanded</option>
                                    <option value="Flow Circular">Flow Circular</option>
                                    <option value="Fasthand">Fasthand</option>
                                    <option value="Noto Serif Sinhala">Noto Serif Sinhala</option>
                                    <option value="Birthstone Bounce">Birthstone Bounce</option>
                                    <option value="Dongle">Dongle</option>
                                    <option value="Dhurjati">Dhurjati</option>
                                    <option value="Flow Block">Flow Block</option>
                                    <option value="Flow Rounded">Flow Rounded</option>
                                    <option value="Noto Sans Georgian">Noto Sans Georgian</option>
                                    <option value="Carattere">Carattere</option>
                                    <option value="Xanh Mono">Xanh Mono</option>
                                    <option value="Lexend Peta">Lexend Peta</option>
                                    <option value="Fleur De Leah">Fleur De Leah</option>
                                    <option value="Grechen Fuemen">Grechen Fuemen</option>
                                    <option value="Langar">Langar</option>
                                    <option value="Comforter">Comforter</option>
                                    <option value="Birthstone">Birthstone</option>
                                    <option value="Gowun Dodum">Gowun Dodum</option>
                                    <option value="Warnes">Warnes</option>
                                    <option value="M PLUS Code Latin">M PLUS Code Latin</option>
                                    <option value="IBM Plex Sans KR">IBM Plex Sans KR</option>
                                    <option value="Noto Serif Bengali">Noto Serif Bengali</option>
                                    <option value="Comforter Brush">Comforter Brush</option>
                                    <option value="Libre Barcode EAN13 Text">Libre Barcode EAN13 Text</option>
                                    <option value="M PLUS 1">M PLUS 1</option>
                                    <option value="Noto Serif Tamil">Noto Serif Tamil</option>
                                    <option value="Trispace">Trispace</option>
                                    <option value="Noto Sans Tamil Supplement">Noto Sans Tamil Supplement</option>
                                    <option value="Geostar">Geostar</option>
                                    <option value="Cherish">Cherish</option>
                                    <option value="Are You Serious">Are You Serious</option>
                                    <option value="Qahiri">Qahiri</option>
                                    <option value="Zen Tokyo Zoo">Zen Tokyo Zoo</option>
                                    <option value="M PLUS 2">M PLUS 2</option>
                                    <option value="Rubik Beastly">Rubik Beastly</option>
                                    <option value="Red Hat Mono">Red Hat Mono</option>
                                    <option value="Grey Qo">Grey Qo</option>
                                    <option value="Outfit">Outfit</option>
                                    <option value="Koh Santepheap">Koh Santepheap</option>
                                    <option value="Gideon Roman">Gideon Roman</option>
                                    <option value="M PLUS 1 Code">M PLUS 1 Code</option>
                                    <option value="Big Shoulders Inline Display">Big Shoulders Inline Display</option>
                                    <option value="Oi">Oi</option>
                                    <option value="IBM Plex Sans Thai Looped">IBM Plex Sans Thai Looped</option>
                                    <option value="Syne Tactile">Syne Tactile</option>
                                    <option value="Explora">Explora</option>
                                    <option value="Uchen">Uchen</option>
                                    <option value="IBM Plex Sans Hebrew">IBM Plex Sans Hebrew</option>
                                    <option value="Caramel">Caramel</option>
                                    <option value="IBM Plex Sans Devanagari">IBM Plex Sans Devanagari</option>
                                    <option value="Noto Sans Lao">Noto Sans Lao</option>
                                    <option value="Noto Sans Deseret">Noto Sans Deseret</option>
                                    <option value="Noto Serif Yezidi">Noto Serif Yezidi</option>
                                    <option value="Noto Serif Armenian">Noto Serif Armenian</option>
                                    <option value="Noto Serif Georgian">Noto Serif Georgian</option>
                                    <option value="Noto Serif Thai">Noto Serif Thai</option>
                                    <option value="Noto Sans Tai Viet">Noto Sans Tai Viet</option>
                                    <option value="Noto Sans Khmer">Noto Sans Khmer</option>
                                    <option value="Noto Serif Malayalam">Noto Serif Malayalam</option>
                                    <option value="Noto Sans Coptic">Noto Sans Coptic</option>
                                    <option value="Noto Sans Javanese">Noto Sans Javanese</option>
                                    <option value="Noto Sans Brahmi">Noto Sans Brahmi</option>
                                    <option value="Noto Sans Meetei Mayek">Noto Sans Meetei Mayek</option>
                                    <option value="Noto Sans Cuneiform">Noto Sans Cuneiform</option>
                                    <option value="Noto Sans Thai Looped">Noto Sans Thai Looped</option>
                                    <option value="Noto Serif Ethiopic">Noto Serif Ethiopic</option>
                                    <option value="Noto Sans Thaana">Noto Sans Thaana</option>
                                    <option value="Noto Sans Cherokee">Noto Sans Cherokee</option>
                                    <option value="Noto Sans Imperial Aramaic">Noto Sans Imperial Aramaic</option>
                                    <option value="Noto Sans Ol Chiki">Noto Sans Ol Chiki</option>
                                    <option value="Noto Serif Lao">Noto Serif Lao</option>
                                    <option value="Noto Sans Lisu">Noto Sans Lisu</option>
                                    <option value="Noto Serif Devanagari">Noto Serif Devanagari</option>
                                    <option value="Noto Sans Osmanya">Noto Sans Osmanya</option>
                                    <option value="Noto Serif Khmer">Noto Serif Khmer</option>
                                    <option value="Noto Sans Tagalog">Noto Sans Tagalog</option>
                                    <option value="Noto Serif Hebrew">Noto Serif Hebrew</option>
                                    <option value="Noto Rashi Hebrew">Noto Rashi Hebrew</option>
                                    <option value="Noto Serif Gujarati">Noto Serif Gujarati</option>
                                    <option value="Noto Sans Cypriot">Noto Sans Cypriot</option>
                                    <option value="Noto Sans Old Turkic">Noto Sans Old Turkic</option>
                                    <option value="Noto Sans Lycian">Noto Sans Lycian</option>
                                    <option value="Noto Sans Mongolian">Noto Sans Mongolian</option>
                                    <option value="Noto Serif Kannada">Noto Serif Kannada</option>
                                    <option value="Noto Sans Tifinagh">Noto Sans Tifinagh</option>
                                    <option value="Noto Sans Cham">Noto Sans Cham</option>
                                    <option value="Noto Sans Old Italic">Noto Sans Old Italic</option>
                                    <option value="Noto Sans Limbu">Noto Sans Limbu</option>
                                    <option value="Noto Serif Myanmar">Noto Serif Myanmar</option>
                                    <option value="Noto Serif Telugu">Noto Serif Telugu</option>
                                    <option value="Noto Serif Tibetan">Noto Serif Tibetan</option>
                                    <option value="Noto Sans Canadian Aboriginal">Noto Sans Canadian Aboriginal</option>
                                    <option value="Noto Serif Gurmukhi">Noto Serif Gurmukhi</option>
                                    <option value="Noto Sans Carian">Noto Sans Carian</option>
                                    <option value="Noto Music">Noto Music</option>
                                    <option value="Noto Sans Anatolian Hieroglyphs">Noto Sans Anatolian Hieroglyphs</option>
                                    <option value="Noto Sans Old Persian">Noto Sans Old Persian</option>
                                    <option value="Noto Sans Sora Sompeng">Noto Sans Sora Sompeng</option>
                                    <option value="Noto Sans Sundanese">Noto Sans Sundanese</option>
                                    <option value="Noto Sans Balinese">Noto Sans Balinese</option>
                                    <option value="Noto Sans Grantha">Noto Sans Grantha</option>
                                    <option value="Noto Sans Old Permic">Noto Sans Old Permic</option>
                                    <option value="Noto Sans Phoenician">Noto Sans Phoenician</option>
                                    <option value="Noto Serif Nyiakeng Puachue Hmong">Noto Serif Nyiakeng Puachue Hmong</option>
                                    <option value="Noto Sans Linear B">Noto Sans Linear B</option>
                                    <option value="Noto Sans Egyptian Hieroglyphs">Noto Sans Egyptian Hieroglyphs</option>
                                    <option value="Noto Sans Kaithi">Noto Sans Kaithi</option>
                                    <option value="Noto Sans Adlam">Noto Sans Adlam</option>
                                    <option value="Noto Sans Adlam Unjoined">Noto Sans Adlam Unjoined</option>
                                    <option value="Noto Sans Bamum">Noto Sans Bamum</option>
                                    <option value="Noto Sans Tai Tham">Noto Sans Tai Tham</option>
                                    <option value="Noto Sans Medefaidrin">Noto Sans Medefaidrin</option>
                                    <option value="Noto Sans Samaritan">Noto Sans Samaritan</option>
                                    <option value="Noto Sans Hanifi Rohingya">Noto Sans Hanifi Rohingya</option>
                                    <option value="Noto Sans Kayah Li">Noto Sans Kayah Li</option>
                                    <option value="Noto Sans Hanunoo">Noto Sans Hanunoo</option>
                                    <option value="Noto Sans Symbols 2">Noto Sans Symbols 2</option>
                                    <option value="Noto Sans Kharoshthi">Noto Sans Kharoshthi</option>
                                    <option value="Noto Sans Yi">Noto Sans Yi</option>
                                    <option value="Noto Serif Balinese">Noto Serif Balinese</option>
                                    <option value="Noto Sans Old Hungarian">Noto Sans Old Hungarian</option>
                                    <option value="Noto Serif Dogra">Noto Serif Dogra</option>
                                    <option value="Noto Sans Syriac">Noto Sans Syriac</option>
                                    <option value="Noto Serif Grantha">Noto Serif Grantha</option>
                                    <option value="Noto Serif Ahom">Noto Serif Ahom</option>
                                    <option value="Noto Sans Inscriptional Pahlavi">Noto Sans Inscriptional Pahlavi</option>
                                    <option value="Noto Sans Old South Arabian">Noto Sans Old South Arabian</option>
                                    <option value="Noto Sans Inscriptional Parthian">Noto Sans Inscriptional Parthian</option>
                                    <option value="Noto Sans Batak">Noto Sans Batak</option>
                                    <option value="Noto Serif Tangut">Noto Serif Tangut</option>
                                    <option value="Noto Sans Tirhuta">Noto Sans Tirhuta</option>
                                    <option value="Noto Sans Runic">Noto Sans Runic</option>
                                    <option value="Noto Sans Old North Arabian">Noto Sans Old North Arabian</option>
                                    <option value="Noto Sans Math">Noto Sans Math</option>
                                    <option value="Noto Sans New Tai Lue">Noto Sans New Tai Lue</option>
                                    <option value="Noto Sans Caucasian Albanian">Noto Sans Caucasian Albanian</option>
                                    <option value="Noto Sans Avestan">Noto Sans Avestan</option>
                                    <option value="Noto Sans Mahajani">Noto Sans Mahajani</option>
                                    <option value="Noto Sans Mayan Numerals">Noto Sans Mayan Numerals</option>
                                    <option value="Noto Sans Zanabazar Square">Noto Sans Zanabazar Square</option>
                                    <option value="Noto Sans Saurashtra">Noto Sans Saurashtra</option>
                                    <option value="Noto Sans Syloti Nagri">Noto Sans Syloti Nagri</option>
                                    <option value="Noto Sans Buginese">Noto Sans Buginese</option>
                                    <option value="Noto Sans Elbasan">Noto Sans Elbasan</option>
                                    <option value="Noto Sans Tagbanwa">Noto Sans Tagbanwa</option>
                                    <option value="Noto Sans Marchen">Noto Sans Marchen</option>
                                    <option value="Noto Sans Rejang">Noto Sans Rejang</option>
                                    <option value="Noto Sans Palmyrene">Noto Sans Palmyrene</option>
                                    <option value="Noto Sans Multani">Noto Sans Multani</option>
                                    <option value="Noto Sans Nushu">Noto Sans Nushu</option>
                                    <option value="Noto Sans Siddham">Noto Sans Siddham</option>
                                    <option value="Noto Sans Takri">Noto Sans Takri</option>
                                    <option value="Noto Sans Old Sogdian">Noto Sans Old Sogdian</option>
                                    <option value="Noto Sans Tai Le">Noto Sans Tai Le</option>
                                    <option value="Noto Sans Phags Pa">Noto Sans Phags Pa</option>
                                    <option value="Noto Sans Sogdian">Noto Sans Sogdian</option>
                                    <option value="Noto Sans Vai">Noto Sans Vai</option>
                                    <option value="Noto Sans Bassa Vah">Noto Sans Bassa Vah</option>
                                    <option value="Noto Sans Miao">Noto Sans Miao</option>
                                    <option value="Noto Sans Newa">Noto Sans Newa</option>
                                    <option value="Noto Sans Pau Cin Hau">Noto Sans Pau Cin Hau</option>
                                    <option value="Noto Sans Psalter Pahlavi">Noto Sans Psalter Pahlavi</option>
                                    <option value="Noto Sans Warang Citi">Noto Sans Warang Citi</option>
                                    <option value="Noto Sans Modi">Noto Sans Modi</option>
                                    <option value="Noto Sans Indic Siyaq Numbers">Noto Sans Indic Siyaq Numbers</option>
                                    <option value="Noto Sans Glagolitic">Noto Sans Glagolitic</option>
                                    <option value="Noto Sans Chakma">Noto Sans Chakma</option>
                                    <option value="Noto Sans Pahawh Hmong">Noto Sans Pahawh Hmong</option>
                                    <option value="Noto Sans Gunjala Gondi">Noto Sans Gunjala Gondi</option>
                                    <option value="Noto Sans Duployan">Noto Sans Duployan</option>
                                    <option value="Noto Sans Buhid">Noto Sans Buhid</option>
                                    <option value="Noto Traditional Nushu">Noto Traditional Nushu</option>
                                    <option value="Noto Sans Elymaic">Noto Sans Elymaic</option>
                                    <option value="Noto Sans Mro">Noto Sans Mro</option>
                                    <option value="Noto Sans Ogham">Noto Sans Ogham</option>
                                    <option value="Noto Sans Ugaritic">Noto Sans Ugaritic</option>
                                    <option value="Noto Sans Bhaiksuki">Noto Sans Bhaiksuki</option>
                                    <option value="Noto Sans Osage">Noto Sans Osage</option>
                                    <option value="Noto Sans Shavian">Noto Sans Shavian</option>
                                    <option value="Noto Sans Masaram Gondi">Noto Sans Masaram Gondi</option>
                                    <option value="Noto Sans Lydian">Noto Sans Lydian</option>
                                    <option value="Noto Sans Sharada">Noto Sans Sharada</option>
                                    <option value="Noto Sans Linear A">Noto Sans Linear A</option>
                                    <option value="Noto Sans N Ko">Noto Sans N Ko</option>
                                    <option value="Noto Sans Manichaean">Noto Sans Manichaean</option>
                                    <option value="Noto Sans Nabataean">Noto Sans Nabataean</option>
                                    <option value="Noto Sans Wancho">Noto Sans Wancho</option>
                                    <option value="Noto Sans Soyombo">Noto Sans Soyombo</option>
                                    <option value="Noto Sans Khudawadi">Noto Sans Khudawadi</option>
                                    <option value="Noto Sans Lepcha">Noto Sans Lepcha</option>
                                    <option value="Noto Sans Meroitic">Noto Sans Meroitic</option>
                                    <option value="Noto Sans Hatran">Noto Sans Hatran</option>
                                    <option value="Noto Sans Khojki">Noto Sans Khojki</option>
                                            
                                </select>
                            </div>
                        </div> 
                    </div>
                <!----footer------>

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

                <div class="row mb-5">
                    <div class="col-md-12">
                        <table id="pricing-list-container" style="width:100%;">
                            <tr class="pricing-list-item">
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="chaptertitle" type="text" name="chapter_title[]" id="sku" placeholder="Enter Chapter Title" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="tinymce" name="chapter_content[]" id="" cols="30" rows="10" placeholder="Enter Chapter Contents"></textarea>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" name="field_type[]" class="form-control" placeholder="Field Type">
                                                <span>input, select_input, checkbox, radio_button, textarea </span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" name="field_type_values[]" class="form-control"  placeholder="Field Values">
                                            </div>
                                        </div> -->
                                        
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <a class="delete text-danger" href="#"><i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <a href="#0" class="btn_1 gray add-pricing-list-item mb-5"><i class="fa fa-fw fa-plus-circle"></i>Add title and contents</a>
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
		//appending/removing fields dynamically
		$(document).ready(function(){
			function newMenuItem() {
				var newElem = $('tr.pricing-list-item').first().clone();
				newElem.find('input').val('');
				newElem.appendTo('table#pricing-list-container');
			}
			if ($("table#pricing-list-container").is('*')) {
				$('.add-pricing-list-item').on('click', function (e) {
					e.preventDefault();
					newMenuItem();
				});
				$(document).on("click", "#pricing-list-container .delete", function (e) {
					e.preventDefault();
					$(this).parent().parent().parent().remove();
				});
			}


		});
	</script>
    
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
 

@endsection