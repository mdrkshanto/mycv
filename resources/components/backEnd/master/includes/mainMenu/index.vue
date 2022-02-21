<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <Brand />
    <Sidebar/>
  </aside>
</template>
<script>
import Brand from "./includes/Brand";
import Sidebar from "./includes/sidebar/index";
export default {
  components: { Brand,Sidebar },
};
</script>
