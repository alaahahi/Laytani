<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import AboutArea from '@/Components/AboutuStop.vue';
import ClientsSection from '@/Components/ClientsSection.vue';
</script>
<template>

	<MainLayout>

        <div class='main'>
        <div class="modal">
            <div class="modal-box relative">
                <label htmlFor="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <iframe src="https://www.youtube.com/embed/mbwuj58UEPg" class='video_u'></iframe>
            </div>
        </div>
        <div class="sub_banner">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            About  Us
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">About us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    <AboutArea />
    <ClientsSection />
	</MainLayout>
</template>