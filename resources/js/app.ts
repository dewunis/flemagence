import "./bootstrap";

import { createApp } from "vue";

// Ui Components
import Burger from "@/components/ui/Button/Burger.vue";
import Button from "@/components/ui/Button/Button.vue";
import ArrowLeft from "@/components/ui/icon/ArrowLeft.vue";

// Components
import Menu from "@/components/Menu.vue";
import TextArrow from "@/components/TextArrow.vue";
import LatestWorkCarousel from "@/components/LatestWorkCarousel.vue";
import Accordion from "@/components/Accordion.vue";

const app = createApp({});

app.component("VBurger", Burger);
app.component("VButton", Button);
app.component("VArrowLeft", ArrowLeft);

app.component("VAccordion", Accordion);
app.component("VTextArrow", TextArrow);
app.component("VMenu", Menu);
app.component("vLatestWorkCarousel",LatestWorkCarousel)

app.mount("#app");
