<template>

            <mdb-col md="4">
                <mdb-card style="width: 22rem;">
                    <mdb-card-header color="deep-orange lighten-1">Pokoje</mdb-card-header>
                    <mdb-card-body>
                        <mdb-card-title>To są pokoje, do których jesteś zaproszony</mdb-card-title>
                        <ul>
                            <li v-for="gowno in gownos" :key=gowno.name>
                                {{gowno.name}}
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
    props:['user'],
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
            gownos: [],
            
        }
    },
    created:
        function () {
            this.getRooms();
        },
    methods: {
        getRooms() {
            axios.get('http://localhost/api/user/get-user-rooms/'+ this.user.id +'/').then(response => {
                console.log(response.data);
                this.gownos = response.data;
            })
        }

    },
    
}
</script>

<style scoped>

</style>
