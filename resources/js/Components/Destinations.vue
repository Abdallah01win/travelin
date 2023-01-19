<script>
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import "@splidejs/vue-splide/css";
export default {
    components: {
        Splide,
        SplideSlide,
    },
    data() {
        return {};
    },

    mounted() {
        const prevArrow = this.$refs.splide.$el.querySelector(
            ".splide__arrow--prev"
        );
        const nextArrow = this.$refs.splide.$el.querySelector(
            ".splide__arrow--next"
        );
        this.$refs.customArrows.appendChild(prevArrow);
        this.$refs.customArrows.appendChild(nextArrow);
    },
};
</script>

<template>
    <section class="py-12 max-w-[1120px] mx-auto" id="destinations">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="font-marc text-4xl capitalize text-gray-900 mb-2">
                    Top Destinations For You
                </h3>
                <p>Explore the best places to visit around the world.</p>
            </div>
            <div>
                <div
                    ref="customArrows"
                    class="w-fit bolck flex items-center gap-2"
                ></div>
            </div>
        </div>
        <!-- Slides -->
        <div>
            <Splide
                ref="splide"
                :options="{
                    rewind: true,
                    perPage: 4,
                    padding: '0.5em',
                    perMove: 1,
                    gap: '20px',
                    pagination: false,
                }"
                aria-label="top Destinations"
            >
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/norway.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/canada.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/resort.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/vally.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/argentina.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
                <SplideSlide>
                    <div
                        class="bg-white drop-shadow-xl rounded-lg p-3 /max-w-[250] my-8"
                    >
                        <img
                            src="/assets/italy.jpg"
                            alt=""
                            class="rounded-lg min-w-full h-[250px]"
                        />
                        <div class="font-semibold mb-2 mt-3 text-gray-900">
                            The Blue Mountain
                        </div>
                        <p class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consectetur, at.
                        </p>
                        <div
                            class="flex items-center justify-between text-sm text-gray-900"
                        >
                            <div class="flex items-center gap-x-1">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        fill="#16a34b"
                                        viewBox="0 0 256 256"
                                    >
                                        <rect
                                            width="256"
                                            height="256"
                                            fill="none"
                                        ></rect>
                                        <line
                                            x1="56"
                                            y1="232"
                                            x2="200"
                                            y2="232"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></line>
                                        <circle
                                            cx="128"
                                            cy="104"
                                            r="32"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></circle>
                                        <path
                                            d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z"
                                            fill="none"
                                            stroke="#16a34b"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="12"
                                        ></path>
                                    </svg>
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ipisa, Italy</span
                                >
                            </div>

                            <div class="flex items-center gap-x-1">
                                <span class="flex items-center gap-x-1">
                                    <span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            fill="#16a34b"
                                            viewBox="0 0 256 256"
                                        >
                                            <rect
                                                width="256"
                                                height="256"
                                                fill="none"
                                            ></rect>
                                            <path
                                                d="M239.2,97.4A16.4,16.4,0,0,0,224.6,86l-59-3.8a.5.5,0,0,1-.4-.3l-22-55.5a16.3,16.3,0,0,0-30.4,0l-22,55.5a.5.5,0,0,1-.4.3L31.4,86A16.4,16.4,0,0,0,16.8,97.4,16.8,16.8,0,0,0,22,115.5l45.2,37.6a.8.8,0,0,1,.2.8L53.9,207a18.6,18.6,0,0,0,7,19.6,18,18,0,0,0,20.1.6l46.9-29.7h.2l50.5,31.9a16.1,16.1,0,0,0,8.7,2.6,16.8,16.8,0,0,0,9.5-3.1,16.6,16.6,0,0,0,6.3-17.7l-14.5-57.3a.8.8,0,0,1,.2-.8L234,115.5A16.8,16.8,0,0,0,239.2,97.4Zm-15.4,5.8-45.3,37.6a16.8,16.8,0,0,0-5.4,17l14.5,57.3c.1.4.1.5,0,.6a.7.7,0,0,1-.3.3h-.2L136.7,184a16,16,0,0,0-8.7-2.5V32c.1,0,.2,0,.3.3l22.1,55.5a16.4,16.4,0,0,0,14.1,10.4l59.1,3.8c.1,0,.2,0,.3.4S223.9,103.1,223.8,103.2Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold text-xs"
                                        >4.5</span
                                    >
                                </span>
                                <span class="font-semibold text-xs"
                                    >Ratting</span
                                >
                            </div>
                        </div>
                    </div>
                </SplideSlide>
            </Splide>
        </div>
    </section>
</template>

<style>
#destinations .splide__arrow {
    background: transparent;
    border: solid 1px gray;
    margin: 0;
    position: initial;
    transform: translateY(0%);
    padding: 8px;
}
</style>
