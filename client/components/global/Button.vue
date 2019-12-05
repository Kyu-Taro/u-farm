<template>
  <div>
    <compnent :is="tag" class>
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
</style>
