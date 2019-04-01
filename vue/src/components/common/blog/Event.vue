<template>
  
    <section class="hero is-gray">
      <div class="section">
      <div class="hero-body">
        <div class="container">
          <div class="has-text-centered">
            <p class="highlight-text">Sharing knowledge and helping community is our priority.</p>
            <p
              class="sub-text"
            >We often hold a learning workshop and seminar or activities for those who want to learn and exchange views.</p>
          </div>
          <div class="columns is-multiline is-mobile is-tablet">
            <div
              v-for="(data, index) in blog"
              :key="index"
              class="column is-4-desktop is-6-tablet is-12-mobile"
            >
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
      </div>
    </section>
  
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      blog: []
    };
  },
  methods: {
    getBlog() {
      axios
        .get("https://mekong.digital/api/getBlog", {
          headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest"
          }
        })
        .then(res => {
          this.blog = res.data.event;
        });
    },
    read(id) {
      this.$router.push({ name: "Read", params: { id: id } });
    }
  },
  created() {
    this.getBlog();
  }
};
</script>
<style scoped>
@font-face {
  font-family: "noto-medium";
  src: url(../../../../css/fonts/NotoSansLaoUI-Medium.ttf) format("truetype");
}
.section {
  font-family: "Open Sans", sans-serif, "noto-medium";
}
.blog-title {
  font-size: 20px;
}
.sub-text {
  margin-bottom: 40px;
}
.blog-title {
  font-size: 18px;
  color: #010e28;
  margin-top: 10px;
}
.author {
  font-size: 12px;
  opacity: 0.8;
  margin-top: 5px;
}
</style>