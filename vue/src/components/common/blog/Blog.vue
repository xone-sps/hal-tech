<template>
  <div>
    <div class="section">
      <div class="container">
        <div class="has-text-centered">
          <p class="highlight-text">Learn more from our community.</p>
          <p class="sub-text">Find out our latest community activities and key knowledge.</p>
        </div>
        <div class="columns is-multiline is-mobile is-tablet">
          <div class="column is-4-desktop is-6-tablet is-12-mobile">
            <a>
              <div class="image is-2by1">
                <img src="../../../assets/blog1.png" alt="blog1">
              </div>
              <p class="blog-title">Understanding Database Sharding in trendy model</p>
            </a>
            <p class="author">By Mekong Digital Works</p>
          </div>
          <div class="column is-4-desktop is-6-tablet is-12-mobile">
            <a>
              <div class="image is-2by1">
                <img src="../../../assets/blog2.png" alt="blog1">
              </div>
              <p
                class="blog-title"
              >How To Build a Neural Network to Recognize Handwritten Digits with TensorFlow</p>
            </a>
            <p class="author">By Mekong Digital Works</p>
          </div>
          <div class="column is-4-desktop is-6-tablet is-12-mobile">
            <a>
              <div class="image is-2by1">
                <img src="../../../assets/blog3.png" alt="blog1">
              </div>
              <p
                class="blog-title"
              >How To Build a Neural Network to Recognize Handwritten Digits with TensorFlow</p>
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
export default {
  components: {
    event
  }
};
</script>