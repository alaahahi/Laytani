<script setup>
import { ref, onUnmounted } from "vue";
import { useI18n } from "vue-i18n";
import { Link } from "@inertiajs/inertia-vue3";

import axios from "axios";
import { onMounted, onBeforeUnmount } from "vue";

const navActive = ref(false);

const openNav = () => {
  navActive.value = true;
};

const closeNav = () => {
  navActive.value = false;
};
const loading = ref(true);

onMounted(() => {
  loading.value = true;
  setTimeout(() => {
    // Code to be executed after the timeout
    loading.value = false;
  }, 1000);
});
const i18n = useI18n();
let language = ref(i18n.locale.value);

const switchLocale = async (locale) => {
  loading.value = true;

  try {
    localStorage.setItem("lang", locale);
    const response = await axios.get(`/lang/${locale}`);
    language.value = locale;
    i18n.locale.value = locale;
    window.location.reload();
  } catch (error) {
    console.error("An error occurred:", error);
  }
};
</script>

<template>
  <div class="relative">
    <div class="navbat_top">
      <div class="container_fluid">
        <div class="navbat_top_wrapper flex items-center justify-between">
          <div
            class="navbat_top_right navbar_right flex items-center justify-between"
          >
            <div class="navbat_top_right_box1 flex items-center">
              <a
                href="tel:+971 567895215"
                target="_blank"
                data-aos="fade-down"
                data-aos-delay="00"
              >
                <div class="navbat_top_right_box1_link flex items-center gap-2">
                  <div class="navbat_top_right_box1_link_icone_holder">
                    <img
                      src="/assets/img/callred.svg"
                      width="22"
                      height="22"
                      alt=""
                    />
                  </div>
                  <div class="navbat_top_right_box1_link_text">
                    +971 567895215
                  </div>
                </div>
              </a>
              <a
                href="mailto:info@alaytani.com"
                target="_blank"
                data-aos="fade-down"
                data-aos-delay="100"
              >
                <div class="navbat_top_right_box1_link flex items-center gap-2">
                  <div class="navbat_top_right_box1_link_icone_holder">
                    <img
                      src="/assets/img/mailred.svg"
                      width="22"
                      height="16"
                      alt=""
                    />
                  </div>
                  <div class="navbat_top_right_box1_link_text">
                    info@alaytani.com
                  </div>
                </div>
              </a>
            </div>
            <div class="navbat_top_right_box2 flex items-center">
              <ul
                class="social_media flex items-center"
                data-aos="fade-down"
                data-aos-delay="200"
              >
                <li class="social_media_item">
                  <a href="#">
                    <div class="social_media_link flex items-center">
                      <i
                        class="fa-brands fa-facebook-f social_media_link_icone"
                      ></i>
                    </div>
                  </a>
                </li>
                <li class="social_media_item">
                  <a href="#">
                    <div class="social_media_link flex items-center">
                      <i
                        class="fa-brands fa-twitter social_media_link_icone"
                      ></i>
                    </div>
                  </a>
                </li>
                <li class="social_media_item">
                  <a href="#">
                    <div class="social_media_link flex items-center">
                      <i
                        class="fa-brands fa-instagram social_media_link_icone"
                      ></i>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="navbat_top_right_box2_seprator"></div>
              <div
                class="flex theme_and_language_wrapper"
                data-aos="fade-down"
                data-aos-delay="400"
              >
                <div class="theme_toggle">
                  <div class="day_mode flex items-center">
                    <img
                      alt="night_mood"
                      src="/assets/img/dark.svg"
                      width="15"
                      height="15"
                      decoding="async"
                      data-nimg="1"
                      loading="lazy"
                      style="color: transparent"
                    />
                  </div>
                  <div class="night_mode flex items-center">
                    <img
                      alt="day_mood"
                      src="/assets/img/day_white.svg"
                      width="15"
                      height="15"
                      decoding="async"
                      data-nimg="1"
                      loading="lazy"
                      style="color: transparent"
                    />
                  </div>
                </div>
                <div class="language">
                  <div
                    class="lan__country active us flex items-center cursor-pointer"
                  >
                    <div class="flag flag1">
                      <div class="dark-none">
                        <img
                          alt="us flag"
                          src="/assets/img/en.svg"
                          width="15"
                          height="15"
                          decoding="async"
                          data-nimg="1"
                          class="dark-none"
                          loading="lazy"
                          style="color: transparent"
                        />
                      </div>
                      <div class="d-none dark-show">
                        <img
                          alt="us flag"
                          src="/assets/img/lang_white.svg"
                          width="15"
                          height="15"
                          decoding="async"
                          data-nimg="1"
                          class="d-none dark-show"
                          loading="lazy"
                          style="color: transparent"
                        />
                      </div>
                    </div>
                    <div class="flag flag2">
                      <div class="dark-none">
                        <img
                          alt="us flag"
                          src="/assets/img/en.svg"
                          width="15"
                          height="15"
                          decoding="async"
                          data-nimg="1"
                          class="dark-none"
                          loading="lazy"
                          style="color: transparent"
                        />
                      </div>
                      <div class="d-none dark-show">
                        <img
                          alt="us flag"
                          src="/assets/img/lang_white.svg"
                          width="15"
                          height="15"
                          decoding="async"
                          data-nimg="1"
                          class="d-none dark-show"
                          loading="lazy"
                          style="color: transparent"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <ThemeToggle />
                <LanguageToggle />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar">
      <div class="navbar_logo_box1">
        <div class="navbar_logo_box1_bg"></div>
        <a href="/">
          <div class="logo_img_holder flex items-center">
            <img src="/assets/img/logo.png" width="311" height="54" alt="" />
          </div>
        </a>
      </div>
      <div class="navbar_logo_box2 flex items-center">
        <div class="flex items-center navbar_list_outer">
          <ul class="navbar_list flex items-center">
            <li class="navbar_list_item active">
              <a href="/"><div class="navbar_list_link">HOME</div></a>
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/about"><div class="navbar_list_link">ABOUT US</div></a>
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/team"><div class="navbar_list_link">Team</div></a>
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/services"
                ><div class="navbar_list_link">SERVICES</div></a
              >
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/blog"><div class="navbar_list_link">BLOG</div></a>
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/projects"
                ><div class="navbar_list_link">PROJECTS</div></a
              >
              <div class="navbar_list_item_bg"></div>
            </li>
            <li class="navbar_list_item">
              <a href="/contact"
                ><div class="navbar_list_link">CONTACT US</div></a
              >
              <div class="navbar_list_item_bg"></div>
            </li>
          </ul>
          <div class="navbar_list_item2 flex items-center">
            <i class="fa fa-search navbar_list_item_icone"></i
            ><input
              type="text"
              placeholder="Search"
              class="navbar_list_item_icone_search"
            />
          </div>
          <button role="button" class="navlist_btn flex items-center">
            <div class="flex items-center">
              <img
                alt="nav btn"
                srcset="
                /assets/img/_next/image?url=%2FMenu.png&amp;w=32&amp;q=75 1x,
                /assets/img/_next/image?url=%2FMenu.png&amp;w=48&amp;q=75 2x
                "
                src="/assets/img/_next/image?url=%2FMenu.png&amp;w=48&amp;q=75"
                width="23"
                height="13"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>
          </button>
        </div>
      </div>
    </nav>
  </div>
</template>
