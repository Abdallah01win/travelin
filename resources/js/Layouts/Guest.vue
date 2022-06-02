<template>
  <div
    class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white"
  >
    <div>
      <!-- <Link href="/">
                <BreezeApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link> -->

      <a
        class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 mr-7"
        href="/"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          class="w-10 h-10 text-white p-2 bg-green-500 rounded-full"
          viewBox="0 0 24 24"
        >
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-2xl font-marc font-semibold">Travelin</span>
      </a>
    </div>

    <div
      class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-lg overflow-hidden sm:rounded-lg"
    >
      <slot />
    </div>
  </div>
</template>

<script setup>
/*export default {
  components:{
    Navigation,
  }
}*/
/*import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from "@inertiajs/inertia-vue3";*/
</script>
