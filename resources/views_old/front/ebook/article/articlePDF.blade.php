<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Article Ebook</title>
      {{-- <link rel="stylesheet" href="style.css" media="all" /> --}}
      <style>
  
          @page {
              header: page-header;
              footer: page-footer;
          }
                      
          @font-face {
              font-family: Junge;
              src: url(Junge-Regular.ttf);
          }
  
          .clearfix:after {
              content: "";
              display: table;
              clear: both;
          }
  
          a {
              color: #001028;
              text-decoration: none;
          }
  
          body {
              font-family: Junge;
              position: relative;
              /* width: 21cm;   */
              height: 29.7cm; 
              margin: 0 auto; 
              color: #001028 !important;
              /* background: #001028 !important;  */
              background: #fff !important;
              font-size: 12px; 
          }
  
          .arrow {
              margin-bottom: 4px;
          }
  
          .arrow.back {
              text-align: right;
          }
  
          .inner-arrow {
              padding-right: 10px;
              height: 30px;
              display: inline-block;
              background-color: rgb(233, 125, 49);
              text-align: center;
  
              line-height: 30px;
              vertical-align: middle;
          }
  
          .arrow.back .inner-arrow {
              background-color: rgb(233, 217, 49);
              padding-right: 0;
              padding-left: 10px;
          }
  
          .arrow:before,
          .arrow:after {
              content:'';
              display: inline-block;
              width: 0; height: 0;
              border: 15px solid transparent;
              vertical-align: middle;
          }
  
          .arrow:before {
              border-top-color: rgb(233, 125, 49);
              border-bottom-color: rgb(233, 125, 49);
              border-right-color: rgb(233, 125, 49);
          }
  
          .arrow.back:before {
              border-top-color: transparent;
              border-bottom-color: transparent;
              border-right-color: rgb(233, 217, 49);
              border-left-color: transparent;
          }
  
          .arrow:after {
              border-left-color: rgb(233, 125, 49);
          }
  
          .arrow.back:after {
              border-left-color: rgb(233, 217, 49);
              border-top-color: rgb(233, 217, 49);
              border-bottom-color: rgb(233, 217, 49);
              border-right-color: transparent;
          }
  
          .arrow span { 
              display: inline-block;
              width: 80px; 
              margin-right: 20px;
              text-align: right; 
          }
  
          .arrow.back span { 
              margin-right: 0;
              margin-left: 20px;
              text-align: left; 
          }
  
          h1 {
              color: #5D6975;
              font-family: Junge;
              font-size: 1.0em;
              line-height: 1.4em;
              font-weight: normal;
              text-align: center;
              border-top: 1px solid #5D6975;
              border-bottom: 1px solid #5D6975;
              margin: 0 0 2em 0;
          }
  
          h1 small { 
              /* font-size: 0.45em; */
              font-size: 0.5em;
              /* line-height: 1.5em; */
              float: left;
          } 
  
          h1 small:last-child { 
              float: right;
          } 
  
          #project { 
              float: left; 
          }
  
          #company { 
              float: right; 
          }
  
          #details {
              margin-bottom: 30px;
          }

          /* #cover {
            background-image: url("https://res.cloudinary.com/funnel/image/upload/v1636124095/sample.jpg");
            background-image-resize: 6;
        } */
  
          footer {
              color: #5D6975;
              width: 100%;
              height: 30px;
              position: absolute;
              bottom: 0;
              border-top: 1px solid #C1CED9;
              padding: 8px 0;
              text-align: center;
          }


  
      </style>
    </head>
    <body style="font-size: {{ $body_font_size != '' ? $body_font_size : '12px;' }};
            font-family: {{ $body_font_family != '' ? $body_font_family : 'Junge'}};">

      <htmlpageheader name="page-header">
          @if($page_numbering == 'in_header')
  
          <table width="100%" style="vertical-align: bottom; font-family: serif; font-size: {{ $header_font_size }};
                color: #000000; font-weight: bold; font-style: italic;">
              <tr>
                  <td width="50%" style="text-align: {{ $header_text_align != '' ? $header_text_align : 'right' }};
                   font-weight: bold; font-style: italic;">
                      @if ($numbering_format == '[page]')
                          {PAGENO}
                      @elseif($numbering_format == '-[page]-')
                          -{PAGENO}- 
                      @elseif($numbering_format == 'Page [page]')
                          Page {PAGENO} 
                      @elseif($numbering_format == 'Page [page] of [topage]')
                          Page {PAGENO} of {nbpg}
                      @endif
                      {{-- {PAGENO}/{nbpg} --}}
                  </td>
              </tr>
          </table>
  
          @else
  
          <div style="text-align: {{ $header_text_align != '' ? $header_text_align : 'right' }};
                color: {{ $header_text_color }}; font-size: {{ $header_font_size }};
                font-family: {{ $header_font_family }};">
                <a href="{{ $header_text_link != '' ? $header_text_link : 'javascript:void(0)' }}">
                    {{ $header_text != '' ? $header_text : '' }}
                </a>
          </div>
  
          @endif
  
          @if ( $subheader_text != '' )
          <div style="text-align: {{ $subheader_text_align }}; color: {{ $subheader_text_color }};
            font-size: {{ $subheader_font_size }}; font-family: {{ $subheader_font_family }};">
            <a href="{{ $subheader_text_link != '' ? $subheader_text_link : 'javascript:void(0)' }}">
                {{ $subheader_text }}
            </a>
          </div>
          @endif
          
      </htmlpageheader>

      @if ($cover_image_local != '')
        <div id="cover" style="background-image: url('http://res.cloudinary.com/funnel/image/upload/v1636124095/sample.jpg');
            background-image-resize: 6; left:0; right: 0; top: 0; bottom: 0; width: 210mm; height: 297mm;"> 
        </div>
      @endif  
    
      @if($description != '')
      <div style="text-align: justify;">
        
          <p style="font-size: 1.0em;">
              <h4>DESCRIPTION</h4>
              {!! $description !!} 
          </p>
          <pagebreak>
      </div>
      @endif
  
      <div class="toc">
          <tocpagebreak toc-odd-header-name="tocheader" toc-prehtml="&lt;h4&gt;Table of Contents&lt;/h4&gt;">
      </div>
  
      @foreach ($articleData as $article)
      
      <div style="page-break-before : always">  
          <tocentry content="{{ strip_tags($article['title']) }}" />
          <div style="text-align: justify;">
              <p style="font-size: 1.0em;">
                  <h4 style="text-align: {{ $title_text_align != '' ? $title_text_align : 'left' }};
                    color: {{ $title_text_color != '' ? $title_text_color : 'black' }}; ">
                    {!! $article['title'] !!}
                   </h4>
                  <div>
                      {!! $article['description'] !!}
                  </div>
                  
              </p>
          </div>
          <pagebreak>
        </div>
      
      @endforeach
  
      
  
        @if($summary != '')
      <div style="text-align: justify;">
          <p style="font-size: 1.0em;">
              <h4>SUMMARY</h4>
              {!! $summary !!} 
          </p>
      </div>
      @endif
      
      <main>
            
      </main>
      <htmlpagefooter name="page-footer">
          @if($page_numbering == 'in_footer')
  
          <table width="100%" style="vertical-align: bottom; font-family: serif; font-size: {{ $footer_font_size }};
            color: #000000; font-weight: bold; font-style: italic;">
              <tr>
                  <td width="50%" style="text-align: {{ $footer_text_align != '' ? $footer_text_align : 'right' }};
                  font-weight: bold; font-style: italic;">
                      @if ($numbering_format == '[page]')
                          {PAGENO}
                      @elseif($numbering_format == '-[page]-')
                          -{PAGENO}- 
                      @elseif($numbering_format == 'Page [page]')
                          Page {PAGENO} 
                      @elseif($numbering_format == 'Page [page] of [topage]')
                          Page {PAGENO} of {nbpg}
                      @endif
                      {{-- {PAGENO}/{nbpg} --}}
                  </td>
              </tr>
          </table>
  
          @else
  
          <div style="text-align: {{ $footer_text_align != '' ? $footer_text_align : 'right' }};
            color: {{ $footer_text_color }}; font-size: {{ $footer_font_size }};
            font-family: {{ $footer_font_family }};">
            <a href="{{ $footer_text_link != '' ? $footer_text_link : 'javascript:void(0)' }}">
                {{ $footer_text }}
            </a>
          </div>
  
          @endif
      </htmlpagefooter>
    </body>
  
   
</html>