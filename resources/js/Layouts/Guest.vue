<template>
  <div class="bg-white grid grid-cols-7 h-screen">
    <div class="flex flex-col justify-center items-center col-span-4">
      <div class="w-full sm:max-w-md px-6 py-8 shadow-lg">
        <slot />
      </div>
    </div>

    <div class="relative col-span-3">
      <img src="/assets/volly-ball.jpg" alt="" class="h-screen w-full" />
      <div
        class="absolute bottom-0 left-0 bg-gray-100 bg-opacity-40 px-8 pt-10 pb-8 mx-10 mb-12 text-white backdrop-blur-sm">
        <blockquote class="text-2xl mb-4">
          "Ever since our first time, we've been using Travelin to plan every trip. Can't
          imagine travelling without it."
        </blockquote>
        <div class="flex flex-row justify-between text-2xl font-semibold">
          <div class="flex flex-col ">
            <h3 class="">Andy Lane</h3>
            <div class="text-base font-normal">Costarica</div>
          </div>
          <div>
            <span v-for="i in 5" :key="i" class="">{{ '&#9733' }}</span>
            <div class="flex flex-row gap-3 justify-center mt-1">
              <span class="border-2 border-white py-0.75 px-1.5 rounded-full">{{ '&#8592' }}</span>
              <span class="border-2 border-white py-0.75 px-1.5 rounded-full">{{ '&#8594' }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navigation from "@/components/Navigation.vue";
export default {
  components: {
    Navigation,
  },
};
</script>
