<?php

function mademoiselle_option_page() {

    add_menu_page(
            'Option Page',
            'Mademoiselle Options',
            'administrator',
            'option_page',
            'mademoiselle_contact_data',
            'dashicons-screenoptions',
            19);
}

add_action('admin_menu', 'mademoiselle_option_page');

function mademoiselle_contact_settings() {
    register_setting('mademoiselle_contact_data', 'mademoiselle_contact_title');
    register_setting('mademoiselle_contact_data', 'mademoiselle_address');
    register_setting('mademoiselle_contact_data', 'mademoiselle_phone');
    register_setting('mademoiselle_contact_data', 'mademoiselle_mobile_1');
    register_setting('mademoiselle_contact_data', 'mademoiselle_mobile_2');
    register_setting('mademoiselle_contact_data', 'mademoiselle_email_1');
    register_setting('mademoiselle_contact_data', 'mademoiselle_email_2');
}

add_action('init', 'mademoiselle_contact_settings');

function mademoiselle_contact_data() {
    ?>
    <h1>Mademoiselle Contact Data</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields('mademoiselle_contact_data');
        do_settings_sections('mademoiselle_contact_data');
        ?>


        <table class="form-table">
            <tr>
                <th>Info Section Title:</th>
                <td>
                    <input type="text" name="mademoiselle_contact_title" value="<?php echo esc_attr(get_option('mademoiselle_contact_title')); ?>">
                </td>
            </tr>

            <tr>
                <th>Address:</th>
                <td>
                    <input type="text" name="mademoiselle_address" value="<?php echo esc_attr(get_option('mademoiselle_address')); ?>">
                </td>
            </tr>

            <tr>
                <th>Phone:</th>
                <td>
                    <input type="text" name="mademoiselle_phone" value="<?php echo esc_attr(get_option('mademoiselle_phone')); ?>">
                </td>
            </tr>

            <tr>
                <th>Mobile Phone 1:</th>
                <td>
                    <input type="text" name="mademoiselle_mobile_1" value="<?php echo esc_attr(get_option("mademoiselle_mobile_1")); ?>">
                </td>
            </tr>

            <tr>
                <th>Mobile Phone 2:</th>
                <td>
                    <input type="text" name="mademoiselle_mobile_2" value="<?php echo esc_attr(get_option("mademoiselle_mobile_2")); ?>">
                </td>
            </tr>

            <tr>
                <th>Email Address 1:</th>
                <td>
                    <input type="text" name="mademoiselle_email_1" value="<?php echo esc_attr(get_option("mademoiselle_email_1")); ?>">
                </td>
            </tr>

            <tr>
                <th>Email Address 2:</th>
                <td>
                    <input type="text" name="mademoiselle_email_2" value="<?php echo esc_attr(get_option("mademoiselle_email_2")); ?>">
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
    <?php
}
