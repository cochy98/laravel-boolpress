<template>
  <div class="my-card d-flex">
    <img
      :src="post.image_url"
      :alt="'Picture of ' + post.title"
      class="my-card-img"
    />
    <div class="my-card-content">
      <div class="my-card-body">
        <div class="my-card-header">
          <!-- <h2 class="title">{{ ucfirst(post.title) }}</h2> -->
          <h2 class="title">{{ post.title }}</h2>
          <h5 class="author">{{ post.author }}</h5>
        </div>
        <div class="my-card-text">
          <p class="text">{{ post.content }}</p>
        </div>
      </div>
      <div class="my-card-footer">
        <span
          v-for="(category, index) in post.categories"
          :key="index"
          class="badge rounded-pill me-2"
          :style="{ 'background-color': category.colour }"
          >{{ category.name }}</span
        >
        <a href="#">Leggi di piu...</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Post",
  props: ["post"],
};
</script>
:
<style>
</style>
