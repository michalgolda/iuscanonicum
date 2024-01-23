import Swiper from "swiper";
import { Autoplay, Pagination } from "swiper/modules";

const swiper = new Swiper(".swiper", {
  modules: [Pagination, Autoplay],
  direction: "horizontal",
  loop: true,
  autoplay: {
    delay: 3500,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
