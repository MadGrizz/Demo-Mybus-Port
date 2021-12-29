<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark"><label>Add Order</label></div>
                    <div class="card-body bgc">
                        <form>
                            <div class="form-group">
                                <label>Customer Name :</label>
                                <input type="text" class="form-control" v-model="name">
                            </div>
                            <div class="form-group">
                                <label>Customer Address :</label>
                                <input type="text" class="form-control" v-model="address">
                            </div>
                            <div class="form-group">
                                <label>Customer Tel :</label>
                                <input type="text" class="form-control" v-model="tel">
                            </div>
                            <div class="form-group">
                                <label>Product :</label>
                                <select class="form-select" aria-label="Default select example" v-model="sl_product">
                                    <option  v-for="item in product" :key="item.id" :value="item.pd_id">{{item.pd_name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quantity :</label>
                                <input type="number" class="form-control" v-model="quantity">
                            </div>
                            <div class="form-group">
                                <a href="/order" class="btn btn-danger">BACK</a>
                                <a href="/order" class="btn btn-success" v-on:click="addOrder()">Order</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
        this.getProductData();
    },
    data(){
        return{
            name:'',
            address:'',
            tel:'',
            product:'',
            quantity:'',
            sl_product:'',
            products:[],
            item:{
                id:'',
                pd_id:'',
                pd_name:'',
                pd_type:'',
                pd_img:'',
                pd_price:''
            }
        }
    },
    methods:{
        getProductData(){
            axios.get('api/product').then(response=>{console.log(this.product=response.data)});
        },
        addOrder(){
            console.log(this.name);
            console.log(this.address);
            console.log(this.tel);
            console.log(this.sl_product);
            console.log(this.quantity);
            axios.post('api/add_order',{
                name:this.name,
                address:this.address,
                tel:this.tel,
                sl_product:this.sl_product,
                quantity:this.quantity
            });
        },
    },
}
</script>

<style lang="css">

</style>