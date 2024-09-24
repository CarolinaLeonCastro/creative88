<section id="contact" class="py-20 bg-gray-50">
    <div class="container">
        <div class="grid lg:grid-cols-3 gap-6 items-center">
            <div>
                <div>
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950 mb-6">
                        <?php echo $translations['contact']['title']; ?>
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">
                    <?php echo $translations['contact']['subtitle']; ?>
                </h2>

                <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                        <i data-lucide="map-pin" class="text-2xl text-primary"></i>
                    </div>
                    <div>
                        <h5 class="text-base text-muted font-medium mb-1">
                            <?php echo $translations['contact']['address']['details']; ?>
                        </h5>
                        <!-- <a href="#" class="text-xs text-primary font-bold uppercase">See more</a> -->
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                        <i data-lucide="mail" class="text-2xl text-primary"></i>
                    </div>
                    <div>
                        <h5 class="text-base text-muted font-medium mb-1">
                            <?php echo $translations['contact']['email']['details']; ?>
                        </h5>
                        <a href="mailto:<?php echo $translations['contact']['email']['details']; ?>"
                            class="text-xs text-primary font-bold uppercase">
                            <?php echo $translations['contact']['email']['cta']; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 lg:ms-24">
                <div class="p-6 md:p-12 rounded-md shadow-lg bg-white">
                    <form id="contactForm">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="sm:col-span-2">
                                <label for="formFullName" class="block text-sm/normal font-semibold text-black mb-2">
                                    <?php echo $translations['contact']['form']['full_name']; ?>
                                </label>
                                <input type="text"
                                    class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                    id="formFullName" placeholder="<?php echo $translations['contact']['form']['full_name']; ?>...">
                            </div>

                            <!-- Email (Required) -->
                            <div>
                                <label for="formEmail" class="block text-sm/normal font-semibold text-black mb-2">
                                    <?php echo $translations['contact']['form']['email']; ?>
                                </label>
                                <input type="email"
                                    class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                    id="formEmail" placeholder="<?php echo $translations['contact']['form']['email']; ?>..." required>
                            </div>

                            <!-- Phone Number (Optional) -->
                            <div>
                                <label for="formPhone" class="block text-sm/normal font-semibold text-black mb-2">
                                    <?php echo $translations['contact']['form']['phone']; ?>
                                </label>
                                <input type="tel"
                                    class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                    id="formPhone" placeholder="<?php echo $translations['contact']['form']['phone']; ?>...">
                            </div>

                            <!-- Reason for Contact (Dropdown) -->
                            <div class="sm:col-span-2">
                                <label for="formReason" class="block text-sm/normal font-semibold text-black mb-2">
                                    <?php echo $translations['contact']['form']['reason']; ?>
                                </label>
                                <select
                                    class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                    id="formReason">
                                    <?php foreach ($translations['contact']['form']['reason_options'] as $value => $label): ?>
                                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Message (Required with Minimum Length) -->
                            <div class="sm:col-span-2">
                                <div class="mb-4">
                                    <label for="formMessages" class="block text-sm/normal font-semibold text-black mb-2">
                                        <?php echo $translations['contact']['form']['message']; ?>
                                    </label>
                                    <textarea
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formMessages" rows="4" placeholder="<?php echo $translations['contact']['form']['message']; ?>..."
                                        required minlength="20"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="py-2 px-6 rounded-md text-base items-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                                <?php echo $translations['contact']['form']['submit']; ?> <i class="mdi mdi-send ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="notification" class="notification"></div>
