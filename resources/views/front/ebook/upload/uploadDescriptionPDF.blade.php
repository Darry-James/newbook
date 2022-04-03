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
    <body>
    
        @if ($cover_image_local != '')
        <div id="cover" style="background-image: url('https://funnel.hypersoftmedia.com/backend/assets/images/big/{{$cover_image_local}}');
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
  
    </body>
  
   
</html>