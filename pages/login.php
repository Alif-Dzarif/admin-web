<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/styles/style.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="py-10 w-screen h-[100dvh]">
    <div class="banner">
      <div class="banner_box" id="banner">
        LOGIN
      </div>
    </div>
    <div class="flex justify-center">
      <div class="p-20 transparent bg-white">
        <input type="email" name="email" id="" class="bg-white">
      </div>
    </div>
  </div>
</body>
<script>
  const bannerEl = document.querySelector('.banner_box');

  const showBanner = () => {
    bannerEl.classList.add('show');
  }

  window.addEventListener('load', setTimeout(showBanner, 500));
</script>

</html>

<style>
  .banner {
    display: flex;
    justify-content: end;
    overflow: hidden;
  }

  .banner_box {
    position: relative;
    padding: 1.3rem 6rem;
    max-width: 350px;
    background-color: blue;
    color: white;
    font-weight: bold;
    font-size: larger;
    right: -320px;
    transition: right 0.5s ease;
  }

  .banner_box.show {
    right: 0px;
  }
</style>