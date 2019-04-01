<template>
  <div>
    <div class="section">
      <div class="container">
        <div class="columns is-multiline is-mobile is-desktop">
          <div class="column is-12-mobile is-8-desktop is-offset-2-desktop">
            <div class="image is-16by9 image-featured">
              <img :src="'http://localhost:8000/images/blog/' + data.image" alt="blog image">
            </div>
            <div class="title">
              <p
                class="blog-title"
              >{{ data.title }}</p>
            </div>
            <div class="columns is-multiline is-mobile is-desktop">
              <div class="column is-6-mobile">
                <p class="author">Author: Phoud Sisuphanh</p>
              </div>
              
            </div>
            <div class="text">
              <div v-html="data.body" class="text-area">
              
            </div>
            </div>
            
            <br>
            <div class="columns is-multiline is-mobile is-desktop">
              <div class="column is-6-mobile">
                <div class="sharing">
                  <p class="has-text-right">Sharing</p>
                </div>
                
                </div>
              <div class="column is-6-mobile has-text-left">
                
                <a class="fb">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </div>
            </div>
            <hr>
            <div class="author-area">
              <div class="columns is-multiline is-mobile is-desktop">
                <div class="column is-12-mobile is-3-desktop has-text-centered">
                  <div class="author-image">
                    <img class="image-profile" src="../../../assets/phoud.jpg" alt>
                  </div>
                </div>
                <div class="column is-12-mobile is-9-desktop has-text-left">
                  <div class="author-info">
                    <p class="written">Written by</p>
                  <p class="author-name">Phoud Sisuphanh</p>
                  <p class="position">Co-founder & Director of Mekong Digital Works</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Related/>
  </div>
</template>
<script>
import Related from "./Related";
import axios from 'axios'
export default {
  components: {
    Related
  },
  data() {
    return {
      data:{}
    }
  },
  methods: {
    getData(id){
      axios.get('http://localhost:8000/api/getData/'+ id,{
       headers: {
              "Content-Type": "application/json",
              "X-Requested-With": "XMLHttpRequest"
       }
            }).then(res=>{
                this.data = res.data.data
                if(!this.data){
                  location.href = '/'
                }
            })
    }
  },
  created(){
    this.getData(this.$route.params.id)
  }
};
</script>
<style>
@font-face {
  font-family: "noto-regular";
  src: url(../../../../css/fonts/NotoSansLaoUI-Light.ttf) format("truetype");
}

@font-face {
  font-family: "noto-medium";
  src: url(../../../../css/fonts/NotoSansLaoUI-Medium.ttf) format("truetype");
}
.section {
  font-family: "Open Sans", sans-serif, "noto-regular";
}
.image-featured {
  border: solid 2px #e5e5e5;
}
.text-area {
  margin-top: 20px;
}
.text {
  font-size: 20px;
  line-height: 1.58;
  letter-spacing: -0.004em;
  font-weight: normal;
  font-style: normal;
}
.title {
  margin-top: 20px;
}
.blog-title {
  font-family: "Open Sans", sans-serif, "noto-regular";
  font-size: 25px;
}
.author {
  font-size: 12px;
  opacity: 0.8;
  margin-top: 5px;
}
.fb {
  font-size: 30px;
  margin-right: 50px;
}
.author-image {
  width: 150px;
  height: 150px;
  /* margin-left: auto;
  margin-right: auto;
  width: 50%; */
}
.sharing{
  margin-top: 10px;
}
.image-profile {
  display: inline-block;
  vertical-align: middle;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.written {
  --x-height-multiplier: 0.342 !important;
  --baseline-multiplier: 0.22 !important;
  font-family: medium-content-sans-serif-font, "Lucida Grande",
    "Lucida Sans Unicode", "Lucida Sans", Geneva, Arial, sans-serif !important;
  letter-spacing: -0.02em !important;
  font-weight: 700 !important;
  font-style: normal !important;
  letter-spacing: 0 !important;
  font-size: 16px;
  color: rgba(0, 0, 0, 0.54);
  line-height: 20px;
  letter-spacing: 0.2em;
  text-transform: uppercase;
}
.author-name {
  margin-top: 10px;
  --x-height-multiplier: 0.342 !important;
  --baseline-multiplier: 0.22 !important;
  font-family: medium-content-sans-serif-font, "Lucida Grande",
    "Lucida Sans Unicode", "Lucida Sans", Geneva, Arial, sans-serif !important;
  letter-spacing: -0.02em !important;
  font-weight: 700 !important;
  font-style: normal !important;
  letter-spacing: 0 !important;
  font-size: 29px !important;
  line-height: 32px !important;
  -webkit-transform: translateY(-0.12px);
  transform: translateY(-0.12px);
  letter-spacing: -0.63px !important;
}
.position {
  margin-top: 10px;
  --x-height-multiplier: 0.342 !important;
  --baseline-multiplier: 0.22 !important;
  font-family: medium-content-sans-serif-font, "Lucida Grande",
    "Lucida Sans Unicode", "Lucida Sans", Geneva, Arial, sans-serif !important;
  letter-spacing: -0.02em !important;
  font-weight: 400 !important;
  font-style: normal !important;
  letter-spacing: 0 !important;
  font-size: 19px !important;
  line-height: 24px !important;
  -webkit-transform: translateY(-1.32px);
  transform: translateY(-1.32px);
  color: rgba(0, 0, 0, 0.54) !important;
  fill: rgba(0, 0, 0, 0.54) !important;
}
@media only screen and (max-width: 600px) {
  .author-image {
  max-width: 150px;;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.author-info{
  text-align: center;
  margin-top: 20px;
}

}
@media (min-width: 600px) and (max-width: 1024px) {
  
 .author-info{
  text-align: center;
  margin-top: 20px;
}
.author-image {
  max-width: 150px;;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  
}
@media (min-width: 768px) and (max-width: 1024px) {
  
.author-image {
  max-width: 150px;;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  
}
</style>

