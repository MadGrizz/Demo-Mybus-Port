<template>
    <div class="pie-chart" :style="pieStyle"></div>
</template>

<script>
    export default{
        props:[
            'pieData'
        ],
        computed:{
            pieStyle(){

                let styles = this.pieData.map(
                    piePart => `${piePart.color} 0 ${sum += piePart.value}%`
                );
                return {backgroud: 'conic-gradient('+ styles.join(",")+')' };
            }
        }
    }

</script>

<style lang="scss" scoped>
    .pie-chart{
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 2px solid #fefefe;
        animation: slow 1s ease-in-out;
        // background: conic-gradient(
        //     #00fe00 0 50%,
        //     #fe0000 0 50%
        // );
    }
    @keyframes show {
        0%{
            transform: scale(0) rotate(720deg);
        }
        100%{
            transform: scale(1) rotate(0deg);
        }
    }
</style>
