<template>
        <button
            v-bind="$attrs"
            :loading="loading"
            class="rounded-md border border-slate-300 px-4 py-2 font-semibold text-slate-900 transition duration-300 ease-in-out hover:bg-orange-600 hover:text-white shadow"
        >
            <slot></slot>
        </button>
</template>

<script setup>
defineProps({
    loading: {
        type: Boolean,
        default: false,
    },
});
</script>
