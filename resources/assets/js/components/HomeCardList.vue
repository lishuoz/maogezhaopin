<template>
	<div>
		<div v-for="job in myjobs">
			<info-card :job="job">
			</info-card>
		</div>
	</div>
</template>

<script>
	export default {
		props:['jobs'],
		data(){
			return{
				myjobs: this.jobs,
			}
		},
	}
</script>
