<template>
    <div class="notification is-danger">
      <button class="delete"></button>
      {{error}}
  </div>
</template>

<script>
    export default {
        props: ['error'],
    }
</script>
