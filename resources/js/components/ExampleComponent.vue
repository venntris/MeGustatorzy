<template>
    <mdb-btn @click="showHelloIfItWork">Sprawdź działanie Vue.js</mdb-btn>
</template>
<script>
import {
    mdbBtn
} from 'mdbvue';
export default {
    components: {
        mdbBtn
    },
    methods: {
        showHelloIfItWork() {
            alert('Jeśli widzisz ten komunikat, To znaczy, że działa Vue.js');
        }
    }
}
</script>
