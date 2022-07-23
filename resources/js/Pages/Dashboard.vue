<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Navigation from "@/Components/Navigation.vue";
import SearchForm from "@/Components/SearchForm.vue";
//import FlightsDisplay from "@/Components/FlightsDisplay.vue";
</script>

<template>
  <Head title="Dashboard" />
  <div class="container mx-auto">
    <Navigation class="mb-6 shadow-lg" />
    <SearchForm class="w-fit mx-auto" />
    <!-- <FlightsDisplay /> -->
  </div>

  <!-- <BreezeAuthenticatedLayout>
  </BreezeAuthenticatedLayout> -->
</template>
