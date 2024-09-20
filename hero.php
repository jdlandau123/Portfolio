<style>
  .down-arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
  }
</style>

<section class="flex flex-col h-[calc(100vh-3rem)]">
  <div class="flex justify-end gap-5 w-100">
    <a href="https://github.com/jdlandau123" target="_blank">
      <img class="w-8 h-8 hover:scale-125 transition-all ease-in duration-200" 
        src="./static/icons/github-white.png" alt="GitHub" />
    </a>
    <a href="https://linkedin.com/in/joshuadlandau" target="_blank">
      <img class="w-8 h-8 hover:scale-125 transition-all ease-in duration-200" 
        src="./static/icons/linkedin-64.png" alt="LinkedIn" />
    </a>
  </div>
  <div class="flex flex-col justify-around items-center flex-1 md:flex-row">
    <div>
      <h1 class="m-0 p-0 text-6xl font-semibold">
        Joshua Landau
      </h1>
      <h3 class="p-0 mt-4 text-3xl font-medium">
        Software Developer
      </h3>
    </div>
    <img class="h-72" src="./static/images/profile-picture-min.png"
      alt="Profile Picture" />
  </div>
  <div class="text-center">
    <i class="down-arrow text-white"></i>
  </div>
</section>
