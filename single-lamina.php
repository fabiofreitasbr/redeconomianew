<?php
get_header(); ?>
<main>
    <section class="py-8">
        <div class="container mx-auto px-4">
            
            <div class="w-full px-2">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        
                        <div class="flex justify-between uppercase">
                            <a onclick="window.history.go(-1); return false;">
                                <div class="bg-red-700 bg-[url('../img/button-lamina.jpg')] bg-cover bg-center px-10 py-5 my-6 flex items-center rounded-2xl">
                                    <svg id="brochure" xmlns="http://www.w3.org/2000/svg" class="h-10"
                                        viewBox="0 0 69.284 74.461">
                                        <path id="Caminho_34" data-name="Caminho 34"
                                            d="M92.65,23.6a11.609,11.609,0,0,1,1.763.952,3.432,3.432,0,0,1,1.327,2.791c.013,1.333.006,2.667.011,4v.839h.877c3.683,0,7.368.009,11.052-.009a1.923,1.923,0,0,1,1.481.608q4.173,4.209,8.381,8.381a1.846,1.846,0,0,1,.582,1.415q-.016,25.7-.011,51.406a3.818,3.818,0,0,1-4.1,4.077q-19.341,0-38.68,0a3.812,3.812,0,0,1-4.1-4.075c-.013-5.066,0-10.131,0-15.2v-.931H55.309a6.071,6.071,0,0,1-.655-.011,1,1,0,0,1-.987-.976,1.021,1.021,0,0,1,.871-1.158,3.126,3.126,0,0,1,.723-.034q7.525,0,15.051,0h.854V72.313h-15.9a3.246,3.246,0,0,1-.723-.028,1.082,1.082,0,0,1,.041-2.132,4.088,4.088,0,0,1,.725-.021H71.185v-3.3h-.839q-7.127,0-14.251,0c-1.8,0-2.438-.646-2.438-2.457q0-4.327,0-8.652c0-1.9.606-2.5,2.538-2.5,4.725,0,9.453-.015,14.178.017.715,0,.931-.208.869-.9-.058-.644-.013-1.3-.013-2.061h-.91c-4.751,0-9.5.019-14.251-.024a3.252,3.252,0,0,1-1.791-.563,1.949,1.949,0,0,1-.591-1.393c-.049-3.223-.039-6.446-.019-9.669a1.874,1.874,0,0,1,2.119-1.96q7.236-.013,14.469,0h.918c.024-.261.049-.471.062-.683a5.1,5.1,0,0,1,3.495-4.8c4.353-1.686,8.719-3.345,13.076-5.016.2-.077.4-.167.768-.323-.332-.03-.5-.058-.668-.058q-17.451,0-34.9,0a1.7,1.7,0,0,0-1.954,1.952q0,28.792,0,57.586c0,1.378.608,1.971,2.01,1.971q6.761,0,13.523,0a4.819,4.819,0,0,1,.725.017,1.01,1.01,0,0,1,.952,1.014,1.027,1.027,0,0,1-.907,1.13,3.152,3.152,0,0,1-.653.026q-6.8,0-13.6,0a3.856,3.856,0,0,1-4.24-4.235c0-18.953.021-37.906-.028-56.859-.006-2.386.783-4.017,3.1-4.785Q72.286,23.6,92.65,23.6Zm14.371,10.767H75.5c-1.539,0-2.091.552-2.091,2.108q0,28.644,0,57.287c0,1.586.544,2.114,2.159,2.114h38.24c1.579,0,2.125-.55,2.125-2.147V43.3c-1.629,0-3.174,0-4.721,0a3.835,3.835,0,0,1-4.19-4.2C107.019,37.549,107.021,36,107.021,34.367ZM71.17,48.051V38.9H55.9v9.155Zm.006,16.558V55.445H55.889v9.164ZM93.553,32.152c0-1.667.013-3.262-.013-4.856a3.455,3.455,0,0,0-.278-.895c-4.974,1.911-9.836,3.779-14.7,5.646.013.034.028.068.041.1C83.559,32.152,88.513,32.152,93.553,32.152Zm15.687,4.017c0,1.192-.056,2.44.024,3.679a1.244,1.244,0,0,0,1.13,1.173c1.256.083,2.523.026,3.739.026Z"
                                            transform="translate(-48.84 -23.6)" fill="#fff303" />
                                        <path id="Caminho_35" data-name="Caminho 35"
                                            d="M201.253,144.967c.723-.871,1.415-1.708,2.112-2.542,1.6-1.918,3.632-1.935,5.228-.028,1.571,1.877,3.127,3.767,4.691,5.648.15.182.312.353.554.623V133.744H192.787c-.195,0-.387.006-.582,0-.792-.034-1.248-.452-1.235-1.126.013-.651.447-1.055,1.213-1.055q10.725-.006,21.448.009a2.4,2.4,0,0,1,2.438,2.532c.034,1.235.011,2.472.011,3.709q0,5.672,0,11.343c0,2.074-.9,2.975-2.958,2.975q-14.577,0-29.155,0c-2.07,0-2.983-.905-2.983-2.955q0-7.345,0-14.688c0-2,.931-2.923,2.943-2.928.946,0,1.89-.009,2.836,0,.79.011,1.275.441,1.269,1.091s-.505,1.076-1.288,1.089c-.993.015-1.988.013-2.981,0-.379,0-.6.1-.6.522,0,4.77,0,9.539,0,14.521.285-.319.454-.5.61-.687q3.788-4.555,7.57-9.117a2.866,2.866,0,0,1,3.221-1.109,4.331,4.331,0,0,1,1.8,1.246C198.028,141.012,199.6,142.979,201.253,144.967Zm-16.1,4.892a1.962,1.962,0,0,0,.319.079q5.627.006,11.255,0a.708.708,0,0,0,.471-.113c.892-1.038,1.761-2.1,2.637-3.15-1.8-2.164-3.516-4.255-5.258-6.33a.893.893,0,0,0-1.532.011c-.494.563-.963,1.151-1.442,1.727C189.474,144.65,187.345,147.216,185.153,149.859Zm14.865.021h11.955c-1.808-2.174-3.527-4.263-5.271-6.328a.855.855,0,0,0-1.432,0c-.516.578-1,1.186-1.487,1.783C202.552,146.823,201.324,148.306,200.018,149.881Z"
                                            transform="translate(-152.702 -108.45)" fill="#fff303" />
                                        <path id="Caminho_36" data-name="Caminho 36"
                                            d="M199.266,255.228q-7.81,0-15.619,0a3.923,3.923,0,0,1-.794-.045,1.07,1.07,0,0,1,.077-2.11,5.863,5.863,0,0,1,.726-.026h31.383c.146,0,.291,0,.437,0,.775.034,1.2.4,1.222,1.049.019.672-.434,1.117-1.228,1.124-2.42.015-4.843.006-7.264.006Q203.73,255.229,199.266,255.228Z"
                                            transform="translate(-153.498 -203.94)" fill="#fff303" />
                                        <path id="Caminho_37" data-name="Caminho 37"
                                            d="M199.409,280.952h15.619a5.449,5.449,0,0,1,.726.019,1.064,1.064,0,0,1,.178,2.067,3.112,3.112,0,0,1-.86.09q-15.765.006-31.528,0a2.74,2.74,0,0,1-.927-.122,1.066,1.066,0,0,1,.231-2.029,5.214,5.214,0,0,1,.8-.026Q191.526,280.953,199.409,280.952Z"
                                            transform="translate(-153.477 -225.872)" fill="#fff303" />
                                        <path id="Caminho_38" data-name="Caminho 38"
                                            d="M195.037,308.822h11.33a6.826,6.826,0,0,1,.726.015,1.067,1.067,0,0,1,.146,2.1,3.479,3.479,0,0,1-.792.062q-11.438,0-22.878,0a3.018,3.018,0,0,1-.858-.092,1.064,1.064,0,0,1,.2-2.065,5.856,5.856,0,0,1,.726-.019Z"
                                            transform="translate(-153.487 -247.779)" fill="#fff303" />
                                    </svg>
                                    <div class="px-8 text-white text-2xl">
                                        Voltar
                                    </div>
                                </div>
                            </a>
                            <?php
                            if (get_field('pdf')) {
                                $encarteArquivo = get_field('pdf');
                                ?>
                                <a href="<?php echo $encarteArquivo; ?>" target="_blank">
                                    <div class="bg-red-700 bg-[url('../img/button-lamina.jpg')] bg-cover bg-center px-10 py-5 my-6 flex items-center rounded-2xl">
                                        <svg id="brochure" xmlns="http://www.w3.org/2000/svg" class="h-10"
                                        viewBox="0 0 69.284 74.461">
                                            <path id="Caminho_34" data-name="Caminho 34"
                                                d="M92.65,23.6a11.609,11.609,0,0,1,1.763.952,3.432,3.432,0,0,1,1.327,2.791c.013,1.333.006,2.667.011,4v.839h.877c3.683,0,7.368.009,11.052-.009a1.923,1.923,0,0,1,1.481.608q4.173,4.209,8.381,8.381a1.846,1.846,0,0,1,.582,1.415q-.016,25.7-.011,51.406a3.818,3.818,0,0,1-4.1,4.077q-19.341,0-38.68,0a3.812,3.812,0,0,1-4.1-4.075c-.013-5.066,0-10.131,0-15.2v-.931H55.309a6.071,6.071,0,0,1-.655-.011,1,1,0,0,1-.987-.976,1.021,1.021,0,0,1,.871-1.158,3.126,3.126,0,0,1,.723-.034q7.525,0,15.051,0h.854V72.313h-15.9a3.246,3.246,0,0,1-.723-.028,1.082,1.082,0,0,1,.041-2.132,4.088,4.088,0,0,1,.725-.021H71.185v-3.3h-.839q-7.127,0-14.251,0c-1.8,0-2.438-.646-2.438-2.457q0-4.327,0-8.652c0-1.9.606-2.5,2.538-2.5,4.725,0,9.453-.015,14.178.017.715,0,.931-.208.869-.9-.058-.644-.013-1.3-.013-2.061h-.91c-4.751,0-9.5.019-14.251-.024a3.252,3.252,0,0,1-1.791-.563,1.949,1.949,0,0,1-.591-1.393c-.049-3.223-.039-6.446-.019-9.669a1.874,1.874,0,0,1,2.119-1.96q7.236-.013,14.469,0h.918c.024-.261.049-.471.062-.683a5.1,5.1,0,0,1,3.495-4.8c4.353-1.686,8.719-3.345,13.076-5.016.2-.077.4-.167.768-.323-.332-.03-.5-.058-.668-.058q-17.451,0-34.9,0a1.7,1.7,0,0,0-1.954,1.952q0,28.792,0,57.586c0,1.378.608,1.971,2.01,1.971q6.761,0,13.523,0a4.819,4.819,0,0,1,.725.017,1.01,1.01,0,0,1,.952,1.014,1.027,1.027,0,0,1-.907,1.13,3.152,3.152,0,0,1-.653.026q-6.8,0-13.6,0a3.856,3.856,0,0,1-4.24-4.235c0-18.953.021-37.906-.028-56.859-.006-2.386.783-4.017,3.1-4.785Q72.286,23.6,92.65,23.6Zm14.371,10.767H75.5c-1.539,0-2.091.552-2.091,2.108q0,28.644,0,57.287c0,1.586.544,2.114,2.159,2.114h38.24c1.579,0,2.125-.55,2.125-2.147V43.3c-1.629,0-3.174,0-4.721,0a3.835,3.835,0,0,1-4.19-4.2C107.019,37.549,107.021,36,107.021,34.367ZM71.17,48.051V38.9H55.9v9.155Zm.006,16.558V55.445H55.889v9.164ZM93.553,32.152c0-1.667.013-3.262-.013-4.856a3.455,3.455,0,0,0-.278-.895c-4.974,1.911-9.836,3.779-14.7,5.646.013.034.028.068.041.1C83.559,32.152,88.513,32.152,93.553,32.152Zm15.687,4.017c0,1.192-.056,2.44.024,3.679a1.244,1.244,0,0,0,1.13,1.173c1.256.083,2.523.026,3.739.026Z"
                                                transform="translate(-48.84 -23.6)" fill="#fff303" />
                                            <path id="Caminho_35" data-name="Caminho 35"
                                                d="M201.253,144.967c.723-.871,1.415-1.708,2.112-2.542,1.6-1.918,3.632-1.935,5.228-.028,1.571,1.877,3.127,3.767,4.691,5.648.15.182.312.353.554.623V133.744H192.787c-.195,0-.387.006-.582,0-.792-.034-1.248-.452-1.235-1.126.013-.651.447-1.055,1.213-1.055q10.725-.006,21.448.009a2.4,2.4,0,0,1,2.438,2.532c.034,1.235.011,2.472.011,3.709q0,5.672,0,11.343c0,2.074-.9,2.975-2.958,2.975q-14.577,0-29.155,0c-2.07,0-2.983-.905-2.983-2.955q0-7.345,0-14.688c0-2,.931-2.923,2.943-2.928.946,0,1.89-.009,2.836,0,.79.011,1.275.441,1.269,1.091s-.505,1.076-1.288,1.089c-.993.015-1.988.013-2.981,0-.379,0-.6.1-.6.522,0,4.77,0,9.539,0,14.521.285-.319.454-.5.61-.687q3.788-4.555,7.57-9.117a2.866,2.866,0,0,1,3.221-1.109,4.331,4.331,0,0,1,1.8,1.246C198.028,141.012,199.6,142.979,201.253,144.967Zm-16.1,4.892a1.962,1.962,0,0,0,.319.079q5.627.006,11.255,0a.708.708,0,0,0,.471-.113c.892-1.038,1.761-2.1,2.637-3.15-1.8-2.164-3.516-4.255-5.258-6.33a.893.893,0,0,0-1.532.011c-.494.563-.963,1.151-1.442,1.727C189.474,144.65,187.345,147.216,185.153,149.859Zm14.865.021h11.955c-1.808-2.174-3.527-4.263-5.271-6.328a.855.855,0,0,0-1.432,0c-.516.578-1,1.186-1.487,1.783C202.552,146.823,201.324,148.306,200.018,149.881Z"
                                                transform="translate(-152.702 -108.45)" fill="#fff303" />
                                            <path id="Caminho_36" data-name="Caminho 36"
                                                d="M199.266,255.228q-7.81,0-15.619,0a3.923,3.923,0,0,1-.794-.045,1.07,1.07,0,0,1,.077-2.11,5.863,5.863,0,0,1,.726-.026h31.383c.146,0,.291,0,.437,0,.775.034,1.2.4,1.222,1.049.019.672-.434,1.117-1.228,1.124-2.42.015-4.843.006-7.264.006Q203.73,255.229,199.266,255.228Z"
                                                transform="translate(-153.498 -203.94)" fill="#fff303" />
                                            <path id="Caminho_37" data-name="Caminho 37"
                                                d="M199.409,280.952h15.619a5.449,5.449,0,0,1,.726.019,1.064,1.064,0,0,1,.178,2.067,3.112,3.112,0,0,1-.86.09q-15.765.006-31.528,0a2.74,2.74,0,0,1-.927-.122,1.066,1.066,0,0,1,.231-2.029,5.214,5.214,0,0,1,.8-.026Q191.526,280.953,199.409,280.952Z"
                                                transform="translate(-153.477 -225.872)" fill="#fff303" />
                                            <path id="Caminho_38" data-name="Caminho 38"
                                                d="M195.037,308.822h11.33a6.826,6.826,0,0,1,.726.015,1.067,1.067,0,0,1,.146,2.1,3.479,3.479,0,0,1-.792.062q-11.438,0-22.878,0a3.018,3.018,0,0,1-.858-.092,1.064,1.064,0,0,1,.2-2.065,5.856,5.856,0,0,1,.726-.019Z"
                                                transform="translate(-153.487 -247.779)" fill="#fff303" />
                                        </svg>
                                        <div class="px-8 text-white text-2xl">
                                            Download do Encarte
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="swiper-brochure rounded-xl md:rounded-2xl overflow-hidden">
                            <div class="swiper-button-prev after:text-red-700"></div>
                            <div class="swiper-button-next after:text-red-700"></div>
                            <div class="swiper-wrapper">
                                <?php
                                    $paginas = get_field('encarte');
                                    foreach ($paginas as $paginaCurrent) {
                                        $paginaImage = wp_get_attachment_image_src($paginaCurrent['ID'], 'full')
                                        ?>
                                        <div class="swiper-slide"><img src="<?php echo $paginaImage[0]; ?>" alt="" class="w-full"></div><?php
                                    }
                                ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <?php
                    }
                }
                else { ?><h3 class="text-center">Atenção. Em breve grandes surpresas de ofertas. Aguardem!</h3><?php }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>