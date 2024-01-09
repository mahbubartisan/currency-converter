<template>
    <div class="mx-2">
        <h2 class="block font-semibold mt-2">
            {{ label }}
            <span v-if="required" class="text-red-500">*</span>
        </h2>
        <fieldset class="mt-2">
            <div
                class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0"
            >
                <slot></slot>
            </div>
        </fieldset>
    </div>
</template>

<script setup>
import { provide } from "vue";

const modelValue = defineModel();

defineProps({
    label: String,
    required: {
        type: Boolean,
        default: false,
    },
});

provide("modelValue", {
    modelValue,
});
</script>
