<template>
  <div
    class="bg-white w-1/3 mx-auto absolute top-[50%] translate-x-[50%] right-[50%] translate-y-[-50%] px-10 py-8"
  >
    <h3 class="text-2xl font-semibold text-gray-900 mb-4 text-center">
      {{ title }}
    </h3>
    <p></p>
    <p class="">
      {{ message }}
    </p>
    <div class="flex flex-row justify-between mt-4">
      <Inertia-link
        href="/userDelete"
        class="block text-white text-base hover:bg-red-700 bg-red-600 py-2 px-6 rounded-xl font-medium cursor-pointer"
        >{{ action }}</Inertia-link
      >
      <a
        class="block text-white text-base hover:bg-green-700 bg-green-600 py-2 px-6 rounded-xl font-medium cursor-pointer"
        @click="this.$emit('bol', false)"
        >Cancel</a
      >
    </div>
  </div>
</template>

<script>
import { InertiaLink } from "@inertiajs/inertia-vue3";
export default {
  Date() {
    return {};
  },
  props: {
    title: String,
    message: String,
    action: String,
  },
  components: {
    InertiaLink,
  },
  methods: {},
};
</script>
