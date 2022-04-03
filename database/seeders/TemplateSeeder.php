<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'thumbnail' => 'thumb1.png',
            'title' => 'thumb1',
            'content' => '

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
            <table width="458" border="0" cellspacing="6" cellpadding="0" align="center">
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
            <table width="810" border="0" cellspacing="0" cellpadding="0" align="center">
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

            '
            
        ]);

        DB::table('templates')->insert([
            'thumbnail' => 'thumb2.png',
            'title' => 'thumb2',
            'content' => '

            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Landing Page</title>
            <link href="https://digifunnellab.info/upload/tpl/102/css/style.css" rel="stylesheet" type="text/css" media="screen" />
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
            <table width="458" border="0" cellspacing="6" cellpadding="0" align="center">
            <tbody>
            <tr>
            <td width="33"><img src="https://digifunnellab.info/upload/tpl/102/images/arrow_check.png" width="20" height="20" /></td>
            <td width="407">
            <p class="table_text">Ut ac volutpat felis. Suspendisse quis elit a dui varius vehicula ut ut diam.</p>
            </td>
            </tr>
            <tr>
            <td><img src="https://digifunnellab.info/upload/tpl/102/images/arrow_check.png" width="20" height="20" /></td>
            <td>
            <p class="table_text">Maecenas semper dui non massa mollis volutpat. Etiam eu ante in quam mattis cursus.</p>
            </td>
            </tr>
            <tr>
            <td><img src="https://digifunnellab.info/upload/tpl/102/images/arrow_check.png" width="20" height="20" /></td>
            <td>
            <p class="table_text">Ut ac volutpat felis. Suspendisse quis elit a dui<br /> varius vehicula ut ut diam.</p>
            </td>
            </tr>
            <tr>
            <td><img src="https://digifunnellab.info/upload/tpl/102/images/arrow_check.png" width="20" height="20" /></td>
            <td>
            <p class="table_text">Ut ac volutpat felis. Suspendisse quis!</p>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            <div class="as_seen"><img src="https://digifunnellab.info/upload/tpl/102/images/as_seen.png" width="539" height="79" /></div>
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
            <table width="810" border="0" cellspacing="0" cellpadding="0" align="center">
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

            '
            
        ]);
    }
}
