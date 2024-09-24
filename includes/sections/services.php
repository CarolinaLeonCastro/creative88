<main class="bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-semibold mb-8 pt-16">
            <?php echo $translations['services']['title']; ?>
        </h1>
        <p class="text-base font-normal text-gray-500 mb-12 pt-12 pb-16">
            <?php echo $translations['services']['description']; ?>
        </p>

        <!-- Grid for Services -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Service 1: Web Development -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">
                    <?php echo $translations['services']['web_development']['title']; ?>
                </h2>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['services']['web_development']['description']; ?>
                </p>
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="text-left space-y-3">
                    <?php foreach ($translations['services']['web_development']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Service 2: Mobile App Development -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">
                    <?php echo $translations['services']['mobile_app_development']['title']; ?>
                </h2>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['services']['mobile_app_development']['description']; ?>
                </p>
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="text-left space-y-3">
                    <?php foreach ($translations['services']['mobile_app_development']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Service 3: Digital Marketing -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">
                    <?php echo $translations['services']['digital_marketing']['title']; ?>
                </h2>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['services']['digital_marketing']['description']; ?>
                </p>
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="text-left space-y-3">
                    <?php foreach ($translations['services']['digital_marketing']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Service 4: Custom Solutions -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">
                    <?php echo $translations['services']['custom_solutions']['title']; ?>
                </h2>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['services']['custom_solutions']['description']; ?>
                </p>
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="text-left space-y-3">
                    <?php foreach ($translations['services']['custom_solutions']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Service 5: Training & Support -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">
                    <?php echo $translations['services']['training_support']['title']; ?>
                </h2>
                <p class="text-base text-gray-500 mb-6">
                    <?php echo $translations['services']['training_support']['description']; ?>
                </p>
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="text-left space-y-3">
                    <?php foreach ($translations['services']['training_support']['features'] as $feature): ?>
                        <li class="flex items-center">
                            <i class="mdi mdi-check-circle text-primary mr-2"></i><?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Image Block -->
            <div class="p-8 flex items-center justify-center transition-transform transform hover:scale-105">
                <img src="assets/images/06.png" alt="Descriptive Alt Text" class="max-w-full h-auto rounded-md">
            </div>
        </div>
    </div>
</main>
