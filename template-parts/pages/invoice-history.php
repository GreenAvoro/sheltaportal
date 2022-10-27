<?php 
ob_start();
?>



<div class="portal-container layout-1-3">
    <div class="panels-column">
        <?= get_template_part('template-parts/navigation'); ?>
    </div>
    <div class="panels-column">
        <div class="portal-panel-container" id="i-app">
            {{ message }}
        </div>
    </div>
</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
                message: "Hello from Vue!!!!"
            }
        }
    }).mount('#i-app')
</script>




<?php
echo ob_get_clean();
?>