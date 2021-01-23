<template>

            <mdb-col md="4">
                <mdb-card style="width: 22rem;">
                    <mdb-card-header color="deep-orange lighten-1">Oceny</mdb-card-header>
                    <mdb-card-body>
                        <mdb-card-title>To są pokoje, do których jesteś zaproszony</mdb-card-title>
                        <ul>
                            <li v-for="rate in ratings" :key=rate.rate>
                                {{rate.rate}} {{rate.food.name}}
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
            ratings: [],
            
            
        }
    },
    created:
        function () {
            this.getRatings();
        },
    methods: {
        getRatings() {
            axios.get('http://localhost/api/user/get-user-ratings/6/').then(response => {
                
                console.log(response.data);
                this.ratings = response.data;
            })
        }

    },
    
}
</script>

<style scoped>

</style>
//