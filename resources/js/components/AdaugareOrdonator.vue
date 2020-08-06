<template>
    <form action="#">
        <div class="row">
            <div class="col-4">
                <label for="denumire">Denumire ordonator de credite</label>
                <input v-bind:class="{invalidBox: invalidErrors.denumire}" @blur="checkDenumire" name="denumire" type="text" class="form-control" id="denumire" placeholder="Ordonator de credite" v-model="ordonator.denumireOrdonator">
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="tipOrdonator">Tipul ordonatorului de credite</label>
                    <select @change="getRegiuni" class="form-control" id="tipOrdonator" v-model="ordonator.tipOrdonator">
                        <option v-for="tipOrdonator in tipOrdonatori" :value="tipOrdonator.id">{{ tipOrdonator.tip}}</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="regiuneOrdonator">Regiune Ordonator de credite</label>
                    <select @change="getJudete" class="form-control" id="regiuneOrdonator" v-model="ordonator.regiuneOrdonator">
                        <option v-if="!ordonator.tipOrdonator" value="null" disabled>Selecteaza regiunea</option>
                        <option v-for="regiune in regiuni" :value="regiune.id">{{regiune.denumire}}</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="judetOrdonator">Judetul ordonatorului de credite</label>
                    <select @change="getLocalitati" class="form-control" id="judetOrdonator" v-model="ordonator.judetOrdonator">
                        <option v-if="!ordonator.regiuneOrdonator"value="null" disabled>Selecteaza judetul</option>
                        <option v-for="judet in judete" :value="judet.id">{{ judet.denumire}}</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="localitateOrdonator">Localitatea ordonatorului de credite</label>
                    <select class="form-control" id="localitateOrdonator" v-model="ordonator.localitateOrdonator">
                        <option v-if="!ordonator.judetOrdonator" value="null" disabled>Selecteaza localitatea</option>
                        <option v-for="localitate in localitati" :value="localitate.id">{{ localitate.denumire}}</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label for="strada">Strada</label>
                <input name="strada" type="text" class="form-control" id="strada" placeholder="Strada" v-model="ordonator.stradaOrdonator">
            </div>
            <div class="col-4">
                <label for="numar">Numar</label>
                <input name="numar" type="text" class="form-control" id="numar" placeholder="Numar" v-model="ordonator.numarOrdonator">
            </div>
            <div class="col-4">
                <label for="bloc">Bloc</label>
                <input name="bloc" type="text" class="form-control" id="bloc" placeholder="Bloc" v-model="ordonator.blocOrdonator">
            </div>
            <div class="col-4">
                <label for="scara">Scara</label>
                <input name="scara" type="text" class="form-control" id="scara" placeholder="Scara" v-model="ordonator.scaraOrdonator">
            </div>
            <div class="col-4">
                <label for="etaj">Etaj</label>
                <input name="etaj" type="text" class="form-control" id="etaj" placeholder="Etaj" v-model="ordonator.etajOrdonator">
            </div>
            <div class="col-4">
                <label for="apartament">Apartament</label>
                <input name="apartament" type="text" class="form-control" id="apartament" placeholder="Apartament" v-model="ordonator.apartamentOrdonator">
            </div>
            <div class="col-4">
                <label for="codPostal">Cod Postal</label>
                <input name="codPostal" type="text" class="form-control" id="codPostal" placeholder="Cod Postal" v-model="ordonator.codPostalOrdonator">
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="statusOrdonator">Status Ordonator</label>
                    <select class="form-control" id="statusOrdonator" v-model="ordonator.statusOrdonator">
                        <option value="null" disabled>Selecteaza status</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label for="datainfiintare">Data infiintarii</label>
                <input name="datainfiintare" type="text" class="form-control" id="datainfiintare" placeholder="Data infiintarii (dd.mm.yyyy)" v-model="ordonator.dataInfiintareOrdonator">
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="actinfiintare">Actul normativ de infiintare</label>
                    <select class="form-control" id="actinfiintare" v-model="ordonator.actulNormativOrdonator">
                        <option value="null" disabled>Selecteaza actul de infiintare</option>
                    </select>
                </div>
            </div>
        </div>
        <button @click="submitOrdonator" type="submit" class="btn btn-outline-info">Adauga Ordonator</button>
    </form>
</template>

<script>
    export default{
        data(){
            return {
                tipOrdonatori: [],
                regiuni: [],
                judete: [],
                localitati:[],
                ordonator:{
                    denumireOrdonator: null,
                    tipOrdonator: null,
                    regiuneOrdonator: null,
                    judetOrdonator: null,
                    localitateOrdonator: null,
                    stradaOrdonator: null,
                    numarOrdonator: null,
                    blocOrdonator: null,
                    scaraOrdonator: null,
                    etajOrdonator: null,
                    apartamentOrdonator: null,
                    codPostalOrdonator: null,
                    statusOrdonator: null,
                    dataInfiintareOrdonator: null,
                    actulNormativOrdonator: null
                },
                invalidErrors:{
                    denumire: false
                }
            }
        },
        mounted() {
            axios.get('/api/getOrdonatoriTip').then((response)=>{
                this.tipOrdonatori = response.data
            })
        },
        methods:{
            checkDenumire(){
                if(this.ordonator.denumireOrdonator === '' || this.ordonator.denumireOrdonator.length < 3 ){
                    this.invalidErrors.denumire = true
                }
            },
            getRegiuni(){
                axios.get('/api/getRegiuni').then((response)=>{
                    this.regiuni = response.data.data
                })
            },
            getJudete(){
                axios.get(`/api/getJudete/${this.ordonator.regiuneOrdonator}`).then((response)=>{
                    this.judete = response.data.data
                })

            },
            getLocalitati(){
                axios.get(`/api/getLocalitati/${this.ordonator.judetOrdonator}`).then((response)=>{
                    this.localitati = response.data.data
                })
            },
            submitOrdonator(){
                if(event){
                    event.preventDefault()
                    console.log(this.ordonator)
                }
            }
        },
        computed:{

        }
    }

</script>
