<x-layouts.app>
    <section class="-mt-20 relative h-screen w-full">
        <div
            class="after:-z-0 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-black  after:opacity-60">
        </div>

        <video autoplay="" muted="" playsinline="" loop="" class="h-[calc(100vh)] w-full object-cover">
            <source src="https://makeagency.co.uk/wp-content/uploads/2024/01/MAKE-2024-HERO-LR.mov" type="video/mp4">
        </video>

        <div class="absolute w-full  left-1/2 -translate-x-1/2 md:-translate-x-0 xl:-translate-x-0 md:left-0 xl:left-0 top-44 xl:top-48 z-10 xl:px-20 md:px-20">
            <h1 class="text-white text-4xl text-center md:text-start xl:text-start xl:text-7xl md:text-6xl font-[900] font-orbitron" style="word-spacing: px">
                DIGITAL AGENCY <br> WITH A PASSION FOR <br> MARKETING
            </h1>

            <div class="flex justify-center md:justify-start xl:justify-start items-center gap-x-4 mt-12">
              <v-button type="primary" text="About Us"></v-button>
              <v-button type="secondary" text="Our Services"></v-button>
            </div>
        </div>
    </section>

    <section class="text-white py-20">
        <div class="container">
            <div class="grid grid-cols-1 md:mt-0 xl:mt-0 md:grid-cols-2 xl:grid-cols-2 md:items-start justify-center items-center">
                <div>
                    <span class="block text-4xl md:text-5xl xl:text-5xl font-bold">
                        <span class="block mb-1">
                            Creatively led. <br>
                        </span>
                        <span class="block mb-1">
                            Results driven. <br>
                        </span>
                        <span class="block mb-1">
                            Experts at what we do. <br>
                        </span>
                        <span class="block mb-1">
                            We make it happen. <br>
                        </span>
                    </span>

                    <p class="my-14">
                        Make is a London-based digital agency. We guarantee results across three key business
                        areas: web design & build, social media & digital marketing, and creative content.
                    </p>

                    <div class="mt-4">
                        <a href="">
                            <v-text-arrow text="About flem" />
                        </a>
                    </div>
                </div>

                <div class="flex mt-20 md:mt-0 xl:mt-0 gap-y-4 flex-col md:items-end xl:items-end items-center md:pr-20 xl:pr-20">
                    <div class="flex flex-col max-w-[150px]">
                        <div class="flex flex-col items-center justify-center text-center">
                            <img class="w-[100px] h-[100px] object-contain"
                                src="https://makeagency.co.uk/wp-content/uploads/2023/05/MAKE-AGENCY-CLUTCH-2023.png">
                            <p class="font-bold mt-2">Top 100 Growing Agency 2023</p>
                        </div>
                    </div>

                    <div class="flex flex-col max-w-[150px]">
                        <div class="flex flex-col items-center justify-center text-center">
                            <img class="w-[100px] h-[100px] object-contain"
                                src="https://makeagency.co.uk/wp-content/uploads/2022/12/MAKE-AWWWARDS.svg">
                            <p class="font-bold mt-2">Awwwards winners</p>
                        </div>
                    </div>

                    <div class="flex flex-col max-w-[150px]">
                        <div class="flex flex-col items-center justify-center text-center">
                            <img class="w-[100px] h-[80px] object-contain"
                                src="https://makeagency.co.uk/wp-content/uploads/2022/12/MAKE-THE-TIMES.svg">
                            <p class="font-bold -mt-4">The Times future of advertising</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="text-white pb-36 pt-6 px-2 md:px-10 xl:px-10">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-y-8 gap-x-10">
                <div class="relative">
                    <div
                        class="after:-z-0 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-black  after:opacity-50">
                    </div>
                    <video class="h-[400px] w-full object-cover" autoplay muted loop>
                        <source src="https://makeagency.co.uk/wp-content/uploads/2023/02/Asana.mp4" type="video/mp4">
                    </video>
                    <div class="flex absolute z-10 items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href=""
                            class="hover:bg-black hover:transition-colors transition-colors duration-500 hidden xl:flex hover:duration-500 hover:text-white  uppercase font-bold bg-yellow1 text-black py-[6px] px-16 rounded-full">
                            Marketing
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="after:-z-0 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-black  after:opacity-50">
                    </div>
                    <video class="h-[400px] w-full object-cover" autoplay muted loop>
                        <source src="https://makeagency.co.uk/wp-content/uploads/2022/12/MAKE-SOLDO.mp4"
                            type="video/mp4">
                    </video>
                    <div class="flex absolute z-10 items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <a href=""
                            class="hover:bg-black hover:transition-colors transition-colors duration-500 hidden xl:flex hover:duration-500 hover:text-white  uppercase font-bold bg-yellow1 text-black py-[6px] px-16 rounded-full">
                            Technology
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- latest work --}}
    <section class="text-white py-20">
        <div class="container">
            <h1 class="mb-8 uppercase text-2xl md:text-3xl xl:text-3xl font-extrabold tracking-widest">Our latest work</h1>
            <p class="mb-8">
                Pioneering change across technology, marketing and social.
            </p>
        </div>
        <div class="mt-4">
            <v-latest-work-carousel :items="[
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2024/04/Boxpark_Image03_V01.jpg' },
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2023/09/MAKE-Influencer-Agency-Asset1-894x1024.png'},
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2023/09/MAKE-Mollies-Hero-Asset-1024x398.jpg'},
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2022/10/MAKE-Envision-Cover.jpg'},
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2023/03/Asana-Make-Agency-Banner1-574x1024.jpg'},
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2022/12/MAKE-SOLDO-ASSET5-1024x576.jpg'},
                {background_img_url : 'https://makeagency.co.uk/wp-content/uploads/2022/11/make-agency-london-accor-asset6.jpg'},
            ]"/>
        </div>
    </section>

    {{-- end latest work --}}

    {{-- blog article list --}}
    <section class="text-white py-20">
        <div class="w-full flex items-center justify-center">
            <div class="container">
                <h1 class="mb-8 uppercase text-2xl md:text-3xl xl:text-3xl font-extrabold tracking-widest">Latest articles</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-10 gapy-y-20 px-2 md:px-0 lg:px-0">

                    <div class="mb-8 md:mb-0 xl:mb-0">
                        <div>
                            <img class="rounded-lg  object-cover"
                                src="https://makeagency.co.uk/wp-content/uploads/2024/04/MAKE-agency-Sheeran-Loopers-590x357.jpg"
                                loading="lazy">
                        </div>
                        <span class="font-bold text-2xl my-4 block">
                            Setting the Stage: The Launch of Sheeran Loopers
                        </span>
                        <p>
                            We recently had the opportunity to partner with Sheeran Loopers in launching their
                            innovative line
                            of music-looping pedals, a venture that...
                        </p>
                    </div>

                    <div class="mb-8 md:mb-0 xl:mb-0">
                        <div>
                            <img class="rounded-lg object-cover"
                                src="https://makeagency.co.uk/wp-content/uploads/2024/04/Boxpark_Image04_V01-590x357.png"
                                loading="lazy">
                        </div>
                        <span class="font-bold text-2xl my-4 block">
                            Elevating BOXPARK’s Online Experience
                        </span>
                        <p>
                            Founded by Roger Wade, BOXPARK, the world’s first pop-up mall,
                            redefined urban retail and leisure with its innovative use of refitted ...
                        </p>
                    </div>

                    <div class="mb-8 md:mb-0 xl:mb-0">
                        <div>
                            <img class="rounded-lg object-cover"
                                src="https://makeagency.co.uk/wp-content/uploads/2024/01/MAKE_Agency_Reel_Poster24-590x357.jpg"
                                loading="lazy">
                        </div>
                        <span class="font-bold text-2xl my-4 block">
                            Harnessing AI for Human-Centric UX
                        </span>
                        <p>
                            In the swiftly evolving digital landscape, the convergence of AI technology and user
                            experience
                            design is not just inevitable but...
                        </p>
                    </div>

                </div>

                <a href="">
                    <div class="mt-12">
                        <v-text-arrow text="See all articles" />
                    </div>
                </a>

            </div>
    </section>
    {{-- end blog article list --}}

    <section class="text-white py-20 px-4">
        <div class="w-full flex items-center justify-center">
            <div class="flex flex-col text-center max-w-lg">
                <span class="block text-4xl md:text-5xl xl:text-5xl mb-1 font-extrabold">READY</span>
                <span class="block text-6xl  md:text-7xl xl:text-7xl font-extrabold">LET’S GO!</span>
                <p class="py-8 text-lg">
                    Let’s discuss your goals and challenges over a quick email or call.
                    Enter your details and we’ll be in touch!
                </p>
                <div class="px-8 mt-2 mb-4">
                    <a href=""
                        class="border-[2px] px-8 transition-colors duration-300 border-white text-white font-bold text-lg hover:bg-white hover:text-black py-[7px] rounded-full">
                        ENQUIRE NOW
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
