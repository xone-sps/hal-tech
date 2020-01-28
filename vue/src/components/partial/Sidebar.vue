<template>
  <div id="main-side-bar">
    <div
      id="ms-sidebar"
      class="sidebar is-hidden-desktop-only is-hidden-desktop"
      :class="isSidebar==='is-active' ? 'left-side open' : 'left-side'"
      :style="`top: calc(0px);`"
    >
      <section class="my-sidebar-drawer">
        <div class="my-sidebar-drawer-loginInfo">
          <div class="sidebar-container">
            <a href="/">
                   <img src="../../assets/logo.png" alt="">
            </a>
          </div>
        </div>
        <ul class="sidebar-drawer-box">
          <template>
            <p class="service-title">Our Services</p>
            <div class="columns is-multiline is-mobile is-tablet">
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('Web')">
                  <router-link :to="{name: 'Web' }" @click.native.prevent="maskClick()">
                    <i class="sidebar-icon-md material-icons icon-color">web</i>
                    <span>Web Development</span>
                  </router-link>
                </li>
              </div>
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('MobileApp')">
                  <router-link :to="{name:'MobileApp' }" @click.native.prevent="maskClick()">
                    <i
                      class="sidebar-icon-md material-icons icon-color"
                    >mobile_screen_share</i>
                    <span>Mobile Application</span>
                  </router-link>
                </li>
              </div>
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('Windows')">
                  <router-link :to="{name:'Windows' }" @click.native.prevent="maskClick()">
                    <i class="sidebar-icon-md material-icons">computer</i>
                    <span>Computer Software</span>
                  </router-link>
                </li>
              </div>
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('Graphic')">
                  <router-link :to="{name:'Graphic' }" @click.native.prevent="maskClick()">
                    <i class="sidebar-icon-md material-icons">photo</i>
                    <span>Graphic Design</span>
                  </router-link>
                </li>
              </div>
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('Maintenance')">
                  <router-link :to="{name:'Maintenance' }" @click.native.prevent="maskClick()">
                    <i class="sidebar-icon-md material-icons">verified_user</i>
                    <span>Software Maitenance</span>
                  </router-link>
                </li>
              </div>
              <div class="column is-12-mobile is-6-tablet">
                <li :class="isRoute('Consult')">
                  <router-link :to="{name:'Consult' }" @click.native.prevent="maskClick()">
                      <i class="sidebar-icon-md material-icons hal">
                      comment
                      </i>
                    <span>Consultancy</span>
                  </router-link>
                </li>
              </div>
            </div>
            <hr>
            <li :class="isRoute('Portfolio')">
              <router-link :to="{name:'Portfolio' }" @click.native.prevent="maskClick()">
                <i class="sidebar-icon-md material-icons">collections</i>
                <span>Our Portfolios</span>
              </router-link>
            </li>
            <li :class="isRoute('Customer')">
              <router-link :to="{name:'Customer' }" @click.native.prevent="maskClick()">
                <i class="sidebar-icon-md material-icons">business</i>
                <span>Our Customers</span>
              </router-link>
            </li>
          </template>
        </ul>
        <ul class="sidebar-drawer-box"></ul>
      </section>
    </div>
    <div
      class="sidebar-mask"
      @click="maskClick()"
      :class="isSidebar==='is-active' ? '' : 'left-side' "
    ></div>
  </div>
</template>
<script>
import { mapState, mapGetters, mapActions, mapMutations } from "vuex";

export default {
  data() {
    return {
      logoutClass: "fa-external-link-square-alt"
    };
  },
  computed: {
    ...mapState(["isSidebar"])
  },
  watch: {
    isSidebar: function(n, o) {
      if (n === "left-side") {
        this.removeClasses();
      } else {
        this.addClasses();
      }
    }
  },
  methods: {
    ...mapMutations(["setSidebar"]),
    removeClasses() {
      $("body").removeClass("hidden");
      $("html").removeClass("hidden");
    },
    addClasses() {
      $("html").addClass("hidden");
      $("body").addClass("hidden");
    },
    maskClick() {
      this.removeClasses();
      this.setSidebar({
        isSidebar: this.isSidebar === "is-active" ? "left-side" : ""
      });
    },
    isRoute(n) {
      return this.$route.name === n ? "is-active" : "";
    }
  }
};
</script>
<style scoped>
.service-title {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  color: #010e28;
  margin-bottom: 10px;
}
li a.icon-color {
  color: #1d2833;
}
li.is-active {
  background-color: #ececec !important;
}

.sidebar {
  position: fixed !important;
  top: 0;
  max-height: 100vh !important;
  height: 100vh;
  max-width: 80vw !important;
  background-color: #efefef;
  min-width: 45px !important;
  outline: none;
  overflow-x: hidden !important;
  overflow-y: auto !important;
  z-index: 10000;
  -webkit-overflow-scrolling: touch;
  will-change: transform;
  -webkit-transition: -webkit-transform 233ms cubic-bezier(0, 0, 0.21, 1);
  transition: -webkit-transform 233ms cubic-bezier(0, 0, 0.21, 1);
  transition: transform 233ms cubic-bezier(0, 0, 0.21, 1);
  transition: transform 233ms cubic-bezier(0, 0, 0.21, 1),
    -webkit-transform 233ms cubic-bezier(0, 0, 0.21, 1);
  display: inline-block;
}

.sidebar.left-side {
  left: 0 !important;
  -webkit-transform: translateX(-100%) !important;
  transform: translateX(-100%) !important;
}

.sidebar.open {
  -webkit-transform: translateX(0) !important;
  transform: translateX(0) !important;
}

.my-sidebar-drawer-loginInfo {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background-color: #1d2833;
  overflow: hidden;
  /* background-image: linear-gradient(to bottom right, #303fd9, #303fd9); */
  background-repeat: no-repeat;
  background-size: cover;
}

.my-sidebar-drawer {
  width: 100%;
  height: 100%;
  -overflow-scrolling: touch;
}

/** box */
.sidebar-drawer-box {
  width: 100%;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #555;
}

.sidebar-drawer-box li {
  position: relative;
  height: 48px;
  line-height: 48px;
  overflow: hidden;
  font-size: 14px;
}

.sidebar-drawer-box li a {
  display: block;
}

.sidebar-drawer-box li span {
  font-weight: 600;
  color: #3a3e4a;
}

.sidebar-drawer-box li .sidebar-icon-md {
  padding: 10px 16px 10px 16px;
  margin-right: 16px;
  float: left;
  font-size: 26px !important;
  color: #1d2833;
  min-width: 56px;
  max-width: 56px;
}

.sidebar-icon-md {
  position: relative;
  display: inline-block;
  font-size: 16px !important;
  line-height: 1;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale;
}

/** box */
.my-sidebar-drawer-loginInfo .sidebar-container {
  width: 96px;
  height: 96px;
  padding: 16px;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
}

.my-sidebar-drawer-loginInfo .sidebar-container img {
  display: block;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
}

.i-sidebar-content-layout-size-defined .i-sidebar-content-fill-content {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.i-sidebar-content-fill-content {
  display: block;
  height: 0;
  max-height: 100%;
  max-width: 100%;
  min-height: 100%;
  min-width: 100%;
  width: 0;
  margin: auto;
}

.i-sidebar-content-replaced-content,
.i-sidebar-content-screen-reader {
  padding: 0 !important;
  border: none !important;
}

.my-sidebar-drawer-loginInfo .drawer-unlogin {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  padding: 15px 16px 16px;
  white-space: nowrap;
  font-size: 15px;
  line-height: 1.2;
  color: #fff;
}

.my-sidebar-drawer-loginInfo .drawer-seeker {
  display: inline-block;
  padding: 0 6px 0 0;
  font-size: 15px;
  line-height: 1.2;
  border-right: solid 1px #fff;
  color: #fff;
}

.my-sidebar-drawer-loginInfo .drawer-employer {
  display: inline-block;
  padding-left: 2px;
  font-size: 15px;
  line-height: 1.2;
  color: #fff;
}

#ms-sidebar {
  background: #fff;
  width: 80%;
  height: 100%;
}

.sidebar-mask {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  width: 100vw !important;
  height: 100vh !important;
  opacity: 0.2;
  background-image: none !important;
  background-color: #000;
  z-index: 9999;
}

.sidebar-mask.left-side {
  display: none;
}

.ine-bottom {
  border-bottom: 1px solid #ffffff !important;
}

.line-bottom-blue {
  border-bottom: 1px solid #004fce !important;
}

.line-bottom-green {
  border-bottom: 1px solid #00d29d !important;
}

.sidebar-drawer-box + .sidebar-drawer-box {
  border-top: 1px solid #ebebec;
}

@media screen and (max-width: 366px) {
  .my-sidebar-drawer-loginInfo .drawer-seeker,
  .my-sidebar-drawer-loginInfo .drawer-employer {
    font-size: 14.2px;
  }
}
</style>
