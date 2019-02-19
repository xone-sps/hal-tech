<template>
  <div>
    <section class="hero is-gray">
      <div class="hero-body">
        <div class="container">
          <div class="has-text-centered">
            <p class="highlight-text">Want to know more? Contact us now!</p>
            <p class="sub-text">
              We provide a
              <strong>Free</strong> consultancy to your business in terms of innovation and software development. Just fill out the form below to make an appointment with us and let's see what we can help you!
            </p>
          </div>

          <div class="form-represent-form-container">
            <!--Elements-->
            <div class="form-represent-form-elements-container">
              <div>
                <div class="form-represent-form-elements-container-inner">
                  <!--Form input-->
                  <div class="form-represent-form-input">
                    <div class="form-represent-form-input-inner">
                      <!--Input element -->
                      <content>
                        <section class="section-input">
                          <div class="section-input-container-inner">
                            <!--Start input-->
                            <content>
                              <!-- <p
                                v-if="nameValidate==false && name==''"
                                class="help is-danger is-alert"
                              >The name cannot be empty!</p>-->
                              <Input
                                v-model="name"
                                :inputType="'text'"
                                :labelText="'Name'"
                                :validate="{text: nameValidate}"
                              />

                              <div class="general-input-spacing"></div>
                              <!-- <p
                                v-if="statusEmail==false && email==''"
                                class="help is-danger is-alert"
                              >The email cannot be empty!</p>
                              <p
                                v-if="emailValidate==true"
                                class="help is-danger is-alert"
                              >The email you type is not an email. Please include @.</p>-->
                              <Input
                                v-model="email"
                                :inputType="'email'"
                                :labelText="'Email'"
                                :validate="{text: emailValidate}"
                                :showPasswordButton="true"
                                :autoComplete="'current-password'"
                              />
                              <textarea class="textarea" v-model="message" placeholder="Message"></textarea>
                              <p
                                v-if="statusMessage==false && message==''"
                                class="help is-danger is-alert"
                              >The message cannot be empty!</p>
                            </content>
                            <!--End input-->
                          </div>
                        </section>
                      </content>
                      <!--Input element -->
                      <!--Action-->
                      <button
                        @click="sendContact"
                        class="button is-info is-fullwidth is-large contact-button"
                      >Submit</button>

                      <!--Action-->
                    </div>
                  </div>
                  <!--Form input-->
                </div>
              </div>
            </div>
            <!--Elements-->
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "login",
  data() {
    return {
      name: "",
      email: "",
      message: "",
      nameValidate: "",
      statusEmail: true,
      inputClass: "is-primary",
      statusMessage: true,
      success: false,
      emailValidate: ""
    };
  },
  watch: {
    name: function(e) {
      if (this.success === false) {
        if (e === "") {
          this.nameValidate = "The name cannot be empty!";
        } else {
          this.nameValidate = "";
        }
      }
    },
    email: function(e) {
      if (this.success === false) {
        if (e === "") {
          this.emailValidate = "The email cannot be empty!";
        } else if (!this.isEmail(e)) {
          this.emailValidate =
            "The email you type is not an email. Please include @.";
        } else {
          this.emailValidate = "";
        }
      }
    },
    message: function(e) {
      if (this.success == false) {
        if (e == "") {
          this.statusMessage = false;
        }
      }
      if (this.success) {
        this.success = false;
      }
    }
  },
  methods: {
    clearFormInfo() {
      this.name = "";
      this.email = "";
      this.message = "";
    },
    sendContact() {
      if (
        this.name !== "" &&
        (this.email !== "" && this.emailValidate === "") &&
        this.message !== ""
      ) {
        let formData = new FormData();
        formData.append("name", this.name);
        formData.append("email", this.email);
        formData.append("message", this.message);
        axios
          .post("http://localhost:8000/api/postContact", formData, {
            headers: {
              "Content-Type": "application/json",
              "X-Requested-With": "XMLHttpRequest"
            }
          })
          .then(res => {
            this.$swal({
              position: "top-center",
              type: "success",
              title: "Your message has been sent. Thank you!",
              showConfirmButton: false,
              timer: 3000
            });
            this.success = true;
            this.clearFormInfo();
          });
      } else if (this.name === "") {
        this.$swal({
          position: "top-center",
          type: "error",
          title: "The name cannot be empty.",
          showConfirmButton: true
        });
        this.nameValidate = "The name cannot be empty.";
      } else if (this.email === "") {
        this.$swal({
          position: "top-center",
          type: "error",
          title: "The email cannot be empty.",
          showConfirmButton: true
        });
        this.emailValidate = "The email cannot be empty.";
      } else if (this.message == "") {
        this.$swal({
          position: "top-center",
          type: "error",
          title: "The message cannot be empty.",
          showConfirmButton: true
        });
        this.statusMessage = false;
      }
    },
    isEmail(email) {
      var e = String(email).toLowerCase();
      var rgx_space = /\s/g;
      if (rgx_space.test(e)) {
        return false;
      }
      var rgx_email = /^[a-z0-9]+(?:\.[a-z0-9]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/;
      return rgx_email.test(e);
    }
  }
};
</script>
<style>
.form-represent-form-input-inner {
  background: white;
  border-radius: 8px;
}
.contact-button {
  margin-bottom: 2rem;
}
</style>
