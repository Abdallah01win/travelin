<template>
  <Head title="Home"/>
  <Heading />
  <Partners />
  <StatsSection />
  <Destinations />
  <Testamonials />
  <NewsLetter />
  <Footer />

  <!-- Welcome to our travel agency! We are dedicated to providing you with the ultimate travel experience. Whether you're looking for a romantic getaway, a family vacation, or an adventure of a lifetime, we have the expertise and resources to make it happen. Our team of experienced travel experts will work with you to plan and book the perfect trip, tailored to your individual needs and preferences. From luxury resorts to off-the-beaten-path destinations, we have something for everyone. Let us take the stress out of planning your next adventure and book your dream trip today. -->
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Partners from "@/Components/Partners.vue";
import Heading from "@/Components/Heading.vue";
import Destinations from "@/Components/Destinations.vue";
import Testamonials from "@/Components/Testamonials.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Footer from "@/Components/Footer.vue";
import StatsSection from "@/Components/StatsSection.vue";
export default {
  components: {
    Head,
    Partners,
    Destinations,
    Footer,
    NewsLetter,
    Heading,
    StatsSection,
    Testamonials,
  },
};
</script>


