<template>
  <form
    class="flex flex-row shadow-xl rounded-3xl overflow-hidden"
    @submit.prevent="submit"
  >
    <div class="flex flex-row min-w-fit p-6 bg-white gap-7">
      <div class="flex flex-col">
        <label for="departureLocation" class="leading-7 text-base text-gray-600 mb-2">
          Departure
        </label>
        <input
          v-model="fields.departureLocation"
          type="text"
          id="departureLocation"
          name="departureLocation"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
        <div v-if="errors && errors.departureLocation" class="text-red-600">
          {{
            errors.departureLocation[0].substr(
              errors.departureLocation[0].indexOf("field")
            )
          }}
        </div>
      </div>
      <div class="flex flex-col">
        <label for="destination" class="leading-7 text-base text-gray-600 mb-2">
          Chose Your Destination
        </label>
        <input
          v-model="fields.destination"
          type="text"
          id="destination"
          name="destination"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
        <div v-if="errors && errors.destination" class="text-red-600">
          {{ errors.destination[0].substr(errors.destination[0].indexOf("field")) }}
        </div>
      </div>
      <div class="flex flex-col">
        <label for="departureDate" class="leading-7 text-base text-gray-600 mb-2"
          >Departure Date</label
        >
        <input
          v-model="fields.departureDate"
          type="date"
          id="departureDate"
          name="departureDate"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
        <div v-if="errors && errors.departureDate" class="text-red-600">
          {{ errors.departureDate[0].substr(errors.departureDate[0].indexOf("field")) }}
        </div>
      </div>
      <div class="flex flex-col">
        <label for="people" class="leading-7 text-base text-gray-600 mb-2">People</label>
        <input
          v-model="fields.people"
          type="number"
          min="1"
          max="10"
          id="people"
          name="people"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
        <div v-if="errors && errors.people" class="text-red-600">
          {{ errors.people[0].substr(errors.people[0].indexOf("field")) }}
        </div>
      </div>
    </div>
    <button
      type="submit"
      class="text-white bg-green-500 border-0 py-2 px-10 focus:outline-none hover:bg-green-600 text-2xl font-medium"
    >
      Discover
    </button>
  </form>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
    };
  },

  methods: {
    submit() {
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios
          .post("/submit", this.fields)
          .then((response) => {
            this.fields = {}; //Clear input fields.
            this.loaded = true;
            this.success = true;
            window.location.href = "/dashboard";
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
