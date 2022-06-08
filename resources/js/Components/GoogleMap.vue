<script>
export default {
  data() {
    return {
      center: { lat: 51.093048, lng: 6.84212 },
    };
  },
};
</script>
<template>
  <GMapMap :center="center" :zoom="7" map-type-id="terrain"> </GMapMap>
</template>
