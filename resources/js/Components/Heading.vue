<template>
    <div class="grid grid-cols-2 gap-4 container mx-auto relative">
        <div>
            <Navigation class="bg-transparent absolute" />
            <div class="ml-8">
                <h1
                    class="font-marc text-6xl capitalize text-gray-900 mb-10 mt-44"
                >
                    the best way to plan your trip around the world
                </h1>
                <p class="text-lg text-gray-600">
                    There are endless possiblities when planning your vecaton,
                    so we're waiting for you to use travelin.
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
