<template>
    <div>
        <label v-if="label" class="block font-semibold"
            >{{ label }}
            <span v-if="required" class="text-red-600">*</span>
        </label>
        <input
            type="text"
            v-model="modelValue"
            v-bind="$attrs"
            class="mt-2 border border-slate-300 rounded-md w-full px-3 py-2 focus:border-green-600 focus:ring-0 focus:outline-none placeholder:text-gray-400 transition ease-in-out duration-500"
            :class="{ 'border border-red-500': error }"
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

const modelValue = defineModel();
</script>
