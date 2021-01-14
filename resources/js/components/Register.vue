
<template>
<mdb-container>
    <mdb-row>
      <mdb-col></mdb-col>
      <mdb-col col="6">
          <mdb-card>
    <mdb-card-body>
  <form>

      <div>
        <div>
            <p class="h4 text-center py-4">Rejestracja</p>
            <div class="grey-text">
                <mdb-input label="Nazwa" icon="user" type="text" v-model="form.name"/>
                <mdb-input label="Email" icon="envelope" type="email" v-model="form.email"/>
                <mdb-input label="Hasło" icon="lock" type="password" name="password" v-model="form.password"/>
                <mdb-input label="Potwierdź hasło" icon="lock" type="password" name=password_confirmation v-model="form.password_confirmation"/>
            </div> 

            <div class="text-center">
                <mdb-btn color="info" @click.prevent="saveForm">Zarejestruj</mdb-btn>
            </div>
        </div> 
    </div>
      </form>
  </mdb-card-body>
  </mdb-card>
      </mdb-col>
      <mdb-col></mdb-col>
    </mdb-row>
 </mdb-container>

</template>
<script>
import { mdbInput, mdbBtn, mdbCard, mdbCardBody, mdbContainer, mdbRow, mdbCol } from 'mdbvue';
export default {
    name: 'Basic',
    components: {
      mdbInput,
      mdbBtn,
       mdbCard,
      mdbCardBody,
      mdbContainer,
      mdbRow,
      mdbCol
    },
    data(){
        return{
            form:{
                name: '',
                email: '',
                password:'',
                password_confirmation:''
            },
            errors:[]
        }
    },
    methods:{
        saveForm(){
            axios.post('/api/register', this.form).then(() =>{
                console.log('saved');
            }).catch((error) =>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>