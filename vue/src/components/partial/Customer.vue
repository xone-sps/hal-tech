<template>
  <div>
    <section class="hero is-gray">
      <div class="hero-body">
        <div class="container">
          <div class="has-text-centered m-b-50">
            <p class="customer-text">BUSINESSES THAT TRUST <span>HAL TECH</span></p>
          </div>
          <carousel
            :perPage="1"
            :navigationEnabled="false"
            :mouseDrag="true"
            :paginationColor="'#031b4e'"
            :paginationActiveColor="'#0069ff'"
          >
            <slide>
              <div class="columns is-multiline is-mobile is-desktop is-tablet">
                <div class="column is-6-mobile is-2-desktop is-6-tablet" v-for="(item,index) in items" :key="index">
                  <a target="_blank" :href="item.url">
                  <div class="customer-div">
                    <img class="customer-image" v-bind:src="item.image" alt>
                  </div>
                    </a>
                </div>
              </div>
            </slide>
          </carousel>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { Carousel, Slide } from "vue-carousel";
export default {
data(){
 return {
   items:[
         {
      id:'1',
      image:'https://hal-logistics.la/logo.png',
      url:'https://hal-logistics.la/'
    },
        {
      id:'2',
      image:'https://108.jobs/images/logo.svg',
      url:'https://108.jobs/',
    },
        {
      id:'3',
      image:'https://jaol.org/assets/images/73053e4109225ff2df2ff96323dc8bf11552127362_site_info_.png?vedb035654ec5de4d914c96e7f29af26f',
      url:'https://jaol.org/'
    },
    {
    id:'4',
    image:'https://laoffer.la/wp-content/uploads/2017/10/sssssssss.png',
    url:'https://laoffer.la/',
    },
    {
      id:'5',
      image:'http://134.209.111.10/assets/images/AEON_Logo_512x512_jpg7e6a2afe551e067a75fafacf47a6d981a523bc8516f2fce34cbcb07b350dd166_site_info_.jpg?v5cf8bb1c8d65a0efe8fbde8acb357de8',
      url:'http://www.aeonlao.com.la/'
    },
    {
      id:'6',
      image:'http://108service.la/assets-admin/img/eaffda21bcd1b6d82afdde2f80b3fa0e1511839543_icon_.jpg',
      url:'http://108service.la/'
    },
    {
      id:'7',
      image:'https://hubbo.la/assets/images/logo.png?vb798c43b4cf7cca02febff7cf3e4eb0e',
      url:'https://hubbo.la/'
    }
   ]

 }
},

  components: {
    Carousel,
    Slide
  }
};
</script>
<style scoped>
.customer-div{
  position: relative;
    width: 100%;
    padding-top: 100%;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(222, 222, 222);
    border-image: initial;
    border-radius: 0.6em;
    background-color: #fff;
}
.customer-div img{
      display: block;
    position: absolute;
    max-width: 70%;
    max-height: 70%;
    margin: auto;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
}
</style>