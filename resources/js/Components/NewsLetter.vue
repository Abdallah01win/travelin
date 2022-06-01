<template>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:leading-snug sm:text-5xl /*text-5xl*/ font-medium mb-4 text-gray-900 font-marc mx-52"
        >
          Prepare yourself and let's explore the beauty of the world
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-xl">
          Join our news letter and get 20% off.
        </p>
      </div>
      <div
        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end"
      >
        <div class="relative flex-grow w-full">
          <label for="full-name" class="leading-7 text-base text-gray-600"
            >Full Name</label
          >
          <input
            type="text"
            id="full-name"
            name="full-name"
            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
          />
        </div>
        <div class="relative flex-grow w-full">
          <label for="email" class="leading-7 text-base text-gray-600">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
          />
        </div>
        <button
          class="flex-grow w-full text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-xl"
        >
          Join Now
        </button>
      </div>
    </div>
  </section>
</template>
