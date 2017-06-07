// Adrien - Fonction pour affichage dynamique des templates dans page template/options
$(function() {
    $('.templates').hide();
    $('.templates-first').show();
    $('#option_template').change(function(){
        $('.templates').hide();
        $('#template-' + $(this).val()).show();
    });
});


// Adrien - Fonction pour affichage dynamique des indicateurs_performance dans page template/options
$(function() {
    $('.indicateurs-performance').hide();
    $('.indicateurs-performance-first').show();
    $('#option_indicateur_performance').change(function(){
        $('.indicateurs-performance').hide();
        $('#indicateur-' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des icones d'activités dans page template/options
$(function() {
    $('.activites').hide();
    $('.activites-first').show();
    $('#option_activite').change(function(){
        $('.activites').hide();
        $('#activite-' + $(this).val()).show();
    });
});


// Rudy - Fonction pour affichage dynamique des puces dans page template/options
$(function() {
    $('.puce').hide();
    $('.puce-first').show();
    $('#option_puce').change(function(){
        $('.puce').hide();
        $('#puce-' + $(this).val()).show();
    });
});  

// Rudy - Fonction pour affichage dynamique des couleurs dans page template/options
$(function() {
    $('.couleur').hide();
    $('.couleur-first').show();
    $('#option_couleur').change(function(){
        $('.couleur').hide();
        $('#couleur-' + $(this).val()).show();
    });
});  



