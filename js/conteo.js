var app = new Vue({
    el: '#app',
    data: {
        message: "",
        contadorequipo1: 0,
        contadorequipo2: 0,
        item1equipo1: 0,
        item2equipo1: 0,
        item3equipo1: 0,
        item4equipo1: 0,
        item5equipo1: 0,
        item6equipo1: 0,
        item7equipo1: 0,
        item8equipo1: 0,
        item9equipo1: 0,
        item10equipo1: 0,
        item11equipo1: 0,
        item12equipo1: 0,
        item13equipo1: 0,
        item14equipo1: 0
        //definicendo variables para segundo equipo
    },
    methods: {
        sumar: function (event) {
            this.contadorequipo1 = parseInt(this.item1equipo1) + 
            parseInt(this.item2equipo1) + 
            parseInt(this.item3equipo1) + 
            parseInt(this.item4equipo1) + 
            parseInt(this.item5equipo1) + 
            parseInt(this.item6equipo1) +
            parseInt(this.item7equipo1) +
            parseInt(this.item8equipo1) +
            parseInt(this.item9equipo1) +
            parseInt(this.item10equipo1) +
            parseInt(this.item11equipo1) +
            parseInt(this.item12equipo1) + 
            parseInt(this.item13equipo1) +
            parseInt(this.item14equipo1)
        },
        sumarequipo2: function(){
            this.contadorequipo2 = parseInt(this.item1equipo2) + 
            parseInt(this.item2equipo2) + 
            parseInt(this.item3equipo2) + 
            parseInt(this.item4equipo2) + 
            parseInt(this.item5equipo2) + 
            parseInt(this.item6equipo2) +
            parseInt(this.item7equipo2) +
            parseInt(this.item8equipo2) +
            parseInt(this.item9equipo2) +
            parseInt(this.item10equipo2) +
            parseInt(this.item11equipo2) +
            parseInt(this.item12equipo2) + 
            parseInt(this.item13equipo2) +
            parseInt(this.item14equipo2)
        }
    },
});