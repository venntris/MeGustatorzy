<template>
  <mdb-navbar color="info" dark>
    <mdb-navbar-brand>

    </mdb-navbar-brand>
    <mdb-navbar-toggler>
      <mdb-navbar-nav right>
        <mdb-nav-item href='/login' exact>Zaloguj</mdb-nav-item>
        <mdb-nav-item href='/register' exact>Zarejestruj</mdb-nav-item>

      </mdb-navbar-nav>


    </mdb-navbar-toggler>

  </mdb-navbar>

</template>

<script>
  import { mdbNavbar, mdbNavbarBrand, mdbNavbarToggler, mdbNavbarNav, mdbNavItem, mdbDropdown, mdbDropdownToggle, mdbDropdownItem, mdbDropdownMenu } from 'mdbvue';
  export default {
    components: {
      mdbNavbar,
      mdbNavbarBrand,
      mdbNavbarToggler,
      mdbNavbarNav,
      mdbNavItem,
      mdbDropdown,
      mdbDropdown,
      mdbDropdownToggle,
      mdbDropdownItem,
      mdbDropdownMenu
    }
  }
</script>
