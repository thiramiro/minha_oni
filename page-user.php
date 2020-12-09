
<?php
/*
Template Name: User
*/
?>
<?php acf_form_head(); ?>
<?php get_header();


//Pega o ID do perfil quando está na página profile do Ultimate member
$profile_id = um_profile_id();

//Pega e ajusta a permissão do perfil
$profile_atual = get_user_meta($profile_id);

$permissoes = unserialize($profile_atual['wp_capabilities'][0]);
um_fetch_user( um_profile_id() );

?>

<div class="row">
    <div class="col-12 col-md-4">
        <?php 
        include(get_stylesheet_directory() . '/template-parts/card-user-full-info.php');
        include(get_stylesheet_directory() . '/template-parts/card-user-guardas.php');
        include(get_stylesheet_directory() . '/template-parts/card-user-equipamentos.php');
        ?>
    </div>
    <?php
    //Se for admin ou o próprio usuário
    if(current_user_can('administrator') || get_current_user_id() == $profile_id ){
    ?>
        <div class="col-12 col-md-8 pl-0">
            <div class="row">
                <div class="col-12 col-md-7">
                <?php 
                include(get_stylesheet_directory() . '/template-parts/card-user-evidencias.php');
                ?>
                </div>
                <div class="col-12 col-md-5 pl-0">
                <?php 
                include(get_stylesheet_directory() . '/template-parts/card-user-todas-ferias.php');
                ?>
                </div>
            </div>
            <?php $historico = new historico;?> 
            <!-- Barra de botões de meses controlando as linhas debaixo via collapse -->
            <div class="atomic_card background_white" id="acordiao">
                <div class="row">
                    <p class="escala1 bold">Seu histórico: </p>
                    <div class="col-12 d-flex justify-content-between">
                        <?php foreach($historico->seis_meses as $mes){
                            ?>
                            <p>
                                <button class="btn btn-outline-danger target_js" type="button" data-toggle="collapse" data-target="<?php echo '#'.$mes['classe'];?>" aria-expanded="false" aria-controls="<?php echo $mes['classe'];?>"><?php echo $mes['data'];?></button>
                            </p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $historico_pagamentos = $historico->pegaHistoricoPagamento($current_user);
                    foreach($historico->seis_meses as $mes){
                        ?>
                        <!-- Uma row para cada mês de histórico -->
                        <div class="col-12 col-md-12 row collapse target_js pt-4" id="<?php echo $mes['classe'];?>" data-parent="#acordiao">
                            <?php
                            if($historico_pagamentos[$mes['classe']]){
                                ?>
                                <!-- Coluna da esquerda  -->
                                <div class="col-4">
                                    <!-- Card de remuneração  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="escala3 bold mb-0"> <span class="onipink">Ø</span> <?php echo $historico_pagamentos[$mes['classe']]['onions_competencia']+$historico_pagamentos[$mes['classe']]['onions_papeis'];?></p>
                                            <p class="escala0 bold mb-4 pb-4">Total de onions</p>

                                            <p class="escala3 bold mb-0"> <span class="onipink">R$</span> <?php echo $historico_pagamentos[$mes['classe']]['remuneracao'];?></p>
                                            <p class="escala0 bold mb-4 pb-4">Valor da NF-e</p>

                                        
                                        </div>
                                    </div> 
                                    <!-- Card de guardas  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="escala0 bold onipink">Guardião de:</p>
                                            <?php
                                            foreach($historico_pagamentos[$mes['classe']]['guardas'] as $guarda){
                                                ?>
                                            <p class="escala-1"><?php echo $titulo_guardas['choices'][$guarda['papel']]." de ".$guarda['projeto']?> </p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>         
                                </div>
                                <!-- Coluna da direita  -->
                                <div class="col-8">
                                    <!-- Card de competências  -->
                                    <div class="row">
                                        <div class="col-12" style="column-count: 2; column-gap: 4em;">
                                             <?php
                                            include(get_stylesheet_directory() . '/template-parts/user-competencias-historico.php');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }else{
                                ?>
                                <p>você não tem lançamentos desse mês</p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <?php
    //Se for outro usuário vendo o perfil dele
}else{
    ?>
        <div class="col-8">
            <?php
             $historico = new historico;
             $historico_pagamentos = $historico->pegaHistoricoPagamento($current_user);
             $ultimo_do_historico = end($historico_pagamentos);
             echo "<pre>";
             var_dump($ultimo_do_historico['competencias']);
             echo "</pre>";

            ?>
        </div>
    <?php
    }
    ?>
</div>

<?php get_footer();?>