<?php
// check user capabilities
if ( ! current_user_can( 'manage_options' ) ) {
return;
}

// add error/update messages

// check if the user have submitted the settings
// WordPress will add the "settings-updated" $_GET parameter to the url
if ( isset( $_GET['settings-updated'] ) ) {
// add settings saved message with the class of "updated"
add_settings_error( 'gutentor_settings_messages', 'gutentor_settings_message', __( 'Settings Saved', 'gutentor_settings' ), 'updated' );
}

// show error/update messages
settings_errors( 'gutentor_settings_messages' );
?>
<div class="g-settings-wrap">
    <h2><?php esc_attr_e( 'Gutentor Settings', 'gutentor' ); ?></h2>
    <h2 class="nav-tab-wrapper">
        <a href="#general" class="nav-tab nav-tab-active" data-action="gutentor-general">
            <?php esc_attr_e( 'General', 'gutentor' ); ?>
        </a>
        <a href="#optimization" class="nav-tab" data-action="gutentor-optimization">
            <?php esc_attr_e( 'Optimization', 'gutentor' ); ?>
        </a>
        <?php
        if( gutentor_is_edd_active()){
            ?>
            <a href="#edd" class="nav-tab" data-action="gutentor-edd">
                <?php esc_attr_e( 'EDD', 'gutentor' ); ?>
            </a>
        <?php
        }
        ?>
    </h2>
    <form class="g-settings-form" action="options.php" method="post">
        <?php
        // output security fields for the registered setting "gutentor_settings"
        settings_fields( 'gutentor_settings' );
        // output setting sections and their fields
        // (sections are registered for "gutentor_settings", each field is registered to a specific section)
        do_settings_sections( 'gutentor_general_settings' );
        do_settings_sections( 'gutentor_optimization_settings' );
        do_settings_sections( 'gutentor_edd_settings' );
        // output save settings button
        submit_button( 'Save Settings' );
        ?>
    </form>
</div>