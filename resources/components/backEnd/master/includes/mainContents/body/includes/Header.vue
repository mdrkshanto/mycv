<template>
  <div class="card-header">
    <div class="row align-items-center">
      <h3 class="card-title col fw-bolder">{{ $route.meta.cardTitle }}</h3>
      <router-link
        :to="{ name: $route.meta.buttonLink }"
        class="btn btn-sm btn-primary col-1"
        data-bs-toggle="tooltip"
        :title="$route.meta.buttonTitle"
        v-html="$route.meta.buttonIcon"
      />
    </div>
  </div>
</template>
