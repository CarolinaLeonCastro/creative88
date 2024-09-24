<section id="about" class="pt-32 pb-20 text-gray-900 ">
    <!-- Gray Background for About Us Section -->
    <div class="bg-gray-900 text-white">
        <div class="container max-w-2xl px-4 py-20">
            <!-- Header Section with "About Us" at the top and Text in Two Columns -->
            <div class="text-center mb-16">
                <h2 class="text-sm text-primary uppercase font-semibold tracking-wider mb-6">
                    <?php echo $translations['about']['title']; ?>
                </h2>
            </div>
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Colonne pour le texte 1 -->
                <div class="lg:col-span-1">
                    <p class="text-lg leading-relaxed text-gray-300">
                        <?php echo $translations['about']['description_1']; ?>
                    </p>
                </div>
                <!-- Colonne pour le texte 2 -->
                <div class="md:col-span-1">
                    <p class="text-lg leading-relaxed text-gray-300">
                        <?php echo $translations['about']['description_2']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- White Background for Team Members Section -->
    <div class="bg-white text-gray-900 pt-32">
        <div class="container mx-auto px-4">
            <!-- Team Members -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Member 1 -->
                <div class="text-center">
                    <img src="assets/images/salim.png" alt="Nacho" class="w-48 h-48 rounded-full mx-auto border-4 border-gray-300 shadow-lg">
                    <h3 class="text-2xl font-semibold mt-8">
                        <?php echo $translations['about']['team']['member_1']['name']; ?>
                    </h3>
                    <p class="text-gray-500 mb-4">
                        <?php echo $translations['about']['team']['member_1']['role']; ?>
                    </p>
                    <p class="text-gray-600 mt-4 px-6">
                        <?php echo $translations['about']['team']['member_1']['bio']; ?>
                    </p>
                </div>
                <!-- Member 2 -->
                <div class="text-center">
                    <img src="assets/images/carol.png" alt="Carolina" class="w-48 h-48 rounded-full mx-auto border-4 border-gray-300 shadow-lg">
                    <h3 class="text-2xl font-semibold mt-8">
                        <?php echo $translations['about']['team']['member_2']['name']; ?>
                    </h3>
                    <p class="text-gray-500 mb-4">
                        <?php echo $translations['about']['team']['member_2']['role']; ?>
                    </p>
                    <p class="text-gray-600 mt-4 px-6">
                        <?php echo $translations['about']['team']['member_2']['bio']; ?>
                    </p>
                </div>
            </div>

            <!-- Closing Statement -->
            <div class="mt-20 text-center pt-32">
                <p class="text-lg leading-relaxed text-gray-600 max-w-2xl mx-auto px-4">
                    <?php echo $translations['about']['closing_statement']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
