<?php 
/*
Template name: Lojas
*/
get_header(); ?>
<main>
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h3 class="py-3 font-medium text-xl font-reading text-red-700">Encontre a loja mais próxima de você!</h3>
            <div class="md:flex gap-x-4">
                <div class="w-full md:w-1/2 my-2">
                    <select class="w-full py-3 px-4 rounded-lg text-lg font-medium border text-gray-500" name="municipio" id="campo-municipio"> 
                        <option disabled selected>Selecione um municipio</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2 my-2">
                    <select class="w-full py-3 px-4 rounded-lg text-lg font-medium border text-gray-500" name="bairro" id="campo-bairro" disabled>
                        <option disabled selected>Selecione um bairro</option>
                    </select>
                </div>
            </div>
            <hr class="border-gray-200 my-6">
            <div class="w-full" id="store-list"></div>
        </div>
    </section>
</main>
<?php
$municipio = array();
$municipioTaxonomy = get_terms( 
    array(
        'taxonomy' => 'lojas',
    )
);
foreach ($municipioTaxonomy as $municipioSingle) {
    $child = array();
    $bairro = array();
    $bairroTaxonomy = get_terms( 
        array(
            'taxonomy' => 'lojas',
            'child_of' => $municipioSingle->term_id
        )
    );
    foreach ($bairroTaxonomy as $bairroSingle) {
        $child = array();
        $bairro[] = array(
            'name' => $bairroSingle->name,
            'slug' => $bairroSingle->slug
        );
    }
    $municipio[] = array(
        'name' => $municipioSingle->name,
        'slug' => $municipioSingle->slug,
        'bairro' => $bairro
    );
}
$municipio = json_encode($municipio);
?>
<script> var municipios = <?php echo $municipio; ?>;</script>
<?php get_footer(); ?>