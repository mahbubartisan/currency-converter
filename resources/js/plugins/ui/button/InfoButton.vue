<template>
    <button
        v-bind="$attrs"
        class="rounded-md border border-slate-300 px-6 py-2 font-semibold text-slate-900 transition-colors duration-500 ease-in-out hover:bg-[#843dff] hover:text-white shadow"
    >
        <slot></slot>
    </button>
</template>

<script setup>
// defineProps({
//     loading: {
//         type: Boolean,
//         default: false,
//     },
//     to: [Object, String],
// });
</script>
