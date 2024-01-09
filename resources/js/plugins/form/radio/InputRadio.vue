<template>
    <div class="flex items-center">
        <input
            :value="value"
            v-model="modelValue"
            type="radio"
            class="peer h-4 w-4 border-gray-300 text-orange-500 focus:ring-orange-500"
        />
        <label class="ml-3 block font-medium text-gray-600 peer-checked:text-orange-500"
            >{{ label }}</label
        >
    </div>
</template>

<script setup>
import { inject } from "vue";

const { modelValue } = inject("modelValue");

defineProps({
    label: String,
    value: Number,
});
</script>
