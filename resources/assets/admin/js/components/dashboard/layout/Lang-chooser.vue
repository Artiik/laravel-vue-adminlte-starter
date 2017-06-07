<template>
    <div class="lang-chooser form-group">
        <label for="" >{{ trans("admin.dashboard.Language") }}</label>
        <select @change="changeLang"
                v-model="selectedLocale"
                class="form-control">
            <option v-for="option in options" :value="option.value">{{ option.text }}</option>
        </select>
    </div>
</template>
<script>
    export default {
        props: [],

        data() {
            return {
                selectedLocale: this.$store.state.locale,
                options: [
                    { value: 'en', text: 'En' },
                    { value: 'ru', text: 'Ru' },
                ]
            };
        },

        methods: {
            changeLang() {
                axios.post('/admin/change-lang',
                    { _token: axios.defaults.headers.common["X-CSRF-TOKEN"], locale: this.selectedLocale})
                    .then((response) => {
                        location.reload();
                    });
            },
        },

        created() {
            //this.setLang();
        },

        mounted() {
            console.log('Component Lang-chooser mounted.');
        }
    }
</script>
<style type="scss">
    .lang-chooser label {
        color: #fff;
    }
</style>