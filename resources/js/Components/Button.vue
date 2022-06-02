<script setup>
defineProps({
  type: {
    type: String,
    default: "submit",
  },
});
</script>

<template>
  <button
    :type="type"
    class="inline-flex items-center text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded-xl text-lg transition ease-in-out duration-150 font-medium"
  >
    <slot />
  </button>
</template>
