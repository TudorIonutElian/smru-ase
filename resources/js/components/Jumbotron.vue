<template>
    <div class="jumbotron component-100 flex-center-column" id="price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group form-group-flex">
                                    <label>Regiune</label>
                                    <select v-on:click="selectareRegiune" v-model="regiuneSelectata">
                                        <option value="null" disabled>Selecteaza regiunea</option>
                                        <option v-for="regiune in info.regiuni" :key="regiune.id" v-bind:value="{id: regiune.id}">{{regiune.denumire}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-flex">
                                    <label for="judet">Judetul</label>
                                    <select v-on:click="selectareJudet" name="judet" id="judet" v-model="judetSelectat">
                                        <option value="null" disabled>Selecteaza judetul</option>
                                        <option v-for="judet in judeteDisponibile" :value="judet.id">{{judet.denumire}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-flex">
                                    <label for="localitate">Localitatea</label>
                                    <select name="localitate" id="localitate" v-model="localitateSelectata">
                                        <option value="null" disabled>Selecteaza Localitatea</option>
                                        <option v-for="localitate in localitatiDisponibile" :value="localitate.id">{{localitate.denumire}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                info: [],
                regiuneSelectata: null,
                judeteDisponibile: [],
                judetSelectat: null,
                localitatiDisponibile:[],
                localitateSelectata: null
            }
        },
        mounted() {
            const self = this;
            axios.get('/api/data').then((response)=>{
                self.info = response.data
            })
        },
        methods: {
            selectareRegiune(){
                // Curatare judete disponibile
                this.judetSelectat = null
                this.judeteDisponibile = []
                this.localitatiDisponibile = []

                // Generare lista judete disponibile
                this.info.judete.forEach((judet)=>{
                    if(judet.regiune.id === this.regiuneSelectata.id){
                        this.judeteDisponibile.push({
                            'id': judet.id,
                            'denumire': judet.denumire
                        })
                    }
                })
            },
            selectareJudet(){
                this.localitatiDisponibile = []
                this.info.localitati.forEach((localitate)=>{
                    if(localitate.judet === this.judetSelectat){
                        this.localitatiDisponibile.push({
                            'id': localitate.id,
                            'denumire': localitate.denumire
                        })
                    }
                })
            }
        }
    }
</script>
