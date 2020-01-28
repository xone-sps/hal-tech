<template>
  <div class="section">
    <div class="container">
      <div class="has-text-centered">
        <p
          class="highlight-text"
        >Reliable, Fast, latest technologies and reasonable price are factors that most busineses trust us.</p>
        <p class="sub-text">Find out more who our customers are and what they say about us.</p>
      </div>
      <carousel
        :perPage="1"
        :navigationEnabled="true"
        :mouseDrag="true"
        :paginationColor="'#031b4e'"
        :paginationActiveColor="'#0069ff'"
      >
        <slide v-for="(info, index) in data" :key="index">
          <div class="columns is-mobile company-area is-multiline is-desktop is-tablet">
            <div class="column is-12-mobile">
              <div class="has-text-centered">
                <img class="company-image" :src="info.image" alt="Company image">
              </div>
            </div>
            <div class="column is-12-mobile">
              <p class="company-title">{{ info.name }}</p>
              <div class="company-description">
                <p class="company-text">{{ info.description }}</p>
                <a :href="info.link" target="_blank" class="button is-link is-outlined is-seemore">See more</a>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
  </div>
</template>
<script>
import img1 from "../../../assets/logo.svg";
import img2 from "../../../assets/jaol.png";
import img5 from "../../../assets/jobjibjib.jpg";
import img6 from "../../../assets/108service.jpg";
import img7 from "../../../assets/laoffer.jpg";
import { Carousel, Slide } from "vue-carousel";
export default {
  data() {
    return {
      data: [
        {
          image: img1,
          name: "108-1009 Group.,ltd",
          description:
            "108-1009 Group is a recruiting and Media Company based in Vientiane Capital, Laos.",
          link: "https://108.jobs/"
        },
        {
          image: img2,
          name: "Japan Alumni Of Laos",
          description: "Japan Alumni Of Laos (JAOL) is an alumni association based in Vientiane Capital, Laos. The association helps promote Laos and Japan relations as well as the socio-economic promotion.",
          link: "http://jaol.org"
        },
        {
          image: 'https://hal-logistics.la/logo.png',
          name: "Hal Logistics",
          description:
          "Hal Logistics is a transportation Company in Laos.",
          link: "http://hal-logistics.la/"
        },
        {
          image: 'https://hubbo.la/assets/images/logo.png?vb798c43b4cf7cca02febff7cf3e4eb0e',
          name: "Hubbo",
          description:
            "Hubbo is an online platform to communicate between organize, group and volunteer.",
          link: "http://www.hubbo.la/"
        },
        {
          image: img5,
          name: "Jobjibjib",
          description:
            "Jobjibjib is an online job recruiting platform where people can find and apply for a job mostly part-time jobs.",
          link: "http://www.jobjibjib.la/"
        },
        {
          image: img6,
          name: "108 Service",
          description:
            "108 Service is an online platform where technicians and general people meet. People can find technicians in this platform very easily.",
          link: "http://108service.la/"
        },
        {
          image: img7,
          name: "Laoffer",
          description:
            "Laoffer is an online marketplace based in Vientiane Capital, Laos. It is the place where people can buy and sell Lao Products.",
          link: "https://laoffer.la/"
        },
        {
          image: 'http://134.209.111.10/assets/images/AEON_Logo_512x512_jpg7e6a2afe551e067a75fafacf47a6d981a523bc8516f2fce34cbcb07b350dd166_site_info_.jpg?v5cf8bb1c8d65a0efe8fbde8acb357de8',
          name: "Aeon Lao",
          description:
            "Aeon ແມ່ນບໍລິສັດເຊົ່າສິນເຊື່ອໃນປະເທດລາວ",
          link: "http://www.aeonlao.com.la/"
        }
      ]
    };
  },
  components: {
    Carousel,
    Slide
  }
};
</script>
<style>
.company-area {
  margin-top: 80px;
}
.company-title {
  font-size: 18px;
  color: #010e28;
  font-weight: bold;
  text-align: center;
}
.company-description {
  margin-top: 25px;
  font-size: 15px;
}
.company-text {
  font-size: 15px;
}
.is-seemore {
  margin-top: 15px;
}
.company-image {
    max-width: 320px;
    max-height: 200px;
    border: 1px solid #1d2833;
    width: auto;
    height: auto;
    padding: 40px;
    border-radius: 4px;
}
</style>