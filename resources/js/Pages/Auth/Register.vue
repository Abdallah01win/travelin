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

    <BreezeValidationErrors class="mb-4" />
    <div class="text-3xl text-gray-900 font-marc my-3 font-semibold">
      Welcome To Travelin
    </div>
    <p class="text-base text-gray-600 mb-5">Please enter your details.</p>
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

      <div class="mt-4">
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

      <div class="mt-4">
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

      <div class="mt-4">
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
        class="w-full justify-center mb-4 mt-6"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Register
      </BreezeButton>
    </form>
    <Inertia-link
      :href="route('login')"
      class="underline leading-7 text-base text-gray-600"
    >
      Already registered?
    </Inertia-link>
  </BreezeGuestLayout>
</template>
