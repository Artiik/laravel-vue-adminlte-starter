<template>
    <header class="main-header">
        <!-- Logo -->
        <a :href="logoUrl" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">Logo mini</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Logo lg</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu pull-left">
                <ul class="nav navbar-nav">
                    <!-- =================================================== -->
                    <!-- ========== Top menu items (ordered left) ========== -->
                    <!-- =================================================== -->

                    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

                    <!-- ========== End of top menu left items ========== -->
                </ul>
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- ========================================================= -->
                    <!-- ========== Top menu right items (ordered left) ========== -->
                    <!-- ========================================================= -->

                    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

                    <li>
                        <lang-chooser></lang-chooser>
                    </li>

                    <li v-if="userLoggedIn"><a href="/admin/logout"><i class="fa fa-btn fa-sign-out"></i> {{ trans("admin.dashboard.Logout") }}</a></li>
                    <li v-else><a href="/admin/login">{{ trans("admin.dashboard.Login") }}</a></li>

                    <!-- ========== End of top menu right items ========== -->
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        props: [],

        computed: {
            userLoggedIn() {
                return this.$store.state.userLoggedIn;
            },
            logoUrl() {
                return this.$store.state.linkUrls.logo_url;
            },
        },

        mounted() {
            console.log('Component Main-header mounted.')
        }
    }
</script>

<style type="scss">
    .main-header .sidebar-toggle {
        padding: 1.9em;
    }

    .main-header .logo {
        height: 74px;
    }

    .logo span {
        height: 100%;
        line-height: 74px;
    }

    .main-header .nav li a {
        width: 100%;
        height: 100%;
        padding: 1.9em;
    }
</style>
