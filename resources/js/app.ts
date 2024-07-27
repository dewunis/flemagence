import "./bootstrap";

import { createApp } from "vue";

import Menu from "@/components/Menu.vue";
import TextArrow from "@/components/TextArrow.vue";
import Burger from "@/components/ui/Button/Burger.vue";
import ArrowLeft from "@/components/ui/icon/ArrowLeft.vue";
import LatestWorkCarousel from "@/components/LatestWorkCarousel.vue";

const app = createApp({});

app.component("VMenu", Menu);
app.component("VTextArrow", TextArrow);
app.component("VBurger", Burger);
app.component("VArrowLeft", ArrowLeft);
app.component("vLatestWorkCarousel",LatestWorkCarousel)

app.mount("#app");
