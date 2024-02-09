<script setup>
import "intersection-observer"; // for cross-browser support
import MainLayout from '@/Layouts/MainLayout.vue';
import MainBanner from '@/Components/MainBanner.vue';
import TeamSection from '@/Components/TeamSections.vue';
import OurProjects from '@/Components/OurProjects.vue';
import OurService from '@/Components/OurService.vue';
import WorkProcess from '@/Components/WorkProcess.vue';
import WhyChooseUs from '@/Components/WhyChooseUs.vue';



defineProps({

    locale: {
        type: String,
    },
})
</script>



<template>
  <MainLayout :isHome="true">
    <MainBanner />
    <OurService />
    <WhyChooseUs />
    <OurProjects />
    <WorkProcess />
    <TeamSection />
  </MainLayout>
</template>