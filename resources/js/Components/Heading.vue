<template>
    <Navigation class="bg-transparent absolute left-[50%] translate-x-[-50%] max-w-[1120px] z-50" />

    <div class="grid grid-cols-2 relative">
        <div></div>
        <div class="">
            <img src="/assets/hero-beach.jpg" alt="" class="h-screen w-full" />
        </div>
        <div class="absolute left-[50%] translate-x-[-50%] bottom-14 max-w-[1120px] z-50">
        <SearchForm class="shadow-xl" />
    </div>
    </div>
    <div class="grid grid-cols-2 max-w-[1120px] mx-auto absolute top-0 w-full h-full left-[50%] translate-x-[-50%]">
        <div class="flex flex-col justify-center">
            <h1 class="font-marc text-6xl capitalize text-gray-900 mb-6 /mt-12">
                the best way to plan your trip around the world
            </h1>
            <p class="text-lg">
                <!-- We are dedicated to providing you with the ultimate travel experience. Looking for a romantic getaway, a family vacation, or an adventure of a lifetime? we have the expertise and resources to make it happen. -->
                We provide the ultimate travel experience. Let us take the
                stress out of planning your next adventure and book your dream
                trip today.
            </p>
        </div>
        <div class="w-full"></div>
    </div>
   
</template>

<script>
import Navigation from "@/Components/Navigation.vue";
import SearchForm from "@/Components/SearchForm.vue";

export default {
    data() {
        return {};
    },
    components: { Navigation, SearchForm },
};
</script>
