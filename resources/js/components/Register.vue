
<template>
  <section class="form-elegant">
    <mdb-row>
      <mdb-col>
        <mdb-card>
          <mdb-card-body class="mx-4">
            <div class="text-center">
              <h3 class="dark-grey-text mb-5"><strong>Rejestracja</strong></h3>
            </div>
            <div class="form-group">
            
            
            <mdb-input type="text" id="name" name="name" label="Imię" value="" icon="user" required invalidFeedback="nameEmpty" v-model="name"  :class="{ 'is-invalid': nameEmpty }"/>
            <div v-if="nameEmpty"  class="invalid-feedback" >First Name is required</div>
            
           </div> 

           <div class="form-group">
             <i class="fa fa-user icon"></i>
                                <label for="name">Last Name</label>
                                <!-- <div class="input-container"> -->
                               
                                <input type="text" icon="fa fa-user icon" v-model="name" id="name"   name="name" class="form-control" :class="{ 'is-invalid': nameEmpty }" />
                                
                                <!-- </div> -->
                               <div v-if="nameEmpty" class="invalid-feedback">Last Name is required</div>
                            </div>

           
            
            <mdb-input type="text" id="validationCustom11"  label="Nazwisko" icon="user" required invalidFeedback="Podaj nazwisko" v-model="surname" />
            <mdb-input type="email" id="validationCustom12" icon="envelope" label="Email" required invalidFeedback="Nieprawidłowy email." v-model="email"/>
            <mdb-input type="password" label="Hasło" icon="lock" required invalidFeedback="Nieprawidłowe hasło." name="password" v-model="password" />
            <mdb-input type="password" label="Potwierdź hasło" icon="lock" required invalidFeedback="Nieprawidłowe hasło." name="confirmPassword" v-model="confirmPassword" />
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
            // form: {
                name: '',
                surname: '',
                email: '',
                password: '',
                confirmPassword: '',

                nameEmpty: true,
              
            // },
            errors: []
        }
    },
    methods: {
      checkForm(event) {
        event.target.classList.add('was-validated');
      },
      register() {
            axios.post('http://localhost/api/register', {
                "name": this.name,
                "surname": this.surname,
                "email": this.email,
                "password": this.password
            }).then(function (response) {
                alert("użytkownik zarejestrowany");
            })
                .catch(function (error) {
                    alert(error);
                });
        }
    },
    watch: {
        name: function() {
            if(this.name.length <= 2) this.nameEmpty=true;
            
            else this.nameEmpty = false;
                          },

        surname: function() {
            if(this.surname.length >= 5 ) {
                alert("Wyraz ma więcej niż 5 liter");
            }
                          },

        email: function() {
            if(this.email.length >= 5 ) {
                alert("Wyraz ma więcej niż 5 liter");
            }
                          },

        password: function() {
            if(this.password.length >= 5 ) {
                alert("Wyraz ma więcej niż 5 liter");
            }
                          },
        
        confirmPassword: function() {
            if(this.confirmPassword.length >= 5 ) {
                alert("Wyraz ma więcej niż 5 liter");
            }
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
 