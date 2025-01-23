<?php

/**
 * Template Name: formulaire
 */

 ?>

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://use.typekit.net/mym6gdz.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="shortcut icon" href="<?php bloginfo("template_url");  ?>/images/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body <?php body_class(); ?> style="background: url('https://cimelta-madagascar.com/wp-content/themes/cimelta-theme/images/CIMELTA-filigraneA4.png');background-repeat: no-repeat; background-size: cover; ">
    <?php $form = GFAPI::get_form(1);
//        var_dump($form);e
    ?>
<div class="container">
    <div class="row mb-4">
        <div class="row d-flex justify-content-center">
            <a href="https://cimelta-madagascar.com" class="row d-flex justify-content-center "><img class="mb-3" src="<?php bloginfo("template_url");  ?>/images/logo-CIMELTA.png" style="width: 250px;"></a>
            <h1 class="text-danger text-center" style="font-weight: bold;"><?php echo $form['title']; ?></h1>
        </div>
        <div class="row mb-4"></div>
        
        <h4><?php echo $form['description']; ?></h4>
        <?php // echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
    </div>
    
    <div class="row mb-2">
        <form method="post" class="form-inline needs-validation" enctype="multipart/form-data" id="gform_<?php echo $form['id']?>" action="/">
            <div class="gform_body">
                <div class="form-group row mb-4">
                    <?php $idFormName = [0, 1]; 
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-6 row mb-2 gfield gfield_error gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <div class="col-md-4">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *:</label>
                        </div>
                        <div class="col-md-7">
                            <input name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" type="<?php echo $form['fields'][$idFormName[$i]]['type']; ?>" placeholder="<?php echo $form['fields'][$idFormName[$i]]['label']; ?>" aria-required="true" class="form-control" required>
                            
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                </div>
                <div class="form-group row mb-4">
                    <?php $idFormName = [2, 3]; 
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-6 row mb-2">
                        <div class="col-md-4">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *:</label>
                        </div>
                        <div class="col-md-7">
                            <input name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" type="<?php echo $form['fields'][$idFormName[$i]]['type']; ?>" placeholder="<?php echo $form['fields'][$idFormName[$i]]['label']; ?>" class="form-control" aria-invalid="false" required>
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                </div>
                 <div class="form-group row mb-4">
                    <?php $idFormName = [4]; 
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-6 row mb-2">
                        <div class="col-md-4">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *:</label>
                        </div>
                        <div class="col-md-7">
                            <input name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" type="<?php echo $form['fields'][$idFormName[$i]]['type']; ?>" placeholder="<?php echo $form['fields'][$idFormName[$i]]['label']; ?>" class="form-control" aria-invalid="false" required>
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                     
                     <?php $idFormName = [5]; 
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-6 row mb-2">
                        <div class="col-md-4">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *:</label>
                        </div>
                        <div class="col-md-7">
                            <input name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" type="<?php echo $form['fields'][$idFormName[$i]]['text']; ?>" placeholder="<?php echo $form['fields'][$idFormName[$i]]['label']; ?>" class="form-control" aria-invalid="false" required>
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                </div>
                
                <div class="form-group row mb-4">
                    <?php $idFormName = [6]; 
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-12 row mb-2">
                        <div class="col-md-3">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *:</label>
                        </div>
                        <div class="col-md-8">
                            <input name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" type="<?php echo $form['fields'][$idFormName[$i]]['text']; ?>" placeholder="<?php echo $form['fields'][$idFormName[$i]]['label']; ?>" class="form-control" aria-invalid="false" required>
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                </div>
                
                <div class="form-group row mb-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4>Nous vous prions de bien vouloir exprimer votre niveau de satisfaction par rapport &agrave; la : </h4>
                    <div class="form-group row mb-4">
                        <h2>A - QUALITÉ DE L'OFFRE</h2>
                    </div>

                    <div class="form-group row mb-4">
                        <?php $idFormName = [8, 9, 10]; 
                            for ($i = 0; $i < count($idFormName); $i++):
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 row mb-2" style="margin-right: 10px;">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *</label>

                            <select name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" class="medium gfield_select" aria-invalid="false" required>

                            <?php 
                                $formChoice = $form['fields'][$idFormName[$i]];
                                $count = count($formChoice["choices"]);
                                for ($j = 0; $j < $count; $j++):
                                ?>
                                <option value="<?php echo $formChoice['choices'][$j]['value']; ?>"><?php echo $formChoice['choices'][$j]['text']; ?></option>

                            <?php 
                                endfor;
                            ?>
                            </select>
                        </div>
                        <?php 
                            endfor;
                        ?>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row mb-4">
                        <h2>B - RÉALISATION DU PRODUIT</h2>
                    </div>

                    <div class="form-group row mb-4">
                        <?php $idFormName = [12, 13, 14, 15, 16, 17, 18, 19, 20]; 
                            for ($i = 0; $i < count($idFormName); $i++):
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 row mb-2" style="margin-right: 10px;">
                            <label class="gfield_label" for="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>"><?php echo $form['fields'][$idFormName[$i]]['label']; ?> *</label>

                            <select name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" class="medium gfield_select" aria-invalid="false" required>

                            <?php 
                                $formChoice = $form['fields'][$idFormName[$i]];
                                $count = count($formChoice["choices"]);
                                for ($j = 0; $j < $count; $j++):
                                ?>
                                <option value="<?php echo $formChoice['choices'][$j]['value']; ?>"><?php echo $formChoice['choices'][$j]['text']; ?></option>

                            <?php 
                                endfor;
                            ?>
                            </select>
                        </div>
                        <?php 
                            endfor;
                        ?>
                    </div>
                </div>
                </div>
                
                <div class="form-group row mb-4">
                    <h2>C - VOS SUGGESTIONS D'AMÉLIORATION :</h2>
                </div>
                <div class="form-group row mb-4">
                    <?php $idFormName = [22]; 
                        
                        for ($i = 0; $i < count($idFormName); $i++):
                    ?>
                    <div class="col-md-12 row mb-2">
                        <div class="col-md-12 col-12 row">
                            <textarea name="input_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" id="input_1_<?php echo $form['fields'][$idFormName[$i]]['id']; ?>" class="textarea medium" aria-invalid="false" rows="10" cols="50"></textarea>
                        </div>
                    </div>
                    <?php 
                        endfor;
                    ?>
                </div>
                
            </div>
            <div class="gform_body gform_footer top_label mb-2"> 
                <button class="btn btn-primary" type="submit">Envoyer</button>
                <!--<input type="submit" id="gform_submit_button_<?php echo $form['id']?>" class="gform_button btn btn-success d-none" value="EnvoyÃ©" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }">--> 
                <input type="hidden" class="gform_hidden" name="is_submit_<?php echo $form['id']?>" value="<?php echo $form['id']?>">
                <input type="hidden" class="gform_hidden" name="gform_submit" value="<?php echo $form['id']?>">

                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                <input type="hidden" class="gform_hidden" name="state_<?php echo $form['id']?>" value="WyJbXSIsIjQ3ZWIxMjk5NjJmMTVlNmIxYjc3MmUwNWMzMmRmNjIxIl0=">
                <input type="hidden" class="gform_hidden" name="gform_target_page_number_<?php echo $form['id']?>" id="gform_target_page_number_1" value="0">
                <input type="hidden" class="gform_hidden" name="gform_source_page_number_<?php echo $form['id']?>" id="gform_source_page_number_1" value="1">
                <input type="hidden" name="gform_field_values" value="">

            </div>
        </form> 
    </div>
    <div class="row mb-5">
        (*) obligatoire <br>
        Ce questionnaire est important pour nous aider &agrave; mieux satisfaire vos besoins futurs     
    </div>
</div>
    

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation');

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault();
                  event.stopPropagation();
                  console.log("r");
                }
                console.log("e");
                form.classList.add('was-validated')
              }, false)
            })
        })()
    })
</script>
</body>
</html>
