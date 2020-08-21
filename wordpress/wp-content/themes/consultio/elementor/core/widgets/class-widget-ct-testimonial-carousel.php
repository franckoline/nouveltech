<?php

class CT_CtTestimonialCarousel_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_testimonial_carousel';
    protected $title = 'Testimonial Carousel';
    protected $icon = 'eicon-testimonial';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout3.jpg"},"4":{"label":"Layout 4","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout4.jpg"},"5":{"label":"Layout 5","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout5.jpg"},"6":{"label":"Layout 6","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout6.jpg"},"7":{"label":"Layout 7","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout7.jpg"},"8":{"label":"Layout 8","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout8.jpg"},"9":{"label":"Layout 9","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout9.jpg"},"10":{"label":"Layout 10","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout10.jpg"},"11":{"label":"Layout 11","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout11.jpg"},"12":{"label":"Layout 12","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout12.jpg"},"13":{"label":"Layout 13","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout13.jpg"},"14":{"label":"Layout 14","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout14.jpg"},"15":{"label":"Layout 15","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout15.jpg"},"16":{"label":"Layout 16","image":"http:\/\/35.222.163.85\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_testimonial_carousel\/layout-image\/layout16.jpg"}}}]},{"name":"content_list","label":"Testimonial","tab":"content","controls":[{"name":"testimonial","label":"Add Item","type":"repeater","controls":[{"name":"image","label":"Image","type":"media"},{"name":"sub_title","label":"Sub Title","type":"text"},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"position","label":"Position","type":"text"},{"name":"description","label":"Description","type":"textarea","rows":10}],"title_field":"{{{ title }}}"}]},{"name":"style_section","label":"Style","tab":"settings","controls":[{"name":"style_l13","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":"13"}},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-testimonial .item--title":"color: {{VALUE}};"}},{"name":"position_color","label":"Position Color","type":"color","selectors":{"{{WRAPPER}} .ct-testimonial .item--position":"color: {{VALUE}};"}},{"name":"description_color","label":"Description Color","type":"color","selectors":{"{{WRAPPER}} .ct-testimonial .item--description":"color: {{VALUE}};"}}]},{"name":"section_carousel_settings","label":"Carousel Settings","tab":"settings","controls":[{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"slides_to_scroll","label":"Slides to scroll","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"},"condition":{"layout":["1","3","4","5","6","8","9","10","11","12","13","14","15","16"]}},{"name":"arrows","label":"Show Arrows","type":"switcher"},{"name":"dots","label":"Show Dots","type":"switcher"},{"name":"pause_on_hover","label":"Pause on Hover","type":"switcher"},{"name":"autoplay","label":"Autoplay","type":"switcher"},{"name":"autoplay_speed","label":"Autoplay Speed","type":"number","default":5000,"condition":{"autoplay":"true"}},{"name":"infinite","label":"Infinite Loop","type":"switcher"},{"name":"speed","label":"Animation Speed","type":"number","default":500}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'jquery-slick','ct-post-carousel-widget-js' );
}