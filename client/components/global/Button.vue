<template>
  <div>
    <compnent :is="tag" class="button">
      <slot />
    </compnent>
  </div>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      default: 'button'
    }
  }
}
</script>

<style lang="scss" scoped>
.button {
  font-size: 1rem;
}
</style>
