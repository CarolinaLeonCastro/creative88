<section id="pricing" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <span class="text-sm text-primary uppercase font-semibold tracking-wider">
            <?php echo $translations['pricing']['title']; ?>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold mt-4">
            <?php echo $translations['pricing']['subtitle']; ?>
        </h2>
        <p class="text-base font-normal text-gray-500 mt-6 max-w-2xl mx-auto">
            <?php echo $translations['pricing']['description']; ?>
        </p>

        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <!-- Basic Website Plan -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['pricing']['plans']['basic']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['pricing']['plans']['basic']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['pricing']['plans']['basic']['features'] as $feature): ?>
                        <li class="flex items-center"><i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact"
                    class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['pricing']['plans']['basic']['cta']; ?>
                </a>
            </div>

            <!-- Professional Website Plan -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['pricing']['plans']['professional']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['pricing']['plans']['professional']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['pricing']['plans']['professional']['features'] as $feature): ?>
                        <li class="flex items-center"><i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact"
                    class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['pricing']['plans']['professional']['cta']; ?>
                </a>
            </div>

            <!-- E-Commerce Website Plan -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">
                    <?php echo $translations['pricing']['plans']['ecommerce']['title']; ?>
                </h3>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['pricing']['plans']['ecommerce']['description']; ?>
                </p>
                <ul class="text-left space-y-3 mb-6">
                    <?php foreach ($translations['pricing']['plans']['ecommerce']['features'] as $feature): ?>
                        <li class="flex items-center"><i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#contact"
                    class="block py-2 px-6 rounded-md text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <?php echo $translations['pricing']['plans']['ecommerce']['cta']; ?>
                </a>
            </div>
        </div>
        <a href="pricing.html"
            class="pt-16 inline-flex items-center justify-center gap-3 text-sm font-medium text-primary mt-6">
            <?php echo $translations['pricing']['learn_more']; ?>
            <i data-lucide="move-right"></i>
        </a>
    </div>
</section>
