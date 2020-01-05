import Vue from 'vue'

// 3桁区切りで数字を表示
Vue.filter('moneyDelimiter', function (value) {
  return value.toLocaleString()
})
