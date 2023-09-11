<?php
    $uriSegments    = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $segment        = $this->uri->segment('1');
?>
<!--FOOTER BEGIN-->
<footer class="footer">
    <div class="wrapper-overfllow">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-left">
                        <div class="wrap">
                            <a href="<?php echo BASE_URL; ?>" class="foot-logo"><img src="<?php echo ASSET_PATH; ?>images/logo/logo-white.png" width=150 alt="footer-logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-offset-1">
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-12">
                    <div class="foot-contact">
                        <h4>Hubungi Kami</h4>
                        <ul class="contact-list">
                            <li><i class="fa fa-flag" aria-hidden="true"></i><span><?php echo COMPANY_ADDRESS; ?></span></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com"><?php echo COMPANY_EMAIL; ?></a></li>
                            <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span><?php echo COMPANY_PHONE; ?></span></li>
                        </ul>
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-menu-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-menu">
                        <li>Powered <a href="https://elevendigital.id/" target="_blank"><span><?php echo COPYRIGHT; ?></span></a></li>
                    </ul>	
                    <a href="#top" class="foot-up"><span>up <i class="fa fa-caret-up" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER END-->