<template>
  <div id="app">
    <p v-if="factText && factText.length > 0">{{ factText }}</p>
    <p v-else>Press the button below to get a Cat Fact</p>
    <button @click="getFact">Get A Fact!</button>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>

<script>
export default {
  computed: {
    factText() {
      return this.$store.state.fact.factText;
    }
  },

  methods: {
    getFact() {
      this.$store.dispatch('getFact');
    },
  },
}
</script>
