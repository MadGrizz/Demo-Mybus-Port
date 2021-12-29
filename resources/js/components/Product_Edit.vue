<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark"><label>Edit Product</label></div>
                    <div class="card-body bgc">
                        <form action="/product">
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
                                <a href="/product" class="btn btn-primary" v-on:click="updateProduct()">SAVE</a>
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
    props:['id'],
    data(){
        return{
            name:'',
            price:'',
            type:''
        }
    },
    mounted(){
        axios.get('/api/show_product/'+this.id).then(response=>{ 
            var pd=response.data;
            console.log(pd);
                this.name=pd.pd_name;
                this.price=pd.pd_price;
                this.type=pd.pd_type;
        });
    },
    methods:{
        updateProduct(){
            axios.put('/api/edit_product/'+this.id,{
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