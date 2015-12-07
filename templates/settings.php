<div class="wrap">
    <h2>Entry List</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('rca_entry_list-group'); ?>
        <?php @do_settings_fields('rca_entry_list-group'); ?>

        <?php do_settings_sections('rca_entry_list'); ?>

        <?php @submit_button(); ?>
    </form>
</div>