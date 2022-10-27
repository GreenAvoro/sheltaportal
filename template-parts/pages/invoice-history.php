<?php 
ob_start();
?>



<div class="portal-container layout-1-3">
    <div class="panels-column">
        <?= get_template_part('template-parts/navigation'); ?>
    </div>
    <div class="panels-column">
        <h1>This is the panel</h1>
    </div>

</div>




<?php
echo ob_get_clean();
?>