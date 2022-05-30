<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand me-4" href="/"> Cochy Press </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li
              class="nav-item me-1"
              v-for="(navItem, index) in navItems"
              :key="index"
            >
              <router-link
                class="nav-link active"
                :to="{ name: navItem.routeName }"
              >
                {{ navItem.label }}
              </router-link>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item ms-auto">
              <a class="nav-link active" href="/admin"
                >Sezione Amministratore</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Header",
  data: function () {
    return {
      navItems: [
        {
          label: "Home",
          routeName: "home",
        },
        /* {
          label: "Posts",
          routeName: "posts",
        },
        {
          label: "About us",
          routeName: "about-us",
        },
        {
          label: "Contact us",
          routeName: "contact",
        }, */
      ],
    };
  },
};
</script>

<style>
</style>
