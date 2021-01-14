<template>
  <!-- Material form login -->
  <mdb-container>
    <mdb-row>
      <mdb-col></mdb-col>
      <mdb-col col="6">
          <mdb-card>
    <mdb-card-body>
  <form>
    <p class="h4 text-center mb-4">Logowanie</p>
    <div class="grey-text">
      <mdb-input label="Email" icon="envelope" type="email" v-model="form.email"/>
      <mdb-input label="Your password" icon="lock" type="password" v-model="form.password"/>
    </div>
    <div class="text-center">
      <mdb-btn color="info" @click.prevent="loginUser">Zaloguj</mdb-btn>
    </div>
  </form>
  </mdb-card-body>
  </mdb-card>
      </mdb-col>
      <mdb-col></mdb-col>
    </mdb-row>
 </mdb-container>
  
  <!-- Material form login -->
</template>

<script>
  import { mdbInput, mdbBtn, mdbCard, mdbCardBody, mdbContainer, mdbRow, mdbCol  } from 'mdbvue';
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
                email: '',
                password: '',
            },
            errors:[]
        }
    },
    methods:{
        loginUser(){
            axios.post('/api/login', this.form).then(()=>{
                this.$router.push({name: "Dashboard"});
            }).catch((error) => {
                this.errors=response.data.errors;
            })
        }
    }
  }
</script>