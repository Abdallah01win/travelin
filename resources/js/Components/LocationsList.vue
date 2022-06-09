<script>
export default {
  data() {
    return {
      props: {
        users: Array,
      },
      type: "resturants",
      ratting: "0",
      locations: [
        { name: "Malibu's", ratting: "5" },
        { name: "Malibu's2", ratting: "5" },
        { name: "Malibu's3", ratting: "5" },
      ],
    };
  },
  methods: {
    onTypeChange(event) {
      this.type = event.target.value;
    },
    onRattingChange(event) {
      this.ratting = event.target.value;
    },
  },
};
</script>
<template>
  <div
    class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-0 mt-8 md:mt-0"
  >
    <h1 class="text-gray-900 text-lg mb-1 font-medium title-font">
      Resturants in NewYork
    </h1>
    <form class="flex flex-row gap-6 my-2">
      <select name="type" id="type" @change="onTypeChange($event)" v-model="type">
        <option value="resturants">Resturants</option>
        <option value="hotels">Hotels</option>
        <option value="atractions">Atractions</option>
      </select>

      <select
        name="ratting"
        id="ratting"
        @change="onRattingChange($event)"
        v-model="ratting"
      >
        <option value="0">All</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
      </select>
    </form>

    <div v-if="this.locations">
      <div v-for="loc in locations">
        <div>
          <div class="flex flex-row justify-between my-3">
            <h3>{{ loc.name }}</h3>
            <div>{{ loc.ratting }}</div>
          </div>
          <div class="border-2 border-gray-900 w-full text-center p-12">some image</div>
        </div>
      </div>
    </div>
  </div>
</template>
