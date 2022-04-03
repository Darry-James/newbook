@php $pageTitle = 'My Library' @endphp
@extends('front.layouts.frontDesign')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-x-padding">
        <h5 class="head-title">
            My Library
        </h5>
        <div class="d-flex align-items-center page-desc-head">
            <h5 class="desc-title">
                My eBook
            </h5>
            <button class="btn btn-create-cover">
                Create ebook
            </button>
        </div>
        <div class="table-wrap mb-5">
            <div class="manage-table-overflow">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">ECOVER</th>
                            <th class="text-center">TITLE/SUMMARY</th>
                            <th>TYPE</th>
                            <th># PAGE</th>
                            <th>FILE SIZE</th>
                            <th class="text-center">LAST UPDATE</th>
                            <th>DOWNLOAD</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($ebooks) > 0)
                            @php $counter = 1; @endphp
                            @foreach ($ebooks as $ebook)
                        <tr>
                            <td scope="row">{{ $counter }}</td>
                            <td>
                                <img class="ecover-prev"
                                    src="{{ $ebook->cover_image }}" alt="cover image">
                            </td>
                            <td class="text-justified ecover-prev-text">
                                <div class="title">{{ $ebook->title }}</div>
                                {{-- {!! $ebook->summary ? substr($ebook->summary,0,30).'...' : substr($ebook->description,0,10).'...' !!} --}}
                                
                                @if (isset($ebook->summary))
                                    {!! (strlen($ebook->summary) > 28) ? substr($ebook->summary, 0, 28) . '...' : $ebook->summary !!}
                                @elseif (isset($ebook->description))
                                    {!! (strlen($ebook->description) > 28) ? substr($ebook->description, 0, 28) . '...' : $ebook->description !!}
                                @endif
                                
                            </td>
                            <td>{{ $ebook->type ? $ebook->type : 'MANUAL' }}</td>
                            <td>N/A</td>
                            <td class="text-center">N/A</td>
                            <td class="text-center">
                                {{ $ebook->updated_at }}<br>
                                {{ $ebook->updated_at->format('H:i:s') }}
                            </td>
                            <td>
                                <nav class="nav flex-column funnel-download-list">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('library',[$ebook->unique_id, 'download_pdf']) }}">PDF</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">EPUB</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">MOBI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">DOCX</a>
                                    </li>
                                </nav>
                            </td>
                            <td>
                                <nav class="nav flex-column table-actions">
                                    @php
                                            $fileName = substr($ebook->cover_image, strrpos($ebook->cover_image, '/') + 1);
                                        @endphp
                                    <li class="nav-item">
                                        <a class="nav-link selected_file_preview" target="_blank" href="{{ route('library',[$ebook->unique_id, 'preview']) }}" data-toggle="tooltip"
                                            data-placement="left" title="Preview" data-src="/front/image/ecover/{{$fileName}}" data-alt="{{ $fileName }}">
                                            <img src="/front/icons/preview ebook.svg" alt="">
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Regenerate">
                                            <img src="/front/icons/try/funnel project svg/renerate ebook.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Edit">
                                            <img src="/front/icons/copy to my funnel.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Delete">
                                            <img src="/front/icons/delete.svg" alt="">
                                        </a>
                                    </li>
                                </nav>
                            </td>
                        </tr>
                        @php $counter++ @endphp 
                        @endforeach

                        @else
                            <tr><td class="w-100">No Data Available at this Moment</td></tr>
                        @endif
                        
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-find">
                    Create ebook
                </button>
            </div>
        </div>

    </div>
</div>

    @section('extra_div')
    
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