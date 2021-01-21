<!--<template>
<mdb-container fluid>
<div class="d-flex align-items-center">
<mdb-card narrow cascade>
    <mdb-view :color="info" >
        <mdb-card-title class="d-flex justify-content-center h4" > Rejestracja </mdb-card-title>
    </mdb-view>
    <mdb-card-body cascade>
        
        
  <form novalidate @submit.prevent="checkForm">
    <div class="form-col  d-flex justify-content-center"   >
      <div class="grey-text">
      <div>
        <mdb-input type="text" id="validationCustom10" label="Imię" value="" icon="user" required invalidFeedback="Podaj imię" v-model="form.name"/>
      </div>
      <div>
        <mdb-input type="text" id="validationCustom11"  label="Nazwisko" icon="user" required invalidFeedback="Podaj nazwisko" v-model="form.surname" />
      </div>
      <div >
        <mdb-input type="email" id="validationCustom12" icon="envelope" label="Email" required invalidFeedback="Nieprawidłowy email." v-model="form.email"/>
      </div>
      <div >
        <mdb-input type="password" label="Hasło" icon="lock" required invalidFeedback="Nieprawidłowe hasło." name="password" v-model="form.password" />
      </div>
      <div class=" d-flex justify-content-center">
          <mdb-btn color="info" type="submit" @click="register">Zarejestruj</mdb-btn>
      </div>
      <p></p> 
        <div>
            <p> Posiadasz już konto?  <a href='/login'> Zaloguj</a></p>    
        </div> 
    </div>
    
    
    </div>
  </form>
    </mdb-card-body>
</mdb-card>
</div>
</mdb-container>
</template>
<script>
  import { mdbContainer, mdbBtn, mdbIcon, mdbRow, mdbCol, mdbInput, mdbCard, mdbCardBody, mdbCardTitle, mdbView } from "mdbvue";

  export default {
    name: "RegisterComponent",
    components: {
      mdbContainer,
      mdbBtn,
      mdbIcon,
      mdbRow,
      mdbCol,
      mdbInput,
      mdbCard,
      mdbCardBody,
      mdbCardTitle,
      mdbView
    },
    data() {
        return {
            form: {
                name: '',
                surname: '',
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods: {
      checkForm(event) {
        event.target.classList.add('was-validated');
      },
      register() {
            axios.post('http://localhost/api/register', {
                "name": this.form.name,
                "surname": this.form.surname,
                "email": this.form.email,
                "password": this.form.password
            }).then(function (response) {
                alert("użytkownik zarestrowany");
            })
                .catch(function (error) {
                    alert(error);
                });
        }
    }
  };

</script>

-->

<template>
  <section class="form-elegant">
    <mdb-row>
      <mdb-col>
        <mdb-card>
          <mdb-card-body class="mx-4">
            <div class="text-center">
              <h3 class="dark-grey-text mb-5"><strong>Rejestracja</strong></h3>
            </div>
            <mdb-input type="text" id="validationCustom10" label="Imię" value="" icon="user" required invalidFeedback="Podaj imię" v-model="form.name"/>
            <mdb-input type="text" id="validationCustom11"  label="Nazwisko" icon="user" required invalidFeedback="Podaj nazwisko" v-model="form.surname" />
            <mdb-input type="email" id="validationCustom12" icon="envelope" label="Email" required invalidFeedback="Nieprawidłowy email." v-model="form.email"/>
            <mdb-input type="password" label="Hasło" icon="lock" required invalidFeedback="Nieprawidłowe hasło." name="password" v-model="form.password" />
           <div class="text-center mb-3">
              <mdb-btn type="button" gradient="blue" rounded class="btn-block z-depth-1a" @click="register">Zarejestruj</mdb-btn>
            </div>            
          </mdb-card-body>
          <mdb-modal-footer class="mx-5 pt-3 mb-1">
            <p class="font-small grey-text d-flex justify-content-end">Posiadasz konto? <a href="./login" class="blue-text ml-1">Zaloguj</a></p>
          </mdb-modal-footer>
        </mdb-card>
      </mdb-col>
    </mdb-row>
  </section>
</template>
<script>
  import { mdbRow, mdbCol, mdbCard, mdbCardBody, mdbInput, mdbBtn, mdbIcon, mdbModal, mdbModalBody, mdbModalFooter } from 'mdbvue';
  export default {
    name: 'FormsPage',
    components: {
      mdbRow,
      mdbCol,
      mdbCard,
      mdbCardBody,
      mdbInput,
      mdbBtn,
      mdbIcon,
      mdbModal,
      mdbModalBody,
      mdbModalFooter
    },
    data() {
        return {
            form: {
                name: '',
                surname: '',
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods: {
      checkForm(event) {
        event.target.classList.add('was-validated');
      },
      register() {
            axios.post('http://localhost/api/register', {
                "name": this.form.name,
                "surname": this.form.surname,
                "email": this.form.email,
                "password": this.form.password
            }).then(function (response) {
                alert("użytkownik zarejestrowany");
            })
                .catch(function (error) {
                    alert(error);
                });
        }
    }
    
  }
</script>
<style>
  .form-elegant .font-small {
    font-size: 0.8rem; }

  .form-elegant .z-depth-1a {
    -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

  .form-elegant .z-depth-1-half,
  .form-elegant .btn:hover {
    -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
    box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
</style>

