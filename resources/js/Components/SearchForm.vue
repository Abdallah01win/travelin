<template>
  <div class="flex flex-row shadow-xl rounded-3xl overflow-hidden">
    <div class="flex flex-row min-w-fit p-6 bg-white gap-7">
      <div class="flex flex-col">
        <label for="destination" class="leading-7 text-base text-gray-600 mb-2">
          Chose Your Destination
        </label>
        <input
          type="text"
          id="destination"
          name="destination"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
      </div>
      <div class="flex flex-col">
        <label for="date" class="leading-7 text-base text-gray-600 mb-2"
          >When will it start?</label
        >
        <input
          type="date"
          id="date"
          name="date"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
      </div>
      <div class="flex flex-col">
        <label for="people" class="leading-7 text-base text-gray-600 mb-2"
          >How Many People?</label
        >
        <input
          type="text"
          id="people"
          name="people"
          class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
      </div>
    </div>
    <button
      class="text-white bg-green-500 border-0 py-2 px-10 focus:outline-none hover:bg-green-600 text-2xl font-medium"
    >
      Discover
    </button>
  </div>
</template>
