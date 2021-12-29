<template>
    <div>
        <h1 class="wt">PACKAGING</h1>
        
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
                <td><a href="/packaging" class="btn btn-success" v-on:click="approve(item.id)">APPROVE</a><a href="/packaging" class="btn btn-danger" v-on:click="cancel(item.id)">CANCEL</a></td>
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
        approve(id){
            axios.put('api/approve_order/1/'+id);
        },
        cancel(id){
            axios.put('api/approve_order/2/'+id);
        },
        getOrderData(){
            axios.get('api/pack').then(response=>{console.log(this.orders=response.data)});
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