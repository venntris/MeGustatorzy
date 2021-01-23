<template>
  <section class="form-elegant">
    <mdb-row>
      <mdb-col>
        <mdb-card>
          <mdb-card-body class="mx-4">
            <div class="text-center">
              <h3 class="dark-grey-text mb-5"><strong>Tworzenie pokoju</strong></h3>
            </div>
            <mdb-input label="Email" icon="envelope" type="pokoj" v-model="form.name"/>
            <div class="text-center mb-3">
              <mdb-btn type="button" gradient="blue" rounded class="btn-block z-depth-1a" @click="zapros">Stwórz</mdb-btn>
            </div>            
          </mdb-card-body>
        </mdb-card>
      </mdb-col>
    </mdb-row>
  </section>
</template>
<script>
  import { mdbRow, mdbCol, mdbCard, mdbCardBody, mdbInput, mdbBtn, mdbIcon, mdbModal, mdbModalBody, mdbModalFooter } from 'mdbvue';
  export default {
    props:['user'],
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
                
            },
            errors: [],
            showModal: false,
        }
    },
    methods: {
        zapros() {
            axios.post('http://localhost/api/room/create-room/', {
                "name": this.form.name,
                "owner": this.user.id,
               
            }).then(function (response) {
                console.log(response);
                alert("pokoj stworzony");
                
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

