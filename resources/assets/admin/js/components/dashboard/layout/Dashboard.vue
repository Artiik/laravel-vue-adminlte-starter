<template>
    <div>
        <main-header></main-header>

        <main-sidebar v-if="userLoggedIn" ></main-sidebar>

        <!-- =============================================== -->

        <content-wrapper>
            <div slot="header"><slot name="header"></slot></div>
            <div slot="content"><slot name="content"></slot></div>
        </content-wrapper>

        <!-- =============================================== -->

        <main-footer></main-footer>
    </div>
</template>

<script>
    export default {
        props: [],
        computed: {
            userLoggedIn() {
                return this.$store.state.userLoggedIn;
            }
        },
        //components: ['main-header', 'main-sidebar', 'content-wrapper', 'main-footer'],
        mounted() {
            console.log('Component Dashboard mounted.')
        }
    }
</script>

<style>

</style>