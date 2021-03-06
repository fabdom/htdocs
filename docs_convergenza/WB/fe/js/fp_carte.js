"use strict";
// ################## CAROUSEL CARTE ####################### ")

$(function () {
    $("#carouselCarte").carousel(
        { interval: 6000 }
    );
});

// ################## CONFRONTA CARTE ####################### 

// Variabili globali per il "confronta carte"
var cardSelWrap, cResults, btConfSubmit, noCardsMsg;
// Selezione delle features e delle carte abbinate alle stesse
var cardFeatures = {
    "Prelievi": {
        "title": "Prelievi gratuiti",
        "icona": "prelievi_gratuiti_grid64-f",
        "iconasel": "prelievi_gratuiti_grid64-o",
        "cards": ["bancomat"]
    },
    "Acqmondo": {
        "title": "Acquisti in tutto il mondo",
        "icona": "acquisti_mondo_grid64-f",
        "iconasel": "acquisti_mondo_grid64-o",
        "cards": ["cartiprOne", "cartaPrepaid"]
    },
    "Acqonline": {
        "title": "Acquisti online",
        "icona": "acquisti_online_grid64-f",
        "iconasel": "acquisti_online_grid64-o",
        "cards": ["cartaPrepaid", "cartiprOne"]
    },
    "Promo": {
        "title": "Promozioni",
        "icona": "promozioni_grid64-f",
        "iconasel": "promozioni_grid64-o",
        "cards": ["cartiprOne", "cartaPrepaid"]
    },
    "Mass": {
        "title": "Massimali elevati",
        "icona": "massimali_elevati_grid64-f",
        "iconasel": "massimali_elevati_grid64-o",
        "cards": ["cartiprGoldPlus"]
    },
    "Famiglia": {
        "title": "Carta aggiuntiva",
        "icona": "carta_aggiuntiva_grid64-f",
        "iconasel": "carta_aggiuntiva_grid64-o",
        "cards": ["cartaPrepaid", "cartiprOne"]
    }

};

/* Array contenente le sole carte da mostrare */
/*
Nascondere per il momento la cartaPrepaid, perché ancora non disponibile
var cardsToShow = ["bancomat", "cartaPrepaid", "cartiprOne", "cartiprGoldPlus"];
*/
var cardsToShow = ["bancomat", "cartiprOne", "cartiprGoldPlus"];

/* Prefisso per il navigatore */
var cardNavPrefix = "nav_priv_wbx_compara_carte_";

/* Funzione click su una feature */
function featClick() {
    $(this).toggleClass("selected");

    /* svuota il campo con l'elenco delle carte selezionate */
    btConfSubmit.removeClass("btn-primary").addClass("btn-disabled");
    var selectedCards = [];
    /* Recheck tra carte e features */
    cResults.find("a.carta").addClass("disabled");
    var selFeat = cardSelWrap.find(".selected");
    $.each(selFeat, function (i, v) {
        $.each(cardFeatures[$(v).attr("data-feat")].cards, function (ind, val) {
            var cel = $("#card_" + val);
            if ($.inArray(cardNavPrefix + val, selectedCards) < 0) selectedCards.push(cardNavPrefix + val);
            if (cel.hasClass("disabled")) cel.switchClass("disabled", "", 200);
            btConfSubmit.addClass("btn-primary").removeClass("btn-disabled");
        });
    });
    if (selFeat.length > 0) {
        noCardsMsg.fadeOut()
    } else {
        noCardsMsg.fadeIn()
    }

    $("#elCarte").val(selectedCards.join(","));
}

function cardDetail() {
    var card = $(this);
    if (!card.hasClass("disabled")) {
        location.href = card.attr("data-gotolink");
    }
}

function cardConfSubmit() {
    if (!($(this).hasClass("btn-disabled"))) $("form[name=featConfrontaForm]").submit();
}

(function featChartInit() {
    $(function () {
        /* Carica il JSON con le carte da mostrare */
        $.ajax({
            url: fpCarteLinks.menuCards,
            success: function (data) {
                cardSelWrap = $("#cardSelection").find(".row");
                cResults = $("#cardResults").find(".row");
                btConfSubmit = $("#btConfrontaCarte");
                noCardsMsg = $("#noCardSelected span");
                // Inserisce i le features cliccabili
                var delaySecs = 0;
                $.each(cardFeatures, function (k, v) {
                    var clickIcon = $("<a>").addClass("bigTapIcon").attr("data-feat", k).append($("<i>").addClass("icon icon-" + v.icona), $("<i>").addClass("icon active icon-" + v.iconasel)).click(featClick);
                    var cFeat = $("<div>").addClass("feature col-sm-2").hide().append(clickIcon, $("<span>").html(v.title));
                    cardSelWrap.append(cFeat.delay(delaySecs).fadeIn());
                    delaySecs = delaySecs + 150;
                });

                /* Carica le carte */
                $.each(cardsToShow, function (i, v) {
                    var cardData = data[v];
                    var cId = cardData.id.replace(cardNavPrefix, "");
                    var card = $("<a>").attr({
                        "id": "card_" + cId,
                        "data-gotolink": cardData.link
                    }).addClass("carta disabled").click(cardDetail);
                    card.append(
                        $("<img src=\"/WB/fe/img/carta_small_" + cId.toLowerCase() + ".gif\" alt=\"Immagine carta\">"),
                        $("<span>").html(cardData.name)
                    );
                    cResults.append(card);
                });
                $("#confrontaCarte").removeClass("loading");

                /* Pulsante confronta carte */
                btConfSubmit.click(cardConfSubmit);
            },
            error: function () {
                console.debug("Errore nel reperimento dei dati sulle carte.");
            }
        })
    });
})();
