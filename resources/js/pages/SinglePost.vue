<template>
  <!-- <h1>Questo è il singolo post {{ $route.params.id }}</h1> -->
  <div class="show-page container-fluid p-5">
    <div class="row">
      <div class="col-9">
        <h4>
          <a href="/" class="return-link">Torna ai post</a>
        </h4>

        <div class="my-card">
          <div class="my-card-header">
            <!-- <h2 class="title">{{ ucfirst($post->title) }}</h2> -->
            <h2 class="title">{{ post.title }}</h2>
            <h5 class="author">{{ post.author }}</h5>
            <span
              v-for="(category, index) in post.categories"
              :key="index"
              class="badge rounded-pill ms-2"
              :style="{ 'background-color': category.colour }"
              >{{ category.name }}</span
            >
          </div>
          <!-- @if (str_starts_with($post->image_url, 'http')) -->
          <img
            :src="post.image_url"
            :alt="'Picture of ' + post.title"
            class="my-card-img"
          />
          <!-- @else
          <img
            src="{{ asset('storage'.'/'. $post->image_url) }}"
            alt="Picture of {{ $post->title }}"
            class="my-card-img"
          />
          @endif -->
          <div class="my-card-text">
            <p class="text">{{ post.content }}</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="my-sidebar p-3">
          <h2>Categorie:</h2>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//import func from "vue-editor-bridge";
export default {
  name: "SinglePost",
  data: function () {
    return {
      post: [],
    };
  },
  methods: {
    getPost(postId) {
      axios
        .get(`http://localhost:8000/api/posts/${postId}`)
        .then((response) => {
          console.warn("ho richiamato il singolo post by ID");
          this.post = response.data;
          console.log(this.post);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getPost(this.$route.params.id);
  },
};
</script>

<style>
</style>
