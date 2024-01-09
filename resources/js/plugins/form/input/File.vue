<template>
    <div>
        <label v-if="label" class="block font-semibold" :class="labelClass"
            >{{ label }}
            <span v-if="required" class="text-red-500">*</span>
        </label>
        <input
            type="file"
            v-bind="$attrs"
            class="mt-2 border border-slate-300 rounded-md shadow-sm w-full px-3 py-2 focus:border-green-600 focus:ring-0 focus:outline-none transition duration-500 ease-in-out"
        />
        <span v-if="error" class="text-sm text-red-500">{{ error }}</span>
    </div>
</template>

<script setup>
defineProps({
    label: String,
    labelClass: {
        type: String,
    },
    required: {
        type: Boolean,
        default: false,
    },
    error: {
        type: String,
        default: "",
    },
});
</script>
