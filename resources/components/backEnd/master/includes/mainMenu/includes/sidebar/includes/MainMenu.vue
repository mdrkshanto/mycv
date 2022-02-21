<template>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column">
      <li class="nav-item">
        <router-link :to="{ name: 'home' }" class="nav-link">
          <i class="fa-duotone fa-igloo"></i>
          <p class="ms-2">Dashboard</p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link
          :to="{ name: 'home' }"
          class="nav-link"
          :class="
            $route.name === 'home' || $route.name === 'addHome'
              ? 'active bg-secondary'
              : ''
          "
        >
          <i class="fa-duotone fa-igloo"></i>
          <p class="ms-2">Home</p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link
          :to="{ name: 'users' }"
          class="nav-link"
          :class="
            $route.name === 'users' || $route.name === 'addUser'
              ? 'active bg-secondary'
              : ''
          "
        >
          <i class="fa-duotone fa-users"></i>
          <p class="ms-2">Users</p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link
          :to="{ name: 'userBasic' }"
          class="nav-link"
          :class="
            $route.name === 'userBasic' || $route.name === 'addUserBasic' || $route.name === 'editUserBasic'
              ? 'active bg-secondary'
              : ''
          "
        >
          <i class="fa-duotone fa-users"></i>
          <p class="ms-2">User Basic</p>
        </router-link>
      </li>
    </ul>
  </nav>
</template>


