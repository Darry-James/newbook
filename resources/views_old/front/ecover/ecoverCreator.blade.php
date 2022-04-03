@php $pageTitle = 'Ecover Creator' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')   
<style>

    .img-box{
        border: 5px solid #e2e2e2;
    }

    .img-box-added{
        border: 5px solid blue;
    }

    .img-box label{
        display: inline !important;
    }

    input[type=radio] + label {

    }

    .class_to_add {
        border: 5px solid #a72a2a;
    }

    label::before {
        background-image: url(front/image/2nd aug Funnel project pdf.png);
    }

    :checked + label::before {
        background-image: url(front/image/place-holder.jpg);
    }

    .table-ecover th{
        font-weight: 900;
        color: #000;
    }

    /* The Modal (background) */
    .myModal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)} 
      to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
      from {transform:scale(0)} 
      to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
      .modal-content {
        width: 100%;
      }
    }
</style>
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            Ecover Creator
        </h5>
        <div class="content-wrap">
            <div class="content-head">
                <div class="left-section">
                    <h6 class="title">eCovers</h6>
                    <div class="desc">You can create ecover from scratch</div>
                </div>
                <div class="ml-auto right-section">

                    <div class="btn-flex">
                        <button class="btn btn-setup-api">Setup html css to image API keys</button>
                        <div class="dropdown">
                            <button type="button" class="btn btn-create-ecover dropdown-toggle"
                                data-toggle="dropdown">
                                Create eCover
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropmenu-wrap">
                                <a data-toggle="slide-in-wrap" data-target="#flat-cover"
                                    class="dropdown-item" href="#">Flat Cover</a>
                                <a data-toggle="slide-in-wrap" data-target="#book-cover"
                                    class="dropdown-item" href="#">3D Book Cover</a>
                                <a data-toggle="slide-in-wrap" data-target="#cd-cover" class="dropdown-item"
                                    href="#">3D CD Cover</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.message')
            <table class="table no-border table-ecover mt-3">
                <thead>
                    <tr>
                        <th class="text-left text-dark">NAME</th>
                        <th class="text-dark">THUMBNAIL</th>
                        <th class="text-dark">DOWNLOAD</th>
                        <th class="text-dark">CREATED BY</th>
                        <th class="text-dark">UPDATED AT</th>
                        <th class="text-dark">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($ecovers) > 0)
                        @php $counter = 1;  @endphp
                        @foreach ($ecovers as $each_ecover)
                        <tr>
                            <td scope="row">{{ $each_ecover->title }}</td>
                            <td class="text-center">
                                <img class="ecover-prev" src="{{ $each_ecover->thumbnail }}" alt="">
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Download
                                    </button>
                                    <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{ route('downloadfile', [$each_ecover->id, 'jpeg']) }}">JPEG Format</a>
                                        <a class="dropdown-item" href="{{ route('downloadfile', [$each_ecover->id, 'png']) }}">PNG FORMAT</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ Auth::user()->name }}</td>
                            <td class="text-center">{{ $each_ecover->updated_at->diffForHumans() }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                        @php
                                            $fileName = basename($each_ecover->thumbnail);
                                        @endphp
                                        <a class="dropdown-item selected_file_preview" href="javascript:void(0)" data-src="/backend/assets/images/big/{{$fileName}}" data-alt="{{ $fileName }}">Preview</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{ route('deleteEcover', $each_ecover->id) }}">Delete</a>
                                        {{-- <a class="dropdown-item" href="#">View 3D</a> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                        @php $counter++;  @endphp
                        @endforeach
                    @else
                        <tr class="odd">
                            <td colspan="7" class="dataTables_empty" valign="top">No matching records found</td>
                        </tr>  
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

    @section('extra_div')
    <form action="{{ route('ecoverCreatorSaveToLocal') }}" method="post" enctype="multipart/form-data">@csrf
        <div id="flat-cover" class="slide-in-wrap">
            <div class="slide-in-inner">
                <div class="slide-head">
                    <div class="slide-details">
                        <h5 class="title">Create eCover</h5>
                        <div class="sub-title">flat cover</div>
                    </div>
                    <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                        <i class="flaticon-cancel icons"></i>
                    </button>
                </div>
                
                    <div class="edit-forms-wrap">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mb-0">
                                    <label for="">Name</label>
                                    <input type="text" name="title" class="form-control input-bordered no-shadow slide-input" id="" placeholder="">
                                    {{-- <input type="file" name="thumbnail" class="file_link"> --}}
                                    <input type="hidden" type="text" value="flat_cover" name="type_value">
                                    <input type="hidden" type="text" value="" name="file_link" class="file_link">
                                    
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Dimension</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="edit-input-wrap input-bordered">
                                                <label for="">width</label>
                                                <input type="number" class="form-control no-shadow" name="width" id="" placeholder=""
                                                    min="0" value="1320" readonly>
                                                <span class="dim-text">px</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="edit-input-wrap input-bordered">
                                                <label for="">height</label>
                                                <input type="number" class="form-control no-shadow" name="height" id="" placeholder=""
                                                    min="0" value="720" readonly>
                                                <span class="dim-text">px</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!---flat-cover-images-->
                @if ($adminEcovers->count() > 0)
                    
                <div class="images-select-wrap">
                    <div class="row">
                        <div class="col-4 d-none">
                            <input type="checkbox" id="flat_cover_1" style="display: none" />
                            <label for="flat_cover_1" class="">
                                <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                            </label> --}}
                            <input type="radio" id="flat_cover_1" name="flat_image[]" class="flat_image" style="display: none"  />
                            <div class="img-box">
                                <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="" for="flat_cover_1" class="selected_file">
                            </div>
                        </div>
                        @foreach ( $adminEcovers as $ecover )
                        <div class="col-4">
                            <input type="radio" id="flat_cover_2"  name="flat_image[]" class="flat_image" style="display: none"  />
                            <div class="img-box">
                                <img src="{{ $ecover->thumbnail ? asset('/backend/assets/images/big/'.$ecover->thumbnail) : asset('backend/assets/images/big/placeholder.png') }}" alt="" for="flat_cover_1" class="selected_file">
                                
                            </div>
                        </div>
                        @endforeach
                        

                        <div class="col-4 d-none">
                            <input type="radio" id="flat_cover_3"  name="flat_image[]" class="flat_image" style="display: none"  />
                            <div class="img-box">
                                {{-- <label for="flat_cover_2" data-source="{{ url('/front/image/ecover/ecover_sample.jpg') }}" class="selected_file"> --}}
                                    <img src="{{url('/front/image/ecover/ecover_sample.jpg')}}" alt="Ecover Sample" for="flat_cover_1" class="selected_file">
                                {{-- </label> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!---flat-cover-end-->

                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                        data-toggle="slide-in-wrap" data-target="#cd-cover" data-dismiss=".slide-in-wrap">
                        <i class="flaticon-left-arrow icons"></i>
                        3D CD Cover
                    </button>

                    <button type="submit" class="btn btn-purple-trans btn-edit-cover">
                        Create
                    </button>
                </div>

            </div>
        </div>
    </form>

    <div id="book-cover" class="slide-in-wrap">
        <div class="slide-in-inner">
            <div class="slide-head">
                <div class="slide-details">
                    <h5 class="title">Create eCover</h5>
                    <div class="sub-title">3D book cover</div>
                </div>
                <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-cancel icons"></i>
                </button>
            </div>

            <div class="edit-forms-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-0">
                            <label for="">Name</label>
                            <input type="text" class="form-control input-bordered no-shadow slide-input" name="" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Dimension</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">width</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">height</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-select-wrap">
                <div class="row">
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                    data-toggle="slide-in-wrap" data-target="#flat-cover" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-left-arrow icons"></i>
                    Flat Cover
                </button>
                <button class="btn btn-purple-trans btn-edit-cover">
                    Create
                </button>
            </div>
        </div>
    </div>

    <div id="cd-cover" class="slide-in-wrap">
        <div class="slide-in-inner">
            <div class="slide-head">
                <div class="slide-details">
                    <h5 class="title">Create eCover</h5>
                    <div class="sub-title">3D CD cover</div>
                </div>
                <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-cancel icons"></i>
                </button>
            </div>

            <div class="edit-forms-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-0">
                            <label for="">Name</label>
                            <input type="text" class="form-control input-bordered no-shadow slide-input" name="" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Dimension</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">width</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">height</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-select-wrap">
                <div class="row">
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/ecover/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                    data-toggle="slide-in-wrap" data-target="#book-cover" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-left-arrow icons"></i>
                    3D Book Cover
                </button>
                <button class="btn btn-purple-trans btn-edit-cover">
                    Create
                </button>
            </div>
        </div>
    </div>
    @endsection 

    <!---img-preview--->
    <div id="myModal" class="myModal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <!---img-preview-end--->


@section('extra_js') 

<script> 
file_link = $('.file_link');
    //each img. select file for post request
    $( ".selected_file" ).each(function(index) {
            $(this).on("click", function(){
                
                var imgSrc = $(this).attr('src');
                console.log(imgSrc);
                $(this).parents('div.img-box').css({'borderColor':'blue'});
                $( ".selected_file" ).not(this).css({'borderColor':''});
                file_link.val(imgSrc);
            });
        });
</script>

<script>
    //preview image
  
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
  
  
    $( ".selected_file_preview" ).each(function(index) {
      
              $(this).on("click", function(){ 
                var src = $(this).data('src');
                var alt = $(this).data('alt');
                
                  modal.style.display = "block";
                  modalImg.src = src;
                  captionText.innerHTML = alt;    
        });
    });
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }
</script>

@endsection

@endsection