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
                <div class="sub_heading_box--team-box">
                    <div class="sub_heading_box flex items-center sub_heading_box--services sub_heading_box--team" v-scroll-reveal-fade-up="{delay:'0'}">
                        <div class="sub_heading_img_holder">
                            <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
                        </div>
                        <h1 class="sub_heading_text">Team Members</h1>
                        <div class="sub_heading_img_holder">
                            <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
                        </div>
                    </div>
                    <h1 class="heading heading--subpage" v-scroll-reveal-fade-up="{delay:'200'}">Meet Our Professional Team</h1>
                </div>
                <div class="team_box_wrapper">
                    <div class="team_box" v-scroll-reveal-fade-up="{delay:'0'}">
                        <a href="team-details/1">
                            <div class="team_box_img_holder flex items-center justify-center">
                                <img src="/assets/img/team2.png" width="248" height="282" alt="" />
                                <div class="sub_heading_img_holder_view">View</div>
                            </div>
                            <div class="team_box_content">
                                <h1 class="team_box_content_name">Mohammed Aziz</h1>
                                <div class="team_box_content_name_desc">CRO</div>
                            </div>
                        </a>
                    </div>
                    <div class="team_box"    v-scroll-reveal-fade-up="{delay:'100'}">
                        <a href="team-details/1">
                            <div class="team_box_img_holder flex items-center justify-center">
                                <img src="/assets/img/team3.png" width="248" height="282" alt="" />
                                <div class="sub_heading_img_holder_view">View</div>
                            </div>
                            <div class="team_box_content">
                                <h1 class="team_box_content_name">Mohammed Aziz</h1>
                                <div class="team_box_content_name_desc">CRO</div>
                            </div>
                        </a>
                    </div>
                    <div class="team_box" v-scroll-reveal-fade-up="{delay:'200'}">
                        <a href="team-details/1">
                            <div class="team_box_img_holder flex items-center justify-center">
                                <img src="/assets/img/team1.png" width="248" height="282" alt="" />
                                <div class="sub_heading_img_holder_view">View</div>
                            </div>
                            <div class="team_box_content">
                                <h1 class="team_box_content_name">Mohammed Aziz</h1>
                                <div class="team_box_content_name_desc">CRO</div>
                            </div>
                        </a>
                    </div>
                    <div class="team_box" v-scroll-reveal-fade-up="{delay:'300'}">
                        <a href="team-details/1">
                            <div class="team_box_img_holder flex items-center justify-center">
                                <img src="/assets/img/team2.png" width="248" height="282" alt="" />
                                <div class="sub_heading_img_holder_view">View</div>
                            </div>
                            <div class="team_box_content">
                                <h1 class="team_box_content_name">Mohammed Aziz</h1>
                                <div class="team_box_content_name_desc">CRO</div>
                            </div>
                        </a>
                    </div>
                    <div class="team_box" v-scroll-reveal-fade-up="{delay:'400'}">
                        <a href="team-details/1">
                            <div class="team_box_img_holder flex items-center justify-center">
                                <img src="/assets/img/team3.png" width="248" height="282" alt="" />
                                <div class="sub_heading_img_holder_view">View</div>
                            </div>
                            <div class="team_box_content">
                                <h1 class="team_box_content_name">Mohammed Aziz</h1>
                                <div class="team_box_content_name_desc">CRO</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>