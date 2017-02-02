<template>
	<div class="modal is-active">
		<div class="modal-background" @click="$emit('close')"></div>
		<div class="modal-content">
			<div class="box">
				<section class="section">
					<div class="container">
						<div class="block">
							<div class="heading">
								<h1 class="title">{{job.title}}</h1>
								<h2 class="subtitle">
									<strong>{{ getCity }}</strong> - {{ getCategory }}					
								</h2>
							</div>
						</div>
						<div class="columns">
							<div class="column is-7">
								<div class="block">
									
								</div>
								<div class="block">
									{{job.description}}
								</div>
							</div>
							<div class="column is-5">
								<ul>
									<li>
										<span>合同类型</span><span class="is-pulled-right"><strong>{{ getContract }}</strong></span>
									</li>
									<hr>
									<li>
										<span>薪水</span><span class="is-pulled-right"><strong>{{ getSalary }}</strong></span>
									</li>
									<hr>
									<li>
										<span>工作地址</span><span class="is-pulled-right"><strong>{{ job.address }}</strong></span>
									</li>
									<hr>
									<li>
										<span>联系人</span><span class="is-pulled-right"><strong>{{ job.contact }}</strong></span>
									</li>
									<hr>
									<li>
										<span>简历请投</span><span class="is-pulled-right"><strong>{{ job.email }}</strong></span>
									</li>
									<hr>
									<li>
										<span>联系电话</span><span class="is-pulled-right"><strong>{{ job.phone }}</strong></span>
									</li>
									<hr>
									<li>
										<span>公司网址</span><span class="is-pulled-right"><strong>{{ job.website }}</strong></span>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<button class="modal-close" @click="$emit('close')"></button>
	</div>
</template>

<script>
	export default {
		props: ['job'],
		computed:{
			getContract(){
				switch(this.job.contract) {
					case "contract":
					return "合同工／小时工"
					break;
					default:
					return "全职工作"
				}
			},
			getCategory(){
				switch(this.job.category) {
					case "labour":
					return "体力工作"
					break;
					case "office":
					return "办公文员"
					break;
					case "sales":
					return "销售相关"
					break;
					case "tech":
					return "专业技术"
					break;
					case "nanny":
					return "保姆看护"
					break;
					case "education":
					return "家庭教育"
					break;
					default:
					return "其他类别"
				}
			},
			getCity(){
				switch(this.job.city) {
					case "gta":
					return "大多地区 (GTA)"
					break;
					case "eastyork":
					return "东约克 (East York)"
					break;
					case "northyork":
					return "北约克 (North York)"
					break;
					case "etobicoke":
					return "怡陶碧谷 (Etobicoke)"
					break;
					case "scarborough":
					return "士嘉堡 (Scarborough)"
					break;
					case "markham":
					return "万锦 (Markham)"
					break;
					case "mississauga":
					return "密西沙加 (Mississauga)"
					break;
					case "vaughan":
					return "旺市 (Vaughan)"
					break;
					case "richmondhill":
					return "列治文山 (Richmond Hill)"
					break;
					case "thornhill":
					return "康山 (Thornhill)"
					break;
					case "brampton":
					return "宾顿 (Brampton)"
					break;
					case "pickering":
					return "皮克灵 (Pickering)"
					break;
					case "ajax":
					return "艾加科斯 (Ajax)"
					break;
					case "whitby":
					return "惠特比 (Whitby)"
					break;
					case "oshawa":
					return "奥沙华 (Oshawa)"
					break;
					case "newmarket":
					return "新市 (Newmarket)"
					break;
					case "aurora":
					return "奥罗拉 (Aurora)"
					break;
					case "oakville":
					return "奥克维尔 (Oakville)"
					break;
					case "burlington":
					return "伯灵顿 (Burlington)"
					break;
					case "milton":
					return "弥敦 (Milton)"
					break;
					case "stouffville":
					return "史托维尔 (Stouffville)"
					break;
					default:
					return "其他地区 (Other)"
				}
			},	
			getSalary(){
				if(this.job.contract == "contract"){
					switch(this.job.salary) {
						case "1":
						return "11 - 20 加元/小时"
						break;
						case "2":
						return "21 - 30 加元/小时"
						break;
						case "3":
						return "31 - 40 加元/小时"
						break;
						default:
						return "40+ 加元/小时"
					}
				}else{
					switch(this.job.salary) {
						case "1":
						return "10000 - 20000 加元／年"
						break;
						case "2":
						return "20001 - 30000 加元／年"
						break;
						case "3":
						return "30001 - 40000 加元／年"
						break;
						case "4":
						return "40001 - 50000 加元／年"
						break;
						case "5":
						return "50001 - 60000 加元／年"
						break;
						case "6":
						return "60000 - 70000 加元／年"
						break;
						default:
						return "70000+ 加元／年"
					}
				}
			},	
		},
	}
</script>
