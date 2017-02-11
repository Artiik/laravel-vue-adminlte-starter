<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <slot></slot>
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