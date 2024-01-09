<template>
    <!-- Flex layout for content -->
    <div class="flex flex-col lg:flex-row lg:space-x-7 bg-white p-7 shadow-md">
        <!-- Left Side (Content) -->
        <div class="md:flex-1">
            <div>
                <!-- Contact Form -->
                <div
                    class="relative border border-slate-200/80 p-5 transition duration-700 ease-in-out shadow-sm"
                >
                    <h2
                        class="text-slate-900 text-2xl px-2 py-1 my-1.5 font-semibold"
                    >
                        Contact
                    </h2>
                    <p class="flex flex-col px-2">
                        Just drop your message here, and I will reach out to you
                        soon.
                        <span>Thanks</span>
                    </p>

                    <!-- Contact Form Fields -->
                    <form action="#" method="post" class="px-2 mt-7 space-y-5">
                        <div class="mb-4">
                            <label for="name" class="block text-lg mb-2"
                                >Your Name</label
                            >
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your Name"
                                class="w-full border border-gray-300 rounded px-3 py-3 text-sm focus:outline-none focus:border-green-600 focus:ring-0 transition duration-500 ease-in-out"
                                autocomplete="off"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-lg mb-2"
                                >Your Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Your Email"
                                class="w-full border border-gray-300 rounded px-3 py-3 text-sm focus:outline-none focus:border-green-600 focus:ring-0 transition duration-500 ease-in-out"
                                autocomplete="off"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-lg mb-2"
                                >Subject</label
                            >
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="Your Subject"
                                class="w-full border border-gray-300 rounded px-3 py-3 text-sm focus:outline-none focus:border-green-600 focus:ring-0 transition duration-500 ease-in-out"
                                autocomplete="off"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-lg mb-2"
                                >Message</label
                            >
                            <textarea
                                id="message"
                                name="message"
                                rows="4"
                                placeholder="Your Message"
                                class="w-full border border-gray-300 rounded px-3 py-3 text-sm resize-none focus:outline-none focus:border-green-600 focus:ring-0 transition duration-500 ease-in-out"
                                autocomplete="off"
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-green-600 hover:bg-green-500 text-white font-semibold py-2.5 px-4 rounded shadow-sm transition-colors duration-500 ease-in-out uppercase"
                        >
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <RightSide />
    </div>
</template>

<script setup>
import RightSide from "@/Pages/Frontend/Components/RightSide.vue";
</script>
