<template>
    <div>
        <h1 class="wt">PRODUCTS</h1>
        
        <a type="button" href="/addproduct" class="btn btn-info rb wt">+ Product</a>
        <table class="table table-bordered">
            <tr>
                <th><label>ID</label></th>
                <th><label>CODE</label></th>
                <th><label>NAME</label></th>
                <th><label>TYPE</label></th>
                <th><label>PRICE</label></th>
                <th><label>MANAGE</label></th>
            </tr>
            <tr v-for="item in product" :key="item.id">
                <td><label>{{item.id}}</label></td>
                <td><label>{{item.pd_id}}</label></td>
                <td><label>{{item.pd_name}}</label></td>
                <td><label>{{item.pd_type}}</label></td>
                <td><label>{{item.pd_price}}</label></td>
                <td><a href="javascript:;" class="btn btn-danger" v-on:click="deletePro(item.id)">DELETE</a><a :href="'edit_product/'+item.id" class="btn btn-warning wt">EDIT</a></td>
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
        deletePro(id){
            //console.log(id);
            axios.delete('api/product_delete/'+id).then(response=>{console.log(response);
            });
        }
    },
    data(){
        return {
            product:[],
            item:{
                id:'',
                pd_name:'',
                pd_type:'',
                pd_img:'',
                pd_price:''
            }
        }
    },
}
</script>