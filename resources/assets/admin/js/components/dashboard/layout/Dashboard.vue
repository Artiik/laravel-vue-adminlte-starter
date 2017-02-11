<template>
    <div>
        <main-header :user-logged-in="userLoggedIn" :logo-url="logoUrl"></main-header>

        <main-sidebar v-if="userLoggedIn" :user="user"></main-sidebar>

        <!-- =============================================== -->

        <content-wrapper>
           <slot></slot>
        </content-wrapper>

        <!-- =============================================== -->

        <main-footer></main-footer>
    </div>
</template>

<script>
    export default {
        props: ['user', 'logoUrl', 'userLoggedIn'],
        //components: ['main-header', 'main-sidebar', 'content-wrapper', 'main-footer'],
        mounted() {
            console.log('Component Dashboard mounted.')
        }
    }
</script>

<style>

</style>