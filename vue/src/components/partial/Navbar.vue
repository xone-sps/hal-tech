<template>
  <div>
    <nav class="navbar is-nav-color" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a href="/">
          <div class="logo">
            <img src="../../assets/logo.png" alt />
          </div>
        </a>
        <a
          style="color: white;"
          @click="showSidebar"
          role="button"
          class="navbar-burger burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarBasicExample"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div class="navbar-menu">
        <div class="navbar-start menu">
          <div :class="['dropdown', isActive]">
            <div class="dropdown-trigger">
              <a
                @click="showDropdown"
                aria-haspopup="true"
                aria-controls="dropdown-menu2"
                class="navbar-item nav-item-menu"
              >
                Our Services
                <i class="sidebar-icon-md material-icons">expand_more</i>
              </a>
            </div>
            <div class="dropdown-menu" id="dropdown-menu2" role="menu">
              <div class="dropdown-content">
                <div class="dropdown-section">
                  <a href="/web">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                          <i class="material-icons hal">web</i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Web Development</span>
                          <p class="service-sub-title">All kind of Web Development</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="dropdown-section">
                  <a href="/mobileapp">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                          <i class="material-icons hal">mobile_screen_share</i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Mobile Application</span>
                          <p class="service-sub-title">Android & iOS App Development</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="dropdown-section">
                  <a href="/windows">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                          <i class="material-icons hal">computer</i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Computer Software</span>
                          <p class="service-sub-title">Comprehensive Computer Software</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="dropdown-section">
                  <a href="/maintenance">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                    <i class="material-icons hal">verified_user</i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Software Maintenance</span>
                          <p class="service-sub-title">We care yours as ours.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-section">
                  <a href="/graphic">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                                      <i class="material-icons hal">collections</i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Graphic Design</span>
                          <p class="service-sub-title">Creative and modern Design.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="dropdown-section">
                  <a href="/consult">
                    <div class="dropdown-item">
                      <div class="columns">
                        <div class="column is-3 has-text-centered">
                     <i class="material-icons hal">
                      comment
                      </i>
                        </div>
                        <div class="column is-9">
                          <span class="service-item">Consultancy</span>
                          <p class="service-sub-title">Innovation & Technology Consultancy</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <a href="/portfolio" class="navbar-item nav-item-menu">Portfolio</a>

          <a href="/customer" class="navbar-item nav-item-menu">Our Customers</a>

          <a href="/community" class="navbar-item nav-item-menu">Community</a>
        </div>

        <div class="navbar-end menu">
          <div class="navbar-item contact">
            <a class="navbar-item contact-info" href="mailto:phoud63@gmail.com">
              <i class="fa fa-envelope icon" style="margin-right: 8px;"></i> phoud63@gmail.com
            </a>
            <a class="navbar-item contact-info" href="tel:+8562099392245">
              <i class="fa fa-phone-square" style="margin-right: 8px;"></i> +8562099392245
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
import { mapState, mapMutations } from "vuex";
export default {
  data() {
    return {
      isActive: "",
      dropdown: false,
      props: ["status"]
    };
  },
  computed: {
    ...mapState(["isSidebar"])
  },
  watch: {
    isSidebar: function(n, o) {
      this.isActive = n === "left-side" ? "" : "is-active";
    }
  },
  methods: {
    ...mapMutations(["setSidebar"]),
    showSidebar() {
      this.isActive = this.isActive === "is-active" ? "" : "is-active";
      this.setSidebar({ isSidebar: this.isActive });
    },
    showDropdown(e) {
      e.stopPropagation();
      this.isActive = this.isActive === "is-active" ? "" : "is-active";
    },
    outSideClick() {
      this.isActive = "";
    }
  },
  mounted() {
    document.addEventListener("click", this.outSideClick);
  },
  beforeDestroy() {
    if (document.removeEventListener) {
      document.removeEventListener("click", this.outSideClick);
    }
  }
};
</script>

<style scoped>
.logo {
  max-height: 200px;
  max-width: 200px;
  width: 96px;
}
.material-icons.hal{
  font-size: 40px;
  color: #1d2833;
}
@media (max-width: 720px) {
  .logo {
    width: 74px;
  }
}
</style>