var menu = new Vue({
	el: "#menu-icon",
	data: {},
	methods:{
		display_menu:function(){
			document.getElementById('menu').classList.toggle('display-menu');
		}
	}
});