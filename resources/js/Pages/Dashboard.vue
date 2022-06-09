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
      <div
        class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-0 mt-8 md:mt-0"
      >
        <h1 class="text-gray-900 text-lg mb-1 font-medium title-font">
          Resturants in NewYork
        </h1>
        <form class="flex flex-row gap-6 my-2">
          <select name="type" id="type" class="">
            <option value="resturants">Resturants</option>
            <option value="hotels">Hotels</option>
            <option value="atractions">Atractions</option>
          </select>

          <select name="ratting" id="ratting" class="">
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
          </select>
        </form>

        <div>
          <div>
            <div class="flex flex-row justify-between my-3">
              <h3>resturant Title</h3>
              <div>Ratting</div>
            </div>
            <div class="border-2 border-gray-900 w-full text-center p-12">some image</div>
          </div>
          <div>
            <div class="flex flex-row justify-between my-3">
              <h3>resturant Title</h3>
              <div>Ratting</div>
            </div>
            <div class="border-2 border-gray-900 w-full text-center p-12">some image</div>
          </div>
          <div>
            <div class="flex flex-row justify-between my-3">
              <h3>resturant Title</h3>
              <div>Ratting</div>
            </div>
            <div class="border-2 border-gray-900 w-full text-center p-12">some image</div>
          </div>
        </div>
      </div>
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
</script>
