<template>
    <div class="mt-4 flex items-center justify-between">
        <div class="space-x-1 text-gray-500">
            <span>Showing {{ props.from }} - {{ props.to }} of {{ props.total }} entries</span>
        </div>
        <div class="flex justify-center my-4">
            <template v-for="(link, index) in pagination" :key="index">
                    <span
                        v-if="link.url === null"
                        v-html="link.label"
                        class="px-3 py-2 text-gray-500 hover:text-blue-500"
                    ></span>

                    <Link
                        v-else
                        :href="link.url"
                        v-html="link.label"
                        class="px-3 py-2 text-gray-500 hover:text-blue-500"
                        :class="{ 'bg-indigo-600 text-white': link.active }"
                    />
            </template>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    from: {
        type: Number,
    },
    to: {
        type: Number,
    },
    total: {
        type: Number,
    },
    pagination: {
        type: Object,
    },
});
</script>
