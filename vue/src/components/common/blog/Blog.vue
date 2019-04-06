<template>
  <div>
    <div class="section">
      <div class="container">
        <div class="has-text-centered">
          <p class="highlight-text">Learn more from our community.</p>
          <p class="sub-text">Find out our latest community activities and key knowledge.</p>
        </div>
        <div class="columns is-multiline is-mobile is-tablet">

          <div v-for="(data, index) in blog" :key="index" class="column is-4-desktop is-6-tablet is-12-mobile">
            <a @click="read(data.id)">
              <div class="image is-2by1">
                <img :src="'https://mekong.digital/images/blog/' + data.image" alt="blog image">
              </div>
              <p class="blog-title">{{ data.title }}</p>
            </a>
            <p class="author">By Mekong Digital Works</p>
          </div>
          
          
        </div>
      </div>
    </div>
    <!-- event Section -->
    <event/>
    <!-- end event Section -->
  </div>
</template>

<script>
import event from "./Event";
import axios from "axios";
export default {

  components: {
    event
  },
  data(){
    return{
      blog:[]
    }
  },
  methods: {
    getBlog(){
      axios.get('https://mekong.digital/api/getBlog', {
        headers: {
              "Content-Type": "application/json",
              "X-Requested-With": "XMLHttpRequest"
            }
      }).then(res =>{
        
        this.blog = res.data.data
        console.log(this.blog)
        
      })
    },
    read(id){
      this.$router.push({name: "Read", params:{id: id}})
    }
  },
  created() {
    this.getBlog();
  },
};
</script>

<style scoped>
@font-face {
  font-family: "noto-medium";
  src: url(https://mekong.digital/fonts/NotoSansLaoUI-Medium.ttf) format("truetype");
}
.section {
  font-family: "Open Sans", sans-serif, "noto-medium";
}
.blog-title{
  font-size: 20px;
}
</style>
