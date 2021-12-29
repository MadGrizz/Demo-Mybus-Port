<template>
    <div>
        <h1 class="wt">ORDER</h1>
        
        <a type="button" href="/addorder" class="btn btn-info rb wt">+ Order</a>
        <table class="table table-bordered">
            <tr>
                <th><label>ID</label></th>
                <th><label>CUSTOMER</label></th>
                <th class="col-5"><label>ADDRESS</label></th>
                <th><label>TEL.</label></th>
                <th><label>PRODUCT</label></th>
                <th><label>QUANTITY</label></th>
                <th><label>MANAGE</label></th>
            </tr>
            <tr v-for="item in orders" :key="item.id">
                <td><label>{{item.id}}</label></td>
                <td><label>{{item.or_cus_name}}</label></td>
                <td><label>{{item.or_cus_address}}</label></td>
                <td><label>{{item.or_cus_tel}}</label></td>
                <td><label>{{item.or_product_id}}</label></td>
                <td><label>{{item.or_quantity}}</label></td>
                <td><a href="/order" class="btn btn-danger" v-on:click="deleteOrder(item.id)">DELETE</a></td>
            </tr>
        </table>
    </div>    
</template>
<script>
export default {
    mounted(){
        this.getOrderData();
    },
    methods:{
        deleteOrder(id){
            axios.delete('api/order_delete/'+id).then(response=>{console.log(response)});
        },
        getOrderData(){
            axios.get('api/order').then(response=>{console.log(this.orders=response.data)});
        }
    },
    data(){
        return {
            orders:[],
            item:{
                id:'',
                or_cus_name:'',
                or_cus_address:'',
                or_cus_tel:'',
                or_product_id:'',
                or_quantity:'',
                or_price:'',
                or_approve:'',
                or_cancel:''
            }
        }
    },
}
</script>