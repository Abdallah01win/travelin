<script setup>
defineProps(["value"]);
</script>

<template>
  <label class="block leading-7 text-base text-gray-600 mb-2">
    <span v-if="value">{{ value }}</span>
    <span v-else><slot /></span>
  </label>
</template>
