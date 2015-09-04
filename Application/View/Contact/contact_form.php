<div class="fw_content_wrapper">
    <div class="fw_content_padding">
        <div class="content_wrapper noTitle">
            <div class="container">
                <div class="content_block row no-sidebar">
                    <div class="fl-container ">
                        <div class="row">
                            <div class="posts-block ">
                                <div class="contentarea">
                                    <div class="row">
                                        <div class="span8 first-module module_number_1 module_cont pb0 module_html">
                                            <div class="bg_title"><h4 class="headInModule">Get in touch with me</h4></div>
                                            <div class="module_content contact_form">
                                                <div id="note"></div>
                                                <div id="fields">
                                                    <form id="ajax-contact-form" action="#">
                                                        <div class="w50 pr7"><input type="text" name="name" value="" placeholder="Name *" /></div>
                                                        <div class="w50"><input type="text" name="email" value="" placeholder="Email *" /></div>
                                                        <div class="clear"></div>
                                                        <input type="text" name="subject" value="" placeholder="Subject" />
                                                        <textarea name="message" id="message" placeholder="Message *"></textarea>
                                                        <input type="submit" value="Send a message">
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- .module_cont -->
                                        <div class="span4 module_number_2 module_cont no_bg pb0 module_contact_info">
                                            <div class="bg_title"><h4 class="headInModule">Contact Information</h4></div>
                                            <ul class="contact_info_list contact_icons">
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-home"></i></span>
                                                        <div class="contact_info_text">5512 Lorem Vestibulum 666/13</div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-phone"></i></span>
                                                        <div class="contact_info_text">+1 800 789 50 12</div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-envelope"></i></span>
                                                        <div class="contact_info_text"><a href="#">mail@oyster.com</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-skype"></i></span>
                                                        <div class="contact_info_text">Skype</div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-twitter"></i></span>
                                                        <div class="contact_info_text"><a href="#">Twitter</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-facebook-square"></i></span>
                                                        <div class="contact_info_text"><a href="#">Facebook</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-dribbble"></i></span>
                                                        <div class="contact_info_text"><a href="#">Dribbble</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-flickr"></i></span>
                                                        <div class="contact_info_text"><a href="#">Flickr</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-youtube-play"></i></span>
                                                        <div class="contact_info_text"><a href="#">YouTube</a></div>
                                                    </div>
                                                </li>
                                                <li class="contact_info_item">
                                                    <div class="contact_info_wrapper">
                                                        <span class="contact_info_icon"><i class="icon-pinterest"></i></span>
                                                        <div class="contact_info_text"><a href="#">Pinterest</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .module_cont -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed_bg map_bg"></div>

<div class="content_bg"></div>
<script type="text/javascript" src="<?= WEB_ROOT ?>/public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= WEB_ROOT ?>/public/js/modules.js"></script>
<script type="text/javascript" src="<?= WEB_ROOT ?>/public/js/theme.js"></script>
<script>
    jQuery(document).ready(function(){
        "use strict";
        centerWindow();
        if (window_w > 760) {
            jQuery('html').addClass('without_border');
        }
    });
    jQuery(window).load(function(){
        "use strict";
        centerWindow();
    });
    jQuery(window).resize(function(){
        "use strict";
        centerWindow();
        setTimeout('centerWindow()',500);
        setTimeout('centerWindow()',1000);
    });
    function centerWindow() {
        "use strict";
        var setTop = (window_h - jQuery('.fw_content_wrapper').height() - header.height())/2+header.height();
        if (setTop < header.height()+50) {
            jQuery('.fw_content_wrapper').addClass('fixed');
            jQuery('body').addClass('addPadding');
            jQuery('.fw_content_wrapper').css('top', header.height()+50+'px');
        } else {
            jQuery('.fw_content_wrapper').css('top', setTop +'px');
            jQuery('.fw_content_wrapper').removeClass('fixed');
            jQuery('body').removeClass('addPadding');
        }
    }
</script>