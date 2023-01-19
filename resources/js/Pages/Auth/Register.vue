<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, InertiaLink, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  terms: false,
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <BreezeGuestLayout>
    <Head title="Register" />

    <div>
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
        <span class="ml-3 text-2xl font-marc font-semibold">Voyager</span>
      </Inertia-link>
      <div class="text-2xl text-gray-900 font-marc mt-3 mb-1 font-semibold">Welcome To Voyager</div>
    </div>
    <BreezeValidationErrors class="mb-4" />
    <form @submit.prevent="submit">
      <div>
        <BreezeLabel for="name" value="Name" />
        <BreezeInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />
      </div>

      <div class="mt-3">
        <BreezeLabel for="email" value="Email" />
        <BreezeInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          required
          autocomplete="username"
        />
      </div>

      <div class="mt-3">
        <BreezeLabel for="password" value="Password" />
        <BreezeInput
          id="password"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password"
          required
          autocomplete="new-password"
        />
      </div>

      <div class="mt-3">
        <BreezeLabel for="password_confirmation" value="Confirm Password" />
        <BreezeInput
          id="password_confirmation"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password_confirmation"
          required
          autocomplete="new-password"
        />
      </div>

      <!-- <div class="flex items-center justify-between mt-6"> -->

      <!-- </div> -->
      <BreezeButton
        class="w-full justify-center mb-3 mt-5"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Register
      </BreezeButton>
    </form>
    <Inertia-link
      :href="route('login')"
      class="underline leading-7 text-sm text-gray-600"
    >
      Already registered?
    </Inertia-link>
  </BreezeGuestLayout>
</template>
