import "../css/app.css";
import axios from "axios";
import { createApp } from "vue";
import AppLayout from "./layouts/AppLayout.vue";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.AppLayoutVue = {
    AppLayout,
};

const mountTarget = document.querySelector("[data-applayoutvue-layout]");

if (mountTarget) {
    createApp(AppLayout, {
        title: mountTarget.dataset.title || "App Layout Vue",
        subtitle: mountTarget.dataset.subtitle || "",
    }).mount(mountTarget);
}
