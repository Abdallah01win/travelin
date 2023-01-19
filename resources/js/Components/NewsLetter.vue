<template>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h2
          class="sm:leading-snug sm:text-5xl font-medium mb-4 text-gray-900 font-marc mx-52"
        >
        Get ready and discover the world's wonders with us
        </h2>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-lg">
          Join our news letter and get 20% off.
        </p>
      </div>
      <div
        class="grid grid-cols-[2fr,1fr] px-12 lg:w-2/3 w-full mx-auto items-end"
      >
        <!-- <div class="relative flex-grow w-full">
          <label for="full-name" class="leading-7 text-base text-gray-600"
            >Full Name</label
          >
          <input
            type="text"
            id="full-name"
            name="full-name"
            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
          />
        </div> -->
        <div class="relative flex-grow w-full">
          <!-- <label for="email" class="leading-7 text-base text-gray-600">Email Adress</label> -->
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email Adress"
            class="w-full rounded-l-lg bg-gray-100 bg-opacity-50 border border-r-0 border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 outline-none text-gray-700 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out placeholder:text-gray-600/50"
          />
        </div>
        <button
          class="leading-6 rounded-r-lg flex-grow w-full text-white bg-green-500 border border-green-500 border-l-0 py-3 px-8 focus:outline-none hover:bg-green-600 text-lg font-semibold"
        >
          Join Now
        </button>
      </div>
    </div>
  </section>
</template>

<style>
input{
  box-sizing: border-box;
}
</style>
