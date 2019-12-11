<template>
  <div class="card">
    <div class="card__body">
      <img :src="itemImage" class="card__body__item-image">
      <div v-if="canEdit" class="card__body__edit-button">
        edit
      </div>
      <div class="card__body__price">
        {{ price }}円
      </div>
    </div>
    <div class="card__footer">
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
.card {
  &__body {
    position: relative;
    width: 100%;
    padding-top: 80%;
    overflow: hidden;
    &__item-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    &__price {
      position: absolute;
      left: 0;
      bottom: 20%;
      width: 100%;
      height: 40px;
    }
    &__edit-button {
      position: absolute;
      right: 0;
      top: 20%;
      width: 40px;
      height: 40px;
    }
  }
}
</style>
