<template>
  <div class="sidebar">
    <UserPanel />
    <Search />
    <MainMenu />
  </div>
</template>
<script>
import UserPanel from "./includes/UserPanel";
import Search from "./includes/Search";
import MainMenu from "./includes/MainMenu";
export default {
  components: { UserPanel, Search, MainMenu },
};
</script>
