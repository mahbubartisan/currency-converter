<template>
    <div class="flex items-center">
        <label
            class="relative inline-flex items-center justify-center cursor-pointer"
        >
            <input type="checkbox" v-model="modelValue" class="sr-only peer" />
            <div
                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-0 peer-focus:ring-orange-300 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-500"
            ></div>
            <slot> </slot>
        </label>
        <label v-if="label" class="font-semibold ml-3"
            >{{ label }}
            <span v-if="required" class="text-red-500">*</span>
        </label>
    </div>
</template>

<script setup>
defineProps({
    label: String,
    required: {
        type: Boolean,
        default: false,
    },
});

const modelValue = defineModel();
</script>
