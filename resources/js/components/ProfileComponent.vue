<template>

            <mdb-col md="4">
                <mdb-card style="width: 22rem;">
                    <mdb-card-header color="deep-orange lighten-1">Profil</mdb-card-header>
                    <mdb-card-body>
                        <mdb-card-title>********</mdb-card-title>
                        <ul>
                            <li v-for="user in users" :key=user.name>
                                {{user.name}}
                            </li>
                        </ul>
                    </mdb-card-body>

                </mdb-card>
            </mdb-col>
</template>

<script>
import {mdbInput, mdbCol, mdbCard, mdbCardBody, mdbCardHeader, mdbCardTitle, mdbCardText} from 'mdbvue';

export default {
name: "UsersRooms",
    
    components: {
        mdbInput,
        mdbCol,
        mdbCard,
        mdbCardBody,
        mdbCardHeader,
        mdbCardTitle,
        mdbCardText
    },
    data() {
        return {
            users: [],
            
        }
    },
    created:
        function () {
            this.getRooms();
        },
    methods: {
        getRooms() {
            axios.get('http://localhost/api/'+ this.user.id +'/').then(response => {
                console.log(response.data);
                this.users = response.data;
            })
        }

    },
    
}
</script>

<style scoped>

</style>
