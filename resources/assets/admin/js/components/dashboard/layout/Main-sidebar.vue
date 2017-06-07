<template>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://placehold.it/160x160/00a65a/ffffff/&text=A" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ user.name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: -->
            <ul class="sidebar-menu">
                <li class="header">{{ trans("admin.dashboard.Administration") }}</li>
                <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li :class="{ active: menuItem.active }" v-for="menuItem in menuItems.administration"><a :href="menuItem.link"><i :class="menuItem.iconClass"></i> <span>{{ menuItem.label }}</span></a></li>

                <!-- ======================================= -->
                <li class="header">{{ trans("admin.dashboard.User") }}</li>
                <li v-for="menuItem in menuItems.user"><a :href="menuItem.link"><i :class="menuItem.iconClass"></i> <span>{{ menuItem.label }}</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
</template>

<script>
    //import { mapGetters } from 'vuex';
    //const mapGetters = require('vuex').mapGetters;

    export default {

        //props: ['user'],
        computed: {
//            ...mapGetters(['user'])
            user() {
                return this.$store.getters.user;
            },
            menuUrls() {
                return this.$store.state.linkUrls.main_sidebar_urls;
            },
            currentUrl() {
                return this.$store.state.linkUrls.current_url;
            },
            menuItems() {
                return {
                    administration: [
                        {
                            label: this.trans("admin.dashboard.Dashboard"),
                            link: this.menuUrls.admin.dashboard,
                            iconClass: 'fa fa-dashboard',
                            active: this.currentUrl == this.menuUrls.admin.dashboard
                        },
                    ],
                    user: [
                        {
                            label: this.trans("admin.dashboard.Logout"),
                            link: this.menuUrls.user.logout,
                            iconClass: 'fa fa-sign-out',
                            active: this.currentUrl == this.menuUrls.user.logout
                        }
                    ]
                };
            }
        },

        data() {
            return {
            };
        },

        mounted() {
            console.log('Component Main-sidebar mounted.')
        }
    }
</script>

<style>
    .main-sidebar {
        padding-top: 74px;
    }
</style>