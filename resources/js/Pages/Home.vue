<template>
  <Head title="Home"/>
  <Heading />
  <Partners />
  <StatsSection />
  <NewsLetter />
  <Footer />
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Partners from "@/Components/Partners.vue";
import Heading from "@/Components/Heading.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Footer from "@/Components/Footer.vue";
import StatsSection from "@/Components/StatsSection.vue";
export default {
  components: {
    Head,
    Partners,
    Footer,
    NewsLetter,
    Heading,
    StatsSection,
  },
};
</script>
