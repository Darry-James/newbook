<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ProductSaleSampleTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('product_sale_sample_templates')->insert([
            'unique_id' => Str::random(15),
            'created_by' => 1,
            'title' => 'Video Dark',
            'thumbnail' => 'video-dark.png',

            'sales_page_content' => '
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="utf-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <title>Sales Page</title>
                                <link href="https://digifunnellab.info/upload/tpl/1/css/bootstrap.min.css" rel="stylesheet">
                                <link href="https://digifunnellab.info/upload/tpl/1/css/style.css" rel="stylesheet">
                                <link href="https://digifunnellab.info/upload/tpl/1/css/font-awesome.min.css" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                <!--[if lt IE 9]>
                                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                <![endif]-->
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            </head>
                            <body class="dark">
                            <div class="wrapper">
                            <div class="section darker">
                            <div class="container text-center">%upsell%</div>
                            </div>
                            <div class="video-wrapper">
                            <div class="overflow">
                            <div class="container">
                            <div class="col-md-10 center-block">
                            <h2 class="filled-headline">Perfectly Compatible With Top Graphic &amp; Video Creators!</h2>
                            <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                            </div>
                            <div class="col-md-12">
                            <div class="embed-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/CVayZ3MRhys?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
                            <img src="https://digifunnellab.info/upload/tpl/1/img/shadow.png" class="img-responsive shadow center-block" />
                            <div class="clearfix"></div>
                            <div class="col-md-12 text-center">%button%</div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="section stay-white">
                            <div class="container">
                            <h2 class="headline2">WHY MY PRODUCT IS THE<br /><b style="color: #ee513e;">BEST SOLUTION</b> FOR YOUR BUSINESS?</h2>
                            <div class="col-md-6 col-xs-12 text-center">%cover%</div>
                            <div class="col-md-6 col-xs-12">
                            <ul class="list2">
                            <li><span style="color: inherit;"><b>Features 1</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin.</span></li>
                            <li><span style="color: inherit;"><b>Features 2</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat.</span></li>
                            <li><span style="color: inherit;"><b>Features 3</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat. In blandit felis lectus, vel rhoncus turpis consequat in.</span></li>
                            <li><span style="color: inherit;"><b>Features 4</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</span></li>
                            <li><span style="color: inherit;"><b>Features 5</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</span></li>
                            </ul>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            </div>
                            <div class="section sectiongray darker">
                            <div class="container">
                            <div class="col-md-12">Product Description In This Place</div>
                            </div>
                            </div>
                            </div>
                            <div class="section sectiongray stay-white">
                            <div class="container">
                            <div class="col-md-12 text-center">%button%</div>
                            </div>
                            </div>
                            <div class="section" id="testimonial" style="padding-bottom: 50px;">
                            <div class="container">
                            <h2 class="headline2"><b>TESTIMONIALS</b></h2>
                            <br />
                            <div class="row" style="padding-top: 0px; padding-bottom: 0px; margin: 0px auto; outline: none; width: 100%; max-width: 100%;">
                            <div class="col-md-6 col-xs-12 testi-item text-center">
                            <div style="padding: 0 10px;">
                            <div class="col-md-4"><img src="https://digifunnellab.info/upload/tpl/1/img/t1.png" class="center-block img-responsive img-circle" style="border: 1px solid rgba(0,0,0,0.2);" /></div>
                            <div class="col-md-8">
                            <div style="text-align: left; padding-left: 20px; margin-top: 17px; font-size: 18px;">"Donec lorem massa, tristique non dui eget, convallis euismod nulla. Phasellus non laoreet orci, a iaculis est. Sed nec vestibulum est, sit amet maximus sapien."</div>
                            <div style="margin-top: 20px; outline: none; text-align: center; font-size: 24px; display: block;"><b>- John Doe (www.site.com)</b></div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-xs-12 testi-item text-center">
                            <div style="padding: 0 10px;">
                            <div class="col-md-4"><img src="https://digifunnellab.info/upload/tpl/1/img/t2.png" class="center-block img-responsive img-circle" style="border: 1px solid rgba(0,0,0,0.2);" /></div>
                            <div class="col-md-8">
                            <div style="text-align: left; padding-left: 20px; margin-top: 17px; font-size: 18px;">"Donec lorem massa, tristique non dui eget, convallis euismod nulla. Phasellus non laoreet orci, a iaculis est. Sed nec vestibulum est, sit amet maximus sapien."</div>
                            <div style="margin-top: 20px; outline: none; text-align: center; font-size: 24px; display: block;"><b>- Jane Doe (www.site2.com)</b></div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="section sectiongray">
                            <div class="container">
                            <h2 class="headline2"><b>Frequently Asked Questions</b></h2>
                            <br />
                            <div class="row" style="padding-top: 0px; padding-bottom: 40px; margin: 0px; outline: none;">
                            <div class="col-md-6" style="outline: none;">
                            <div class="col-inner" style="padding: 0 10px;">
                            <div style="margin-top: 0px; outline: none; display: block;">
                            <div style="text-align: left;" class="faqer">
                            <div class="question"><b style="color: #ee513e;"><span style="color: inherit;">Q: Why do I need your product?</span><br /></b></div>
                            <div><span style="color: inherit;">&nbsp;</span></div>
                            <div class="answer"><span style="color: inherit;">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</span></div>
                            <div><span style="color: inherit;">&nbsp;</span></div>
                            <div class="question"><b style="color: #ee513e;">Q: What exactly is the product?</b></div>
                            <div></div>
                            <div class="answer">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</div>
                            <div></div>
                            <div class="question"><b style="color: #ee513e;">Q: How about customer support?</b></div>
                            <div></div>
                            <div class="answer">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</div>
                            <div></div>
                            <div></div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div style="padding: 0 10px;">
                            <div style="margin-top: 0px; outline: none; display: block;" aria-disabled="false">
                            <div style="text-align: left;" class="faqer">
                            <div class="question"><b style="color: #ee513e;">Q: Do I need any previous knowledge or experience?</b></div>
                            <div></div>
                            <div class="answer">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</div>
                            <div></div>
                            <div></div>
                            <div class="question"><b style="color: #ee513e;">Q: How much of my time will this take?</b></div>
                            <div></div>
                            <div class="answer">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</div>
                            <div></div>
                            <div class="question"><b style="color: #ee513e;">Q: Can I get a refund?</b></div>
                            <div></div>
                            <div class="answer">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="section stay-white">
                            <div class="container text-center">%nothanks%</div>
                            </div>
                            <div class="footer row">
                            <div class="footer-wrap container">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                            </div>
                            </div>
                            </div>
                            <script src="https://digifunnellab.info/upload/tpl/1/js/bootstrap.min.js"></script>
                            </body>
                            </html>
            ',
            
            'squeeze_thankyou_page' => '
                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>Thank You Page</title>
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/bootstrap.min.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/style.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/font-awesome.min.css" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                        <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                        <!--[if lt IE 9]>
                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                        <![endif]-->
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    </head>
                                    <body class="dark">
                                    <div class="wrapper">
                                    <div class="video-wrapper">
                                    <div class="overflow">
                                    <div class="container">
                                    <div class="col-md-10 center-block">
                                    <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><img src="https://digifunnellab.info/upload/tpl/1/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                    <div class="col-md-6">
                                    <h1 style="position: relative; margin-top: 40px;" class="headline"><strong>Thank you for purchasing our product.</strong></h1>
                                    <h3 style="position: relative;" class="headline">Enter Your Name and Email Below to<br />Get Access to Your Download!</h3>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="section stay-white">
                                    <div class="container">
                                    <div class="col-md-9 center-block"><br />
                                    <div class="col-md-3 text-center">%cover%</div>
                                    <div class="col-md-9 text-center">%form% <br /><br /><br />
                                    <p class="text-center" style="font-size: 13px;">Your privacy is safe. We will never pass your email address to a 3rd party<br />and you may opt-out at any time.</p>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="footer row">
                                    <div class="footer-wrap container">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                    </div>
                                    </div>
                                    </div>
                                    <p>
                                    <script src="https://digifunnellab.info/upload/tpl/1/js/bootstrap.min.js"></script>
                                    </p>
                                    </body>
                                    </html>
            ',

            'download_content_page' => '
                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>Exit Pop-Up Download Page</title>
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/bootstrap.min.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/style.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/1/css/font-awesome.min.css" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                        <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                        <!--[if lt IE 9]>
                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                        <![endif]-->
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    </head>
                                    <body class="dark">
                                    <div class="video-wrapper">
                                    <div class="overflow">
                                    <div class="container">
                                    <div class="col-md-10 center-block">
                                    <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6 left"><img src="https://digifunnellab.info/upload/tpl/1/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                    <div class="col-md-6">
                                    <h1 style="position: relative; margin-top: 40px;" class="headline text-center"><strong>Thank you for purchasing our product.</strong></h1>
                                    <h3 style="position: relative;" class="headline text-center">Short Slogan or Headline In This Place Describing what else client can do now.</h3>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="section stay-white">
                                    <div class="container">
                                    <h2 class="headline2">DOWNLOAD YOUR <b style="color: #ee513e;">PRODUCT BELOW</b></h2>
                                    </div>
                                    </div>
                                    <div class="section stay-white">
                                    <div class="container">
                                    <div class="col-md-12 center-block">
                                    <div></div>
                                    <div class="col-md-5 text-center">%cover%</div>
                                    <div class="col-md-7">
                                    <h2 class="headline2" style="margin: 0;">%title%</h2>
                                    <br />
                                    <p>%summary%</p>
                                    <br />
                                    <div class="col-md-8 text-center">%download%</div>
                                    <br />
                                    <div class="col-md-8 text-center">%license%</div>
                                    <div><br /><br /></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="footer row">
                                    <div class="footer-wrap container">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                    </div>
                                    </div>
                                    </div>
                                    <p>
                                    <script src="https://digifunnellab.info/upload/tpl/1/js/bootstrap.min.js"></script>
                                    </p>
                                    </body>
                                    </html>
            ',

            'exit_popup_sales_page_content' => '
                                            <!DOCTYPE html>
                                            <html lang="en">
                                            <head>
                                                <meta charset="utf-8">
                                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                                <title>Exit Pop-Up Sales Page</title>
                                                <link href="https://digifunnellab.info/upload/tpl/1/css/bootstrap.min.css" rel="stylesheet">
                                                <link href="https://digifunnellab.info/upload/tpl/1/css/style.css" rel="stylesheet">
                                                <link href="https://digifunnellab.info/upload/tpl/1/css/font-awesome.min.css" rel="stylesheet">
                                                <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                                <link href=\'http://fonts.googleapis.com/css?family=Lato:400,700,300,900\' rel=\'stylesheet\' type=\'text/css\'>
                                                <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                                <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                                <!--[if lt IE 9]>
                                                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                                <![endif]-->
                                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                            </head>
                                            <body class="dark">
                                            <div class="video-wrapper">
                                            <div class="overflow">
                                            <div class="container">
                                            <div class="col-md-9 center-block">
                                            <h1 class="headline" style="position: relative;"><strong><span style="color: #ee513e;">FREE!</span> <span style="text-decoration: underline;">For 100% FREE!</span></strong></h1>
                                            </div>
                                            <div class="col-md-9 center-block">
                                            <h1 style="position: relative; margin-top: 40px;" class="headline"><strong>%summary%</strong></h1>
                                            <h3 style="position: relative;" class="headline">Enter Your Name and Email Below to<br />Get Access to Your Download!</h3>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="section stay-white">
                                            <div class="container">
                                            <div class="col-md-9 center-block"><br /><br />
                                            <div class="col-md-3 text-center">%cover%</div>
                                            <div class="col-md-9 text-center">%form% <br /><br /><br />
                                            <p class="text-center" style="font-size: 13px;">Your privacy is safe. We will never pass your email address to a 3rd party<br />and you may opt-out at any time.</p>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="footer row">
                                            <div class="footer-wrap container">
                                            <div class="col-md-9 center-block">
                                            <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                            </div>
                                            </div>
                                            </div>
                                            <p>
                                            <script src="https://digifunnellab.info/upload/tpl/1/js/bootstrap.min.js"></script>
                                            </p>
                                            </body>
                                            </html>
            ',

            'exit_popup_download_page' => '
                                        <!DOCTYPE html>
                                        <html lang="en">
                                        <head>
                                            <meta charset="utf-8">
                                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                            <meta name="viewport" content="width=device-width, initial-scale=1">
                                            <title>Exit Pop-Up Download Page</title>
                                            <link href="https://digifunnellab.info/upload/tpl/1/css/bootstrap.min.css" rel="stylesheet">
                                            <link href="https://digifunnellab.info/upload/tpl/1/css/style.css" rel="stylesheet">
                                            <link href="https://digifunnellab.info/upload/tpl/1/css/font-awesome.min.css" rel="stylesheet">
                                            <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                            <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                            <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                            <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                            <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                            <!--[if lt IE 9]>
                                            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                            <![endif]-->
                                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                        </head>
                                        <body class="dark">
                                        <div class="video-wrapper">
                                        <div class="overflow">
                                        <div class="container">
                                        <div class="col-md-10 center-block">
                                        <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                        </div>
                                        <div class="col-lg-6 col-md-6 left"><img src="https://digifunnellab.info/upload/tpl/1/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                        <div class="col-md-6">
                                        <h1 style="position: relative; margin-top: 40px;" class="headline text-center"><strong>Thank you for purchasing our product.</strong></h1>
                                        <h3 style="position: relative;" class="headline text-center">Short Slogan or Headline In This Place Describing what else client can do now.</h3>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="section stay-white">
                                        <div class="container">
                                        <h2 class="headline2">DOWNLOAD YOUR <b style="color: #ee513e;">PRODUCT BELOW</b></h2>
                                        </div>
                                        </div>
                                        <div class="section stay-white">
                                        <div class="container">
                                        <div class="col-md-12 center-block">
                                        <div></div>
                                        <div class="col-md-5 text-center">%cover%</div>
                                        <div class="col-md-7">
                                        <h2 class="headline2" style="margin: 0;">%title%</h2>
                                        <br />
                                        <p>%summary%</p>
                                        <br />
                                        <div class="col-md-8 text-center">%download%</div>
                                        <br />
                                        <div class="col-md-8 text-center">%license%</div>
                                        <div><br /><br /></div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="footer row">
                                        <div class="footer-wrap container">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                        </div>
                                        </div>
                                        </div>
                                        <p>
                                        <script src="https://digifunnellab.info/upload/tpl/1/js/bootstrap.min.js"></script>
                                        </p>
                                        </body>
                                        </html>
            '
            
        ]);

        DB::table('product_sale_sample_templates')->insert([
            'unique_id' => Str::random(10),
            'created_by' => 1,
            'title' => 'No Video Slim Grey',
            'thumbnail' => 'no-video-slim-grey.png',

            'sales_page_content' => '
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <title>Sales Page</title>
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/bootstrap.min.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/style.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/font-awesome.min.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                    <!--[if lt IE 9]>
                                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                    <![endif]-->
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                </head>
                                <body>
                                <div class="wrapper">
                                <div class="section">
                                <div class="container text-center">%upsell%</div>
                                </div>
                                <div class="video-wrapper">
                                <div class="overflow">
                                <div class="container">
                                <div class="col-md-10 center-block">
                                <h2 class="filled-headline">Perfectly Compatible With Top Graphic &amp; Video Creators!</h2>
                                <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                </div>
                                <div class="col-md-12"><img src="https://digifunnellab.info/upload/tpl/8/img/shadow.png" class="img-responsive shadow center-block" />
                                <div class="clearfix"></div>
                                <div class="col-md-12 text-center">%button%</div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <h2 class="headline2">WHY MY PRODUCT IS THE<br /><b style="color: #ee513e;">BEST SOLUTION</b> FOR YOUR BUSINESS?</h2>
                                <div class="col-md-6 col-xs-12 text-center">%cover%</div>
                                <div class="col-md-6 col-xs-12">
                                <ul class="list2">
                                <li><span style="color: inherit;"><b>Features 1</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin.</span></li>
                                <li><span style="color: inherit;"><b>Features 2</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat.</span></li>
                                <li><span style="color: inherit;"><b>Features 3</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non congue erat. In blandit felis lectus, vel rhoncus turpis consequat in.</span></li>
                                <li><span style="color: inherit;"><b>Features 4</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Suspendisse non congue erat. Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</span></li>
                                <li><span style="color: inherit;"><b>Features 5</b></span><b style="color: inherit;"> - </b><span style="color: inherit;">Curabitur aliquet, erat quis interdum sollicitudin, ante mi aliquam leo, sed eleifend sem orci nec turpis.</span></li>
                                </ul>
                                </div>
                                <div class="clearfix"></div>
                                </div>
                                </div>
                                <div class="section sectiongray">
                                <div class="container">
                                <div class="col-md-12">Product Description In This Place</div>
                                </div>
                                </div>
                                </div>
                                <div class="section sectiongray darker">
                                <div class="container">
                                <div class="col-md-12 text-center">%button%</div>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container text-center">%nothanks%</div>
                                </div>
                                <div class="footer row">
                                <div class="footer-wrap container">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                </div>
                                </div>
                                </div>
                                <p>
                                <script src="https://digifunnellab.info/upload/tpl/8/js/bootstrap.min.js"></script>
                                </p>
                                </body>
                                </html>
            ',
            'squeeze_thankyou_page' => '

                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>Thank You Page</title>
                                        <link href="https://digifunnellab.info/upload/tpl/8/css/bootstrap.min.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/8/css/style.css" rel="stylesheet">
                                        <link href="https://digifunnellab.info/upload/tpl/8/css/font-awesome.min.css" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                        <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                        <!--[if lt IE 9]>
                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                        <![endif]-->
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    </head>
                                    <body>
                                    <div class="wrapper">
                                    <div class="video-wrapper">
                                    <div class="overflow">
                                    <div class="container">
                                    <div class="col-md-10 center-block">
                                    <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><img src="https://digifunnellab.info/upload/tpl/8/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                    <div class="col-md-6">
                                    <h1 style="position: relative; margin-top: 40px;" class="headline"><strong>Thank you for purchasing our product.</strong></h1>
                                    <h3 style="position: relative;" class="headline">Enter Your Name and Email Below to<br />Get Access to Your Download!</h3>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="section stay-white">
                                    <div class="container">
                                    <div class="col-md-9 center-block"><br />
                                    <div class="col-md-3 text-center">%cover%</div>
                                    <div class="col-md-9 text-center">%form% <br /><br /><br />
                                    <p class="text-center" style="font-size: 13px;">Your privacy is safe. We will never pass your email address to a 3rd party<br />and you may opt-out at any time.</p>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="footer row">
                                    <div class="footer-wrap container">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                    </div>
                                    </div>
                                    </div>
                                    <p>
                                    <script src="https://digifunnellab.info/upload/tpl/8/js/bootstrap.min.js"></script>
                                    </p>
                                    </body>
                                    </html>

            ',
            'download_content_page' => '
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <title>Download Page</title>
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/bootstrap.min.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/style.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/font-awesome.min.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                    <!--[if lt IE 9]>
                                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                    <![endif]-->
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                </head>
                                <body>
                                <div class="video-wrapper">
                                <div class="overflow">
                                <div class="container">
                                <div class="col-md-10 center-block">
                                <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                </div>
                                <div class="col-lg-6 col-md-6 left"><img src="https://digifunnellab.info/upload/tpl/8/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                <div class="col-md-6">
                                <h1 style="position: relative; margin-top: 40px;" class="headline text-center"><strong>Thank you for purchasing our product.</strong></h1>
                                <h3 style="position: relative;" class="headline text-center">Short Slogan or Headline In This Place Describing what else client can do now.</h3>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <h2 class="headline2">DOWNLOAD YOUR <b style="color: #ee513e;">PRODUCT BELOW</b></h2>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <div class="col-md-12 center-block">
                                <div></div>
                                <div class="col-md-5 text-center">%cover%</div>
                                <div class="col-md-7">
                                <h2 class="headline2" style="margin: 0;">%title%</h2>
                                <br />
                                <p>%summary%</p>
                                <br />
                                <div class="col-md-8 text-center">%download%</div>
                                <br />
                                <div class="col-md-8 text-center">%license%</div>
                                <div><br /><br /></div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="footer row">
                                <div class="footer-wrap container">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                </div>
                                </div>
                                </div>
                                <p>
                                <script src="https://digifunnellab.info/upload/tpl/8/js/bootstrap.min.js"></script>
                                </p>
                                </body>
                                </html>
            ',
            'exit_popup_sales_page_content' => '
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <title>Exit Pop-Up Sales Page</title>
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/bootstrap.min.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/style.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/font-awesome.min.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                    <link href=\'http://fonts.googleapis.com/css?family=Lato:400,700,300,900\' rel=\'stylesheet\' type=\'text/css\'>
                                    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                    <!--[if lt IE 9]>
                                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                    <![endif]-->
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                </head>
                                <body>
                                <div class="video-wrapper">
                                <div class="overflow">
                                <div class="container">
                                <div class="col-md-9 center-block">
                                <h1 class="headline" style="position: relative;"><strong><span style="color: #ee513e;">FREE!</span> <span style="text-decoration: underline;">For 100% FREE!</span></strong></h1>
                                </div>
                                <div class="col-md-9 center-block">
                                <h1 style="position: relative; margin-top: 40px;" class="headline"><strong>%summary%</strong></h1>
                                <h3 style="position: relative;" class="headline">Enter Your Name and Email Below to<br />Get Access to Your Download!</h3>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <div class="col-md-9 center-block"><br /><br />
                                <div class="col-md-3 text-center">%cover%</div>
                                <div class="col-md-9 text-center">%form% <br /><br /><br />
                                <p class="text-center" style="font-size: 13px;">Your privacy is safe. We will never pass your email address to a 3rd party<br />and you may opt-out at any time.</p>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="footer row">
                                <div class="footer-wrap container">
                                <div class="col-md-9 center-block">
                                <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                </div>
                                </div>
                                </div>
                                <p>
                                <script src="https://digifunnellab.info/upload/tpl/8/js/bootstrap.min.js"></script>
                                </p>
                                </body>
                                </html>
            ',
            'exit_popup_download_page' => '
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <title>Exit Pop-Up Download Page</title>
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/bootstrap.min.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/style.css" rel="stylesheet">
                                    <link href="https://digifunnellab.info/upload/tpl/8/css/font-awesome.min.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
                                    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,900" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
                                    <!--[if lt IE 9]>
                                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                    <![endif]-->
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                </head>
                                <body>
                                <div class="video-wrapper">
                                <div class="overflow">
                                <div class="container">
                                <div class="col-md-10 center-block">
                                <h1 class="headline" style="position: relative;"><strong>Short <span style="color: #ee513e;">Slogan or Headline</span> In This Place</strong></h1>
                                </div>
                                <div class="col-lg-6 col-md-6 left"><img src="https://digifunnellab.info/upload/tpl/8/img/thankyou.png" class="img-responsive shadow center-block" style="max-width: 400px;" /></div>
                                <div class="col-md-6">
                                <h1 style="position: relative; margin-top: 40px;" class="headline text-center"><strong>Thank you for purchasing our product.</strong></h1>
                                <h3 style="position: relative;" class="headline text-center">Short Slogan or Headline In This Place Describing what else client can do now.</h3>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <h2 class="headline2">DOWNLOAD YOUR <b style="color: #ee513e;">PRODUCT BELOW</b></h2>
                                </div>
                                </div>
                                <div class="section stay-white">
                                <div class="container">
                                <div class="col-md-12 center-block">
                                <div></div>
                                <div class="col-md-5 text-center">%cover%</div>
                                <div class="col-md-7">
                                <h2 class="headline2" style="margin: 0;">%title%</h2>
                                <br />
                                <p>%summary%</p>
                                <br />
                                <div class="col-md-8 text-center">%download%</div>
                                <br />
                                <div class="col-md-8 text-center">%license%</div>
                                <div><br /><br /></div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="footer row">
                                <div class="footer-wrap container">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pull-left">Copyright &copy; Yoursite.com. All rights reserved.</div>
                                </div>
                                </div>
                                </div>
                                <p>
                                <script src="https://digifunnellab.info/upload/tpl/8/js/bootstrap.min.js"></script>
                                </p>
                                </body>
                                </html>
            '
                        
        ]);

    }
}
