<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import OurServices from '@/Components/OurService.vue';

</script>
<template>
    <MainLayout>
  <!-- Inner Banner -->
  <div class="inner-banner inner-bg2 mb-5">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Services</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
  <!-- Inner Banner End -->

  <OurServices :isHome="false" />


  </MainLayout>
</template>
