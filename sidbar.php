<?php
/**
 * Sidebar template.
 *
 * @package astr-blg
 */
?>

<!-- BEGIN #sidebar -->
<aside id="sidebar">
    <ul>
        <?php
        // Checking if there are active sidebars
        if (is_active_sidebar('sidebar')) :
            // Displaying the sidebars
            dynamic_sidebar('sidebar');
        endif;
        ?>
    </ul>
</aside>
<!-- END #sidebar -->
