<template>
  <section class="content">
    <div class="card m-0">
      <Header />
      <router-view />
    </div>
  </section>
</template>
<script>
import Header from "./includes/Header";
export default {
  components: { Header },
};
</script>
