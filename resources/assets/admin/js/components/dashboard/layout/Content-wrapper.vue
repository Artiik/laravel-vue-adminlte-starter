<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <slot name="header"></slot>
        <!-- Main content -->
        <section class="content">
            <slot name="content"></slot>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component Content-wrapper mounted.')
        }
    }
</script>

<style>

</style>