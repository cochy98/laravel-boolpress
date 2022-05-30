<template>
  <div>
    <Header />
    <!-- //§ Dentro router-view saranno visualizzate le varie pagine aventi le rotte -->
    <router-view></router-view>
  </div>
</template>

<script>
import Header from "../components/Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
};
</script>
