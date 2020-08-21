<?php

class CT_CtPortfolioCarousel_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_portfolio_carousel';
    protected $title = 'Portfolio Carousel';
    protected $icon = 'eicon-posts-carousel';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/nouveltech.local\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_portfolio_carousel\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/nouveltech.local\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_portfolio_carousel\/layout-image\/layout2.jpg"}}}]},{"name":"source_section","label":"Source","tab":"content","controls":[{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":"1"}},{"name":"thumbnail","type":"image-size","control_type":"group","default":"custom"},{"name":"source","label":"Select Categories","type":"select2","multiple":true,"options":{"coaching|portfolio-category":"Coaching","facilitation|portfolio-category":"Facilitation","stakeholder-relations|portfolio-category":"Stakeholder relations","strategy|portfolio-category":"Strategy"}},{"name":"orderby","label":"Order By","type":"select","default":"date","options":{"date":"Date","ID":"ID","author":"Author","title":"Title","rand":"Random"}},{"name":"order","label":"Sort Order","type":"select","default":"desc","options":{"desc":"Descending","asc":"Ascending"}},{"name":"limit","label":"Total items","type":"number","default":"6"}]},{"name":"display_section","label":"Display Options","tab":"content","condition":{"layout":"1"},"controls":[{"name":"show_title","label":"Show Title","type":"switcher","default":"true"},{"name":"show_category","label":"Show Category","type":"switcher","default":"true"},{"name":"show_button","label":"Show Read More","type":"switcher","default":"true"}]},{"name":"section_carousel_settings","label":"Carousel","tab":"content","controls":[{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"slides_to_scroll","label":"Slides to scroll","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"arrows","label":"Show Arrows","type":"switcher","default":"false"},{"name":"dots","label":"Show Dots","type":"switcher","default":"false"},{"name":"pause_on_hover","label":"Pause on Hover","type":"switcher","default":"false"},{"name":"autoplay","label":"Autoplay","type":"switcher","default":"false"},{"name":"autoplay_speed","label":"Autoplay Speed","type":"number","default":5000,"condition":{"autoplay":"true"}},{"name":"infinite","label":"Infinite Loop","type":"switcher","default":"false"},{"name":"speed","label":"Animation Speed","type":"number","default":500}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'jquery-slick','ct-post-carousel-widget-js' );
}