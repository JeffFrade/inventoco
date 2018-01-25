new Vue({
    el: '#app',

    props: ['item'],

    data :{
        x: this.item
    },

    mounted: function () {
        console.log(this.item)
    }
});