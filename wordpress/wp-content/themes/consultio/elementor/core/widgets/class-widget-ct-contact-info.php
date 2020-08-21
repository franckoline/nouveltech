<?php

class CT_CtContactInfo_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_contact_info';
    protected $title = 'Contact Info';
    protected $icon = 'eicon-info-circle-o';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/nouveltech.local\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_contact_info\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/nouveltech.local\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_contact_info\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"http:\/\/nouveltech.local\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_contact_info\/layout-image\/layout3.jpg"}}},{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":"1"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]},{"name":"section_contact_info","label":"Contact Info","tab":"content","controls":[{"name":"contact_info","label":"Info List","type":"repeater","default":[],"controls":[{"name":"title","label":"Title","type":"text","label_block":true},{"name":"content","label":"Content","type":"textarea"},{"name":"icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon"},{"name":"ct_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"icon_type":"icon"}},{"name":"icon_image","label":"Icon Image","type":"media","description":"Select image icon.","condition":{"icon_type":"image"}},{"name":"icon_box_color","label":"Icon Box Color","type":"color","description":"Apply layout 2."},{"name":"link","label":"Link","type":"url"}],"title_field":"{{{ content }}}"},{"name":"wg_title","label":"Wedget Title","type":"text","label_block":true,"condition":{"layout":["3"]}},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-contact-info .ct-contact-title":"color: {{VALUE}};"},"condition":{"layout":"2"}},{"name":"icon_color","label":"Icon Color","type":"color","selectors":{"{{WRAPPER}} .ct-contact-info .ct-contact-icon i":"color: {{VALUE}};"},"control_type":"responsive","condition":{"layout":["1","2"]}},{"name":"content_color","label":"Content Color","type":"color","selectors":{"{{WRAPPER}} .ct-contact-info":"color: {{VALUE}};"},"control_type":"responsive","condition":{"layout":["1","2"]}},{"name":"content_typography","label":"Content Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-contact-info","condition":{"layout":["1","2"]}}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}