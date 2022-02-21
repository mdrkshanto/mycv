<template>
  <div class="content-wrapper">
    <Header />
    <Body />
  </div>
</template>
<script>
import Header from "./header/index";
import Body from "./body/index";
export default {
  components: { Header, Body },
};
</script>
