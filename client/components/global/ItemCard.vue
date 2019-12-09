<template>
  <div>
    <div>
      <img :src="itemImage">
      <div v-if="canEdit">
        edit
      </div>
      <div>
        {{ price }}円
      </div>
    </div>
    <div>
      <div>
        <span>
          【{{ productionArea }}】
        </span>
        <span>
          産地直送
        </span>
      </div>
      <div>
        {{ itemName }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    itemName: {
      type: String,
      required: true
    },
    price: {
      type: Number,
      required: true
    },
    productionArea: {
      type: String,
      required: true
    },
    itemImage: {
      type: String,
      required: true
    },
    canEdit: {
      type: Boolean,
      default: false
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
