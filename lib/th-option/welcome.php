
<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('Setup Home Page','open-mart'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Click button to set theme default home page','open-mart'); ?></p>
     <p>
        <?php
        if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __("Home Page Activated",'open-mart');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __("Set Home Page",'open-mart');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";


        }
        ?>
		
		<button style="<?php echo $Bstyle; ?>"; class="button activate-now <?PHP echo $class; ?>"><?php _e($btn_text,'open-mart'); ?></button>
        <a style="<?php echo $style; ?>";  target="_blank" href="<?php echo get_home_url(); ?>" class="button alink button-primary"><?php _e('View Home Page','open-mart'); ?></a>
		
         </p>
    <p>
        <a target="_blank" href="https://themehunk.com/docs/open-mart/#homepage-setting"><?php _e('Manually Setup','open-mart'); ?></a>
    </p>


    

</div> 

<!--- tab second -->
<div class="theme_link">

    <h3><?php _e("Documentation","open-mart"); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e("Our WordPress Theme is well documented, you can go with our documentation and learn to customize Open Mart.","open-mart"); ?></p>
    <p><a target="_blank" href="https://themehunk.com/docs/open-mart/"><?php _e("Go to docs","open-mart"); ?></a></p>

    
    
</div>
<!--- tab third -->



<!--- tab second -->
<div class="theme_link">
    <h3><?php _e("Customize Your Website","open-mart"); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e("Open Mart theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel","open-mart"); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","open-mart"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e('Customizer Links','open-mart'); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","open-mart"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[section]=site_color'); ?>" class="components-button is-link"><?php _e("Site Colors","open-mart"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[section]=global_set'); ?>" class="components-button is-link"><?php _e("Global Options","open-mart"); ?></a>

                </div>


            <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-main-header'); ?>" class="components-button is-link"><?php _e("Header Options","open-mart"); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-woo-shop-page'); ?>" class="components-button is-link"><?php _e("Shop Page Options","open-mart"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-section-blog-group'); ?>" class="components-button is-link"><?php _e("Blog Section","open-mart"); ?></a><hr>
            </div>


        </div>
    </div>

</div>
<!--- tab fourth -->

 