<template>

            <mdb-col md="4">
                <mdb-card style="width: 22rem;">
                    <mdb-card-header color="deep-orange lighten-1">Oceny w pokoju</mdb-card-header>
                    <mdb-card-body>
                        <mdb-card-title>Tekst</mdb-card-title>
                        <ul>
                            <li v-for="rating in food_ratings" :key=rating.rate>
                                {{rating.rate}}
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
            food_ratings: [],
            
        }
    },
    created:
        function () {
            this.getRatings();
        },
    methods: {
        getRatings() {
            axios.get('http://localhost/api/room/show-rate/'+ this.room_name +'/').then(response => {
                console.log(response.data);
                this.food_ratings = response.data;
            })
        }

    },
    
}
</script>

<style scoped>

</style>
