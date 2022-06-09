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
  <GMapMap :center="coordinates" :zoom="12" map-type-id="terrain"></GMapMap>
  <!-- 
     :defaultCenter="coordinates"
    :options="{}"
    :onChange="{}"
    :onChildClick="{}"
   -->
</template>
