import "./bootstrap";

import { createApp } from "vue";

import Menu from "@/components/Menu.vue";
import Burger from "@/components/ui/Button/Burger.vue";

const app = createApp({});

app.component("VMenu", Menu);
app.component("VBurger", Burger);

app.mount("#app");
