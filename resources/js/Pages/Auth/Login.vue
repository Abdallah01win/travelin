<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeCheckbox from "@/Components/Checkbox.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, useForm, InertiaLink } from "@inertiajs/inertia-vue3";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <BreezeGuestLayout>
    <Head title="Log in" />

    <BreezeValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>

    <div class="text-3xl text-gray-900 font-marc my-3 font-semibold">Welcome Back!</div>
    <p class="text-base text-gray-600 mb-5">
      Nice to see you again. Please enter your details.
    </p>

    <form @submit.prevent="submit">
      <div>
        <BreezeLabel for="email" value="Email" />
        <BreezeInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          required
          autofocus
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
          autocomplete="current-password"
        />
      </div>

      <div class="flex items-center justify-between align-center mt-2 py-4">
        <div class="">
          <label class="flex items-center">
            <BreezeCheckbox name="remember" v-model:checked="form.remember" />
            <span class="ml-2 text-gray-600 leading-7 text-base">Remember me</span>
          </label>
        </div>

        <Inertia-link
          v-if="canResetPassword"
          :href="route('password.request')"
          class="underline leading-7 text-base text-gray-600"
        >
          Forgot your password?
        </Inertia-link>
      </div>
      <BreezeButton
        class="w-full justify-center mb-4"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Log in
      </BreezeButton>
    </form>
    <Inertia-link href="register" class="leading-7 text-base text-gray-600 pt-10">
      Don't have an account?
    </Inertia-link>
  </BreezeGuestLayout>
</template>
