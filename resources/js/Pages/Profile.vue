<template>
  <Navigation />
  <div class="container mx-auto">
    <BreezeValidationErrors class="mb-4" />
    <form action="">
      <div>
        <BreezeLabel for="name" value="Name" />
        <BreezeInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          required
          autofocus
          autocomplete="name"
          :value="user.name"
        />
      </div>
      <div class="mt-4">
        <BreezeLabel for="email" value="Email" />
        <BreezeInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          required
          autocomplete="username"
          :value="user.email"
        />
      </div>
    </form>
  </div>
</template>

<script>
import Navigation from "@/Components/Navigation.vue";
import { computed } from "@vue/reactivity";
import { usePage, InertiaLink } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
export default {
  data() {
    return {};
  },
  components: {
    Navigation,
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },
  setup() {
    const user = computed(() => usePage().props.value.auth.user);
    return { user };
  },
};
</script>
