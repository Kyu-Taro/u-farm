<template>
  <div>
    <compnent :is="tag" :style="styleVariables" class="button">
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
    },
    background: {
      type: String,
      default: '#639E56'
    }
  },
  computed: {
    styleVariables () {
      return {
        '--button-background': this.background
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.button {
  --button-background: #639E56; //事故防止のデフォルト値
  font-size: 1rem;
  color: #fff;
  padding: 10px 20px;
  border-radius: 25px;
  background: var(--button-background);
}
</style>
