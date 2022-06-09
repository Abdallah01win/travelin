<template>
  <Head title="Dashboard" />
  <div class="container mx-auto">
    <Navigation class="shadow-lg" />
  </div>
  <section class="text-gray-600 body-font relative py-12">
    <div class="container mx-auto flex sm:flex-nowrap flex-wrap">
      <GoogleMap></GoogleMap>
      <LocationsList />
    </div>
  </section>
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Navigation from "@/Components/Navigation.vue";
import SearchForm from "@/Components/SearchForm.vue";
import { InertiaLink } from "@inertiajs/inertia-vue3";
import GoogleMap from "../Components/GoogleMap.vue";
import LocationsList from "@/Components/LocationsList.vue";
import axios from "axios";

/*const URL = "https://travel-advisor.p.rapidapi.com/restaurants/list-in-boundary";
const options = {
  params: {
    bl_latitude: "11.847676",
    tr_latitude: "12.838442",
    bl_longitude: "109.095887",
    tr_longitude: "109.149359",
    limit: "30",
    currency: "USD",
    open_now: "false",
    lunit: "km",
    lang: "en_US",
  },
  headers: {
    "X-RapidAPI-Key": import.meta.env.VITE_RAPID_API_KEY,
    "X-RapidAPI-Host": "travel-advisor.p.rapidapi.com",
  },
};

axios
  .request(options)
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.error(error);
  });
*/

/*const options = {
  method: "POST",
  params: { currency: "USD", units: "km", lang: "en_US" },
  headers: {
    "content-type": "application/json",
    "X-RapidAPI-Key": import.meta.env.VITE_RAPID_API_KEY,
    "X-RapidAPI-Host": "travel-advisor.p.rapidapi.com",
  },
  data:
    '{"geoId":293928,"partySize":2,"reservationTime":"2022-03-07T20:00","sort":"POPULARITY","sortOrder":"desc","filters":[{"id":"establishment","value":["10591"]}],"boundingBox":{"northEastCorner":{"latitude":12.248278039408776,"longitude":109.1981618106365},"southWestCorner":{"latitude":12.243407232845051,"longitude":109.1921640560031}},"updateToken":""}',
};

axios
  .request(options)
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.error(error);
  });

async function getLocations() {
  try {
    const {
      data: { data },
    } = await axios.get(
      "https://travel-advisor.p.rapidapi.com/restaurants/v2/list",
      options
    );
    return data;
  } catch (error) {
    console.log(error);
  }
}

const locations = getLocations();
console.log(locations);*/
</script>
