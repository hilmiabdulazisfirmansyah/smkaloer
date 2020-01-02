require('./bootstrap');
window.Vue = require('vue');

Vue.component('daftarhadirsiswa', require('./components/daftarHadirSiswa.vue').default);

const daftarhadirsiswa = new Vue({el: '#daftarHadirSiswa'});
