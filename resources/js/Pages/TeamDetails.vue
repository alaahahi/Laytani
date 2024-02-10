<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

import { Link } from "@inertiajs/inertia-vue3";


import {ref} from "vue";

function toggleAnswer(question) {
  question.isOpen = !question.isOpen;

}

// Example usage:
const questions = ref([{
  id: 1,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 2,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 3,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
}]);
</script>
<template>
    <MainLayout>
        <div class='main'>
        <div class="sub_banner sub_banner--team">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Our Team
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Our Team</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects team">
            <div class="container">
                <div class="team_details_card">
                    <div class="team_details_card_left" v-scroll-reveal-fade-up="{delay:'0'}">
                        <div class="team_details_card_left_img_holder flex justify-center">
                            <img src="/assets/img/team3.png" width="317" height="346" alt="" />
                        </div>
                    </div>
                    <div class="team_details_card_right">
                        <div class="team_details_card_right_row" v-scroll-reveal-fade-up="{delay:'0'}">
                            <div class="team_details_card_box" >
                                <h1 class="team_details_card_name">Ahsan Iqbal</h1>
                                <div class="team_details_card_desc">Co -  Founder</div>
                            </div>
                            <div class="team_details_card_box">
                                <h1 class="team_details_card_sub_heading">Follow Him</h1>
                                <div class="team_details_card_box_border_holder mb-3">
                                    <img src="/assets/img/border_bottom.svg" width="70" height="1" alt="" />
                                </div>
                                <ul class="footer_social_media flex items-center">
                                <li class="footer_social_media_item footer_social_media_item_fb">
                                    <Link href="/">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-facebook-f footer_social_media_link_icone"></i>
                                        </div>
                                    </Link>
                                </li>
                                <li class="footer_social_media_item footer_social_media_item_twt">
                                    <Link href="/">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-twitter footer_social_media_link_icone"></i>
                                        </div>
                                    </Link>
                                </li>
                                <li class="footer_social_media_item footer_social_media_item_inst">
                                    <Link href="/">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-instagram footer_social_media_link_icone"></i>
                                        </div>
                                    </Link>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="team_details_card_right_row"   v-scroll-reveal-fade-up="{delay:'100'}">
                            <div class="team_details_card_box">
                                <h1 class="team_details_card_sub_heading">Office Location :</h1>
                                <div class="team_details_card_box_border_holder mb-3">
                                    <img src="/assets/img/border_bottom.svg" width="90" height="1" alt="" />
                                </div>
                                <div class="team_details_card_desc">
                                    UAE, Abu Dhabi, Al Khaldia city 
                                </div>
                            </div>
                            <div class="team_details_card_box">
                                <h1 class="team_details_card_sub_heading">Email  :</h1>
                                <div class="team_details_card_box_border_holder mb-3">
                                    <img src="/assets/img/border_bottom.svg" width="40" height="1" alt="" />
                                </div>
                                <div class="team_details_card_desc">
                                    info@cons.com
                                </div>
                            </div>
                            <div class="team_details_card_box">
                                <h1 class="team_details_card_sub_heading">Phone  :</h1>
                                <div class="team_details_card_box_border_holder mb-3">
                                    <img src="/assets/img/border_bottom.svg" width="40" height="1" alt="" />
                                </div>
                                <div class="team_details_card_desc">
                                    +971567897645
                                </div>
                            </div>
                        </div>
                        <div class="team_details_card_right_row" v-scroll-reveal-fade-up="{delay:'200'}">
                            <div class="team_details_card_box">
                                <h1 class="team_details_card_sub_heading2"> Personal Information</h1>
                                <div class="team_details_card_desc">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ClientsSlider />
    </div>
    </MainLayout>
</template>