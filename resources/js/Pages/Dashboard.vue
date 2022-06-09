<template>
  <Head title="Dashboard" />
  <div class="container mx-auto">
    <Navigation class="shadow-lg" />
  </div>
  <section class="text-gray-600 body-font relative py-12">
    <div class="container mx-auto flex sm:flex-nowrap flex-wrap">
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
      >
        <!-- <iframe
          width="100%"
          height="100%"
          class="absolute inset-0"
          frameborder="0"
          title="map"
          marginheight="0"
          marginwidth="0"
          scrolling="no"
          src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
        ></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
              ADDRESS
            </h2>
            <p class="mt-1">
              Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter
            </p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
              EMAIL
            </h2>
            <a class="text-green-500 leading-relaxed">example@email.com</a>
            <h2
              class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
            >
              PHONE
            </h2>
            <p class="leading-relaxed">123-456-7890</p>
          </div>
        </div>-->
        <GoogleMap></GoogleMap>
      </div>
      <LocationsList />
    </div>
  </section>

  <!-- <BreezeAuthenticatedLayout>
  </BreezeAuthenticatedLayout> -->
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Navigation from "@/Components/Navigation.vue";
import SearchForm from "@/Components/SearchForm.vue";
import { InertiaLink } from "@inertiajs/inertia-vue3";
import GoogleMap from "../Components/GoogleMap.vue";
import LocationsList from "@/Components/LocationsList.vue";
</script>
