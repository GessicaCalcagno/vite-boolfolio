<script>

export default {
  
};
</script>

<template>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BOOLFOLIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <router-link :to="{ name: 'home' }" class="nav-link active" aria-current="page" href="#">Home</router-link>
        <router-link :to="{ name: 'projects' }" class="nav-link" href="#">Projects</router-link>
        <a class="nav-link" href="#">Pricing</a>
      </div>
    </div>
  </div>
</nav>
</template>

<style lang="scss" scoped ></style>