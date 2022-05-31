<section id="info" class="py-2 md:py-8">
    <div class="container mx-auto px-4">
        <div class="w-full grid md:grid-cols-12 gap-6 md:gap-10 lg:gap-16">
            <div class="md:col-span-7">
                <?php get_template_part('templates/home/home', 'video'); ?>
            </div>
            <div class="md:col-span-5 grid grid-cols-2 md:grid-cols-none md:flex md:flex-col uppercase gap-6 md:gap-10 lg:gap-16">
                <?php get_template_part('templates/home/home', 'brochure'); ?>
            </div>
        </div>
    </div>
</section>