<script setup>
import PortfolioArea from '@/Components/PortfolioArea.vue';
import WebsiteRanking from '@/Components/WorkProcess.vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import { Link } from "@inertiajs/inertia-vue3";

</script>
<template>
    <MainLayout>
        <div class="sub_banner sub_banner--projects">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Projects
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img  src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Our Projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects">
            <div class="container">
                <div class="sub_heading_box--services-box">
                    <div class="sub_heading_box flex items-center sub_heading_box--services sub_heading_box--projects" v-scroll-reveal-fade-up="{delay:'0'}">
                        <div class="sub_heading_img_holder">
                            <img  src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
                        </div>
                        <h1 class="sub_heading_text">OUR Projects</h1>
                        <div class="sub_heading_img_holder">
                            <img  src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
                        </div>
                    </div>
                    <h1 class="heading heading--subpage"  v-scroll-reveal-fade-up="{delay:'100'}">We Provide Best Services</h1>
                </div>
                <div class="projects_wrapper">
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'0'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p1.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects One
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box"  v-scroll-reveal-fade-up="{delay:'100'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p2.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Two
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'200'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p3.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Three
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'300'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p4.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Four
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'400'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p5.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Five
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'600'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p1.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects One
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'700'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p2.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Two
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box" v-scroll-reveal-fade-up="{delay:'800'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p3.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Three
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box"  v-scroll-reveal-fade-up="{delay:'900'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p4.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Four
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                    <div class="projects_box"  v-scroll-reveal-fade-up="{delay:'1000'}">
                        <div class="projects_box_holder flex items-center justify-center">
                            <img  src="/assets/img/p5.png" width="1308" height="1208" alt="" />
                            <div class="projects_box_holder_proj_count">
                                Projects Five
                            </div>
                        </div>
                        <Link href="project-details/1">
                            <div class="projects_box_link flex items-center justify-center text-white">
                                Read More
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>