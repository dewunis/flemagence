import "./bootstrap";

import { createApp } from "vue";

import Menu from "@/components/Menu.vue";

const app = createApp({});

app.component('VMenu', Menu);
app.mount("#app");
