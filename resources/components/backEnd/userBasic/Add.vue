<template>
  <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="my-2">
              <label class="form-label">Select User</label>
              <select
                class="form-select form-select-sm shadow-none text-center"
                v-model.number="form.userId"
              >
                <option v-for="(user, i) in users" :key="i" :value="user.id">
                  {{ user.name }}
                </option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="my-2">
              <label class="form-label">Mobile Number</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text"
                  ><i class="fa-duotone fa-mobile"></i
                ></span>
                <input
                  type="number"
                  class="form-control shadow-none"
                  v-model.number="form.phone"
                  @keypress.space.prevent
                />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="my-2">
              <label class="form-label">Full Name</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text"
                  ><i class="fa-duotone fa-pen-fancy"></i
                ></span>
                <input
                  type="text"
                  class="form-control shadow-none text-capitalize"
                  placeholder="Full Name"
                  v-model="form.fullName"
                  @input="
                    form.fullName =
                      $event.target.value.charAt(0).toUpperCase() +
                      $event.target.value.slice(1)
                  "
                />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="my-2">
              <label class="form-label">Date of Birth</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text"
                  ><i class="fa-duotone fa-cake-candles"></i
                ></span>
                <input
                  type="date"
                  class="form-control shadow-none"
                  placeholder="Date of Birth"
                  v-model="form.dob"
                />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-2">
              <label class="form-label">Select Country</label>
              <select
                class="form-select form-select-sm shadow-none text-center"
                v-model.number="form.country"
              >
                <option
                  v-for="(country, i) in countries"
                  :key="i"
                  :value="country.value"
                >
                  {{ country.text }}
                </option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-md-12"
            :class="form.medias.length > 0 ? 'border' : ''"
          >
            <div class="my-2">
              <label class="form-label">Medias</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text"
                  ><i class="fa-duotone fa-photo-film"></i
                ></span>
                <input
                  type="text"
                  class="form-control shadow-none mediaName"
                  placeholder="Media Name"
                  v-model="mediaName"
                  @keypress.enter="addMedia"
                  @keypress.space.prevent
                />
                <input
                  type="text"
                  class="form-control shadow-none mediaLink"
                  placeholder="Media Link"
                  v-model="mediaLink"
                  @keypress.enter="addMedia"
                  @keypress.space.prevent
                />
                <span
                  class="input-group-text bg-primary"
                  role="button"
                  @click.prevent="addMedia"
                  ><i class="fa-duotone fa-plus"></i
                ></span>
              </div>
            </div>
            <div class="my-2" v-if="form.medias.length > 0">
              <div class="row">
                <div
                  class="col-md-6"
                  v-for="(media, i) in form.medias"
                  :key="media"
                >
                  <div class="input-group input-group-sm">
                    <span class="input-group-text">{{ media.name }}</span>
                    <span class="input-group-text">{{ media.link }}</span>
                    <span
                      class="input-group-text bg-info"
                      role="button"
                      @click.prevent="deleteMedia(i)"
                      ><i class="fa-duotone fa-xmark"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="my-2">
              <label class="form-label">Profile Photo</label>
              <div class="input-group input-group-sm">
                <div class="position-relative">
                  <input
                    class="form-control form-control-sm shadow-none"
                    type="file"
                    accept="image/webp"
                    @change="form.profileImg = $event.target.files[0]"
                    ref="profileImg"
                  />
                  <button
                    class="
                      btn btn-sm btn-close
                      shadow-none
                      position-absolute
                      translate-middle
                      top-50
                      bg-transparent
                    "
                    v-if="form.profileImg"
                    @click.prevent="close"
                  ></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="my-2">
              <label class="form-label">Status</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text me-4">
                  <i class="fa-duotone fa-object-subtract"></i>
                </span>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input shadow-none"
                    type="checkbox"
                    role="switch"
                    placeholder="Status"
                    v-model.number="form.status"
                  />
                  <label
                    class="form-check-label fw-bolder"
                    :class="form.status !== true ? 'text-danger' : ''"
                    >{{ form.status === true ? "Active" : "Inactive" }}</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="card-footer"
    v-if="
      form.userId &&
      form.phone === Number(form.phone) &&
      form.fullName &&
      form.dob &&
      form.country &&
      form.medias.length > 0 &&
      form.country &&
      form.status === Boolean(form.status)
    "
  >
    <div class="row justify-content-between justify-items-center">
      <button
        class="btn btn-sm shadow-none btn-primary col-md-2 col-md-md-1"
        @click.prevent="submit"
      >
        Submit
      </button>
      <button
        class="btn btn-sm shadow-none btn-secondary col-md-2 col-md-md-1"
        @click.prevent="reset"
      >
        Reset
      </button>
    </div>
  </div>
</template>
<script>
import countries from "../../../json/data";
export default {
  data() {
    return {
      countries: countries.countries,
      mediaName: null,
      mediaLink: null,
      form: new Form({
        userId: 1,
        phone: null,
        fullName: null,
        dob: null,
        country: null,
        medias: [],
        profileImg: null,
        status: Boolean(1),
      }),
    };
  },
  methods: {
    addMedia() {
      if (
        this.mediaName !== null &&
        this.mediaName !== "" &&
        this.mediaLink !== null &&
        this.mediaLink !== ""
      ) {
        this.form.medias.push({ name: this.mediaName, link: this.mediaLink });
        this.mediaName = null;
        this.mediaLink = null;
      }
    },
    deleteMedia(i) {
      this.form.medias.splice(i, 1);
    },
    submit() {
      this.form.post("api/create-user-basic").then(() => {
        this.reset();
      });
    },
    close() {
      this.form.profileImg = null;
      this.$refs.profileImg.value = null;
    },
    reset() {
      this.form.userId = 1;
      this.form.phone = null;
      this.form.fullName = null;
      this.form.dob = null;
      this.form.country = null;
      this.form.status = Boolean(1);
      this.form.medias = [];
      this.close();
    },
  },
  computed: {
    users() {
      return this.$store.getters.createUserBasic;
    },
  },
  mounted() {
    this.$store.dispatch("createUserBasic");
  },
};
</script>

<style scoped>
.mediaLink {
  width: 60% !important;
}
input[type="number"] {
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.btn-close {
  right: -1.4rem;
}
</style>
