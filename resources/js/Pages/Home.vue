<template>
  <Heading />
  <Partners />
  <StatsSection />
  <NewsLetter />
  <Footer />
</template>

<script>
import Partners from "@/Components/Partners.vue";
import Heading from "@/Components/Heading.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Footer from "@/Components/Footer.vue";
import StatsSection from "@/Components/StatsSection.vue";
export default {
  components: {
    Partners,
    Footer,
    NewsLetter,
    Heading,
    StatsSection,
  },
};
</script>
