/* jshint strict:false */
/* globals $, resetErrors, setHasErrors, calcolaInteressiLV, cgi_script, alert,
	escapeHTML, viewBannerRetention, jqAJAXCall */
/* exported msgErroreDurataVincolo, msgErroreMargineFreshMoney, pressValidate, svuota, checkFields, calcoloTassoInteressi,
	settingInsertVincoloFresh, loadSetDescrVincolo, callSetDescrizioneVincolo, callDeleteVincolo, setButtonSvincola,
	setAnchorLabel, loadDeleteVincolo, funzAsterisco */

var msgErroreMargineVincolo = 'L&acute;importo inserito non &egrave; corretto perch&egrave; maggiore dell&#96;importo vincolabile.';
var msgErroreDurataVincolo = 'La durata inserita non &egrave; corretta';
var msgErroreMargineFreshMoney = 'L&acute;importo inserito non &egrave; corretto perch&egrave; maggiore dell&#96;importo disponibile su Extra Money';
var msgErroreImportoVincolo3 = 'L&acute;importo non &egrave; corretto: inserire solo numeri, senza virgole o punti';
var defaultDescForTd = 'Dai un nome alla linea';
var json = null;

String.prototype.replaceAll = function (target, replacement) {
    return this.split(target).join(replacement);
};

var isMissingVar = function (variable) {
    return (typeof variable == 'undefined' || variable === null);
};

// noinspection JSUnusedGlobalSymbols
var pressValidate = function (evt) {
    var key = evt.keyCode || evt.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        evt.returnValue = false;
        if (evt.preventDefault) evt.preventDefault();
    }
};

var svuota = function (id) {
    var $el = $(id);
    if ($el !== null && $el.val() !== "") {
        $el.val("");
    }
};

// noinspection JSUnusedGlobalSymbols
var checkFields = function (importoV) {
    resetErrors('#vincoloForm');
    var errors = [];
    var importo = $('#importoVincolo').val();
    if (importo === '') {
        errors.push({ field: $("#importoVincoloTD"), text: "Importo inserito non corretto" });
    } else if (importo.lastIndexOf('.') > 0 || isNaN(importo)) {
        errors.push({ field: $("#importoVincoloTD"), text: "Inserire solo numeri, senza virgole o punti" });
    } else if (Number(importo) > Number(importoV)) {
        errors.push({ field: $("#importoVincoloTD"), text: "Importo inserito maggiore dell'importo vincolabile" });
    }
    if (errors.length > 0) {
        setHasErrors(errors, "#vincoloForm");
        return true;
    }

    return false;

};

// noinspection JSUnusedGlobalSymbols
var checkFieldsExtraMoney = function (importoV) {
    resetErrors('#vincoloForm');
    var errors = [];
    var importo = $('#importoVincoloFresh').val();
    if (importo === '') {
        errors.push({ field: $("#importoVincoloExtraMoney"), text: "Importo inserito non Corretto" });
    } else if (importo.lastIndexOf('.') > 0 || isNaN(importo)) {
        errors.push({ field: $("#importoVincoloExtraMoney"), text: "Inserire solo numeri, senza virgole o punti" });
    } else if (Number(importo) > Number(importoV)) {
        errors.push({
            field: $("#importoVincoloExtraMoney"),
            text: "Importo inserito maggiore dell'importo vincolabile"
        });
    }
    if (errors.length > 0) {
        setHasErrors(errors, "#vincoloForm");
        return true;
    }

    return false;

};

// noinspection JSUnusedGlobalSymbols
var calcoloTassoInteressi = function (isExtraMoney) {
    var val, importo, moltiplicatore, rend, tassoL,
        $importoVincoloFresh, $importoVincolo;

    resetErrors('#vincoloForm');

    if (isExtraMoney) {
        $importoVincoloFresh = $('#importoVincoloFresh');
        val = $('#durataVincoloFresh').val().split("#");

        importo = $importoVincoloFresh.val();
        if (Number(importo) > 1000000) {
            importo = 1000000;
            $importoVincoloFresh.val(1000000);
        }

        moltiplicatore = val[9];
        rend = calcolaInteressiLV(importo, moltiplicatore);
        $("#interessiNettiFresh")[0].innerHTML = "<strong>" + rend[0] + " &euro;</strong>";

    } else {
        $importoVincolo = $('#importoVincolo');
        val = $('#durataVincolo').val().split("#");
        moltiplicatore = val[9];
        importo = $importoVincolo.val();
        if (Number(importo) > 1000000) {
            importo = 1000000;
            $importoVincolo.val(1000000);
        }
        tassoL = val[1];
        rend = calcolaInteressiLV(importo, moltiplicatore);
        $("#interessiLordi")[0].innerHTML = "<strong>" + rend[0] + " EUR *</strong>";
        $("#tassoLordo")[0].innerHTML = "<strong>" + tassoL + "%</strong>";
    }
};


var fillTable = function (result) {
    $('#tableVincoli').addClass("loading").bootstrapTable({
        data: result.dati,
        sortable: true,
        sortName: "idVincolo",
        sortOrder: "desc",
        rowStyle: function (row, index) {
            if (index % 2 === 0) {
                return { classes: 'dispari' };
            } else {
                return { classes: 'pari' };
            }
        },
        onPostBody: function () {
            setMovInTable(result);
        }
    }).removeClass("loading");
};

var callSetDescrVincolo = function (idL, nomeL, dataS) {
    $.ajax({
        type: 'POST',
        url: wrp_script_direct + '/conti/confermaVincoloConti.action?',
        data: {
            method: 'setDescrAjax',
            contoSelVincolo: $('#contoSelVincolo').val(),
            idLinea: idL,
            nomeLinea: nomeL,
            dataScadenza: dataS,
            cf: Math.random()
        },
        dataType: 'json',
        success: function (result) {
            if (result.esitoCall === 'true') {
                //1. chiudere l'overlayer
                //2. caricare la nuova tabella
                reFillTable();
            } else {
                alert('Errore reperimento dati');
            }
        },
        error: function () {
            alert('Errore reprerimento dati');
        }
    });
};

var loadSetDescrVincolo = function () {
    var idLinea = $("#idV").html();
    var nomeLinea = $("#nomeL").val();
    var dataS = $("#dataScadenzaV").html();
    callSetDescrVincolo(idLinea, nomeLinea, dataS);
};

var afterRefillTable = function (stato, msg) {
    if (stato === 'positivo') {
        $('#boxEsitoConferma').removeClass('negativo').addClass('positivo');
    } else {
        $('#boxEsitoConferma').removeClass('positivo').addClass('negativo');
    }
    $('#textConferma').html(msg);
    $('#layeralertConferma').modal('show');
    $('#layeralert2F').modal('hide');
};

var reFillTable = function (stato, msg) {
    $('#tableVincoli').bootstrapTable("destroy");
    $("#totVincoli").html('');
    $.ajax({
        type: 'POST',
        url: wrp_script_direct + '/conti/listaVincoliConti.action?',
        data: { method: 'ajax', contoSelVincolo: $('#contoSelVincolo').val(), tipoOrd: '', cf: Math.random() },
        dataType: 'json',
        success: function (result) {
            //mi salvo il json per usarlo in altri punti dello script
            json = result.dati;
            //valorizzo il totale vincolato
            $("#totVincoli").html('<strong>' + result.totImporto + ' EUR</strong>');
            //popolamento tabella
            fillTable(result);
            if (typeof stato != 'undefined' && typeof msg != 'undefined') {
                afterRefillTable(stato, msg);
            }
        },
        failure: function () {
            alert('Errore reperimento dati');
        }
    });
};

//settare Importo iniziale - Importo finale
var setMovInTable = function (jsonResult) {
    var importo;
    var importoScadenza;
    importo = jsonResult.totImporto;
    importoScadenza = jsonResult.totImportoScadenza;
    $('#totImporto').html(importo);
    $('#totImportoScadenza').html(importoScadenza + " *");
};

var callSetDescrizioneVincolo = function (index) {
    var vetDati = json;
    $("#importoV").html(vetDati[index].importoVincolato + ' EUR');
    $("#importoS").html(vetDati[index].importoAllaScadenza + ' EUR');
    $("#dataScadenzaV").html(vetDati[index].dataScadenza);
    $("#dataAperturaV").html(vetDati[index].dataApertura);
    $("#durataV").html(vetDati[index].durataVincolo + ' mesi');
    $("#idV").html(vetDati[index].idVincolo);
    $("#tassoL").html(vetDati[index].tassoLordo + '%');
    if (isMissingVar(vetDati[index].nomeLinea)) {
        $("#nomeL").val('');
    } else {
        $("#nomeL").val(vetDati[index].nomeLinea);
    }
};

var resetBoxDelete = function () {
    $("#conditionedinput").html('');
    $("#importoVincolo").html('');
    $("#importoTotVincolo").empty();
    $("#dataAperturaVincolo").html('');
    $("#dataScadenzaVincolo").html('');
    $("#idVincolo").html('');
    $("#tassoLVincolo").empty();
    $("#codCancellaVincolo").empty();
    $("#nomeLinea").html('');
};

var includeBanner = function (dataA, dataS) {
    $('#boxRetention').empty();
    if (viewBannerRetention(dataA, dataS)) {
        jqAJAXCall('POST', 'html', "/webankpri/wbOnetoone/resp/wbblack/ajax/json/getBannerRetention.jsp",
            function (html) {
                $("#boxRetention").html(html).show();
            },
            null, { dataScadenza: dataS, path: "NAV_SVINCOLA" }
        );
    }
};

var callDeleteVincolo = function (index) {
    var vetDati = json;
    var $conditionedinput = $("#conditionedinput");
    //se ci sono stati degli errori ripuliamo il form
    $conditionedinput.html('');
    var error = [];
    setHasErrors(error, "#deleteVincoloForm");
    resetBoxDelete();
    var importo = vetDati[index].importoVincolato;
    var dataA = vetDati[index].dataApertura;
    var dataS = vetDati[index].dataScadenza;
    var idVincolo = vetDati[index].idVincolo;
    var tassoL = vetDati[index].tassoLordo;
    var nomeL = null;
    if (isMissingVar(vetDati[index].nomeLinea))
        nomeL = "";
    else
        nomeL = vetDati[index].nomeLinea;
    $conditionedinput.val('');
    $("#importoVincolo").html(importo + ' EUR');
    $("#importoTotVincolo").val(importo);
    $("#dataAperturaVincolo").html(dataA);
    $("#dataScadenzaVincolo").html(dataS);
    $("#idVincolo").html(idVincolo);
    $("#tassoLVincolo").val(tassoL);
    $("#codCancellaVincolo").val(idVincolo);
    if (isMissingVar(nomeL)) {
        $("#nomeLinea").empty();
    } else {
        $("#nomeLinea").html(escapeHTML(nomeL));
    }
    $('#boxRetention').empty();
    includeBanner(dataA, dataS);
};

// noinspection JSUnusedGlobalSymbols
var setButtonSvincola = function (value, row, index) {
	if (json[index].prenotata === 0) {
		return "<i class='icon icon-2x icon-clessidra_fill closeable' data-toggle='tooltip' data-title='Linea vincolata in attesa di attivazione.<br>L&#39;importo finale comprensivo degli interessi sar&agrave; visualizzato al momento dell&#39;attivazione.' data-original-title='' title=''></i>";
	} else {
		if (json[index].nSvin === 0) {
	        return "<a href='#' onclick='callDeleteVincolo(" + index + ")' class='no-underline btn-icon' data-toggle='modal' data-target='#layeralert2'><i class='icon icon-2x icon-sicurezza_desktop'></i></a>";
	    } else {
	        return "<i class='icon icon-2x icon-sicurezza_desktop' title='Questa &egrave; la linea &quot;"+json[index].nomeLinea+"&quot;, non svincolabile, che hai attivato per ricevere il premio.'></i>";
	    }
	}
};

// noinspection JSUnusedGlobalSymbols
var setAnchorLabel = function (value, row, index) {
    var vetDati = json;
    if (typeof value == 'undefined' || value === 'inserisci nome linea')
        value = defaultDescForTd;
    if (vetDati[index].nSvin === 0)
        return "<a href='#' onclick='callSetDescrizioneVincolo(" + index + ")' class='no-underline btn-icon' data-toggle='modal' data-target='#layerSetDescrizioneVincolo'>" + value + "</a>";
    else
        return value;
};

var checkSvincoloFields = function (importoParziale, importoTot) {
    var errors = [];
    if (Number(importoParziale) > Number(importoTot)) {
        errors.push({ field: $("#conditionedinput"), text: "Importo maggiore dell'importo vincolato" });
    } else if (importoParziale.lastIndexOf(',') > 0 || importoParziale.lastIndexOf('.') > 0) {
        errors.push({ field: $("#conditionedinput"), text: "inserire solo numeri" });
    } else if (isNaN(importoParziale)) {
        errors.push({ field: $("#conditionedinput"), text: "Importo maggiore dell'importo vincolato" });
    } else if (Number(importoParziale) < 1) {
        errors.push({ field: $("#conditionedinput"), text: "Importo non valido" });
    }
    if (errors.length > 0) {
        setHasErrors(errors, "#deleteVincoloForm");
        return true;
    }

    return false;
};

var formatDouble = function (num) {
    //il numero ha la forma
    num = Number(num);
    var val = String(num);
    var numChar = val.indexOf('.');
    var decimal = 0;
    //se la parte decimale non e presente
    if (numChar === -1) {
        decimal = '00';
        numChar = val.length;
    } else {
        decimal = Number(val.substring(0, numChar + 3));
        if (Number(val.charAt(numChar + 3)) > 4) {
            decimal = decimal + 0.01;
        }
        decimal = String(decimal).substring(numChar + 1, numChar + 3);
        if (decimal.length === 1)
            decimal = decimal + '0';
    }
    val = val.substring(0, numChar);
    var result = '';
    var ind = 1;
    var i;
    for (i = numChar; i > 0; i--) {
        if (ind === 3 && i !== 1) {
            result = '.' + val.charAt(i - 1) + result;
            ind = 0;
        } else {
            result = val.charAt(i - 1) + result;
        }
        ind++;
    }
    result = result + ',' + decimal;
    return result;
};

var loadDeleteVincolo = function () {
    var $conditionedinput = $("#conditionedinput");
    var importo = $("#importoTotVincolo").val();
    var importoParziale = $conditionedinput.val();
    var importoTot = importo;
    importoTot = importoTot.replaceAll('.', '');
    importoTot = importoTot.replace(',', '.');
    if (importoParziale !== null && importoParziale !== "") {
        if (!checkSvincoloFields(importoParziale, importoTot)) {
            $("#importoVincoloF").html('<strong>' + formatDouble(importoParziale) + ' EUR</strong>');
            $('#layeralert2').modal('hide');
            $('#layeralert2F').modal('show');
        } else {
            $('#layeralert2').modal('show');
            $('#layeralert2F').modal('hide');
        }
    } else {
        var error = [];
        setHasErrors(error, "#deleteVincoloForm");
        $conditionedinput.html('');
        $('#layeralert2').modal('hide');
        $('#layeralert2F').modal('show');
        $("#importoVincoloF").html('<strong>' + importo + ' EUR</strong>');
    }
    $('#button_en').show();
    $('#button_dis').hide();
    $('#confermaDelete').closest('.btn-align-right').removeClass("loading");

};

var clickDeleteVincolo2 = function () {
    var contoCD = $("#contoSelVincolo").val();
    var importoTot = $("#importoTotVincolo").val();
    importoTot = importoTot.replaceAll('.', '');
    importoTot = importoTot.replace(',', '.');
    var importoParziale = $("#conditionedinput").val();
    var isParz = false;
    if (importoParziale !== null && importoParziale !== "") {
        isParz = true;
    }
    var codVincolo = $("#codCancellaVincolo").val();
    var tassoL = $("#tassoLVincolo").val();
    tassoL = tassoL.replace(',', '.');
    var dataFin = $("#dataScadenzaVincolo").html();
    var dataIn = $("#dataAperturaVincolo").html();

    $('#confermaDelete').closest('.btn-align-right').addClass("loading");
    $('#button_en').hide();
    $('#button_dis').show();
    $.ajax({
        type: 'GET',
        url: wrp_script_direct + "/conti/confermaVincoloConti.action",
        data: {
            method: 'deleteAjax',
            contoSelVincolo: contoCD,
            importoVincolo: importoTot,
            importoParzVincolo: importoParziale,
            isParzVincolo: isParz,
            codVincolo: codVincolo,
            tassoLVin: tassoL,
            dataFinVin: dataFin,
            dataInVin: dataIn,
            cf: Math.random()
        },
        dataType: 'json',
        success: function (deleteResult) {
            var stato, msg;
            if (deleteResult !== null && deleteResult.codEsitoCall !== null && deleteResult.codEsitoCall === '0') {
                stato = 'negativo';
                msg = '<p><strong>Attenzione!</strong></p><ul><li><strong>' + deleteResult.msgEsitoCall + '</strong></li></ul>';
            } else if (deleteResult !== null && deleteResult.esitoCall !== null && deleteResult.esitoCall === 'true') {
                stato = 'positivo';
                msg = '<p>Operazione eseguita correttamente</p>';
            } else {
                stato = 'negativo';
                msg = '<p><strong>Attenzione!</strong></p><ul><li><strong>Errore reperimento dati</strong></li></ul>';
            }
            reFillTable(stato, msg);
        },
        failure: function () {
            alert('Errore reperimento dati');
        }
    });
};

// noinspection JSUnusedGlobalSymbols
var funzAsterisco = function (value) {
    return value + " *";
};

$(function () {
    $('#confermaDelete').on("click", clickDeleteVincolo2);
});

