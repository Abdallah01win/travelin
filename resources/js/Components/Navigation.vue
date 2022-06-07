<template>
  <header class="text-gray-600 w-full">
    <div
      class="container mx-auto flex flex-wrap py-5 flex-col md:flex-row items-center px-6"
    >
      <Inertia-link
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
      </Inertia-link>
      <nav
        class="md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center text-base justify-center"
      >
        <Inertia-link class="mr-8 text-lg hover:text-gray-900" href="/"
          >Home</Inertia-link
        >
        <Inertia-link class="mr-8 text-lg hover:text-gray-900" href="/">
          Destination
        </Inertia-link>
        <Inertia-link class="mr-8 text-lg hover:text-gray-900" href="/"
          >About us</Inertia-link
        >
      </nav>
      <div v-if="!user">
        <Inertia-link
          href="login"
          class="inline-flex items-center bg-transparant border border-white py-2 px-4 text-white focus:outline-none hover:text-gray-400 hover:border-gray-400 rounded text-base mt-4 md:mt-0 mr-7"
          >Sign in
        </Inertia-link>
        <Inertia-link
          href="register"
          class="inline-flex items-center bg-transparant border border-white py-2 px-4 text-white focus:outline-none hover:text-gray-400 hover:border-gray-400 rounded text-base mt-4 md:mt-0 mr-7"
          >Register
        </Inertia-link>
      </div>
      <div
        v-else
        class="text-lg mt-4 md:mt-0"
        :class="[{ 'text-white': ishome }, 'text-gray-600']"
      >
        <BreezeDropdown>
          <template #trigger>
            <span class="inline-flex /*rounded-md*/">
              <button
                type="button"
                class="inline-flex items-center text-lg leading-4 bg-transparent /*hover:text-gray-900*/ focus:outline-none transition ease-in-out duration-150"
              >
                {{ user.name }}

                <svg
                  class="ml-2 -mr-0.5 h-4 w-4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>
            </span>
          </template>

          <template #content>
            <BreezeDropdownLink href="/profile" method="get" as="button">
              Profile
            </BreezeDropdownLink>
            <BreezeDropdownLink href="/dashboard" method="get" as="button">
              Dashboard
            </BreezeDropdownLink>
            <BreezeDropdownLink :href="route('logout')" method="post" as="button">
              Log Out
            </BreezeDropdownLink>
          </template>
        </BreezeDropdown>
      </div>
    </div>
  </header>
</template>

<script>
import { computed } from "@vue/reactivity";
import { usePage, InertiaLink } from "@inertiajs/inertia-vue3";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";

export default {
  data() {
    return {
      ishome: undefined,
    };
  },
  setup() {
    const user = computed(() => usePage().props.value.auth.user);
    return { user };
  },
  mounted() {
    const currentUrl = window.location.pathname;
    function isHome() {
      if (currentUrl === "/") {
        return true;
      } else {
        return false;
      }
    }
    this.ishome = isHome();
  },

  methods: {},
  components: {
    BreezeDropdown,
    BreezeDropdownLink,
    InertiaLink,
  },
};
</script>
