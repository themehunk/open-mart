
<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('1. Install Recommended Plugins','open-mart'); ?></h3>
    <p><?php _e('We highly Recommend to install Hunk Companion plugin to get all customization options in Open Mart theme. Also install recommended plugins available in recommended tab.','open-mart'); ?></p>
</div>
<div class="theme_link">
    <h3><?php _e('2. Setup Home Page','open-mart'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
        <p><?php _e('To set up the HomePage in Open Mart theme, Just follow the below given Instructions.','open-mart'); ?> </p>
<p><?php _e('Go to Wp Dashboard > Pages > Add New > Create a Page using “Home Page Template” available in Page attribute.','open-mart'); ?> </p>
<p><?php _e('Now go to Settings > Reading > Your homepage displays > A static page (select below) and set that page as your homepage.','open-mart'); ?> </p>
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
        <button style="<?php echo $Bstyle; ?>"; class="button activate-now <?php echo $class; ?>"><?php echo esc_html($btn_text); ?></button>
		
         </p>
		 	 
		 
    <p>
        <a target="_blank" href="https://themehunk.com/docs/open-mart/#homepage-setting" class="button"><?php _e('Go to Doc','open-mart'); ?></a>
    </p>
</div>

<!--- tab third -->





<!--- tab second -->
<div class="theme_link">
    <h3><?php _e('3. Customize Your Website','open-mart'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Open Mart theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','open-mart'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","open-mart"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e("4. Customizer Links","open-mart"); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","open-mart"); ?></a>
                    <hr><a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-gloabal-color'); ?>" class="components-button is-link"><?php _e("Global Colors","open-mart"); ?></a><hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php _e("Woocommerce","open-mart"); ?></a><hr>

                </div>

               <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-section-header-group'); ?>" class="components-button is-link"><?php _e("Header Options","open-mart"); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-woo-shop-page'); ?>" class="components-button is-link"><?php _e("Shop Page Options","open-mart"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=open-mart-section-footer-group'); ?>" class="components-button is-link"><?php _e("Footer Section","open-mart"); ?></a><hr>
            </div>

        </div>
    </div>

</div>
<!--- tab fourth -->