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
<section class="relative py-20 bg-cover bg-no-repeat bg-center"
    style="background-image: url('assets/images/home/parallax.png');" data-jarallax data-speed="0.20"
    loading="lazy">
    <div class="absolute inset-0 w-full h-full bg-gray-900/70"></div>

    <div class="container mx-auto">
        <div class="pb-10 lg:pb-0 flex flex-col items-center justify-center">
            <h1 class="text-3xl md:text-4xl/tight font-semibold text-white text-center">
                <?php echo $translations['home']['cta']['title']; ?>
            </h1>
            <p class="text-base font-normal max-w-xl text-center mx-auto text-white mt-6">
                <?php echo $translations['home']['cta']['description']; ?>
            </p>
            <div class="flex flex-wrap mt-6 gap-3">
                <a href="index.php?page=services&lang=<?php echo $lang; ?>"
                    class="py-2 px-6 rounded-md text-white text-base bg-primary hover:bg-primaryDark border border-primary hover:border-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['home']['cta']['discover_services']; ?>
                </a>
                <a href="#contact"
                    class="py-2 px-6 rounded-md border border-white text-base hover:border-primary hover:bg-primary hover:text-white transition-all duration-500 font-medium text-white">
                    <?php echo $translations['home']['cta']['contact_us']; ?>
                </a>
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


        </div>

    </div>
</section>
<!-- Services Section End -->
<!-- Pricing Start -->
 <section id="pricing" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <span class="text-sm text-primary uppercase font-semibold tracking-wider">
            <?php echo $translations['home']['pricing']['title']; ?>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold mt-4">
            <?php echo $translations['home']['pricing']['subtitle']; ?>
        </h2>
        <p class="text-base font-normal text-gray-500 mt-6 max-w-2xl mx-auto">
            <?php echo $translations['home']['pricing']['description']; ?>
        </p>

        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['home']['pricing']['basic']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['home']['pricing']['basic']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['home']['pricing']['basic']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i>
                            <?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact" class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['home']['pricing']['basic']['cta']; ?>
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['home']['pricing']['professional']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['home']['pricing']['professional']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['home']['pricing']['professional']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i>
                            <?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact" class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['home']['pricing']['professional']['cta']; ?>
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['home']['pricing']['ecommerce']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['home']['pricing']['ecommerce']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['home']['pricing']['ecommerce']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i>
                            <?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact" class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['home']['pricing']['ecommerce']['cta']; ?>
                </a>
            </div>
        </div>
        <a href="pricing.html" class="pt-16 inline-flex items-center justify-center gap-3 text-sm font-medium text-primary mt-6">
            <?php echo $translations['home']['pricing']['learn_more']; ?>
            <i data-lucide="move-right"></i>
        </a>
    </div>
</section>

    <!-- Pricing End -->
    <!-- feature Start -->
    <section id="features" class="py-20 bg-gray-900 text-gray-200">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 items-center gap-6">
            <div class="flex items-center">
                <img src="assets/images/features.png" alt="Features" class=" lg:block lg:w-1/2 mx-auto">
            </div>

            <div class="lg:ms-5 ms-8">
                <span class="text-sm text-primary uppercase font-semibold tracking-wider">
                    <?php echo $translations['home']['features']['title']; ?>
                </span>
                <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">
                    <?php echo $translations['home']['features']['subtitle']; ?>
                </h2>

                <hr class="border-gray-600 my-6"></hr>

                <div class="flex items-start gap-5">
                    <div>
                        <div class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                            <i data-lucide="code" class="text-base text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold">
                            <?php echo $translations['home']['features']['custom_web_development']['title']; ?>
                        </h4>
                        <p class="text-base font-normal text-gray-400 mt-2">
                            <?php echo $translations['home']['features']['custom_web_development']['description']; ?>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-5 mt-8">
                    <div>
                        <div class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                            <i data-lucide="layout" class="text-base text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold">
                            <?php echo $translations['home']['features']['responsive_design']['title']; ?>
                        </h4>
                        <p class="text-base font-normal text-gray-400 mt-2">
                            <?php echo $translations['home']['features']['responsive_design']['description']; ?>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-5 mt-8">
                    <div>
                        <div class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                            <i data-lucide="settings" class="text-base text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold">
                            <?php echo $translations['home']['features']['seo_optimization']['title']; ?>
                        </h4>
                        <p class="text-base font-normal text-gray-400 mt-2">
                            <?php echo $translations['home']['features']['seo_optimization']['description']; ?>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-5 mt-8">
                    <div>
                        <div class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                            <i data-lucide="shield" class="text-base text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold">
                            <?php echo $translations['home']['features']['security']['title']; ?>
                        </h4>
                        <p class="text-base font-normal text-gray-400 mt-2">
                            <?php echo $translations['home']['features']['security']['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

     <!-- FAQ Start -->
    <section id="FAQs" class="py-20 bg-gray-50">
    <div class="container">
        <div class="">
            <div class="text-center max-w-xl mx-auto">
                <div>
                    <span class="text-sm text-primary uppercase font-medium tracking-wider text-default-950 mb-6">
                        <?php echo $translations['home']['faqs']['title']; ?>
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">
                    <?php echo $translations['home']['faqs']['subtitle']; ?>
                </h2>
            </div>

            <div id="accordion-collapse" data-accordion="collapse" class="md:gap-[30px] mt-14 bg-white rounded-xl">
                <div class="hs-accordion-group divide-y divide-gray-200">
                    <?php foreach ($translations['home']['faqs']['items'] as $index => $faq): ?>
                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-<?php echo $index + 1; ?>">
                                <button type="button"
                                        class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                        data-accordion-target="#accordion-collapse-body-<?php echo $index + 1; ?>"
                                        aria-expanded="false"
                                        aria-controls="accordion-collapse-body-<?php echo $index + 1; ?>">
                                    <span><?php echo $faq['question']; ?></span>
                                    <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="https://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-<?php echo $index + 1; ?>" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-<?php echo $index + 1; ?>">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">
                                        <?php echo $faq['answer']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--Faqs end-->
