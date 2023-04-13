<?php
get_template_part('template-parts/generic/footer', 'footer');
?>
<?php
wp_localize_script(
    'script',
    'jbClientAjax',
    array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'security' => wp_create_nonce('secure_access')
    )
);
wp_footer();
?>
</body>

</html>