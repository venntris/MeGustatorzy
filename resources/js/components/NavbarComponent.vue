<template>
  <mdb-navbar color="info" dark>
    <mdb-navbar-brand to='/'>
      <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/feac9c9e-d192-49b8-be27-14e26d1c2149/debrcv3-9174ea15-95fd-404b-9688-66731126c63e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvZmVhYzljOWUtZDE5Mi00OWI4LWJlMjctMTRlMjZkMWMyMTQ5XC9kZWJyY3YzLTkxNzRlYTE1LTk1ZmQtNDA0Yi05Njg4LTY2NzMxMTI2YzYzZS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.7R94peaGzOa4DBzEw3_Rw68ptUVF5PaDltmCyyiEv7c" height="40" alt="">
    </mdb-navbar-brand>
    <mdb-navbar-toggler>
      <mdb-navbar-nav>
        <mdb-nav-item to='/room'>Stwórz pokój</mdb-nav-item>
        <mdb-nav-item to='/products'>Produkty</mdb-nav-item>
        <mdb-nav-item to='/locals'>Lokale</mdb-nav-item>
        <mdb-nav-item to='/users'>Użytkownicy</mdb-nav-item>
      </mdb-navbar-nav>
      <form>
        
        <mdb-dropdown tag="li" class="nav-item" >
          
          <mdb-dropdown-toggle tag="a" navLink color="info" slot="toggle" class="text-white" icon="user" waves-fixed >Profil</mdb-dropdown-toggle>
          <mdb-dropdown-menu>
            <mdb-dropdown-item>Moje konto</mdb-dropdown-item>
            <mdb-dropdown-item>Wyloguj</mdb-dropdown-item>
          </mdb-dropdown-menu>
        </mdb-dropdown>
        </form>

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