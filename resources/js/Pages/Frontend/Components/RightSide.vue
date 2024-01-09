<template>
        <!-- Right Side Section -->
        <div
            class="mt-6 md:mt-6 lg:mt-0 xl:w-2/6 sm:w-full selection:bg-green-600 selection:text-white"
        >
            <Search />
            <div class="px-2 md:px-0 relative">
                <h2 class="font-bold border-b border-gray-300/80 pb-4">
                    Other Gear Reviews
                </h2>
                <hr
                    class="mx-2 md:mx-0 border-b-[1px] border-lime-600 absolute bottom-0 left-0 w-[85px]"
                />
            </div>
            <div class="flex items-start mt-7">
                <div class="flex-shrink-0 border p-2 mr-3 ml-2 md:ml-0">
                    <Link :href="route('post.index')">
                        <img
                            src="https://wvdnr.gov/wp-content/uploads/2021/02/DeerHunting-9747-scaled.jpg"
                            alt="Post Image"
                            class="w-24 h-24 object-cover transition duration-500 ease-in-out transform hover:scale-105"
                        />
                    </Link>
                </div>
                <div>
                    <h3
                        class="text-sm font-semibold -mt-1 hover:text-green-500"
                    >
                        <Link :href="route('post.index')">
                            Bill banning import of hunting trophies into UK
                            passed by MPs
                        </Link>
                    </h3>
                </div>
            </div>
            <hr class="border-b-0 border-gray-200 my-3" />
        </div>
</template>

<script setup>
import Search from "./Search.vue";
import { Link } from "@inertiajs/vue3";
</script>
