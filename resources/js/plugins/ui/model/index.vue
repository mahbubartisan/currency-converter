<template>
    <div class="relative z-10" v-if="modelValue">
        <!-- <div
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block"
        ></div> -->

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto bg-gray-500 bg-opacity-50 transition-opacity">
            <div
                class="flex min-h-screen items-center justify-center text-center md:px-2 lg:px-4"
            >
                <div
                    class="w-full text-left transform transition md:my-8 md:px-4 md:max-w-2xl lg:max-w-2xl mx-4"
                >
                    <div
                        class="relative flex w-full justify-center items-center overflow-hidden bg-white px-4 pb-8 pt-14 mx-0 mt-16 md:mx-32 lg:mx-32 rounded-md shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8"
                    >
                        <button
                            type="button"
                            class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                            @click="
                                () => {
                                    modelValue = false;
                                }
                            "
                        >
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                        <div
                            class="grid w-full grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8 lg:gap-x-8"
                        >
                            <div class="sm:col-span-2">
                                <slot></slot>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const modelValue = defineModel();
</script>
