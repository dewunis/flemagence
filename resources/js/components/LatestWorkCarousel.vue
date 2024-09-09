<template>
    <div>
        <swiper-container :allow-touch-move="true" :slides-per-view="5" navigation="true" :space-between="spaceBetween"
            :breakpoints="{
                 1024: {
                slidesPerView: 4,
                },
                768: {
                slidesPerView: 4,
                },
                640: {
                slidesPerView: 3,
                },
                520: {
                slidesPerView: 2,
                },
                320: {
                slidesPerView: 1,
                }
            }" ref="latestWorkCarousel" init="false">

            <swiper-slide v-for="item in items">
                <latest-work-carousel-item :background-img-url="item.background_img_url" />
            </swiper-slide>
        </swiper-container>
    </div>
</template>

<script setup lang="ts">
import { register } from 'swiper/element/bundle';
import { ref, onMounted, computed } from 'vue';
import LatestWorkCarouselItem from '@/components/LatestWorkCarouselItem.vue';

import { useBreakpoints } from '@vueuse/core'

const breakpoints = useBreakpoints({
  mobile: 0, // optional
  tablet: 640,
  laptop: 1024,
  desktop: 1280,
})

defineProps<{
    items?: Array<{ [key: string]: string }>
}>()

register();

const latestWorkCarousel = ref<null | { initialize: () => void }>(null);

const spaceBetween = computed(() => {
    if(breakpoints.tablet.value >=  640) return 100;
    else return 10;
});

const handleInit = (swiper: any) => {
    const prevButton = swiper.el.querySelector('.swiper-button-prev') as HTMLElement;
    prevButton.style.opacity = '0';
    prevButton.style.pointerEvents = 'none';
}

const handleSlideChange = (swiper: any) => {
    const isLastSlide = swiper.isEnd;
    const isFirstSlide = swiper.activeIndex === 0;

    const prevButton = swiper.el.querySelector('.swiper-button-prev') as HTMLElement;
    const nextButton = swiper.el.querySelector('.swiper-button-next') as HTMLElement;

    if (isLastSlide) {
        nextButton.style.opacity = '0';
        nextButton.style.pointerEvents = 'none';
    } else {
        nextButton.style.opacity = '1';
        nextButton.style.pointerEvents = '';
    }

    if (isFirstSlide) {
        prevButton.style.opacity = '0';
        prevButton.style.pointerEvents = 'none';
    } else {
        prevButton.style.opacity = '1';
        prevButton.style.pointerEvents = '';
    }
}

const params = {
    navigation: true,

    centeredSlidesBounds: true,
    slidesOffsetBefore: 30,
    slidesOffsetAfter: 0,
    injectStyles: [
        `
    .swiper-button-next,
    .swiper-button-prev {
      width: 42px ;
      height: 42px ;
      background: #EAF765 ;
      border-radius: 50%;
      box-shadow: 0 0.5rem 1rem rgba(16, 28, 38, 0.05);
      color: #000000;
    }
    .swiper-button-next svg ,  .swiper-button-prev svg{
      width: 20%;
      fill: #000000;
    }
    `
    ],

    on: {
        init: handleInit,
        slideChange: handleSlideChange,
    }

}

onMounted(() => {
    if (latestWorkCarousel.value != null) {
        Object.assign(latestWorkCarousel.value, params);
        latestWorkCarousel.value.initialize();
    }

    console.log(spaceBetween.value)
});

</script>
