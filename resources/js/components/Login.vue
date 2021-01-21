<template>
  <section class="form-elegant">
    <mdb-row>
      <mdb-col>
        <mdb-card>
          <mdb-card-body class="mx-4">
            <div class="text-center">
              <h3 class="dark-grey-text mb-5"><strong>Logowanie</strong></h3>
            </div>
            <mdb-input label="Email" icon="envelope" type="email" v-model="form.email"/>
            <mdb-input label="Hasło" icon="lock" type="password" v-model="form.password"/>
            <p class="font-small blue-text d-flex justify-content-end pb-3"><a href="#" class="blue-text ml-1"> Odzyskaj hasło</a></p>
            <div class="text-center mb-3">
              <mdb-btn type="button" gradient="blue" rounded class="btn-block z-depth-1a" @click="login">Zaloguj</mdb-btn>
            </div>            
          </mdb-card-body>
          <mdb-modal-footer class="mx-5 pt-3 mb-1">
            <p class="font-small grey-text d-flex justify-content-end">Nie masz konta? <a href="./register" class="blue-text ml-1">Zarejestruj </a></p>
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
                email: '',
                password: '',
            },
            errors: [],
            showModal: false,
        }
    },
    methods: {
        login() {
            axios.post('http://localhost/api/login', {
                "email": this.form.email,
                "password": this.form.password
            }).then(function (response) {
                console.log(response);
                alert("użytkownik Zalogowany");
                
            })
                .catch(function (error) {
                    alert("Błąd");
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

