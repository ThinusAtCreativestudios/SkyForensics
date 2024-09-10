import '../css/app.css';
import './bootstrap';
import landing from "./marketing/landing/index.js";

document.addEventListener("DOMContentLoaded", () => {
    const currentRoute = window.app.route;
    switch (currentRoute) {
        case "landing":
        default:
            window.app.active = landing
    }
})
