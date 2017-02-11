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
                <li class="header">Administration</li>
                <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li v-for="menuItem in menuItems.administration"><a :href="menuItem.link"><i :class="menuItem.iconClass"></i> <span>{{ menuItem.label }}</span></a></li>


                <!-- ======================================= -->
                <li class="header">User</li>
                <li v-for="menuItem in menuItems.user"><a :href="menuItem.link"><i :class="menuItem.iconClass"></i> <span>{{ menuItem.label }}</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
</template>

<script>
    export default {

        props: ['user'],

        data() {
            return {
                menuItems: {
                    administration: [
                        { label: 'Dashboard', link: '', iconClass: 'fa fa-dashboard' }
                    ],
                    user: [
                        { label: 'Logout', link: '/admin/logout', iconClass: 'fa fa-sign-out' }
                    ]
                }
            };
        },

        mounted() {
            console.log('Component Main-sidebar mounted.')
        }
    }
</script>

<style>

</style>