<template>
  <div>
    <section class="hero is-gray">
      <div class="hero-body">
        <div class="container">
          <div class="has-text-centered">
            <p class="related">Related posts</p>
          </div>
          <div class="columns is-multiline is-mobile is-tablet">
            <div v-for="(data, index) in blog" :key="index" class="column is-4-desktop is-6-tablet is-12-mobile">
              <a @click="read(data.id)">
                <div class="image is-2by1">
                  <img :src="'http://localhost:8000/images/blog/' + data.image" alt="blog image">
                </div>
                <p class="blog-title">{{ data.title }}</p>
              </a>
              <p class="author">By Mekong Digital Works</p>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
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
        .get("http://localhost:8000/api/getBlog", {
          headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest"
          }
        })
        .then(res => {
          this.blog = res.data.related;
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
          
          