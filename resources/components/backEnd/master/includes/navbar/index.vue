<template>
  <nav
    class="
      main-header
      navbar navbar-expand navbar-white navbar-light
      justify-content-between
    "
  >
    <ul class="navbar-nav">
      <li class="nav-item">
        <button class="nav-link btn btn-sm" data-widget="pushmenu">
          <i class="fas fa-bars"></i>
        </button>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <router-link
          :to="{ name: 'home' }"
          class="nav-link"
          :class="$route.name === 'home' ? 'active' : ''"
          >Home</router-link
        >
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
</template>
