<template>
        <ul class="ml-8" v-for="(item, index) in child" :key="index">
            <li>
                <Link
                    :href="item.to"
                    class="flex items-center px-4 py-2 text-gray-500 hover:text-gray-700"
                >
                    {{ item.title }}
                </Link>
            </li>
        </ul>

</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import useAside from "@/Composable/useAside";
const { menuId } = useAside();
defineProps({
    child: Array,
});
</script>
