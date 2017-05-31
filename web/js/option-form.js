// Adrien - Fonction pour affichage dynamique des templates dans page template/options
$(document).ready(function() {
    $('#option_template').change(function(){
        $('.templates').hide();
        $('#' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des couleurs dans page template/options
$(document).ready(function() {
    $('#option_couleur').change(function(){
        $('.couleurs').hide();
        $('#' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des puces dans page template/options
$(document).ready(function() {
    $('#option_puce').change(function(){
        $('.puces').hide();
        $('#' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des fonds dans page template/options
$(document).ready(function() {
    $('#option_fond').change(function(){
        $('.fonds').hide();
        $('#' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des indicateurs_performance dans page template/options
$(document).ready(function() {
    $('#option_indicateur_performance').change(function(){
        $('.indicateurs-performance').hide();
        $('#' + $(this).val()).show();
    });
});

// Adrien - Fonction pour affichage dynamique des icones d'activités dans page template/options
$(document).ready(function() {
    $('#option_activite').change(function(){
        $('.activites').hide();
        $('#' + $(this).val()).show();
    });
});



