@php $pageTitle = 'Edit Product' @endphp
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
            My Products
        </h5>
        <div class="content-head align-items-center mb-2">
            <div class="left-section">
                <h6 class="title">Edit Product</h6>
            </div>
            <div class=" ml-2 right-section">
                <a href="{{ route('product') }}" class="btn btn-find btn-full-br">Back to my Product</a>
            </div>
            <button id="saveProduct" class="btn btn-purple-trans ml-auto btn-edit-cover">
                Save All Edits
            </button>
        </div>
        <form id="ProductForm" action="{{route('editProductPost', $product->unique_id)}}" method="post">@csrf
            <div class="content-wrap p-3 pr-5 mb-5 bg-light mt-3">

                <!--salesToggle-&-exit-->
                <div class="d-flex justify-content-between mb-5">
                    <div class="toggle-section">
                        <div class="text">
                            <div class="text-inner text-label">
                                Click To Enable/Disable Sales Page
                            </div>
                            <img class="question-icn" title="This switch is to enable/disbale sales page contents depending on your requirements" src="/front/icons/question.svg" alt="">
                            <label class="switch mb-0">
                                <input type="checkbox" name="is_sales_page_enabled" id="is-sale-active">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                </div>
                <!--salesToggle-&-exit-->

                <!--ebook-&-price-->
                <div class="row mb-5">
                    <div class="col-12 col-md-6">
                        <div class="prod-section">
                            <div class="text-label">
                                Product Settings
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <label for="my-select">SELECT EBOOK</label>
                                        <select id="my-select" class="form-control no-shadow slide-prod-input"
                                            name="ebook_id">
                                            <option value="{{ $product->ebook->id }}" selected>{{ $product->ebook->title }}</option>
                                            @if ($ebooks->count() > 0)
                                                @foreach ( $ebooks as $ebook )
                                                <option value="{{ $ebook->id }}">{{ $ebook->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="">PRICE, USD</label>
                                        <input type="number" min="0"
                                            class="form-control no-shadow slide-prod-input" name="price" id=""
                                            placeholder="" value="{{ $product->price }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--ebook-&-price-->

                <!--customToken-&-loadBtn-->
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
                        <!-- <button data-toggle="modal" data-target="#choose-template"
                            class="btn btn-toggle ml-auto btn-load-template">Load
                            Product Page
                            Template</button> -->
                        <button id="loadTemplate" type="button" class="btn btn-toggle ml-auto btn-load-template">Load Product Page Template</button>
                    </div>
                    <div class="toggle-container">
                        <div class="toggle-item" id="show-template">
                            <div class="row">
                                <div class="col-5">
                                    <div class="text-content">
                                        <p>
                                            <span class="product-tips">Sales Page Required tokens:</span> <br>
                                            %button% - Buy Button Position <br>
                                            %upsell% - Upsell Header Position <br>
                                            %nothanks% - No Thanks Link Position
                                        </p>
                                        <p>
                                        <span class="product-tips">Squeeze (Thank You) Page Required tokens:</span> <br>
                                            %form% - Autoresponder Form Position
                                        </p>
                                        <p>
                                        <span class="product-tips">Download Page Required tokens:</span> <br>
                                            %download% - Download Product Link Position <br>
                                            %license% - Download License Link Position
                                        </p>
                                        <p>
                                        <span class="product-tips">Exit Pop-Up Sales Page Required tokens:</span> <br>
                                            %form% - Autoresponder Form Position
                                        </p>
                                        <p>
                                        <span class="product-tips">Exit Pop-Up Download Page Required tokens:</span> <br>
                                            %download% - Download Product Link Position <br>
                                            %license% - Download License Link Position
                                        </p>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-content">
                                        <p>
                                        <span class="product-tips">All Pages Optional tokens:</span> <br>
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
                <!--customToken-&-loadBtn-->

                <!-- <ul class="nav select-page-type nav-pills" role="tablist">
                    <a class="btn no-shadow btn-page-type btn-sales-page" data-toggle="pill" href="#sales-page"
                        role="tab">Sales
                        Page Content
                    </a>
                    <a class="btn btn-page-type no-shadow active" data-toggle="pill" href="#squeeze-page"
                        role="tab">
                        Squeeze (ThankYou) Page
                        <i class="flaticon-question icons"></i>
                    </a>
                    <a class="btn no-shadow btn-page-type" data-toggle="pill" href="#download-page" role="tab">
                        Download Page
                        Content
                    </a>
                </ul> -->

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
                </ul>

                <!-- <div class="editor-wrap mb-4">
                    <textarea class="tinymce w-100" name="description" id="myeditorinstance" cols="30" rows="10"></textarea>
                </div>  -->
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container fade" role="tabpanel" id="sales-page">
                        <div class="editor-wrap mb-4">
                            <!-- <div id="editor-sales"></div> -->
                            <textarea class="tinymce w-100" name="sales_page_content" id="myeditorinstance1" data-edit="myeditor1" cols="30" rows="10">{!! isset($product->sales_page_content) ? $product->sales_page_content : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane container active" role="tabpanel" id="squeeze-page">
                        <div class="editor-wrap mb-4">
                            <!-- <div id="editor-squeeze"></div> -->
                            <textarea class="tinymce w-100" name="squeeze_thankyou_page" id="myeditorinstance2" data-edit="myeditor2" cols="30" rows="10">{!! isset($product->squeeze_thankyou_page) ? $product->squeeze_thankyou_page : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane container fade" role="tabpanel" id="download-page">
                        <div class="editor-wrap mb-4">
                            <!-- <div id="editor-download"></div> -->
                            <textarea class="tinymce w-100" name="download_content_page" id="myeditorinstance3" data-edit="myeditor3" cols="30" rows="10">{!! isset($product->download_content_page) ? $product->download_content_page : '' !!}</textarea>
                        </div>
                    </div>
                </div>


                <!-- <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="sales-page" role="tabpanel"
                        aria-labelledby="sales-page-tab">...</div>
                    <div class="tab-pane fade" id="squeeze-page" role="tabpanel"
                        aria-labelledby="squeeze-page-tab">...</div>
                    <div class="tab-pane fade" id="download-page" role="tabpanel"
                        aria-labelledby="download-page-tab">...</div>
                </div> -->

                <div class="bg-blue-wrap" style="display:none;">
                    <div class="toggle-section">
                        <div class="text">
                            <div class="text-inner text-label">
                                Click To Enable/Disable Exit Pop-Up Pages
                            </div>
                            <label class="switch mb-0">
                                <input type="checkbox" name="is_exit_popup_page_enabled" id="is-exit-active">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="pop-up-page-edit fade">
                
                    <ul class="nav nav-pills select-page-type" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link btn btn-page-type btn-squeeze no-shadow active" id="exit-sales-tab"
                                data-toggle="pill" href="#exit-sales" role="tab" aria-controls="exit-sales"
                                aria-selected="false">
                                Exit Pop-Up Sales Pages
                                Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn no-shadow btn-page-type" id="download-page-tab"
                                data-toggle="pill" href="#exit-download" role="tab" aria-controls="exit-download"
                                aria-selected="false">
                                Exit Pop-Up Download Pages Content
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane container active" role="tabpanel" id="exit-sales">
                            <div class="editor-wrap mb-4">
                                <!-- <div id="exit-sales-editor"></div> -->
                                <textarea class="tinymce w-100" name="exit_popup_sales_page_content" id="myeditorinstance4" data-edit="myeditor4" cols="30" rows="10">{!! isset($product->exit_popup_sales_page_content) ? $product->exit_popup_sales_page_content : '' !!}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane container fade" role="tabpanel" id="exit-download">
                            <div class="editor-wrap mb-4">
                                <!-- <div id="exit-download-editor"></div> -->
                                <textarea class="tinymce w-100" name="exit_popup_download_page" id="myeditorinstance5" data-edit="myeditor5" cols="30" rows="10">{!! isset($product->exit_popup_download_page) ? $product->exit_popup_download_page : '' !!}</textarea>
                            </div>
                        </div>
                    </div>

                
                </div>


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