<script>
export default {
  data() {
    return {
      coordinates: { lat: 51.093048, lng: 6.84212 },
    };
  },
};
</script>
<template>
  <div
    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
  >
    <GMapMap :center="coordinates" :zoom="12" map-type-id="terrain"></GMapMap>
    <!-- 
     :defaultCenter="coordinates"
    :options="{}"
    :onChange="{}"
    :onChildClick="{}"
   -->
  </div>
</template>
