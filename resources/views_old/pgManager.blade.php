@php $pageTitle = 'Ebook PDF Creator' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')
<style>
    .right-section .tab-pane-url .form-group{
        max-width: 100%;
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
<style>
    .form-group {
        margin-bottom: 0rem!important;
    }

    input:focus,
    textarea:focus, 
    textarea.form-control:focus, 
    input.form-control:focus, 
    input[type=text]:focus, 
    input[type=password]:focus, 
    input[type=email]:focus, 
    input[type=number]:focus, 
    [type=text].form-control:focus, 
    [type=password].form-control:focus, 
    [type=email].form-control:focus, 
    [type=tel].form-control:focus, 
    [contenteditable].form-control:focus {
    outline: none!important;
    }

    textarea {
        resize: none!important;
    }

    .clickable {
        cursor: pointer!important;
    }
</style>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between navbar-light bg-dark">
        <div class="text-white">You are editing: <span id="editedContent" style="text-transform: capitalize;">-</span></div>
        <div>
            
            <button class="btn btn-light" id="save-once" disabled onclick="saveOnce()">Save</button>
            <button class="btn btn-primary" id="save-all">Save and Close</button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 py-2 bg-secondary" style="height: 80vh; overflow-y: auto;">
                <div class="editor-wrap">
                    <textarea class="tinymce" name="site_content" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-4 py-3" style="height: 80vh; overflow-y: auto;">
                <!-- <form id="form" onSubmit="submitForm()"> -->
                    <input type="hidden" id="chapter_id" name="chapter_id" value="{{ isset($chapter_id) ? $chapter_id : '' }}">
                    <input type="hidden" id="chapter_type" name="chapter_type" value="{{ $chapter_type }}">
                    <div class="p-1 border shadow-sm mb-2">
                        <div class="form-group">
                            <label class="font-weight-bold px-1" for="">Header Title</label>
                            <div contenteditable="false" id="title-box" data-editor="title" class="clickable form-control form-control-lg" style="overflow: hidden;height: auto;resize: none;">{!! $title !!}</div>
                        </div>
                    </div>

                    <div class="p-1 border shadow-sm mb-2">
                        <div class="form-group">
                            <label for="">Source (optional)</label>
                            <div contenteditable="false" id="author-box" data-editor="author" class="clickable form-control form-control-lg" style="overflow: hidden;height: auto;resize: none;">{!! $author !!}</div>
                        </div>
                    </div>

                    <div class="p-1 border shadow-sm mb-2">
                        <div class="form-group">
                            <label for="">Content</label>
                            <div contenteditable="false" id="description-box" data-editor="description" class="clickable form-control form-control-lg" style="overflow: hidden; height: auto;resize: none;">{!! $description !!}</div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

@section('extra_div')

@endsection

@section('extra_js')
<script>
let editedContent; //in tinymce navbar

let editorChangeHandlerId;
tinymce.init({
     selector: '.tinymce', // Replace this CSS selector to match the placeholder element for TinyMCE
     height:500,
    
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

    //handling onchange in tinymce
    setup: function(editor) {
        editor.on('Paste Change input Undo Redo', function () {
            var x = editor.getContent({format: "html"});
            $('#'+editedContent+'-box').html(x);
            // alert(editedContent);
            /* enable save button */
            $('#save-once').attr('disabled',false);
        });
    }
   });
   
   //each input field
   $('.clickable').click(function(){
        var content = $(this).html();
        var edited = $(this).data('editor');

        $('#editedContent').text(edited);

        editedContent = edited;

        tinymce.editors[0].setContent(content);
    });

    
    function saveOnce(){
        var x = editedContent;
        var content = tinymce.editors[0].getContent({format: "html"}); //xtract tinymce html. use 'text' to extract text
        
        $('[data-editor="'+x+'"]').html(content);

        //unset editor
        //tinymce.editors[0].setContent('');
        //unset editedContent
        //editedContent = '';
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $("#save-all").click(function(e){
  
        e.preventDefault();
        
        var chapterId = $('#chapter_id').val();
        var chapterType = ($('#chapter_type').val()=='') ? '' : $('#chapter_type').val();
        
        var title = $('#title-box').html();
        var author = $('#author-box').html();
        var description = $('#description-box').html();

        // const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top-end',
        //     showConfirmButton: false,
        //     timer: 1000
        // });
   
        $.ajax({
           type:'POST',
           url:"{{ route('pgManagerPost') }}",
           data:{chapterId:chapterId, chapterType:chapterType, title:title, author:author, description:description},
           success: function(resp){
				console.log(resp);							
                if (resp.status == 201) {
                        
                    swal.fire('Success', 'Updated Successfully', 'success');
                        setTimeout(function(){
                            window.location.reload();
                        },2000);
                         
                    } else {
                        swal.fire('Error', 'Server Error', 'error');
                    }
                console.log("success");
        
                },error:function(){
                    swal.fire('Error', 'Something Went Wrong', 'error');
                }
        });
  
    });

function saveAll(){
    var formArray = {'title':$('#title-box').html(),'author':$('#author-box').html(),'description':$('#description-box').html()};
    let chapterId = $('#chapter_id').val();
    var base_url = '{{ url('/') }}';
    var route = base_url+'/'+chapterId;
 
    $.post('http://127.0.0.1:9100/save-pgManager/'+chapterId,formArray,function(data, status){
        console.log('Saved!');
            //unset editor
            tinymce.editors[0].setContent('');
            //unset editedContent
            editedContent = '';
            alert('Saved to database successfully!');
    }, function(err){
        console.log('Could not save. Something went wrong');
    });
    
}

// let editorChangeHandlerId;
// tinymce.init({
//     setup: function(editor) {
//         editor.on('Paste Change input Undo Redo', function () {
//             clearTimeout(editorChangeHandlerId);
//             editorChangeHandlerId = setTimeout(function() {
//                 console.log('changed');
//             }, 100);
//         });
//     }
// });

   
    //     $('.ckeditor').ckeditor({
    //         height: 50
    //     });

    //     ClassicEditor
    //         .create( document.querySelector( '.editor' ) )
    //         .then( editor => {
    //             console.log( editor );
    //         })
    //         .catch( error => {
    //             console.error( error );
    //         });


   

    //ckeditor5
	// ClassicEditor
	// 	.create( document.querySelector( '.ckeditor' ), {
	// 		// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
	// 	} )
	// 	.then( editor => {
	// 		window.editor = editor;
	// 	} )
	// 	.catch( err => {
	// 		console.error( err.stack );
	// 	} );

</script>

@endsection

@endsection