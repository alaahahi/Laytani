<script setup>
import Footer from "@/Layouts/Footer.vue";
import Header from "@/Layouts/Header.vue";
defineProps({
    isHome: {
        type: Boolean,
        default: false,
    },})
</script>
<template>
    <Header ></Header>
        <slot ></slot>
     <Footer  ></Footer>
</template>
