<template>
	<div>
		<div v-for="job in slicedJobs">
			<info-card :job="job">
				<template slot="footer"></template>
			</info-card>
		</div>
		<nav class="pagination is-large" v-show="allJobs.length > chunk">
			<a class="button is-primary is-outlined pagination-previous is-medium" @click="changePage(current_page - 1)" :disabled="current_page == 1">上一页</a>
			<a class="button is-primary is-outlined pagination-next is-medium" @click="changePage(current_page + 1)" :disabled="current_page == last_page">下一页</a>
		</nav>
	</div>
</template>

<script>
	export default {
		props:['jobs'],
		data(){
			return{
				allJobs: this.jobs,
				slicedJobs: '',
				current_page: 1,
				chunk: 12,
			}
		},
		computed: {
			last_page(){
				return parseInt(this.allJobs.length / this.chunk);
			}
		},
		methods: {
			fetchItems: function (page) {
				this.slicedJobs = this.allJobs.slice( (page - 1) * this.chunk, page*this.chunk);
			},
			changePage: function (paginationge) {
				this.current_page = paginationge;
				this.fetchItems(paginationge);
				window.scrollTo(0, 0);
			}
		},
		mounted() {
	        // Register event listener
	        var self = this;
	        this.$bus.$on('submitFilter', function(data) {
	        	self.allJobs = data;
	        	self.slicedJobs = self.allJobs.slice(0, self.chunk);
	        	self.current_page = 1;
	        });
	        this.$bus.$on('resetFilter', function() {
	        	self.allJobs = self.jobs;
	        	self.slicedJobs = self.allJobs.slice(0, self.chunk);
	        	self.current_page = 1;
	        });
	        this.slicedJobs = this.allJobs.slice(0, this.chunk);
	    },
	}
</script>
