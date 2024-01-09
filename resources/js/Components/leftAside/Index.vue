<template>
   <ItemComponent
   :menu="menu"
   />
</template>

<script setup>
import ItemComponent from '@/Components/leftAside/ItemComponent.vue';
import useAside from '@/Composable/useAside.js'

const { menu } = useAside();
</script>

