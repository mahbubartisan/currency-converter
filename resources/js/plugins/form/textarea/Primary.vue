<template>
    <div>
        <label v-if="label" class="block font-semibold"
            >{{ label }}
            <span v-if="required" class="text-red-600">*</span>
        </label>
        <textarea
            v-model="modelValue"
            v-bind="$attrs"
            class="resize-none rounded-md border border-gray-300 px-3 leading-tight text-gray-800 focus:border-green-600 focus:ring-0 focus:outline-none transition duration-500 ease-in-out"
            :class="{ 'border border-red-500': error }"
        >
    </textarea>
        <span v-if="error" class="text-sm text-red-500">{{ error }}</span>
    </div>
    
</template>

<script setup>
defineProps({
    label: String,
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
