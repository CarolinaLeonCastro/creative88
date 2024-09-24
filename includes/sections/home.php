<section class="relative pt-32 pb-20 bg-cover bg-no-repeat overflow-hidden" id="home">
    <div class="absolute top-0 left-0 -ml-8 -mt-10 xl:inline-block hidden">
        <img src="assets/images/shape/circle-wave.svg" alt="">
    </div>

    <figure class="absolute top-0 right-0 -mr-20 -mt-72 xl:inline-block hidden">
        <img src="assets/images/shape/line-wave.svg" alt="">
    </figure>

    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-10 items-center">
            <div class="">
                <h1 id="hero-title" class="text-3xl md:text-5xl lg:text-6xl text-dark tracking-normal capitalize leading-normal font-bold max-w-2xl">
                    <?php echo $translations['home']['hero']['title']; ?>
                </h1>
                <p id="hero-subtitle" class="text-base font-medium text-gray-400 mt-3 capitalize">
                    <?php echo $translations['home']['hero']['subtitle']; ?>
                </p>

                <div class="flex flex-wrap mt-9 text-center gap-3">
                    <a id="hero-explore-services"
                        class="inline-block px-6 py-2 rounded-md text-white text-base border border-primary hover:bg-primaryDark bg-primary hover:border-primaryDark transition-all duration-300 items-center justify-center text-center font-medium"
                        href="service.html">
                        <i class="mdi mdi-web text-base text-white mr-1"></i>
                        <?php echo $translations['home']['hero']['explore_services']; ?>
                    </a>

                    <a id="hero-contact-us"
                        class="inline-block py-2 px-6 text-primary rounded-md border border-primary text-base hover:border-gray-800 hover:bg-gray-800 group hover:text-primary transition-all duration-500 font-medium"
                        href="#contact">
                        <i class="mdi mdi-email text-base text-primary mr-1 group-hover:text-white transition-all duration-500"></i>
                        <?php echo $translations['home']['hero']['contact_us']; ?>
                    </a>
                </div>
            </div>

            <div class="relative z-10">
                <img src="assets/images/web-development.png" class="hero-image lg:ml-auto mx-auto"
                    alt="Web Development" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Services Section Start -->
<section id="services" class="py-20 bg-gray-900 text-gray-200">
    <div class="container mx-auto">
        <div class="max-w-2xl mx-auto text-center">
            <span id="services-title" class="text-sm text-primary uppercase font-semibold tracking-wider">
                <?php echo $translations['home']['services']['title']; ?>
            </span>
            <h2 id="services-subtitle" class="text-3xl md:text-4xl/tight font-semibold mt-4">
                <?php echo $translations['home']['services']['subtitle']; ?>
            </h2>
            <p id="services-description" class="text-base font-medium mt-4 text-gray-400">
                <?php echo $translations['home']['services']['description']; ?>
            </p>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-3 gap-y-6 md:gap-y-12 lg:gap-y-24 md:pt-20 pt-12">

            <div class="text-center">
                <div class="flex items-center justify-center">
                    <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                        <i data-lucide="bar-chart-big" class="h-10 w-10 text-primary"></i>
                    </div>
                </div>
                <h1 id="service-digital-marketing-title" class="text-xl font-semibold pt-4">
                    <?php echo $translations['home']['services']['digital_marketing']['title']; ?>
                </h1>
                <p id="service-digital-marketing-description" class="text-base text-gray-400 mt-2">
                    <?php echo $translations['home']['services']['digital_marketing']['description']; ?>
                </p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center">
                    <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                        <i data-lucide="search" class="h-10 w-10 text-primary"></i>
                    </div>
                </div>
                <h1 id="service-seo-title" class="text-xl font-semibold pt-4">
                    <?php echo $translations['home']['services']['seo']['title']; ?>
                </h1>
                <p id="service-seo-description" class="text-base text-gray-400 mt-2">
                    <?php echo $translations['home']['services']['seo']['description']; ?>
                </p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center">
                    <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                        <i data-lucide="lightbulb" class="h-10 w-10 text-primary"></i>
                    </div>
                </div>
                <h1 id="service-ux-title" class="text-xl font-semibold pt-4">
                    <?php echo $translations['home']['services']['ux']['title']; ?>
                </h1>
                <p id="service-ux-description" class="text-base text-gray-400 mt-2">
                    <?php echo $translations['home']['services']['ux']['description']; ?>
                </p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center">
                    <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                        <i data-lucide="codepen" class="h-10 w-10 text-primary"></i>
                    </div>
                </div>
                <h1 id="service-web-dev-title" class="text-xl font-semibold pt-4">
                    <?php echo $translations['home']['services']['web_dev']['title']; ?>
                </h1>
                <p id="service-web-dev-description" class="text-base text-gray-400 mt-2">
                    <?php echo $translations['home']['services']['web_dev']['description']; ?>
                </p>
            </div>

        </div>

    </div>
</section>
<!-- Services Section End -->
