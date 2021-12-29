<template>
    <div>
        <h1 class="wt">HOME</h1>
        <div class="row">
            <div class="col">
                <div class="card text-dark bg-primary mb-4" >
                    <div class="card-header wt">ALL ORDER</div>
                    <div class="card-body">
                        <h1 class="card-title talr wt"><label>{{data.count_order}}</label></h1>
                        <p class="card-text talr wt">Order.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-dark bg-success mb-4" >
                    <div class="card-header wt">ORDER APPROVE</div>
                    <div class="card-body">
                        <h1 class="card-title talr wt"><label>{{data.count_approve}}</label></h1>
                        <p class="card-text talr wt">Order.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-dark bg-danger mb-4" >
                    <div class="card-header wt">ORDER CANCEL</div>
                    <div class="card-body">
                        <h1 class="card-title talr wt"><label>{{data.count_cancel}}</label></h1>
                        <p class="card-text talr wt">Order.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import PieChart from "./PieChart.vue";
export default {
    mounted(){
        this.getOrderData();
    },
    methods:{
        getOrderData(){
            axios.get('api/home').then(response=>{console.log(this.data=response.data)});
        },
    },
    data(){
        return {
            data:[],
        }
    },
}
</script>
