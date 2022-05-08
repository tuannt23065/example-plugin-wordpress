<?php

namespace DNG;

use DNG\Traits\Singleton;

class Settings {
	
	use Singleton;

    protected function __construct() {
        $this->setupHooks();   
    }

    protected function setupHooks() {
        add_action( 'admin_menu', [ $this, 'addSettingPage' ] );
    }

    public function addSettingPage() {

		$menuPluginDNG = __( 'DNG Settings', 'dng-plugin' );

		// Create new top-level menu.
		add_menu_page(
			__(
				'DNG Settings',
				'dng-plugin'
			),
			$menuPluginDNG,
			'administrator',
			'dng-plugin-menu-page',
			[ $this, 'pluginSettingsPageContent' ],
			'dashicons-admin-generic'
		);

		// Call register settings function.
		add_action( 'admin_init', [ $this, 'registerPluginSettings' ] );
	}

	public function registerPluginSettings() {
		register_setting( 'dng-plugin-settings-group', 'dng_plugin_options' );
	}

	public function pluginSettingsPageContent() {

		// Check user capabilities.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.NoNonceVerification

			// Add settings saved message with the class of "updated".
			add_settings_error( 'dngplugin_app_messages', 'dngplugin_app_message', __( 'Settings Saved', 'dng-plugin' ), 'updated' );

		}

		// Show error/update messages.
		settings_errors( 'dngplugin_app_messages' );

		include_once DNG_PLUGIN_TEMPLATE_PATH . 'tabs.php';
	}

}