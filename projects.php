<section class="flex flex-col mt-20">
  <h3 class="text-center text-3xl mb-4">Projects</h3>
  <div class="flex flex-col md:flex-row justify-around items-center gap-4">
    
    <div class="flex flex-col items-center border border-black rounded text-black md:w-1/3 p-4 bg-white">
      <p class="text-xl">Audio Ally</p>
      <img src="./static/images/music-organizer-screenshot-min.png" alt="Audio Ally Screenshot" />
      <p>
        A desktop application I made to easily track and manage the albums in my 
        personal music collection and sync files to my iPod. This application uses the 
        Wails framework to create a Svelte-powered WebView for a front end. I come back to
        this project regularly since I use it so often, and right now I am working on preparing
        it for public distribution and integrating cloud backups.
      </p>
      <div class="flex flex-wap">
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">Golang</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">Svelte</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">SQLite</div>
      </div>
      <div class="flex justify-around items-end mt-4 flex-1">
        <a class="underline" href="https://github.com/jdlandau123/Music-Organizer-Wails" target="_blank">
          GitHub
        </a>
      </div>
    </div>

    <div class="flex flex-col items-center border border-black rounded text-black md:w-1/3 p-4 bg-white">
      <p class="text-xl">Texas A&M Flowpath Generation Tool</p>
      <img src="./static/images/tam-screenshot-min.png" alt="Texas A&M Screenshot" />
      <p>
        A web application that generates a raster dataset to determine which areas within the selected 
        area of interest are at the highest risk of flooding. I began this project during my 
        employment at Innovate Inc and developed it through two iterations. I was the only 
        developer working on the client side functionality at the time, which I started off with
        vanilla Javascript and later transitioned into a Svelte front end. 
      </p>
      <div class="flex flex-wrap">
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">ArcGIS Javascript SDK</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">HTML</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">CSS</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">Javascript</div>
      </div>
      <div class="flex justify-around items-end mt-4 flex-1">
        <a class="underline" href="https://fastgis.agnet.tamu.edu/alpha/" target="_blank">
          Production
        </a>
      </div>
    </div>

    <div class="flex flex-col items-center border border-black rounded text-black md:w-1/3 p-4 bg-white">
      <p class="text-xl">Kindle NewsReader</p>
      <img src="./static/images/kindle-newsreader-screenshot-min.png" alt="Kindle NewsReader Screenshot" />
      <p>
        An application that generates customizable daily newspapers and automatically 
        delivers them to registered Kindle devices every morning. This application 
        consists of two parts: an ASP .NET Core MVC front end and a .NET console application. The 
        front end allows users to sign up and configure their Kindle, as well as select specific
        categories they want to read, while the console application is scheduled to scrape news 
        articles, generate the newspapers, and deliver them to the devices.
      </p>
      <div class="flex flex-wrap">
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">C#</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">.NET</div>
        <div class="p-2 m-1 border rounded-3xl border-background bg-background text-white w-fit">ASP .NET Core MVC</div>
      </div>
      <div class="flex justify-around items-end mt-4 flex-1 gap-5">
        <a class="underline" href="https://github.com/jdlandau123/Kindle-NewsReader" target="_blank">
          GitHub
        </a>
        <a class="underline" href="https://kindle-newsreader.com" target="_blank">
          Production
        </a>
      </div>
    </div>

  </div>
</section>