
Vue.prototype.trans = function(key) {
    return _.get(this.$store.state.trans, key, key);
};
