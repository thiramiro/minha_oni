<?php
/*
* Users
* Cria os campos personalizados de dados e metaprogramas para os onis
*/

class user_oni{



    //disparando a classe
    public function __construct(){

        add_action('init', array($this,'adicionar_campos_ACF')); 
        add_action('init', array($this,'adicionar_campos_meta_ACF')); 
        add_action('init', array($this,'check_flush_rewrite_rules')); 

    }

   
    //Adicionando os campos do ACF
    public function adicionar_campos_ACF(){
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_5f3fe0d54faef',
                'title' => 'Dados pessoais dos Onis',
                'fields' => array(
                    array(
                        'key' => 'field_5f6b7bf57ad45',
                        'label' => 'Informações gerais',
                        'name' => 'informacoes_gerais',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => 'col-6',
                            'id' => '',
                        ),
                        'acfe_permissions' => '',
                        'layout' => 'block',
                        'acfe_seamless_style' => 0,
                        'acfe_group_modal' => 0,
                        'acfe_settings' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5f6b74198a3f4',
                                'label' => 'Nome completo',
                                'name' => 'nome_completo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'acfe_permissions' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'acfe_settings' => '',
                                'acfe_validate' => '',
                                'acfe_form' => true,
                            ),
                            array(
                                'key' => 'field_5f6b746ba4628',
                                'label' => 'Celular',
                                'name' => 'celular',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'acfe_permissions' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'acfe_settings' => '',
                                'acfe_validate' => '',
                                'acfe_form' => true,
                            ),
                            array(
                                'key' => 'field_5f6b7478a4629',
                                'label' => 'Data de nascimento',
                                'name' => 'data_de_nascimento',
                                'type' => 'date_picker',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'acfe_permissions' => '',
                                'display_format' => 'd/m/Y',
                                'return_format' => 'd/m/Y',
                                'first_day' => 1,
                                'acfe_settings' => '',
                                'acfe_validate' => '',
                                'acfe_form' => true,
                            ),
                            array(
                                'key' => 'field_5f3fe1291be12',
                                'label' => 'Oniversário',
                                'name' => 'oniversario',
                                'type' => 'date_picker',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'display_format' => 'd/m/Y',
                                'return_format' => 'd/m/Y',
                                'first_day' => 1,
                                'acfe_form' => true,
                            ),
                            array(
                                'key' => 'field_600082989c452',
                                'label' => 'ID do granatum',
                                'name' => 'id_do_granatum',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'acfe_permissions' => array(
                                    0 => 'um_socio',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'acfe_settings' => '',
                                'acfe_validate' => '',
                                'acfe_form' => true,
                            ),
                        ),
                        'acfe_form' => true,
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'user_role',
                            'operator' => '==',
                            'value' => 'all',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'acf_after_title',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => array(
                    0 => 'permalink',
                    1 => 'block_editor',
                    2 => 'the_content',
                    3 => 'excerpt',
                    4 => 'discussion',
                    5 => 'comments',
                    6 => 'revisions',
                    7 => 'slug',
                    8 => 'author',
                    9 => 'format',
                    10 => 'page_attributes',
                    11 => 'featured_image',
                    12 => 'categories',
                    13 => 'tags',
                    14 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
                'acfe_display_title' => '',
                'acfe_autosync' => '',
                'acfe_permissions' => '',
                'acfe_form' => 1,
                'acfe_meta' => '',
                'acfe_note' => '',
            ));
            
            endif;
    }
     //Adicionando os campos do ACF
     public function adicionar_campos_meta_ACF(){
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_5dfb9369eac70',
                'title' => 'Metaprograma',
                'fields' => array(
                    
                    array(
                        'key' => 'field_5dfb939ad43a9',
                        'label' => 'Motivação1',
                        'name' => 'motivacao1',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Busca por prazer' => 'Busca por prazer',
                            'Fuga da dor' => 'Fuga da dor',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5dfb94196506a',
                        'label' => 'Motivação2',
                        'name' => 'motivacao2',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Interno' => 'Interno',
                            'Externo' => 'Externo',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5dfb948f6506b',
                        'label' => 'Motivação3',
                        'name' => 'motivacao3',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Independente' => 'Independente',
                            'Proximidade' => 'Proximidade',
                            'Cooperativo' => 'Cooperativo',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5dfb954f5bb86',
                        'label' => 'Convencimento1',
                        'name' => 'convencimento1',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Visual' => 'Visual',
                            'Cinestésico' => 'Cinestésico',
                            'Auditivo' => 'Auditivo',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5dfb9719f91f5',
                        'label' => 'Decisão2',
                        'name' => 'decisao2',
                        'type' => 'button_group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            0 => 'Mesmo',
                            '0.1' => '10%',
                            '0.2' => '20%',
                            '0.3' => '30%',
                            '0.4' => '40%',
                            '0.5' => '50%',
                            '0.6' => '60%',
                            '0.7' => '70%',
                            '0.8' => '80%',
                            '0.9' => '90%',
                            1 => 'Diferente',
                        ),
                        'allow_null' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_5dfb95745bb87',
                        'label' => 'Convencimento2',
                        'name' => 'convencimento2',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Sempre' => 'Sempre',
                            'Vezes' => 'Vezes',
                            'Automático' => 'Automático',
                            'Tempo' => 'Tempo',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5dfb972df91f6',
                        'label' => 'Decisão3',
                        'name' => 'decisao3',
                        'type' => 'button_group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            0 => 'Opçoes',
                            '0.1' => '10%',
                            '0.2' => '20%',
                            '0.3' => '30%',
                            '0.4' => '40%',
                            '0.5' => '50%',
                            '0.6' => '60%',
                            '0.7' => '70%',
                            '0.8' => '80%',
                            '0.9' => '90%',
                            1 => 'Procedimentos',
                        ),
                        'allow_null' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_5dfb95df1ec2b',
                        'label' => 'Decisão1',
                        'name' => 'decisao1',
                        'type' => 'button_group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            0 => 'Proativo',
                            '0.1' => '10%',
                            '0.2' => '20%',
                            '0.3' => '30%',
                            '0.4' => '40%',
                            '0.5' => '50%',
                            '0.6' => '60%',
                            '0.7' => '70%',
                            '0.8' => '80%',
                            '0.9' => '90%',
                            1 => 'Reativo',
                        ),
                        'allow_null' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_5dfb9893d0eae',
                        'label' => 'Decisão-Global',
                        'name' => 'decisao-global',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5dfb98a1d0eaf',
                        'label' => 'Decisão-Global-Específico',
                        'name' => 'decisao-global-especifico',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5dfb98abd0eb0',
                        'label' => 'Decisão-Específico-Global',
                        'name' => 'decisao-especifico-global',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_5dfb98b5d0eb1',
                        'label' => 'Decisão-Específico',
                        'name' => 'decisao-especifico',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'user_role',
                            'operator' => '==',
                            'value' => 'all',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ));
            
            endif;
     }

    //Função pronta que dá um refresh nos permalinks
    public function check_flush_rewrite_rules(){
        $has_been_flushed = get_option($this->post_slug . '_flush_rewrite_rules');
        //if we haven't flushed re-write rules, flush them (should be triggered only once)
        if($has_been_flushed != true){
            flush_rewrite_rules(true);
            update_option($this->post_slug . '_flush_rewrite_rules', true);
        }
    }

}

//Criando o objeto
$user_oni = new user_oni;
?>