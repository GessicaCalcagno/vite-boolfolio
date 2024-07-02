<script>
import axios from "axios";

export default {
  data() {
    return {
      project: null,
    };
  },
  created() {
    // console.log(this.$route);
    // console.log(this.$router);

    const slug = this.$route.params.slug;
    // console.log(slug) si vede il titolo

    axios
      .get(`http://127.0.0.1:8000/api/projects/${slug}`)
      .then((resp) => {
        this.project = resp.data.results;
      })
      .catch((err) => {
        if (err.response.status === 404) {
          this.$router.push({ name: "not-found" });
        }
      });
  },
};
</script>

<template>
  <div class="container">
    <div v-if="project !== null">
      <h1>Progetto</h1>
      <h4>{{ project.title }}</h4>
    </div>
  </div>
</template>
<style lang="scss" scoped></style>
