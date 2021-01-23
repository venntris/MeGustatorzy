<template>
  <!-- Footer -->
  <mdb-footer color="grey" class="font-small pt-4 mt-4">
    <mdb-container class="text-left">
      <mdb-row>
        <!-- <mdb-col sm="6">
          <h5 class="title">MeGustatorzy</h5>
          <p></p>
        </mdb-col> -->
        <mdb-col sm="6">
          <!-- <h5 class="title">      Ważne linki:</h5> -->
          <ul>
            <li class="list-unstyled"><a href="#!">Strona główna</a></li>
            <li class="list-unstyled"><a href="#!">Kontakt</a></li>
            <li class="list-unstyled"><a href="#!">Pomoc</a></li>
            <li class="list-unstyled"><a href="#!">Ważne informacje</a></li>
          </ul>
        </mdb-col>
      </mdb-row>
    </mdb-container>
    <div class="footer-copyright text-center py-3">
      <mdb-container fluid>
        &copy; 2021 Prawa autorskie: <!--<a href="https://www.MDBootstrap.com"> --> Megustatorzy Pwsz w Legnicy </a>
      </mdb-container>
    </div>
  </mdb-footer>
  <!-- Footer -->
</template>

<script>
  import { mdbFooter, mdbContainer, mdbRow, mdbCol } from 'mdbvue';
  export default {
    name: 'FooterPage',
    components: {
      mdbFooter,
      mdbContainer,
      mdbRow,
      mdbCol
      
    }
  }
</script>
