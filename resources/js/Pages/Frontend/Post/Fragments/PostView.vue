<template>
    <!-- Flex layout for content -->
    <div
        class="flex flex-col xl:flex-row lg:space-x-0 xl:space-x-7 bg-white p-7 shadow-md"
    >
        <!-- Left Side (Content) -->
        <div class="md:flex-1">
            <!-- Blog Posts -->
            <div>
                <!-- First Blog Post -->
                <div
                    class="relative border border-slate-200/80 p-5 transition duration-700 ease-in-out shadow-sm"
                >
                    <div class="breadcrumb mb-4 text-sm text-gray-500">
                        <nav>
                            <Link
                                :href="route('home')"
                                class="hover:text-gray-700"
                                >Home</Link
                            >
                            <span class="mx-1">&rarr;</span>
                            <Link
                                href="category.html"
                                class="hover:text-gray-700"
                                >Outdoors</Link
                            >
                            <span class="mx-1">&rarr;</span>
                            <span
                                >Equipment Care: How To Extend The Usable
                                Lifespan Of Your Tactical Gear</span
                            >
                        </nav>
                    </div>

                    <Link
                        :href="route('category.index')"
                        class="bg-black font-semibold text-white text-xs px-2 py-1 my-1.5 uppercase"
                        >Outdoors</Link
                    >
                    <h2 class="mb-4 mt-2 text-2xl font-semibold">
                        Equipment Care: How To Extend The Usable Lifespan Of
                        Your Tactical Gear
                    </h2>
                    <!-- Border below post title -->
                    <div class="mb-4 border-b border-slate-200/80"></div>

                    <!-- Social Buttons -->
                    <div class="flex items-center space-x-4">
                        <!-- Facebook Button -->
                        <a href="#" class="text-gray-700 hover:text-blue-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <!-- Twitter Button -->
                        <a href="#" class="text-gray-700 hover:text-blue-400">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <!-- Message Button -->
                        <a href="#" class="text-gray-700 hover:text-green-500">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                    <div class="relative mt-7 flex justify-center">
                        <img
                            src="https://filson-life.imgix.net/2019/09/909_Studio28470-E.jpg?fm=pjpg&ixlib=php-1.2.1"
                        />
                    </div>
                    <p class="mt-5 mb-11 text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed aliquam libero in neque maximus, a fermentum purus
                        consectetur.
                    </p>

                    <!-- Social Buttons -->
                    <div class="flex items-center space-x-4">
                        <!-- Facebook Button -->
                        <a href="#" class="text-gray-700 hover:text-blue-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <!-- Twitter Button -->
                        <a href="#" class="text-gray-700 hover:text-blue-400">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <!-- Message Button -->
                        <a href="#" class="text-gray-700 hover:text-green-500">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                    <!-- Border below post title -->
                    <div class="mt-7 border-b border-slate-200/80"></div>
                    <RelatedPost />
                </div>
            </div>
        </div>
        <RightSide />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import RelatedPost from "@/Pages/Frontend/Post/Fragments/RelatedPost.vue";
import RightSide from "@/Pages/Frontend/Components/RightSide.vue";
</script>
