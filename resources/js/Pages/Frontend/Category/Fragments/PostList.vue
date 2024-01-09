<template>
    <div
        class="flex flex-col xl:flex-row lg:space-x-0 xl:space-x-7 bg-white p-7 shadow-md"
    >
        <!-- Left Side (Content) -->
        <div class="md:flex-1">
            <div>
                <!-- Specified Category Posts -->
                <div class="selection:bg-green-600 selection:text-white">
                    <h2 class="-mt-2 text-2xl font-semibold text-slate-900">
                        Outdoors
                    </h2>
                    <!-- Single Post -->
                    <div
                        class="mt-5 relative border border-slate-300 p-4 rounded-md"
                    >
                        <!-- Thumbnail -->
                        <div class="flex mb-4 md:flex-row md:items-start">
                            <div class="mb-4 mr-4 md:mb-0 md:flex-shrink-0">
                                <Link :href="route('post.index')">
                                    <img
                                        src="https://monksonwheels.com/wp-content/uploads/2021/08/Major-difference-between-trekking-and-Mountaineering.jpg"
                                        alt="Post Image"
                                        class="w-28 h-20 md:w-40 md:h-24 lg:w-40 lg:h-24 object-cover"
                                    />
                                </Link>
                            </div>
                            <!-- Post Details -->
                            <div class="flex-1">
                                <!-- Title -->
                                <h3 class="text-lg font-bold">
                                    <Link
                                        :href="route('post.index')"
                                        class="hover:text-green-600"
                                    >
                                        How To Increase Grip Strength For Hiking
                                        And Climbing With A Hangboard
                                    </Link>
                                </h3>
                                <span
                                    class="hidden md:block text-sm text-gray-950 mt-5 mb-9"
                                >
                                    New description goes here. Sed aliquam
                                    libero in neque maximus, a fermentum purus
                                    consectetur.
                                </span>
                                <!-- Read More Link -->
                                <Link
                                    :href="route('post.index')"
                                    class="hidden md:block absolute bottom-4 right-4 text-black text-sm border border-slate-500 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white transition-colors duration-500 ease-in-out"
                                    >Read More<i class="fas fa-plus ml-2"></i
                                ></Link>
                            </div>
                        </div>
                        <!-- Description for smaller screens -->
                        <div class="md:hidden">
                            <p class="text-sm text-gray-950 mt-7 md:mt-5 mb-7">
                                New description goes here. Sed aliquam libero in
                                neque maximus, a fermentum purus consectetur.
                            </p>
                            <!-- Read More Link for smaller screens -->
                            <Link
                                :href="route('post.index')"
                                class="text-black text-sm border border-slate-500 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white transition-colors duration-500 ease-in-out"
                                >Read More<i class="fas fa-plus ml-2"></i
                            ></Link>
                        </div>
                        <!-- End of Description for smaller screens -->
                    </div>
                    <!-- End of Single Post -->
                    <!-- Single Post Two -->
                    <div
                        class="mt-5 relative border border-slate-300 p-4 rounded-md"
                    >
                        <!-- Thumbnail -->
                        <div class="flex mb-4 md:flex-row md:items-start">
                            <div class="mb-4 mr-4 md:mb-0 md:flex-shrink-0">
                                <Link :href="route('post.index')">
                                    <img
                                        src="https://i.guim.co.uk/img/media/0a04f6a60351f5ec5f4aeaee7b77dacd52b1719c/248_206_3962_2377/master/3962.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=274805d14820c24e9b8935aaa34f7a46"
                                        alt="Post Image"
                                        class="w-28 h-20 md:w-40 md:h-24 lg:w-40 lg:h-24 object-cover"
                                    />
                                </Link>
                            </div>
                            <!-- Post Details -->
                            <div class="flex-1">
                                <!-- Title -->
                                <h3 class="text-lg font-bold">
                                    <Link
                                        :href="route('post.index')"
                                        class="hover:text-green-600"
                                    >
                                        Bill Banning Import Of Hunting Trophies
                                        Into UK Passed By MPs
                                    </Link>
                                </h3>
                                <span
                                    class="hidden md:block text-sm text-gray-950 mt-5 mb-9"
                                >
                                    New description goes here. Sed aliquam
                                    libero in neque maximus, a fermentum purus
                                    consectetur.
                                </span>
                                <!-- Read More Link -->
                                <Link
                                    :href="route('post.index')"
                                    class="hidden md:block absolute bottom-4 right-4 text-black text-sm border border-slate-500 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white transition-colors duration-500 ease-in-out"
                                    >Read More<i class="fas fa-plus ml-2"></i
                                ></Link>
                            </div>
                        </div>
                        <!-- Description for smaller screens -->
                        <div class="md:hidden">
                            <p class="text-sm text-gray-950 mt-7 md:mt-5 mb-7">
                                New description goes here. Sed aliquam libero in
                                neque maximus, a fermentum purus consectetur.
                            </p>
                            <!-- Read More Link for smaller screens -->
                            <Link
                                :href="route('post.index')"
                                class="text-black text-sm border border-slate-500 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white transition-colors duration-500 ease-in-out"
                                >Read More<i class="fas fa-plus ml-2"></i
                            ></Link>
                        </div>
                        <!-- End of Description for smaller screens -->
                    </div>
                    <!-- End of Single Post -->
                </div>
            </div>
            <Paginate />
        </div>
        <RightSide/>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Paginate from "@/Pages/Frontend/Components/Paginate.vue";
import RightSide from "@/Pages/Frontend/Components/RightSide.vue";
</script>
