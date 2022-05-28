<template>
  <div class="post-list container-fluid p-5">
    <div class="row">
      <div class="col-12">
        <h1>Latest Post</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-9">
        <Post v-for="(post, index) in posts" :key="index" :post="post" />
      </div>
      <div class="col-3">
        <div class="my-sidebar p-3">
          <h2>Categorie:</h2>
        </div>
      </div>
    </div>
    <nav class="d-flex justify-content-center p-4">
      <ul class="pagination">
        <li
          class="page-item"
          v-if="pagination.currentPage > 1"
          @click="getPosts(pagination.currentPage - 1)"
        >
          <a class="page-link">Previous</a>
        </li>

        <li class="page-item">
          <a class="page-link">{{ pagination.currentPage }}</a>
        </li>

        <li
          class="page-item"
          v-if="pagination.currentPage < pagination.lastPage"
          @click="getPosts(pagination.currentPage + 1)"
        >
          <a class="page-link">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import Post from "./Post";
export default {
  name: "PostList",
  components: {
    Post,
  },
  data: function () {
    return {
      posts: [],
      pagination: {},
    };
  },
  methods: {
    getPosts(page) {
      axios
        .get(`http://localhost:8000/api/posts?page=${page}`)
        .then((response) => {
          this.posts = response.data.results.data;
          const { current_page, last_page } = response.data.results;
          this.pagination = { currentPage: current_page, lastPage: last_page };
          console.log(this.pagination);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getPosts(1);
  },
};
</script>

<style>
</style>
