<?php
$getUrlTab = isset($_GET['th-tab']) && $_GET['th-tab'] ? sanitize_key($_GET['th-tab']) : false;
$tabActiveWl =  $getUrlTab == 'welcome' ? 'active' : '';
$tabActiveRp =  $getUrlTab == 'recommended-plugin' ? 'active' : '';
$tabActiveImportDc =  $getUrlTab == 'import-demo-content' ? 'active' : '';
$tabActiveGtChild =  $getUrlTab == 'get-child-theme' ? 'active' : '';
$tabActiveFreePRo =  $getUrlTab == 'free-vs-pro' ? 'active' : '';
$tabActiveHelp =  $getUrlTab == 'help' ? 'active' : '';
if (!$tabActiveWl && !$tabActiveRp && !$tabActiveImportDc && !$tabActiveGtChild && !$tabActiveFreePRo && !$tabActiveHelp) {
    $tabActiveWl = 'active';
}
?>
<div class="wrap-th about-wrap-th theme_info_wrapper">
    <div class="header">

        <!-- themehunkhemes-badge wp-badge-->
<div class="th-option-area">
        <div class="th-option-top-hdr">
            <div class="col-1">
                <div class="logo-img">
                <a target="_blank" href="<?php echo $theme_header['theme_brand_url']; ?>/?wp=open-mart" class=""> <span class="logo-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/icon.png"/><?php echo $theme_header['theme_brand']; ?></span></a>
            </div>
            </div>
            <div class="col-2">
                <div class="th-option-heading">
                    <h2><?php  echo $theme_header['welcome']; ?></h2>
                    <span><?php echo $theme_header['welcome_desc']; ?></span>
                </div>
                <span class="version"><?php echo $theme_header['v']; ?></span>
                <span><?php echo _e('FREE THEME','open-mart'); ?></span>
            </div>
        </div>
        <div class="th-option-bottom-hdr">
            <a class="tablinks <?php echo esc_attr($tabActiveWl) ?>" onclick="openTab(event, 'Welcome')"><?php _e('Welcome','open-mart');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveRp) ?>" onclick="openTab(event, 'Recommended-Plugin')"><?php _e('Recommended Plugin','open-mart');?> </a>
            <a class="tablinks <?php echo esc_attr($tabActiveImportDc) ?>" onclick="openTab(event, 'Import-Demo-Content')"><?php _e('Demo Import','open-mart');?> </a>
            <a class="tablinks get-child <?php echo esc_attr($tabActiveGtChild) ?>" onclick="openTab(event, 'Get-Child-Theme')"><?php _e('Get Child Theme','open-mart');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveFreePRo) ?>" onclick="openTab(event, 'Free-Vs-Pro')"><?php _e('Free Vs Pro','open-mart');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveHelp) ?>" onclick="openTab(event, 'Help')"><?php _e('Help','open-mart');?></a>
        </div>
    </div>

    </div> <!-- /header -->




    </div>

<div class="content-wrap">
    <div class="main">

<div class="tab-left" >

        

        <!-- Tab content -->
        <div id="Welcome" class="tabcontent <?php echo esc_attr($tabActiveWl) ?>">
            <div class="rp-two-column welcome-tabs">
        <?php include('welcome.php' ); ?>

            </div> <!-- close twocolumn -->
        </div>


          <div id="Import-Demo-Content" class="tabcontent <?php echo esc_attr($tabActiveImportDc) ?>">

            <div class="rp-two-column">

                <div class="rcp theme_link th-row import-demo">
                    <div class="import-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/import.png">
                    </div>
                <div class="title-plugin">
                <h3><?php _e('Click Here To Import Demo Content','open-mart'); ?></h3>
				 
				 <p> <?php _e('You need to Install required plugins like- Hunk Companion, WooCommerce and One click demo import plugin. After installing required plugins import button will activate.', 'open-mart'); ?></p>
              <a class="button disabled importdemo"><?php _e( 'Import Demo', 'open-mart' ); ?></a>
				 
             </div>

             </div>
             
                  
                <?php $this->plugin_install('import-demo-content'); ?>
            
            </div>

        
        </div>

        <div id="Recommended-Plugin" class="tabcontent <?php echo esc_attr($tabActiveRp) ?>">
            <div class="rp-two-column">
            <?php $this->plugin_install(); ?>
            </div>
        </div>


            <div id="Free-Vs-Pro" class="tabcontent <?php echo esc_attr($tabActiveFreePRo) ?>">
                <div class="rp-two-column">
                    <?php include('free-pro.php' ); ?>

                </div>
            </div>


            <div id="Get-Child-Theme" class="tabcontent <?php echo esc_attr($tabActiveGtChild) ?>">
                <div class="rp-two-column">
                    <?php require OPEN_MART_THEME_DIR . 'lib/th-option/get-child-theme.php'; ?>

                </div>
            </div>

    <div id="Help" class="tabcontent <?php echo esc_attr($tabActiveHelp) ?>">
        <div class="rp-two-column">
                    <?php include('need-help.php' ); ?>

        </div>
    </div>


</div> <!-- tab div close -->



<div class="sidebar-wrap">
    <div class="sidebar">
    <?php include('sidebar.php' ); ?>
    </div>
</div>


</div>
</div>