<?php
/**
 * Template part for displaying default header layout
 */
$sticky_on = consultio_get_opt( 'sticky_on', false );
$search_icon = consultio_get_opt( 'search_icon', false );
$cart_icon = consultio_get_opt( 'cart_icon', false );
$hidden_sidebar_icon = consultio_get_opt( 'hidden_sidebar_icon', false );
$wellcome = consultio_get_opt( 'wellcome' );
$logo_mobile = consultio_get_opt( 'logo_mobile', array( 'url' => get_template_directory_uri().'/assets/images/logo-dark.png', 'id' => '' ) );
$custom_header = consultio_get_page_opt('custom_header');
$p_logo_mobile = consultio_get_page_opt('p_logo_mobile');
if($custom_header && !empty($p_logo_mobile['url'])) {
    $logo_mobile['url'] = $p_logo_mobile['url'];
}
$h_phone = consultio_get_opt( 'h_phone', '' );
$h_phone_label = consultio_get_opt( 'h_phone_label', '' );
$h_time = consultio_get_opt( 'h_time', '' );
$h_time_label = consultio_get_opt( 'h_time_label', '' );
?>
<header id="ct-masthead">
    <div id="ct-header-wrap" class="ct-header-layout10 fixed-height <?php if($sticky_on == 1) { echo 'is-sticky'; } ?>">
        <div id="ct-header" class="ct-header-main">
            <div class="container">
                <div class="row">
                    <div class="ct-header-branding">
                        <div class="ct-header-branding-inner">
                            <?php get_template_part( 'template-parts/header-branding' ); ?>
                        </div>
                        <div class="ct-header-branding-bg"></div>
                    </div>
                    <div class="ct-header-navigation-wrap">
                        <div class="ct-header-holder">
                            <?php if(!empty($wellcome)) : ?>
                                <div class="ct-header-info-item ct-header-wellcome">
                                    <?php echo wp_kses_post($wellcome); ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($h_phone)) : ?>
                                <div class="ct-header-info-item ct-header-call">
                                    <div class="h-item-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="h-item-meta">
                                        <span><?php echo esc_attr($h_phone_label); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($h_time)) : ?>
                                <div class="ct-header-info-item ct-header-time">
                                    <div class="h-item-icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="h-item-meta">
                                        <span><?php echo esc_attr($h_time_label.' '.$h_time); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="ct-header-navigation">
                            <nav class="ct-main-navigation">
                                <div class="ct-main-navigation-inner">
                                    <?php if ($logo_mobile['url']) { ?>
                                        <div class="ct-logo-mobile">
                                            <a href="<?php esc_url( esc_url( home_url( '/' ) ) ); ?>" title="<?php esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo esc_url( $logo_mobile['url'] ); ?>" alt="<?php esc_attr( get_bloginfo( 'name' ) ); ?>"/></a>
                                        </div>
                                    <?php } ?>
                                    <?php consultio_header_mobile_search(); ?>
                                    <div class="ct-main-navigation-filter">
                                        <?php get_template_part( 'template-parts/header-menu' ); ?>
                                    </div>
                                </div>
                            </nav>
                            <div class="ct-header-meta">
                                <?php if($search_icon) : ?>
                                    <div class="header-right-item h-btn-search"><i class="fac fac-search"></i></div>
                                <?php endif; ?>
                                <?php if(class_exists('Woocommerce') && $cart_icon) : ?>
                                    <div class="header-right-item h-btn-cart">
                                        <i class="fac fac-shopping-basket"></i>
                                        <span class="widget_cart_counter_header"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'consultio' ), WC()->cart->cart_contents_count ); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if($hidden_sidebar_icon && is_active_sidebar( 'sidebar-hidden' )) : ?>
                                    <div class="header-right-item h-btn-sidebar"><span></span></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ct-menu-mobile">
                <?php if(class_exists('Woocommerce') && $cart_icon) : ?>
                    <span class="btn-nav-cart"><i class="fac fac-shopping-basket"></i></span>
                <?php endif; ?>
                <span class="btn-nav-mobile open-menu">
                    <span></span>
                </span>
            </div>
        </div>
    </div>
</header>
<div class="ct-header-offset"></div>