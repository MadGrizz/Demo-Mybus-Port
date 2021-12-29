<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark"><label>Add Product</label></div>
                    <div class="card-body bgc">
                        <form>
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" v-model="name">
                            </div>
                            <div class="form-group">
                                <label>Price :</label>
                                <input type="text" class="form-control" v-model="price">
                            </div>
                            <div class="form-group">
                                <label>Type :</label>
                                <input type="text" class="form-control" v-model="type">
                            </div>
                            <div class="form-group">
                                <a href="/product" class="btn btn-danger">BACK</a>
                                <a href="/product" class="btn btn-success" v-on:click="addProduct()">SAVE</a>
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
    data(){
        return{
            name:'',
            price:'',
            type:''
        }
    },
    methods:{
        addProduct(){
            // console.log(this.name);
            // console.log(this.price);
            // console.log(this.type);
            axios.post('api/add_product',{
                name:this.name,
                price:this.price,
                type:this.type
            });
        }
    }
}
</script>

<style lang="css">

</style>