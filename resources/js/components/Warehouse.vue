<template>
    <div>
        <h1 class="wt">PRODUCTS</h1>
        
        <table class="table table-bordered">
            <tr>
                <th><label>ID</label></th>
                <th><label>CODE</label></th>
                <th><label>NAME</label></th>
                <th><label>STOCK</label></th>
                <th><label></label></th>
                <th><label>MANAGE</label></th>
            </tr>
            <tr v-for="item in product" :key="item.id">
                <td><label>{{item.id}}</label></td>
                <td><label>{{item.pd_id}}</label></td>
                <td><label>{{item.pd_name}}</label></td>
                <td><label>{{item.pd_stock}}</label></td>
                <td><input type="text" class="form-control" v-model="quantity"></td>
                <td><a href="/warehouse" class="btn btn-success" v-on:click="plus(item.id)">+</a><a href="/warehouse" class="btn btn-danger" v-on:click="minus(item.id)">-</a></td>
            </tr>
        </table>
    </div>    
</template>
<script>
export default {
    mounted(){
        this.getProductData();
    },
    methods:{
        getProductData(){
            axios.get('api/product').then(response=>{console.log(this.product=response.data)});
        },
        plus(id){
            axios.put('api/manage_stock/1/'+id,{
                quantity:this.quantity
            });
        },
        minus(id){
            axios.put('api/manage_stock/2/'+id,{
                quantity:this.quantity
            });
        },
    },
    data(){
        return {
            product:[],
            item:{
                id:'',
                pd_name:'',
                pd_type:'',
                pd_img:'',
                pd_price:'',
                pd_stock:''
            },
            quantity:'',
        }
    },
}
</script>