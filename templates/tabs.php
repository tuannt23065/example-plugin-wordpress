<form method="post" id="dngplugin-settings-form" class="" action="options.php">
    <?php
        settings_fields( 'dng-plugin-settings-group' );
        do_settings_sections( 'dng-plugin-settings-group' );
    ?>
    <div class="wrap">
        <?php $tab = $_GET['tab']; ?>

        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

        <nav class="nav-tab-wrapper">
            <a href="?page=dng-plugin-menu-page" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">Default Tab</a>
            <a href="?page=dng-plugin-menu-page&tab=settings" class="nav-tab <?php if($tab==='settings'):?>nav-tab-active<?php endif; ?>">Settings</a>
            <a href="?page=dng-plugin-menu-page&tab=tools" class="nav-tab <?php if($tab==='tools'):?>nav-tab-active<?php endif; ?>">Tools</a>
        </nav>

        <div class="tab-content">
            <?php 
                switch($tab) :
                    case 'settings':
                        echo 'Settings';
                    break;
                    case 'tools':
                        echo 'Tools';
                    break;
                    default:
                        echo 'Default tab';
                    break;
                endswitch; 
            ?>
        </div>
        <!--Submit Button-->
        <div class="dngplugin-save-btn-container"><?php submit_button(); ?></div>
    </div>
</form>
