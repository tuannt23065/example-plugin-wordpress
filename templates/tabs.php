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
                echo 'Settings'; //Put your HTML here
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