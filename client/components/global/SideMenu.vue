<template>
  <div>
    <SidebarMenu :menu="menu" :hideToggle="true" theme="white-theme">
      <div slot="header" class="menu-header">
        <hr class="menu-header__rule">
        <div class="menu-header__body">
          <div class="menu-header__left">
            <div class="menu-header__user-icon">
              <img src="~/assets/images/test_user_icon.jpg">
            </div>
          </div>
          <div class="menu-header__right">
            <div class="menu-header__username">
              {{ user.name }}
            </div>
            <div class="menu-header__button">
              <Button tag="a">
                プロフィールを変更
              </Button>
            </div>
          </div>
        </div>
        <hr class="menu-header__rule">
      </div>
      <span slot="dropdown-icon">
        <fa icon="chevron-right" fixed-width />
      </span>
    </SidebarMenu>
  </div>
</template>

<script>
import { SidebarMenu } from 'vue-sidebar-menu'
import { mapState } from 'vuex'
import Button from '~/components/global/Button.vue'

export default {
  components: {
    SidebarMenu,
    Button
  },
  props: {
    menu: {
      type: Array,
      required: true
    }
  },
  data () {
    return {
    }
  },
  computed: {
    ...mapState({
      user: state => state.auth.user
    })
  }
}
</script>

<style lang="scss">

// custom vue-slidbar-menu variables
$primary-color: $primary_color;
$base-bg: $secondary_color_light;
$icon-bg: transparent !important;

$icon_size: 60px;
$padding_header: 30px;
$margin_body: 30px 0;
$hr_color: #c4c4c4;

@import "vue-sidebar-menu/src/scss/vue-sidebar-menu.scss";
.v-sidebar-menu {
  z-index: 98;
  padding-top: $navbar_height;
  .menu-header {
    padding: $padding_header;
    &__body {
    display: flex;
    align-items: center;
    margin: $margin_body;
    }
    &__left {
      margin-right: 30px;
      img {
        width: $icon_size;
        height: $icon_size;
      }
    }
    &__right {
      flex: 1;
    }
    &__username {
      margin-bottom: 15px;
    }
    &__button {

    }
    &__rule {
      background-color: $hr_color;
      height: 1px;
      border: none;
      margin: 15px 0;
    }
  }
}
</style>
