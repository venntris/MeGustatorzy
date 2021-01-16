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
                                        <mdb-input label="Imię" icon="user" type="text" v-model="form.name"/>
                                        <mdb-input label="nazwisko" icon="user" type="text" v-model="form.surname"/>
                                        <mdb-input label="Email" icon="envelope" type="email" v-model="form.email"/>
                                        <mdb-input label="Hasło" icon="lock" type="password" name="password"
                                                   v-model="form.password"/>
                                        <mdb-input label="Potwierdź hasło" icon="lock" type="password"
                                                   name=password_confirmation v-model="form.password_confirmation"/>
                                    </div>
                                    <div class="text-center">
                                        <mdb-btn color="info" @click="register">Zarejestruj</mdb-btn>
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
import {mdbInput, mdbBtn, mdbCard, mdbCardBody, mdbContainer, mdbRow, mdbCol} from 'mdbvue';

export default {
    name: 'RegisterComponent',
    components: {
        mdbInput,
        mdbBtn,
        mdbCard,
        mdbCardBody,
        mdbContainer,
        mdbRow,
        mdbCol
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
}
</script>

