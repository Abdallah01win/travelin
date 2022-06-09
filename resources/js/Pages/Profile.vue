<template>
  <Navigation />
  <div class="container mx-auto mt-10">
    <BreezeValidationErrors class="mb-4" />
    <div class="flex flex-col gap-4 items-center">
      <!-- <img src="" alt="" /> -->
      <div
        class="py-10 px-12 border-2 border-gray-600 rounded-full text-5xl text-gray-900 font-semibold"
      >
        {{ users[0].name[0] }}
      </div>
      <div class="text-gray-600">Joined on {{ users[0].created_at }}</div>
    </div>
    <div
      v-if="success"
      class="alert alert-success mt-6 bg-green-300 py-2 px-4 w-fit mx-auto rounded"
    >
      Info Updated Successfully!
    </div>
    <form action="" class="w-2/4 mx-auto" @submit.prevent="updateInfo">
      <div>
        <BreezeLabel for="name" value="Name" />
        <BreezeInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          required
          autofocus
          :placeholder="users[0].name"
          v-model="fields.name"
        />
        <div v-if="errors && errors.name" class="text-red-600 mt-2">
          {{ errors.name[0] }}
        </div>
      </div>
      <div class="mt-4">
        <BreezeLabel for="email" value="Email" />
        <BreezeInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          disabled
          :value="users[0].email"
        ></BreezeInput>
      </div>
      <div class="mt-4">
        <BreezeLabel for="location" value="Adress" />
        <BreezeInput
          id="location"
          type="adress"
          class="mt-1 block w-full"
          required
          :placeholder="users[0].adress"
          v-model="fields.adress"
        ></BreezeInput>
        <div v-if="errors && errors.adress" class="text-red-600 mt-2">
          {{ errors.adress[0] }}
        </div>
      </div>
      <div class="flex flex-row justify-between mt-6">
        <BreezeButton class="bg-red-500 hover:bg-red-700" type="submit"
          >Delete My Account</BreezeButton
        >
        <BreezeButton>Update</BreezeButton>
      </div>
    </form>
  </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import Navigation from "@/Components/Navigation.vue";
import { computed } from "@vue/reactivity";
import { usePage, InertiaLink } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
export default {
  data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
    };
  },
  props: { users: Array },
  components: {
    Navigation,
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },
  methods: {
    updateInfo() {
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios
          .post("/userUpdate", this.fields)
          .then((response) => {
            this.fields = {}; //Clear input fields.
            this.loaded = true;
            this.success = true;
            Inertia.reload({ only: ["users"] });
          })
          .catch((error) => {
            this.loaded = true;
            if (error.response.status === 422) {
              this.errors = error.response.data.errors || {};
            }
          });
      }
    },
  },
};
</script>
