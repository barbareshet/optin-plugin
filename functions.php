// optin contact form - for posts
// shortcode is added to page, where ever you want the optin text
//in order to change the form title add title="your title" in the shortcode;
// you can add any cf-7 form that you want.
//example of shortcode to insert to the posts / pages: [blog_optin title="your title"][contact-form-7 id="16705" title="blog optin"][/blog_optin]
function alma_blog_optin($atts, $content = null){
  $a = shortcode_atts( array(
    'title' => 'get in touchs',
), $atts );
ob_start();
  ?>
  <div id="optin_triger">
     <p>
       <?php echo esc_attr($a['title']);?>
     </p>
</div>
<div id="optin_blog">
<div id="close_optin">X</div>
<?php echo do_shortcode($content);?>
</div>
<?php
return ob_get_clean();
}
add_shortcode('blog_optin', 'alma_blog_optin');


//after blog / single content form
//this function creates an optin area after single templates.
// inorder to change the contact form, you must create a new cf7 form and insert it by using FTP connection
function alma_blog_bottom($content){
$footer_bf = '<div id="blog_bottom_form">';
$footer_bf .= '<h3 class="blog_bottom_title">Contact us to find out more</h3>';
$footer_bf .= do_shortcode('[contact-form-7 id="16725" title="blog bottom"]');
$footer_bf .= '</div>';

if(is_single()){
        return $content . $footer_bf;
    }

return $content;
  }

add_filter('the_content','alma_blog_bottom' );
