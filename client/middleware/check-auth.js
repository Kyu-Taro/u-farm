export default async ({ store, req }) => {
  if (!store.getters['auth/check']) {
    await store.dispatch('auth/fetchUserInfo')
  }
}
