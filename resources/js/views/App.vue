<template>
  <div>
    <h1>hello world</h1>
  </div>
</template>

<script>
export default {
  methods: {
    log() {
      console.log("App");
    },
  },
  created() {
    this.log();
  },
};
</script>

<style>
</style>