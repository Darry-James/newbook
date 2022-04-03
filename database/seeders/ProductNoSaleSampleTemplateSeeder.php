<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ProductNoSaleSampleTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('product_no_sale_sample_templates')->insert([
            'unique_id' => Str::random(15),
            'created_by' => 1,
            'title' => 'Squeeze Style 1 Black',
            'thumbnail' => 'squeeze-style-1-black.png',
            
            'squeeze_thankyou_page' => '

                <!DOCTYPE html>
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Landing Page</title>
                <link href="https://digifunnellab.info/upload/tpl/101/css/style.css" rel="stylesheet" type="text/css" media="screen" />
                </head>

                <body>
                <div id="container"><!--container *starts* here-->
                <div id="header">
                <div id="pre_headline_position">
                <p class="pre_headline">YOUR NAME/<span style="color: #fc0;">LOGO</span></p>
                </div>
                </div>
                <div id="body_content">
                <div id="body_left">
                <div class="headline">
                <h1><span class="headline1">WRITE YOUR OWN</span> <span class="headline2">HEADLINE HERE!</span></h1>
                </div>
                <div class="sub_headline">
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, orci nec egestas dapibus.</p>
                </div>
                <div class="table">
                <table width="458" cellspacing="6" cellpadding="0" border="0" align="center">
                <tbody>
                <tr>
                <td width="33"><img src="https://digifunnellab.info/upload/tpl/101/images/arrow_check.png" width="20" height="20" /></td>
                <td width="407">
                <p class="table_text">Ut ac volutpat felis. Suspendisse quis elit a dui varius vehicula ut ut diam.</p>
                </td>
                </tr>
                <tr>
                <td><img src="https://digifunnellab.info/upload/tpl/101/images/arrow_check.png" width="20" height="20" /></td>
                <td>
                <p class="table_text">Maecenas semper dui non massa mollis volutpat. Etiam eu ante in quam mattis cursus.</p>
                </td>
                </tr>
                <tr>
                <td><img src="https://digifunnellab.info/upload/tpl/101/images/arrow_check.png" width="20" height="20" /></td>
                <td>
                <p class="table_text">Ut ac volutpat felis. Suspendisse quis elit a dui<br /> varius vehicula ut ut diam.</p>
                </td>
                </tr>
                <tr>
                <td><img src="https://digifunnellab.info/upload/tpl/101/images/arrow_check.png" width="20" height="20" /></td>
                <td>
                <p class="table_text">Ut ac volutpat felis. Suspendisse quis!</p>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                <div class="as_seen"><img src="https://digifunnellab.info/upload/tpl/101/images/as_seen.png" width="539" height="79" /></div>
                </div>
                <div id="body_right">
                <div class="form_bg">
                <div class="text_wrap">SIGN UP for FREE!</div>
                <div class="form_text_middle">
                <p class="text_middle">Get Your Free<br /> INSTANT ACCESS!</p>
                </div>
                <div class="form">
                <div class="form_text_bottom">
                <h5>Simply enter your information in the form below:</h5>
                </div>
                <div class="form_main">%form%</div>
                </div>
                <div class="security">*Your Privacy is safe. We will never share your information.</div>
                </div>
                </div>
                <div class="clr"></div>
                <!--body *ends* here--></div>
                <!--container *ends* here--></div>
                <div id="divider"></div>
                <div id="testimonial_bg">
                <div class="testimonials">
                <h4>What People Are Saying:</h4>
                <table width="810" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                <tr>
                <td class="testimonial_table">
                <p class="testimonial_text">"Lorem ipsum dolor sit amet,consectetur adipiscing elit.Sed laoreet, orci nec. <br /> <strong>- JOHN DOE-</strong></p>
                </td>
                <td class="testimonial_table">
                <p class="testimonial_text">"Lorem ipsum dolor sit amet,consectetur adipiscing elit.Sed laoreet, orci nec. <br /> <strong>- JOHN DOE-</strong></p>
                </td>
                <td class="testimonial_table">
                <p class="testimonial_text">"Lorem ipsum dolor sit amet,consectetur adipiscing elit.Sed laoreet, orci nec. <br /> <strong>- JOHN DOE-</strong></p>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>
                </body>
                </html>

            ',

            'download_content_page' => '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="utf-8" />
                            <title>Thank You</title>
                        <style>
                        *{
                            margin: 0;
                            padding: 0;
                            font-family: Verdana, Arial, sans-serif;
                            font-size: 12px;
                            line-height: 1.5;
                        }
                        
                        h1{
                            font-size: 36px;
                        }
                        
                        h2{
                            font-size: 28px;
                        }
                        
                        h3{
                            font-size: 20px;
                        }
                        
                        h4{
                            font-size: 16px;
                            font-weight: normal;
                        }
                        
                        a{
                            font-size: inherit;
                            color: #369;
                            text-decoration: none;
                        }
                        
                        a:hover{
                            color: #c00;
                        }
                        
                        .wrap{
                            margin: 10px auto;
                            padding: 10px;
                            width: 600px;
                            text-align: center;
                            border: #fc9 5px dashed;
                        }
                        </style>
                        </head>
                        <body>
                        <div class="wrap">
                        <h1>THANK YOU!</h1>
                        <p><img src="https://digifunnellab.info/upload/tpl/101/images/ok_dp.png" /></p>
                        <h3>%download%</h3>
                        <br />
                        <h4>%license%</h4>
                        </div>
                        </body>
                        </html>
            '
            
        ]);

        DB::table('product_no_sale_sample_templates')->insert([
            'unique_id' => Str::random(10),
            'created_by' => 1,
            'title' => 'Squeeze Style 3 Red',
            'thumbnail' => 'squeeze-style-3-red.png',

            'squeeze_thankyou_page' => '

                        <!DOCTYPE html>
                        <html>
                        <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>Landing Page</title>
                        <link href="https://digifunnellab.info/upload/tpl/115/css/style.css" rel="stylesheet" type="text/css" media="screen" />
                        </head>

                        <body>
                        <div id="container">
                        <div id="header">
                        <div class="header_top"></div>
                        <div class="header_title_bg">
                        <div class="headline_text">
                        <h1>YOUR HEADLINE Comes Here! Write Your own message / slogan / headline here. Place headline text here!</h1>
                        </div>
                        </div>
                        </div>
                        <div id="main_body_bg">
                        <div class="main_body_content">
                        <div class="content_left">
                        <div class="main_text"><span class="bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Proin condimentum justo vitae diam adipiscing pellentesque. <span class="underline">Quisque ac nisl turpis. </span></div>
                        <div class="main_text"><span class="bold">Vivamus molestie</span>, lorem ullamcorper pretium sodales, tellus urna faucibus magna, non accumsan felis massa a nisi.</div>
                        <div class="content_list">
                        <div class="product_image"><img src="https://digifunnellab.info/upload/tpl/115/images/product_sample.png" width="180" height="229" /></div>
                        <div class="table">
                        <table class="list_text" width="311" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                        <tr><th colspan="2" class="table_title" scope="col" height="33">WHAT\'S INSIDE:</th></tr>
                        <tr>
                        <td width="55" height="57"><img src="https://digifunnellab.info/upload/tpl/115/images/check.png" width="39" height="32" /></td>
                        <td width="256">Lorem ipsum dolor sit amet, adipiscing elit.</td>
                        </tr>
                        <tr>
                        <td><img src="https://digifunnellab.info/upload/tpl/115/images/check.png" width="39" height="32" /></td>
                        <td height="57">Lorem ipsum dolor sit amet, cons adipiscing elit.</td>
                        </tr>
                        <tr>
                        <td><img src="https://digifunnellab.info/upload/tpl/115/images/check.png" alt="" width="39" height="32" /></td>
                        <td height="57">Lorem ullamcorper pretium sodales, tellus urna faucibus magna.</td>
                        </tr>
                        <tr>
                        <td><img src="https://digifunnellab.info/upload/tpl/115/images/check.png" alt="" width="39" height="32" /></td>
                        <td height="57">Tellus urna faucibus magna, non accumsan felis massaa nisi.</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <div class="clr"></div>
                        </div>
                        <!--end_content left--></div>
                        <div class="content_right">
                        <div class="form_top"></div>
                        <div class="form_middle">
                        <div class="form_text_middle">YES, I Want My FREE Instant Access</div>
                        <div class="form_text_middle_2">Simply enter Your<br /> <span class="bold">First Name</span> And<br /> Primary<span class="bold"> Email Address</span><br /> to the Form Below:</div>
                        </div>
                        <div class="form_bottom">
                        <div class="form_main">%form%</div>
                        <div class="privacy">Your Privacy is safe.</div>
                        </div>
                        </div>
                        <div class="clr"></div>
                        <div class="body_text_wrap">
                        <p>&nbsp;</p>
                        <p class="underline">Optional text...</p>
                        <p>&nbsp;</p>
                        <p>Vivamus molestie, lorem ullamcorper pretium sodales, tellus urna faucibus magna, non accumsan felis massaa nisi.</p>
                        </div>
                        <div class="testimonial_bg">
                        <div class="testimonial_title">What Other People are Saying...</div>
                        <div class="testim_wrap">
                        <div class="testim_1">"I\'m so happy to have access to top-notch material that I know can only get better." <br /> <br /> <span class="bold">John Doe</span></div>
                        <div class="testim_2">"This product changed my whole life and I earned some serious cash" <span class="bold"><br /> <br /> John Doe</span></div>
                        <div class="clr"></div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="main_body_bottom"></div>
                        <!--container_end--></div>
                        </body>
                        </html>

            ',
            'download_content_page' => '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="utf-8" />
                            <title>Thank You</title>
                        <style>
                        *{
                            margin: 0;
                            padding: 0;
                            font-family: Verdana, Arial, sans-serif;
                            font-size: 12px;
                            line-height: 1.5;
                        }
                        
                        h1{
                            font-size: 36px;
                        }
                        
                        h2{
                            font-size: 28px;
                        }
                        
                        h3{
                            font-size: 20px;
                        }
                        
                        h4{
                            font-size: 16px;
                            font-weight: normal;
                        }
                        
                        a{
                            font-size: inherit;
                            color: #369;
                            text-decoration: none;
                        }
                        
                        a:hover{
                            color: #c00;
                        }
                        
                        .wrap{
                            margin: 10px auto;
                            padding: 10px;
                            width: 600px;
                            text-align: center;
                            border: #fc9 5px dashed;
                        }
                        </style>
                        </head>
                        <body>
                        <div class="wrap">
                        <h1>THANK YOU!</h1>
                        <p><img src="https://digifunnellab.info/upload/tpl/115/images/ok_dp.png" /></p>
                        <h3>%download%</h3>
                        <br />
                        <h4>%license%</h4>
                        </div>
                        </body>
                        </html>
            '
        ]);

    }
}
