<template>
  <header class="text-gray-600 w-full">
    <div class="container mx-auto flex flex-wrap py-5 flex-col md:flex-row items-center">
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
      <nav
        class="md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center text-base justify-center"
      >
        <a class="mr-8 text-lg hover:text-gray-900" href="/">Home</a>
        <a class="mr-8 text-lg hover:text-gray-900" href="">Destination</a>
        <a class="mr-8 text-lg hover:text-gray-900" href="">About us</a>
      </nav>
      <div v-if="!user">
        <a
          href="login"
          class="inline-flex items-center bg-transparant border border-white py-2 px-4 text-white focus:outline-none hover:text-gray-400 hover:border-gray-400 rounded text-base mt-4 md:mt-0 mr-7"
          >Sign in
        </a>
        <a
          href="register"
          class="inline-flex items-center bg-transparant border border-white py-2 px-4 text-white focus:outline-none hover:text-gray-400 hover:border-gray-400 rounded text-base mt-4 md:mt-0 mr-7"
          >Register
        </a>
      </div>
      <div
        class="text-lg mt-4 md:mt-0 mr-10"
        v-else
        :class="[isHome ? 'text-red' : 'text-green']"
      >
        <a href="/profile">
          {{ user.name }}
        </a>
      </div>
    </div>
  </header>
</template>

<script>
import { computed } from "@vue/reactivity";
import { usePage } from "@inertiajs/inertia-vue3";
let currentUrl = window.location.pathname;
let home = undefined;
function isHome() {
  if (currentUrl === "/") {
    return true;
  } else {
    return false;
  }
}

export default {
  data() {
    return {
      isHome: isHome(),
    };
  },
  setup() {
    const user = computed(() => usePage().props.value.auth.user);
    return { user };
  },
};
</script>
