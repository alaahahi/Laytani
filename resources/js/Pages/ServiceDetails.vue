<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import MoreServices from '@/Components/MoreServices.vue';
import CounterArea from '@/Components/NewsSection.vue';
import TestimonialArea from '@/Components/TestimonialArea.vue';
import WebsiteRanking from '@/Components/WorkProcess.vue';
import { Link } from "@inertiajs/inertia-vue3";
import { ref, onUnmounted } from "vue";



const activeTab = ref(1);

const openTab = (v) => {
    activeTab.value = v;
};

</script>
<template>
    <MainLayout>
        <div class="main">
        <div class="sub_banner sub_banner--services">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Our Services
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Our Services</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="services_tabs">
            <div class="container">
                <div class='blog_wrapper flex flex-wrap'>
            <div class="blogRight">
                <div class="blogRight_card" v-scroll-reveal-fade-up="{delay:'0'}">
                    <div class="blogRight_card_body">
                        <h1 class="blogRight_card_ser_li_h">
                            Services List
                        </h1>
                        <div class="blogRight_card_ser_li_h_holder">
                            
                            <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
                        </div>
                        <div @click="openTab(1)" :class="activeTab === 1 ? 'active blogRight_card_body_tab justify-between' : 'blogRight_card_body_tab justify-between'">
                            Building Construction
                            <div class="blogRight_card_body_tab_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="56" height="40" alt="" />
                            </div>
                        </div>
                        <div @click="openTab(2)" :class="activeTab === 2 ? 'active blogRight_card_body_tab justify-between' : 'blogRight_card_body_tab justify-between'">
                            Projects Plannings
                             <div class="blogRight_card_body_tab_holder flex items-center">
                                 <img src="/assets/img/rightarrow.png" width="56" height="40" alt="" />
                             </div>
                         </div>
                         <div @click="openTab(3)" :class="activeTab === 3 ? 'active blogRight_card_body_tab justify-between' : 'blogRight_card_body_tab justify-between'">
                            Interior Developments
                             <div class="blogRight_card_body_tab_holder flex items-center">
                                 <img src="/assets/img/rightarrow.png" width="56" height="40" alt="" />
                             </div>
                         </div>
        
                    </div>
                </div>
                <div class="blogRight_card"  v-scroll-reveal-fade-up="{delay:'100'}">
                    <div class="blogRight_card_body">
                        <h1 class="blogRight_card_ser_li_h">
                            Download Brochure
                        </h1>
                        <div class="blogRight_card_ser_li_h_holder">
                            <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
                        </div>
                        <Link href="/">
                            <div class="blogRight_card_body_tab active justify-center gap-3">
                                <div class="blogRight_card_body_tab_holder flex items-center">
                                    <img src="/assets/img/pdf.svg" width="16" height="20" alt="" />
                                </div>
                                Download PDF
                            </div>
                        </Link>
                        <Link href="/">
                            <div class="blogRight_card_body_tab justify-center gap-3">
                                <div class="blogRight_card_body_tab_holder flex items-center">
                                    <img src="/assets/img/comment_white.svg" width="15" height="11" alt="" />
                                </div>
                                Download Docs
                            </div>
                        </Link>
                    </div>
                </div>
                <div class="blogRight_card blogRight_card2" v-scroll-reveal-fade-up="{delay:'200'}">
                    <div class="blogRight_card_body">
                        <h1 class="blogRight_card_body_help">Need Any Help ?</h1>
                        <div class="helpheading_below flex items-center justify-center ">
                            <img src="/assets/img/helpheading.svg" width="58" height="3" alt="" />
                        </div>
                        <a href="tel:+971567895215">
                            <div class=" justify-center mb-3 flex gap-2">
                                <div class="blogRight_card_body_help_holder flex items-center">
                                    <img src="/assets/img/callwhite.svg" width="18" height="18" alt="" />
                                </div>
                                <div class="blogRight_card_body_help_link">
                                    +971 567895215
                                </div>
                            </div>
                        </a>
                        <a href="mailto:info@alaytani.com">
                            <div class=" justify-center flex gap-2">
                                <div class="blogRight_card_body_help_holder flex items-center">
                                    <img src="/assets/img/mailwhite.svg" width="17" height="14" alt="" />
                                </div>
                                <div class="blogRight_card_body_help_link">
                                    info@alaytani.com
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blogleft" v-scroll-reveal-fade-up="{delay:'0'}">
                <div id="tab1" v-if="activeTab==1">
                    <div class="tab_content_img_holder flex items-center justify-center">
                        <img src="/assets/img/tab1.png" width="1200" height="400" alt="" />
                    </div>
                    <h1 class="tab_content_heading">Building Construction</h1>
                    <div class="tab_content_desc">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                    </div>
                </div>
                <div id="tab2" v-if="activeTab==2">
                    <div class="tab_content_img_holder flex items-center justify-center">
                        <img src="/assets/img/tab2.png" width="1200" height="400" alt="" />
                    </div>
                    <h1 class="tab_content_heading">Projects Plannings</h1>
                    <div class="tab_content_desc">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                    </div>
                </div>
                <div id="tab3" v-if="activeTab==3">
                    <div class="tab_content_img_holder flex items-center justify-center">
                        <img src="/assets/img/blogdetails.png" width="1666" height="1054" alt="" />
                    </div>
                    <h1 class="tab_content_heading">Interior Developments</h1>
                    <div class="tab_content_desc">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                    </div>
                </div>
                <h1 class="tab_content_heading">Works Process:</h1>
                <div class="tab_content_heading_holder">
                    <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
                </div>
                <div class="services_details_workProcess_wrapper flex justify-between" v-scroll-reveal-fade-up="{delay:'0'}">
                    <div class="workProcess_box">
                        <div class="workProcess_box_mini">
                            <img src="/assets/img/WorkProcessIcone1.svg" width="24" height="35" alt="" />
                        </div>
                        <div class="workProcess_box_inner">
                            <h1 class="workProcess_box_inner_heading">Planning</h1>
                            <div class="workProcess_box_inner_text">
                            Uniquely orchestrale 
                            Seamless potentialities
                            Via - Real Time
                            </div>
                        </div>
                    </div>
                    <div class="workProcess_box">
                        <div class="workProcess_box_mini">
                            <img src="/assets/img/WorkProcessIcone2.svg" width="34" height="31" alt="Construction Industry" />
                        </div>
                        <div class="workProcess_box_inner">
                            <h1 class="workProcess_box_inner_heading">Design</h1>
                            <div class="workProcess_box_inner_text">
                            Uniquely orchestrale 
                            Seamless potentialities
                            Via - Real Time
                            </div>
                        </div>
                    </div>
                    <div class="workProcess_box">
                        <div class="workProcess_box_mini">
                            <img src="/assets/img/WorkProcessIcone5.svg" width="34" height="34" alt="Construction Industry" />
                        </div>
                        <div class="workProcess_box_inner">
                            <h1 class="workProcess_box_inner_heading">Get Fund</h1>
                            <div class="workProcess_box_inner_text">
                            Uniquely orchestrale 
                            Seamless potentialities
                            Via - Real Time
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
 
  

  </MainLayout>
</template>
