<?php

/**
 * Plugin Name: FooterB12
 * Plugin URI: localhost/footerb12
 * Description: Cette pluguin créer pour le Brief 12
 * Version: 1.0.0
 * Author: Taha SRHAYAR
 * Author URI: localhost/taha
 * License : YCD2020
 */

add_action('the_content', 'my_footer');

add_action('wp_enqueue_scripts', 'plugin_styles');
function plugin_styles()
{
  wp_enqueue_style('MypluginStyles', Plugins_url('style.css', __FILE__));
}

function my_footer($content)
{
  return $content .= '
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <footer class="page-footer font-small stylish-color-dark pt-4" id="wp-footer">
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Description</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corporis corrupti magni.
            </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-2 mx-auto ">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow us</h5>
            <ul class="list-unstyled mx-0 text-success" id="myul">
              <li>
                <a href="#!">Facebook</a>
              </li>
              <li>
                <a href="#!">Instagram</a>
              </li>
              <li>
                <a href="#!">Twitter</a>
              </li>
              <li>
                <a href="#!">Whatsapp</a>
              </li>
            </ul>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-2 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
            <ul class="list-unstyled mx-0" id="myul">
              <li>
                <a href="#!">12, Qu Saada, SAFI</a>
              </li>
              <li>
                <a href="#!">test@gmail.com</a>
              </li>
              <li>
                <a href="#!">0611223344</a>
              </li>
              <li>
                <a href="#!">0566778899</a>
              </li>
            </ul>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-2 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Menu</h5>
            <ul class="list-unstyled mx-0 id="myul">
              <li>
                <a href="#!">Home</a>
              </li>
              <li>
                <a href="#!">All Products</a>
              </li>
              <li>
                <a href="#!">About</a>
              </li>
              <li>
                <a href="#!">Account</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <ul class="list-unstyled list-inline text-center" id="myul">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <div class="blank"></div>
      <div class="footer-copyright text-center py-3" id="cr-footer">© 2020 Copyright:
        <a href="#"> Srhayar Taha</a>
      </div>
    </footer>
    ';
}

echo $_SESSION;

function footerB12_admin_menu()
{
  add_menu_page('Forms', 'Footer B12 menu', 'manage_options', 'footerB12-admin-menu', 'footerB12_menu_main', 'dashicons-admin-generic', 2);
  add_submenu_page('footerB12-admin-menu', 'Footer Submissions', 'Sub Menu Footer B12', 'manage_options', 'footerB12-admin-menu-sub-archive', 'footerB12_admin_menu_sub_archive');
}
add_action('admin_menu', 'footerB12_admin_menu');
function footerB12_menu_main()
{
  echo '<div class="wrap">
  <h2>Footer Menu Submissions</h2>
  Hello World!</div>';
}
function footerB12_admin_menu_sub_archive()
{
  echo '<div class="wrap">Submenu Option Page Footer</div>';
}
?>