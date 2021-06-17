<template >
  <div>
    <h1 class="font-normal text-3xl text-gray-700 leading-none mb-8">
      Full Logo
    </h1>
    <div class="mb-12">
      <picture
        style="height: 382px"
        class=" shadow rounded-lg flex item-center justify-center mb-6"
      >
        <img src="/images/logo.jpg" alt="logo" width="full" />
      </picture>
      <div class="flex justify-between items-center">
        <p>Original Logo <strong>Black</strong> background</p>
        <a
          href="/images/logo.jpg"
          class="
            border border-gray-300
            px-8
            py-2
            rounded-full
            font-bold
            text-xs
          "
          >Logo.svg</a
        >
      </div>
    </div>
    <div>
      <picture
        class=" shadow rounded-lg flex item-center justify-center mb-6"
      >
        <img src="/images/Negative.jpg" alt="logo" />
      </picture>
      <div class="flex justify-between items-center">
        <p>Negative Logo <strong>blue</strong> background</p>
        <a
          href="/images/Negative.jpg"
          class="
            border border-gray-300
            px-8
            py-2
            rounded-full
            font-bold
            text-xs
          "
          >Negative.svg</a
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>