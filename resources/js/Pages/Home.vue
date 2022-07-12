<template>
  <Heading />
  <NewsLetter />
  <Footer />
</template>

<script>
//import Navigation from "@/Components/Navigation.vue";
import Heading from "@/Components/Heading.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Footer from "@/Components/Footer.vue";
export default {
  components: {
    // Navigation,
    Footer,
    NewsLetter,
    Heading,
  },
};
</script>
