@php $pageTitle = 'Ebook-URL Creator' @endphp
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
<div class="loader" style="display:none;"></div>
<div class="content-section py-4">
    <div class="container-fluid custom-padding">
        <div class="create-wrap">
            <div class="left-section d-none">
                <h5 class="title-main">
                    Create eBook</h5>
                <div class="foot-content">
                    <div class="title">General Chapters</div>
                    <div class="desc">
                        Create the additional content such as About Me / Us, Introduction, Summary, etc. to
                        be
                        reused in different eBooks
                    </div>
                    <div class="d-flex justify-content-end mt-1">
                        <a class="btn btn-add-chapter" href="#">Add New Chapter</a>
                    </div>
                </div>
                <div class="nav flex-column nav-pills ebook-nav" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-facebook-tab" href="create-ebook-article.html"
                        role="tab" aria-controls="v-pills-facebook" aria-selected="true">
                        <img src="../assets/icons/content.svg" alt="">
                        Create from article
                    </a>
                    <a class="nav-link" id="v-pills-twitter-tab" href="create-ebook-manual.html" role="tab"
                        aria-controls="v-pills-twitter" aria-selected="false">
                        <img src="../assets/icons/information.svg" alt="">
                        Create manually
                    </a>
                    <a class="nav-link active" id="v-pills-linkedin-tab" href="create-ebook-url.html"
                        role="tab" aria-controls="v-pills-linkedin" aria-selected="false">
                        <img src="../assets/icons/link.svg" alt="">
                        Create from URL
                    </a>
                    <a class="nav-link" id="v-pills-google-tab" href="create-ebook-upload.html" role="tab"
                        aria-controls="v-pills-google" aria-selected="false">
                        <img src="../assets/icons/upload.svg" alt="">
                        Upload from eBook
                    </a>
                    <a class="nav-link" id="v-pills-custom-tab" href="create-ebook-choose.html" role="tab"
                        aria-controls="v-pills-custom" aria-selected="false">
                        <img src="../assets/icons/hand.svg" alt="">
                        Choose DYF eBooks
                    </a>
                </div>

            </div>
            <div class="right-section w-100">
                <div class="tab-content h-100" id="v-pills-tabContent">

                    <div class="tab-pane tab-pane-url fade  show active" id="v-pills-linkedin" role="tabpanel"
                        aria-labelledby="v-pills-linkedin-tab">
                        <h6 class="tab-title">Create from URL</h6>


                        <form action="{{ route('urlGrabPost') }}" method="post" class="mt-5 w-100">@csrf
                            
                            <div class="form-group w-100">
                                <input id="my-input" class="form-control tab-form no-shadow w-100 text-dark" type="text"
                                    name="site_url" placeholder="Enter URL" value="{!! $site_url !!}">
                            </div>

                            <div class="d-flex justify-content-left bottom-btn-wrap mb-5 btn-wrap d-none">
                                <button class="btn btn-find">
                                    Grab URL
                                </button>
                            </div>

                            <div class="result-area">
                                <h6 class="tab-title">Grab Result</h6>

                                <div class="editor-wrap">
                                    <textarea class="ckeditor w-100" name="site_content" id="" cols="30" rows="100">
                                        {!! $url_articles !!}
                                    </textarea>
                                </div>

                                <div class="d-flex justify-content-end bottom-btn-wrap mb-5">
                                    <button type="submit" class="btn btn-find">
                                        Create
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@section('extra_div')

@endsection

@section('extra_js')
<script>
   
        $('.ckeditor').ckeditor({
            height: 200
        });

</script>

@endsection

@endsection