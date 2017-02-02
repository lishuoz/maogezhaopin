<template>
    <section class="section">
        <div class="container">
            <form @submit.prevent="onSubmit" id="createForm">
               <div class="columns">
                <div class="column is-half">
                    <label class="label">职位名称</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" name="title" v-model="formName" required>
                    </p>

                    <label class="label">所属类别</label>
                    <p class="control">
                        <span class="select is-medium">
                            <select name="category" v-model="formCategory">
                                <option v-for="category in categories" :value="category.value">{{ category.name }}</option>
                            </select>
                        </span>
                    </p>

                    <label class="label">所在城市</label>
                    <p class="control">
                        <span class="select is-medium">
                            <select name="city" v-model="formCity">
                                <option v-for="city in cities" :value="city.value">{{ city.name }}</option>
                            </select>
                        </span>
                    </p>

                    <label class="label">工作地点</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" v-model="formAddress" name="address">
                    </p>

                    <label class="label">职位介绍</label>
                    <p class="control">
                        <textarea class="textarea is-medium" placeholder="Textarea" v-model="formDescription" name="description"></textarea>
                    </p>
                    
                </div>
                <div class="column is-half">

                    <label class="label">合同类型</label>
                    <p class="control">
                        <span class="select is-medium">
                            <select v-model="contract" name="contract">
                                <option value="contract">合同工／小时工</option>
                                <option value="permanent">全职工作</option>
                            </select>
                        </span>
                    </p>

                    <label class="label">工资范围</label>
                    <p class="control" v-show="contract == 'permanent'">
                        <span class="select is-medium">
                            <select name="salary" v-model="formSalary">
                                <option value="1">10000 - 20000 加元／年</option>
                                <option value="2">20001 - 30000 加元／年</option>
                                <option value="3">30001 - 40000 加元／年</option>
                                <option value="4">40001 - 50000 加元／年</option>
                                <option value="5">50001 - 60000 加元／年</option>
                                <option value="6">60000 - 70000 加元／年</option>
                                <option value="7">70000+ 加元／年</option>
                            </select>
                        </span>
                    </p>

                    <p class="control" v-show="contract == 'contract'">
                        <span class="select is-medium">
                            <select name="salary" v-model="formSalary">
                                <option value="1">11 - 20 加元/小时</option>
                                <option value="2">21 - 30 加元/小时</option>
                                <option value="3">31 - 40 加元/小时</option>
                                <option value="4">40+ 加元/小时</option>
                            </select>
                        </span>
                    </p>

                    <label class="label">联系人名称</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" name="contact" required>
                    </p>

                    <label class="label">邮箱地址</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" name="email">
                    </p>

                    <label class="label">联系电话</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" name="phone" required>
                    </p>

                    <label class="label">公司网址</label>
                    <p class="control">
                        <input class="input is-medium" type="text" placeholder="Text input" name="website">
                    </p>

                    <p class="control">
                        <button type="submit" class="button is-primary is-medium">发布我的工作</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>
</template>

<script>
    export default {
        data(){
            return {
                contract: 'contract',
                token: window.Laravel.csrfToken,
                cities: '',
                formName: '',
                formCategory: 'labour',
                formCity: 'gta',
                formAddress: '',
                formDescription: '',
                formSalary: '7',
                categories: [
                { name :'体力工作', value: 'labour' },
                { name: '办公文员', value: 'office' },
                { name: '销售相关', value: 'sales' },
                { name: '专业技术', value: 'tech' },
                { name: '保姆看护', value: 'nanny' },
                { name: '家庭教育', value: 'education' },
                { name: '其他类别', value: 'other' },
                ],
                cities: [
                { name :'大多地区 (GTA)', value: 'gta' },
                { name: '东约克 (East York)', value: 'eastyork' },
                { name: '北约克 (North York)', value: 'northyork' },
                { name: '怡陶碧谷 (Etobicoke)', value: 'etobicoke' },
                { name: '士嘉堡 (Scarborough)', value: 'scarborough' },
                { name: '万锦 (Markham)', value: 'markham' },
                { name: '密西沙加 (Mississauga)', value: 'mississauga' },
                { name: '旺市 (Vaughan)', value: 'vaughan' },
                { name: '列治文山 (Richmond Hill)', value: 'richmondhill' },
                { name: '康山 (Thornhill)', value: 'thornhill' },
                { name: '宾顿 (Brampton)', value: 'brampton' },
                { name: '皮克灵 (Pickering)', value: 'pickering' },
                { name: '艾加科斯 (Ajax)', value: 'ajax' },
                { name: '惠特比 (Whitby)', value: 'whitby' },
                { name: '奥沙华 (Oshawa)', value: 'oshawa' },
                { name: '新市 (Newmarket)', value: 'newmarket' },
                { name: '奥罗拉 (Aurora)', value: 'aurora' },
                { name: '奥克维尔 (Oakville)', value: 'oakville' },
                { name: '伯灵顿 (Burlington)', value: 'burlington' },
                { name: '弥敦 (Milton)', value: 'milton' },
                { name: '史托维尔 (Stouffville)', value: 'stouffville' },
                { name: '其他地区 (Other)', value: 'other' },
                ],
            }
        },
        methods:{
            onSubmit(){
                axios.post('/user', {
                    firstName: 'Fred',
                    lastName: 'Flintstone'
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
                window.location.href = "/home";
            }
        }
    }
</script>
