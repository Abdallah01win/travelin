<template>
    <div class="grid grid-cols-2 gap-4 container mx-auto relative">
        <div>
            <Navigation class="bg-transparent absolute" />
            <div class="ml-8">
                <h1
                    class=" font-marc text-6xl capitalize text-gray-900 mb-10 mt-44"
                >
                    the best way to plan your trip around the world
                </h1>
                <p class="text-lg">
                    <!-- We are dedicated to providing you with the ultimate travel experience. Looking for a romantic getaway, a family vacation, or an adventure of a lifetime? we have the expertise and resources to make it happen. -->
                    We provide the ultimate travel experience. Let us take the stress out of planning your next adventure and book your dream trip today.
                </p>
                <SearchForm class="absolute left-8 bottom-32 shadow-xl" />
            </div>
        </div>
        <div class="">
            <img src="/assets/hero-beach.jpg" alt="" class="h-screen w-full" />
        </div>
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
