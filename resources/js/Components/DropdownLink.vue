<script setup>
import { InertiaLink } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Inertia-link
    class="block w-full px-4 py-2 text-left text-base leading-5 text-gray-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
  >
    <slot />
  </Inertia-link>
</template>
