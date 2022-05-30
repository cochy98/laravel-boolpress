<template>
  <div>
    <Header />
    <!-- <router-view></router-view> -->
    <PostList />
  </div>
</template>

<script>
import Header from "../components/Header";
import PostList from "../components/PostList";
export default {
  name: "App",
  components: {
    Header,
    PostList,
  },
};
</script>
