if (process.env.NODE_ENV === 'development') {
  require('dotenv').config()
}
export default {
  mode: 'spa',
  srcDir: __dirname,
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
  /*
  ** Global CSS
  */
  css: [
    '~/assets/sass/theme.scss',
    '@fortawesome/fontawesome-svg-core/styles.css'
  ],
  styleResources: {
    scss: [
      '~/assets/sass/_variables.scss',
      '~/assets/sass/_mixins.scss'
    ]
  },
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    '~/plugins/fontawesome',
    '~/plugins/money_delimiter'
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module'
  ],
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/proxy',
    '@nuxtjs/style-resources'
  ],
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
  },
  proxy: {
    '/api': {
      target: process.env.APP_API_URL,
      pathRewrite: {
        '^/api': '/api'
      }
    }
  },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend (config, ctx) {
    }
  }
}
