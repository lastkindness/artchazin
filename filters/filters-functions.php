<?php
    function get_taxonomy_links() {
        $terms = get_terms([
            'taxonomy' => 'group',
            'hide_empty' => false
        ]);
    }
?>
