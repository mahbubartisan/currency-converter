<template>
    <div>
        <label v-if="label" class="block font-semibold"
            >{{ label }}
            <span v-if="required" class="text-red-500">*</span>
        </label>
        <select
            v-model="modelValue"
            v-bind="$attrs"
            class="mt-2 border border-slate-300 rounded-md shadow-sm w-full px-3 py-2 focus:border-green-600 focus:ring-0 focus:outline-none transition duration-500 ease-in-out"
        >
            <option value="null" hidden>{{ defaultOption }}</option>
            <option
                v-for="(item, i) in options"
                :value="item[itemKey]"
                :key="i"
            >
                {{ item[itemValue] }}
            </option>
        </select>
        <span v-if="error" class="text-sm text-red-500">{{ error }}</span>
    </div>
</template>

<script setup>
defineProps({
    options: {
        type: Array,
        default: [],
    },
    itemValue: {
        type: String,
        default: "",
    },
    itemKey: {
        type: String,
        default: "",
    },
    defaultOption: {
        type: String,
        default: "--- Select one ---",
    },

    label: String,
    required: {
        type: Boolean,
        default: false,
    },
    error: {
        type: String,
    },
});

const modelValue = defineModel();
</script>
