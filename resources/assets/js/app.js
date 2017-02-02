
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');
 require('./axios.min');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Object.defineProperty(Vue.prototype, '$bus', {
 	get() {
 		return this.$root.bus;
 	}
 });

 Vue.component('info-createform', require('./components/CreateForm.vue'));
 Vue.component('info-editform', require('./components/EditForm.vue'));
 Vue.component('info-error', require('./components/Error.vue'));

 Vue.component('info-card', require('./components/Card.vue'));
 Vue.component('info-cardlist', require('./components/CardList.vue'));
 Vue.component('info-carddetails', require('./components/CardDetails.vue'));

 Vue.component('info-homecardlist', require('./components/HomeCardList.vue'));
 Vue.component('info-filter', require('./components/Filter.vue'));
 Vue.component('info-footer', require('./components/Footer.vue'));

 var bus = new Vue();

 const app = new Vue({
 	el: '#app',
 	data:{
 		bus: bus,
 	}
 });

 $('.nav-toggle').click(function(){
 	$(".nav-menu").toggleClass("is-active");
 });
