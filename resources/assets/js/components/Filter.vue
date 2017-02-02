<template>
  <div>
    <div>
      <label class="label">排序方式</label>
      <p class="control">
        <label class="radio">
          <input type="radio" name="question" value="created_at" v-model="orderBy">
          发布时间
        </label>
        <label class="radio">
          <input type="radio" name="question" value="salary" v-model="orderBy">
          薪资待遇
        </label>
      </p>
      <hr>
    </div>
    <div>
      <label class="label">所属类别</label>
      <p class="control" v-for="category in categories">
        <label class="checkbox">
          <input type="checkbox" :value="category.value" v-model="queryCategory">
          {{ category.name }}
        </label>
      </p>
      <hr>
    </div>
    <div>
      <label class="label">合同类型</label>
      <p class="control">
        <span class="select">
          <select v-model="contract">
            <option value="">全部</option>
            <option value="contract">合同工／小时工</option>
            <option value="permanent">全职工作</option>
          </select>
        </span>
      </p>
      <hr>
    </div>
    <div v-show="contract == 'contract'">
      <label class="label">薪水范围</label>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="1" v-model="salary">
          11 - 20 加元/小时
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="2" v-model="salary">
          21 - 30 加元/小时
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="3" v-model="salary">
          31 - 40 加元/小时
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="4" v-model="salary">
          40+ 加元/小时
        </label>
      </p>
      <hr>
    </div>
    <div v-show="contract == 'permanent'">
      <label class="label">薪水范围</label>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="1" v-model="salary">
          10000 - 20000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="2" v-model="salary">
          20001 - 30000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="3" v-model="salary">
          30001 - 40000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="4" v-model="salary">
          40001 - 50000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="5" v-model="salary">
          50001 - 60000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="6" v-model="salary">
          60000 - 70000 加元／年
        </label>
      </p>
      <p class="control">
        <label class="checkbox">
          <input type="checkbox" value="7" v-model="salary">
          70000+ 加元／年
        </label>
      </p>
      <hr>
    </div>
    <div>
      <label class="label">所在城市</label>
      <p class="control">
        <span class="select">
          <select name="city" v-model="queryCity">
            <option value=''>全部城市</option>
            <option v-for="city in cities" :value="city.value">{{ city.name }}</option>
          </select>
        </span>
      </p>
      <hr>
    </div>
    <p class="control">
      <button class="button is-primary is-medium" @click.prevent="submitFilter">筛选结果</button>
      <button class="button is-medium is-outlined" @click.prevent="resetFilter">重置</button>
    </p>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        orderBy: 'created_at',
        contract: '',
        salary: ['1', '2', '3', '4', '5', '6', '7'],
        queryCity: '',
        queryCategory: ['labour', 'office', 'sales', 'tech', 'nanny', 'education', 'other'],
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
      submitFilter(){
        var self = this;
        axios.get('/filter', {
          params:{
            contract: self.contract,
            salary: self.salary,
            city: self.queryCity,
            category: self.queryCategory,
            orderBy: self.orderBy,
          }
        })
        .then(function (response) {
          self.$bus.$emit('submitFilter', response.data);
        })
        .catch(function (error) {
          console.log(error);
        });
      },
      resetFilter(){
        this.$bus.$emit('resetFilter');
        this.contract = '';
        this.salary = ['1', '2', '3', '4', '5', '6', '7'];
        this.queryCity = '';
        this.queryCategory = ['labour', 'office', 'sales', 'tech', 'nanny', 'education', 'other'];
        window.scrollTo(0, 0);
      }
    },
  }
</script>
