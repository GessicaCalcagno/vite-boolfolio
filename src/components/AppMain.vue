<script>
import axios from "axios";
export default {
  data() {
    return {
      projects: [],
    };
  },
  created() {
    axios.get('http://127.0.0.1:8000/api/projects').then((resp) => {
        // console.log(resp);
        this.projects = resp.data.results;
    });
  },
};
</script>

<template>
  
  
  
</template>

<style scoped lang="scss"></style>
