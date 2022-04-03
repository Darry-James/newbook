@php $pageTitle = 'Ebook PDF Creator' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')   

<style>
    #myTable td:hover{
        cursor:move;
    }
    .rounded {
        border-radius: 0.25rem;
        width: 100%;
        height: 100%;
    }
    img, video {
        max-width: 100%;
        height: auto;
    }
    .img-box{
        border: 5px solid #e2e2e2;
    }
    .selected_dfyChapter:hover{
        cursor: pointer;
    }

    tr td.row{
        margin-left: 5px;
    }
</style>
@endsection

@section('content')

    <div class="content-section">
        <div class="container-fluid custom-x-padding">
            @include('partials.message')

            <div class="bg-light create-manual-box pb-3">
                <div class="d-flex align-item-center mb-5">
                    <h5 class="title">Upload Your Ebook</h5>
                    <a href="{{ route('ebookCreator') }}" class="btn d-flex btn-find">
                        <i class="flaticon-left-arrow icons"></i>
                        Back To Library </a>
                </div>

                <!--form-start--->
                <form action="{{ route('uploadSetUpPost') }}" method="POST" id="setupForm" enctype="multipart/form-data">@csrf

                    <!--title-start-->
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_title">TITLE</label>
                                <input id="ebook_title" class="form-control no-shadow input-signin" type="text" name="title" value="{{ $keywords ? $keywords : '' }}" required>
                                @if ($errors->has('title')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('title') }}</p> @endif
                            </div>
                        </div>
                        
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_author">AUTHOR</label>
                                <input id="author_name" class="form-control no-shadow input-signin" type="text" name="ebook_author" autocomplete="on" value="{{ $author }}" required>
                                @if ($errors->has('ebook_author')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('ebook_author') }}</p> @endif
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_cover_image">COVER IMAGE (OPTIONAL)</label>
                                <input id="ebook_cover_image" class="form-control no-shadow input-signin file_link" type="url" name="cover_image" value="">
                                @if ($errors->has('cover_image')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('cover_image') }}</p> @endif
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn-flex align-item-left mt-4">
                                <a class="btn btn-browse" data-toggle="slide-in-wrap" data-toggle="modal" data-target="#media-modal">Browse</a> 
                                
                                <a class="btn btn-danger ml-1 text-white">Reset</a>
                            </div>
                        </div>
                        
                    </div>
                    <!--title-end-->

                    <!--description-start--->
                    <div class="editor-main x-pd-r">
                        <div class="label">DESCRIPTION (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            {{-- <div id="editor" name="description"></div> --}}
                            <textarea class="ckeditor w-100" name="description" id="" cols="30" rows="10">{{ \Session::get('description') ? \Session::get('description') : '' }}</textarea>
                            @if ($errors->has('description')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('description') }}</p> @endif
                        </div>
                    </div>
                    <!--description-end--->

                    <!--summary-start--->
                    <div class="editor-main x-pd-r">
                        <div class="label"> SUMMARY (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            {{-- <div id="pop-editor" name="summary"></div> --}}
                            <textarea class="ckeditor w-100" name="summary" id="" cols="30" rows="10">{{ \Session::get('summary') ? \Session::get('summary') : '' }}</textarea>
                            @if ($errors->has('summary')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('summary') }}</p> @endif
                        </div>
                    </div>
                    <!--summary-end--->

                    <div class="d-flex justify-content-end mt-2 mb-4 x-pd-r d-none">
                        <button class="btn btn-find" type="submit">Save Changes</button>
                    </div>

                    <!--ebookChapters-start--->
                    <div class="x-pd-r mb-3 d-none">
                        <div class="table-gen-chapter-wrap">
                            <div class="table-head">
                                <div class="right-section align-items-center">
                                    <div class="content">
                                        <div class="title">eBook Chapters</div>
                                        <div class="desc">Drag & Drop table rows to change the ebook chapters order and press</div>
                                    </div>
                                    <div>
                                        <a class="btn btn-gen-chapter">Save Order</a>
                                    </div>
                                </div>
                                <div class="left-section ml-auto">
                                    <a href="#" class="btn btn-gen-chapter">Add New Chapter</a>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>CURRENT</th>
                                        <th class="text-left">TITLE</th>
                                        <th class="text-left">ACTION</th>
                                        <th class="text-left">NEW</th>
                                    </tr>
                                </thead>
                                <tbody id="selectedArts">
                                    {{-- <tr></tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--ebookChapters-end--->

                    <!--ebookChapters-start--->
                    
                    <!--ebookChapters-end--->
 
                </form>
                <!--form-end--->

               
                
            </div>
        </div>
    </div>

    @section('extra_div')

    <div class="modal fade" id="media-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Media Library</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="active"><a href="#upload" class="btn" data-toggle="tab">Upload</a></li>
                    <li><a href="#library" class="btn" id="libraryTab" data-toggle="tab">Library</a></li>
                </ul>

                <!-- tab panes -->
							<div class="tab-content">
								<div class="tab-pane active fade in" id="upload">
									<p>upload will be here..</p>
									<button class="btn btn-info">Add Files</button>
								</div>

								<!-- library tab -->
								<div class="tab-pane fade" id="library">
									<!-- images hard coded.. -->
									<!-- data-image-id contains image id from database... -->
                                   
                                    <div class="container-fluid">
                                        <div class="row">
                                            @if (count($ecoverList) > 0)
                                            @foreach ($ecoverList as $each_ecover)
                                                <div class="col-md-3 mb-1 mt-2">
                                                    <a href="javascript:void(0);" id="{{ $each_ecover->id }}" data-source="{{ asset('/backend/assets/images/big/'.$each_ecover->thumbnail) }}" class="selected_file">
                                                        <img class="rounded" src="{{ asset('/backend/assets/images/big/'.$each_ecover->thumbnail) }}" alt="{{ env('APP_NAME') }}" />
                                                    </a>
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>

									<div class="clearfix"></div>
									
								</div><!-- end .library -->
							</div><!-- end tab-content -->
                {{-- <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">.col-md-4</div>
                    </div>
                </div> --}}
            </div>
            </div>
            
          </div>
        </div>
      </div>
    <!-- Fancy Box -->
    {{-- <div id="dialog-content" style="display:none;">
        <h2>Ecovers </h2>
        <div id="grouped-images-2" class="pb-16 flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
            <div class="row">
                @if (count($ecoverList) > 0)
                @foreach ($ecoverList as $each_ecover)
                    <div class="col-lg-3 col-md-4">
                        <a href="{{ $each_ecover->thumbnail }}">
                            <img class="rounded" src="{{ $each_ecover->thumbnail }}" alt="{{ env('APP_NAME') }}" />
                        </a>
                        <button class="btn btn-primary">Select</button>
                    </div>
                @endforeach                
            @endif
            </div>
        </div>
    </div> --}}
    @endsection 

@section('extra_js')  

  @include('front.js_files.eBookJsHandler')

  <script>
      var regenerateBtn = $('#regenerateBtn'),
          setupForm = $('#setupForm');

          regenerateBtn.on("click", function () {
            setupForm.submit();
          });
  </script>

  <script>
      clientArray = [];
      $("#copyDfyChaptersBtn").click(function(e){
        e.preventDefault();
        
        var copiedDfyChaptersArticle = $("input[name=copiedDfyChaptersArticle]").val();
        var copiedDfyChaptersDescription = $("input[name=copiedDfyChaptersDescription]").val();

        var found = $.inArray(copiedDfyChaptersArticle, clientArray)
        if(found >= 0) {
            //Element was found update errorMessage div
            //$(errorMessage).html("This Client Already Exists");
            console.log('clicked', 'already exists');

        }   else{
                clientArray.push(copiedDfyChaptersArticle);
                // console.log(clientArray);
                updateTable(clientArray);
        } 
        
      });
      function updateTable(clientArray){
        var action = ' <nav class="nav justify-content-center table-actions"><li class="nav-item"> <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><img src="../assets/icons/copy to my funnel.svg" alt=""></a></li><li class="nav-item"><a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><img src="../assets/icons/try/funnel project svg/ic_cancel_24px.svg" alt=""></a></li></nav> ';

        var counter = 1; //for formality

        //var inputhidden_article = '<input type="hidden" name="articleTitle[]" value="'+ copiedDfyChaptersArticle +'">';
        //var inputhidden_desc = '<input type="hidden" name="articleDescription[]" value="'+ copiedDfyChaptersDescription +'">';

        $('#selectedArts').empty(); //reset
        $.each(clientArray, function (key, value) 
        {
            $('#selectedArts').append('<tr> <td class="row">' + key + '</td>  <td>' + value + '</td> <td class="text-center">' + action + '</td> <td class="text-center">' + counter++ +'<input type="hidden" name="articleTitle[]" value="'+ value +'">'+ '</td></tr>');
        });
      }
  </script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

  <script>
      var mediaModal = $('#media-modal'),
        file_link = $('.file_link');
        closemodal = $('#close-modal');

        closemodal.on("click", function(){
            mediaModal.removeClass('show');
        });

        //each img
        $( ".selected_file" ).each(function(index) {
            $(this).on("click", function(){
                
                var imgSrc = $(this).data('source');
                console.log(imgSrc);
                //var imgId = $(this).attr('id'); 
                file_link.val(imgSrc);
                mediaModal.removeClass('show');
            });
        });

  </script>

  <script>
      var copy_to_ebookBtn = $('#copy-to-ebook');
      copiedDfyChaptersArticle = $('#copiedDfyChaptersArticle');
      copiedDfyChaptersDescription = $('#copiedDfyChaptersDescription');
      //console.log(copy_to_ebookBtn.data('dfyvalue', 'ipsum'));
      //console.log(copy_to_ebookBtn.attr('dfyvalue', 'something.jpg'));

      $( ".selected_dfyChapter" ).each(function(index) {
            $(this).on("click", function(){
                $( ".selected_dfyChapter" ).css({'backgroundColor':'', 'color':'black'});
                $(this).css({'backgroundColor':'blue', 'color':'white'});
                $('#copyDfyChaptersBtn').prop('disabled', false);
                var article_title = $(this).find(".article_title").val();
                var article_description = $(this).find(".article_description").val();
               var copiedDfyChaptersArticle2 = copiedDfyChaptersArticle.val(article_title);
               var copiedDfyChaptersDescription2 = copiedDfyChaptersDescription.val(article_description);
    
            });            
        });       
  </script>



<script>
    $(document).on('change', '#page_numbering', function(){
        $value = $(this).val();
        // console.log($value);
        if($value=="in_header"){
            $('#header_text').attr({'disabled':true});
            $('#header_text_link').attr({'disabled':true});
        }
        if($value=="in_footer"){
            $('#footer_text').attr({'disabled':true});
            $('#footer_text_link').attr({'disabled':true});
        }
    });

    $page_numbering = $('#page_numbering').val();
    if($page_numbering=="in_header"){
        $('#header_text').attr({'disabled':true});
        $('#header_text_link').attr({'disabled':true});
    }
    if($page_numbering=="in_footer"){
        $('#footer_text').attr({'disabled':true});
        $('#footer_text_link').attr({'disabled':true});
    }
    // console.log($page_numbering);
</script>

@endsection

@endsection