<template>
  <div class="wrapper">
    <Navbar />
    <MainMenu />
    <MainContent />
  </div>
</template>
<script>
import("../../../../public/assets/backEnd/dist/js/adminlte");
import("../../../../public/assets/backEnd/dist/js/demo");
import Navbar from "./includes/navbar/index";
import MainMenu from "./includes/mainMenu/index";
import MainContent from "./includes/mainContents/index";
export default {
  components: { Navbar, MainMenu, MainContent },
};
</script>
<style scoped>
@import "../../../../public/assets/backEnd/dist/css/adminlte.min.css";
</style>
