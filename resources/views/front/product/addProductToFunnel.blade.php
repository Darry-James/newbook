@php $pageTitle = 'Add Product' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')
    <style>
        .product-tips{
            color: #000;
        }
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
                        50% 50% no-repeat rgb(249,249,249);
        }
    </style>
@endsection

@section('content')

<div class="loader" style="display:none;"></div>
<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            Add Product to Funnel
        </h5>
        <div class="content-head align-items-center mb-2">
            <div class="left-section">
                <h6 class="title">{{ $product->ebook->title }}</h6>
            </div>
            <div class=" ml-2 right-section">

                <a href="product.html" class="btn btn-find btn-full-br">Show Product Description</a>
            </div>
            <button type="button" class="btn btn-purple-trans ml-auto btn-edit-cover">
                Back To My Product
            </button>
            <button id="saveProduct" class="btn btn-purple-trans ml-auto btn-edit-cover">
                Save All Edits
            </button>
        </div>

        <form id="ProductForm" action="{{route('addProductToFunnelPost', $product->unique_id)}}" method="post">@csrf
            <div class="content-wrap p-3 mb-5 bg-light mt-3">
                <div class="d-flex justify-content-between mb-5">
                    <div class="toggle-section">
                        <div class="text">
                            <div class="text-inner text-label">
                                Click To Enable/Disable Sales Page
                            </div>
                            <img class="question-icn" title="" src="../assets/icons/question.svg" alt="">
                            <label class="switch mb-0">
                                <input type="checkbox" id="is-sale-active">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-12 col-md-6">
                        <div class="prod-section">
                            <div class="text-label">
                                Product Funnel
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <!-- <label for="my-select">FUNNELS</label> -->
                                        <select id="my-select" class="form-control no-shadow slide-prod-input"
                                            name="funnel_id">

                                            @if (isset($funnel))
                                            <option value="{{ $funnel->id }}" style="color:#000;">{{ $funnel->title }}</option>
                                            @else
                                            <option value="{{ isset($product->funnel_id) ? $product->funnel_id : '' }}" style="color:#000;">{{ isset($product->funnel_id) ? $product->funnel->title : 'Select Funnel' }}</option> 
                                            @endif
                                            

                                            @if ($funnels->count() > 0)
                                                @foreach ($funnels as $funnel)
                                                    <option value="{{ $funnel->id }}" style="color:#000;">{{ $funnel->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="token-wrap mr-5">
                    <div class="btn-flex mb-4">
                        <div class="d-flex align-items-center">
                            <div class="text-label">
                                Custom Tokens/Shortcodes
                            </div>

                            <button type="button" data-target="#show-template" data-text="click to hide"
                                class="btn btn-toggle btn-click-show mr-3">click to
                                show</button>
                        </div>
                        <button id="loadTemplate" type="button" class="btn btn-toggle ml-auto btn-load-template">Load Product Page Template</button>
                    </div>
                    <div class="toggle-container">
                        <div class="toggle-item" id="show-template">
                            <div class="row">
                                <div class="col-5">
                                    <div class="text-content">
                                        <p>
                                            Sales Page Required tokens: <br>
                                            %button% - Buy Button Position <br>
                                            %upsell% - Upsell Header Position <br>
                                            %nothanks% - No Thanks Link Position
                                        </p>
                                        <p>
                                            Squeeze (Thank You) Page Required tokens: <br>
                                            %form% - Autoresponder Form Position
                                        </p>
                                        <p>
                                            Download Page Required tokens: <br>
                                            %download% - Download Product Link Position <br>
                                            %license% - Download License Link Position
                                        </p>
                                        <p>
                                            Exit Pop-Up Sales Page Required tokens: <br>
                                            %form% - Autoresponder Form Position
                                        </p>
                                        <p>
                                            Exit Pop-Up Download Page Required tokens: <br>
                                            %download% - Download Product Link Position <br>
                                            %license% - Download License Link Position
                                        </p>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-content">
                                        <p>
                                            All Pages Optional tokens: <br>
                                            %title% - Product Title <br>
                                            %summary% - Product Summary <br>
                                            %description% - Product Description <br>
                                            %cover% - Product eCover <br>
                                            %price% - Product Price
                                        </p>
                                        <p>
                                            %fname% - Author First Name <br>
                                            %lname% - Author Last Name <br>
                                            %email% - Author E-mail Address <br>
                                            %avatar% - Author Avatar
                                        </p>
                                        <p>
                                            %date% - Current Date <br>
                                            %time% - Current Time <br>
                                            %cdtimer% - CountDown Timer Position
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <ul class="nav nav-pills select-page-type sales-page" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn no-shadow btn-page-type btn-sales-page" id="sales-page-tab"
                            data-toggle="pill" href="#sales-page" role="tab" aria-controls="sales-page"
                            aria-selected="true">
                            Sales
                            Page Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-page-type btn-squeeze no-shadow active" id="squeeze-page-tab"
                            data-toggle="pill" href="#squeeze-page" role="tab" aria-controls="squeeze-page"
                            aria-selected="false">
                            Squeeze (ThankYou) Page
                            <i class="flaticon-question icons"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn no-shadow btn-page-type" id="download-page-tab"
                            data-toggle="pill" href="#download-page" role="tab" aria-controls="download-page"
                            aria-selected="false">
                            Download Page
                            Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn no-shadow btn-page-type" id="settings-page-tab"
                            data-toggle="pill" href="#settings-page" role="tab" aria-controls="settings-page"
                            aria-selected="false">
                            Settings
                        </a>
                    </li>
                </ul>

                <!-- <div class="editor-wrap mb-4">
                    <div id="editor"></div>
                </div> -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container fade" role="tabpanel" id="sales-page">
                        <div class="editor-wrap mb-4 bg-light add-shadow">
                            <!-- <div id="editor-sales"></div> -->
                            <textarea class="tinymce w-100" name="sales_page_content" id="myeditorinstance1" data-edit="myeditor1" cols="30" rows="10">{!! isset($product->sales_page_content) ? $product->sales_page_content : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane container active" role="tabpanel" id="squeeze-page">
                        <div class="editor-wrap mb-4 bg-light add-shadow">
                            <!-- <div id="editor-squeeze"></div> -->
                            <textarea class="tinymce w-100" name="squeeze_thankyou_page" id="myeditorinstance2" data-edit="myeditor2" cols="30" rows="10">{!! isset($product->squeeze_thankyou_page) ? $product->squeeze_thankyou_page : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane container fade" role="tabpanel" id="download-page">
                        <div class="editor-wrap mb-4 bg-light add-shadow">
                            <!-- <div id="editor-download"></div> -->
                            <textarea class="tinymce w-100" name="download_content_page" id="myeditorinstance3" data-edit="myeditor3" cols="30" rows="10">{!! isset($product->download_content_page) ? $product->download_content_page : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="settings-page">
                        <div class="content-wrap p-3 mb-5 bg-light mt-3 setting-page-wrap">
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="conversion-box">
                                        <h6 class="title">SQUEEZE( THANK YOU) PAGE SETTINGS</h6>
                                        <!-- <div class="desc">
                                            AUTORESPONDER FROM CODE( OPTIONAL)
                                            <i class="flaticon-question icons"></i></label>
                                        </div> -->


                                        <div class="form-group">
                                            <label class="mb-0" for="my-textarea"> AUTORESPONDER FROM CODE(
                                                OPTIONAL) <i class="flaticon-question icons "></i></label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Insert Autoresponder From Code Here"></textarea>
                                        </div>
                                    </div>

                                    <div class="conversion-box">
                                        <h6 class="title">ALL PAGES SETTINGS</h6>


                                        <div class="form-group">
                                            <label class="mb-0" for="my-textarea">FACEBOOK PIXEL CODE <i
                                                    class="flaticon-question icons "></i></label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Insert Countdown Timer Code Here"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="">PRODUCT PRICE <i class="flaticon-question icons "></i>
                                            </label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="">
                                        </div>

                                    </div>

                                    <div class="conversion-box">
                                        <h6 class="title">FACEBOOKS TOOLS</h6>


                                        <div class="form-group mb-4">
                                            <label class="mb-0" for="my-textarea">FACEBOOK PIXEL CODE <i
                                                    class="flaticon-question icons "></i>
                                                <label class="ml-auto">
                                                    <input class="mr-1 check-box" type="checkbox" name="" id="">
                                                    USE DEFAULT SETTINGS <i
                                                        class="flaticon-question icons "></i></label>
                                            </label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Enter Your Facebook Pixel Code Here"></textarea>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="mb-0" for="my-textarea">FACEBOOK COMMENT SDK CODE <i
                                                    class="flaticon-question icons "></i>
                                                <label class="ml-auto">
                                                    <input class="mr-1 check-box" type="checkbox" name="" id="">
                                                    USE DEFAULT SETTINGS <i
                                                        class="flaticon-question icons "></i></label>
                                            </label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Enter Javascript Sdk Code From Facebook"></textarea>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="mb-0" for="my-textarea">FACEBOOK COMMENT CODE SNIPPET
                                                <i class="flaticon-question icons "></i>
                                                <label class="ml-auto">
                                                    <input class="mr-1 check-box" type="checkbox" name="" id="">
                                                    USE DEFAULT SETTINGS <i
                                                        class="flaticon-question icons "></i></label>
                                            </label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Enter Javascript Sdk Code From Facebook"></textarea>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="mb-0" for="my-textarea">FACEBOOK CHAT WIDGET CODE <i
                                                    class="flaticon-question icons "></i>
                                                <label class="ml-auto">
                                                    <input class="mr-1 check-box" type="checkbox" name="" id="">
                                                    USE DEFAULT SETTINGS <i
                                                        class="flaticon-question icons "></i></label>
                                            </label>
                                            <textarea id="my-textarea" class="form-control" name="" rows="3"
                                                placeholder="Enter Javascript Sdk Code From Facebook"></textarea>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="conversion-box">
                                        <h6 class="title">DOWNLOAD PAGE SETTINGS</h6>


                                        <div class="form-group">
                                            <label class="mb-0" for="my-textarea">DOWNLOAD PRODUCT LINK TEXT <i
                                                    class="flaticon-question icons "></i></label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Insert Autoresponder From Code Here">
                                        </div>

                                        <div class="form-group">
                                            <label for="">DOWNLOAD LICENCE LINK TEXT <i
                                                    class="flaticon-question icons "></i>
                                            </label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Insert Autoresponder From Code Here">
                                        </div>

                                    </div>
                                    <div class="conversion-box">
                                        <h6 class="title">SELECT SOCIAL SETTINGS</h6>
                                        <button type="button" class="btn btn-find px-3 btn-full-br">Select Social Proof Popups</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="bg-blue-wrap">
                    <div class="toggle-section">
                        <div class="text">
                            <div class="text-inner text-label">
                                Click To Enable/Disable Exit Pop-Up Pages
                            </div>
                            <label class="switch mb-0">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="pop-up-page-edit">
                    <div class="select-page-type">
                        <button type="button" class="btn no-shadow btn-page-type active">Exit Pop-Up Sales Pages
                            Content</button>
                        <button type="button" class="btn no-shadow btn-page-type">Exit Pop-Up Download Pages Content</button>
                    </div>

                    <div class="editor-wrap mb-4">
                        <div id="pop-editor"></div>
                    </div>
                </div> -->


            </div>
        </form>

    </div>
</div>

    @section('extra_div')
    <div class="modal fade bd-example-modal-lg" id="choose-template">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-inner bg-light px-3 py-4">
                    <h1 class="modal-title">Load page Template</h1>

                    <div class="row px-2 mt-5">
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal" tabindex="-1" id="template">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Choose a Template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row" id="temp-body">
        
      </div>
    </div>
  </div>
</div>
    @endsection 



@section('extra_js') 

<!-- <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script> -->


<script>
   tinymce.init({
     selector: '*[data-edit]', // Replace this CSS selector to match the placeholder element for TinyMCE
     height:400,
    
    //  plugins: 'code table lists',
     //plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak code table',
     plugins:["advlist code autolink lists link image media emoticons charmap preview hr anchor searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking save table contextmenu directionality paste textcolor colorpicker fullpage"],
     //plugins: 'advlist autolink bootstrap link image lists charmap print preview help table',
     toolbar_mode: 'floating',
    //  toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    //  toolbar: [
    //         'undo redo | bootstrap',
    //         'cut copy paste | styleselect | alignleft aligncenter alignright alignjustify | bold italic | link image | preview | help'],
    toolbar1:"fontselect | fontsizeselect | forecolor backcolor | bold italic underline strikethrough | removeformat",
    toolbar2:"alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media emoticons | code fullpage preview",
   });
 </script>

<script>
$(function(){

    //hide pop-up ads in tinymce
    if($('.tox-tinymce-aux').html != ''){
        $('.tox-tinymce-aux').hide();
    }

    $('#saveProduct').on('click', function(){
        $('form#ProductForm').submit();
    });
    
    $('.btn-load-template').on('click',function(){

        if( $(this).attr('id') == 'loadTemplate' ){
            $('#template').modal({
            keyboard: false,
            backdrop:true
            }).on('hide.bs.modal',function(evt){
                $('#temp-body').html('');
            });
            loadTemplates();
        }

        if( $(this).attr('id') == 'loadSaleTemplate' ){
            $('#template').modal({
            keyboard: false,
            backdrop:true
            }).on('hide.bs.modal',function(evt){
                $('#temp-body').html('');
            });
            loadSaleTemplates();
        }      
    });

});

function loadTemplates(){
    var templates = [];
    $.getJSON('https://funnel.hypersoftmedia.com/templates',function(response){
        //console.log(response);
        templates = response;
        $.each(templates, function(i, field){
        $("#temp-body").append("<div class='col-md-3 mb-1'><img title='"+field.title+"' onclick='loadInEditor(\""+field.id+"\")' src='/front/templates/"+field.thumbnail+"' class='img-thumbnail' alt='"+field.title+"'/></div>");

      });
    });
}

function loadSaleTemplates(){
    var templates = [];
    $.getJSON('https://funnel.hypersoftmedia.com/saleTemplates',function(response){
        //console.log(response);
        templates = response;
        $.each(templates, function(i, field){
        $("#temp-body").append("<div class='col-md-3 mb-1'><img title='"+field.title+"' onclick='loadInSaleAndExitEditor(\""+field.id+"\")' src='/front/templates/"+field.thumbnail+"' class='img-thumbnail' alt='"+field.title+"'/></div>");

      });
    });
}

function loadInEditor(id){
    //alert('Loading template...');
    $('.loading').css({'display':'block'});
    $.getJSON('https://funnel.hypersoftmedia.com/getContent/'+id,function(res){
        //hide loading

        //tinymce.activeEditor.setContent(res.content);
        for (let inst = 0; inst < tinymce.editors.length; inst++) {
            //let c = tinymce.editors[inst].getContent();
            let edit = $(tinymce.editors[inst].targetElm).data('edit');
            if(edit=='myeditor2'){
                tinymce.editors[inst].setContent(res.squeeze_thankyou_page); 
            }
            if(edit=='myeditor3'){
                tinymce.editors[inst].setContent(res.download_content_page); 
            }
            // console.log(edit + '=' + c);
        }
    });
    $('.loading').css({'display':'none'});
    $("#template").modal('hide');  
}

//when sale toggle is active
function loadInSaleAndExitEditor(id){
    //alert('Loading template...');
    $('.loading').css({'display':'block'});
    $.getJSON('https://funnel.hypersoftmedia.com/getSaleContent/'+id,function(res){
        //hide loading

        //tinymce.activeEditor.setContent(res.content);
        for (let inst = 0; inst < tinymce.editors.length; inst++) {
            //let c = tinymce.editors[inst].getContent();
            let edit = $(tinymce.editors[inst].targetElm).data('edit');
            if(edit=='myeditor1'){
                tinymce.editors[inst].setContent(res.sales_page_content); 
            }
            if(edit=='myeditor2'){
                tinymce.editors[inst].setContent(res.squeeze_thankyou_page); 
            }
            if(edit=='myeditor3'){
                tinymce.editors[inst].setContent(res.download_content_page); 
            }
            if(edit=='myeditor4'){
                tinymce.editors[inst].setContent(res.exit_popup_sales_page_content); 
            }
            if(edit=='myeditor5'){
                tinymce.editors[inst].setContent(res.exit_popup_download_page); 
            }
            // console.log(edit + '=' + c);
        }

    });
    $('.loading').css({'display':'none'});
    $("#template").modal('hide');  
}
</script>
@endsection

@endsection