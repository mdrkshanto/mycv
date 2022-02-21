<template>
  <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-5">
        <div class="my-3">
          <label class="form-label">Username</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text"
              ><i class="fa-duotone fa-signature"></i
            ></span>
            <input
              type="text"
              class="form-control shadow-none text-lowercase"
              placeholder="Username"
              v-model="form.name" @keypress.space.prevent @input="form.name = $event.target.value.toLowerCase()"
            />
          </div>
        </div>
        <div class="my-3">
          <label class="form-label">Email</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text"
              ><i class="fa-duotone fa-at"></i
            ></span>
            <input
              type="text"
              class="form-control shadow-none text-lowercase"
              placeholder="Email"
              v-model="form.email" @keypress.space.prevent @input="form.email = $event.target.value.toLowerCase()"
            />
          </div>
        </div>

        <div class="my-3">
          <label class="form-label">Password</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text"
              ><i class="fa-duotone fa-key-skeleton"></i
            ></span>
            <input
              :type="passwordType"
              class="form-control shadow-none"
              placeholder="Password"
              v-model="form.password"
            />
            <span
              class="input-group-text"
              role="button"
              @click.prevent="password"
              ><i
                class="fa-duotone"
                :class="
                  passwordType === 'password'
                    ? 'fa-eye-slash'
                    : 'fa-eye text-primary'
                "
              ></i
            ></span>
          </div>
        </div>
        <div class="my-3">
          <label class="form-label">Confirm Password</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text"
              ><i class="fa-duotone fa-key-skeleton-left-right"></i
            ></span>
            <input
              :type="cPasswordType"
              class="form-control shadow-none"
              placeholder="Confirm Password"
              v-model="form.password_confirmation"
            />
            <span
              class="input-group-text"
              role="button"
              @click.prevent="cPassword"
              ><i
                class="fa-duotone"
                :class="
                  cPasswordType === 'password'
                    ? 'fa-eye-slash'
                    : 'fa-eye text-primary'
                "
              ></i
            ></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="card-footer"
    v-if="
      form.name !== null &&
      form.name !== '' &&
      form.email !== null &&
      form.email !== '' &&
      form.password !== null &&
      form.password !== '' &&
      form.password_confirmation !== null &&
      form.password_confirmation !== ''
    "
  >
    <div class="row justify-content-between justify-items-center">
      <button
        class="btn btn-primary btn-sm shadow-none col-1"
        @click.prevent="submit"
      >
        Add new
      </button>
      <button
        class="btn btn-secondary btn-sm shadow-none col-1"
        @click.prevent="reset"
      >
        Reset
      </button>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      passwordType: "password",
      cPasswordType: "password",
      form: new Form({
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
      }),
    };
  },
  methods: {
    password() {
      if (this.passwordType !== "password") {
        this.passwordType = "password";
      } else {
        this.passwordType = "text";
      }
    },
    cPassword() {
      if (this.cPasswordType !== "password") {
        this.cPasswordType = "password";
      } else {
        this.cPasswordType = "text";
      }
    },
    submit() {
      this.form.post("/add-user").then(() => {
        this.form.name = null;
        this.form.email = null;
        this.form.password = null;
        this.form.password_confirmation = null;
      });
    },
    reset() {
      this.form.name = null;
      this.form.email = null;
      this.form.password = null;
      this.form.password_confirmation = null;
    },
  },
  mounted() {
    $(function () {
      $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
      });
    });
  },
};
</script>
