<h2>Confronta carte</h2>
<section>
	<form>
		<div class="form-group scrollFocus" id="confrCarte">
			<div class="row">
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaOne"></span>
						<input type="checkbox" data-column="cimpronta" value="nav_priv_wbx_compara_carte_cartiprOne">
						<p class="note">CARTIMPRONTA ONE</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaGold"></span>
						<input type="checkbox" data-column="cgp">
						<p class="note">CARTIMPRONTA GOLD PLUS</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaJeans"></span>
						<input type="checkbox" data-column="cprep">
						<p class="note">CARTA PREPAGATA</p>
					</label>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div id="tabellaComparazione" class="comparazioneFocus">
		<div class="headerContainerNoBootS">
        	<div class="tableContainerNoBootS">
				<table cellspacing="0" cellpadding="0" border="0" id="confrontaTable">
					<thead>
						<tr data-type="titolo">
								<th data-field="primaColonna" width="20%">&nbsp;</th>
								<th id="bancomatTitle" data-field="bancomatTitle" width="20%">Bancomat</th>
								<th data-field="cartaOneTitle" width="20%">&nbsp;</th>
								<th data-field="cartaGoldTitle" width="20%">&nbsp;</th>
								<th data-field="cartaJeansTitle" width="20%">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr class="titoloCaption visible-xs">
							<td>Caratteristiche principali</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Caratteristiche principali</td>
						</tr>
						<tr data-type="tipologia">
							<td>Tipologia</td>
							<td>Carta di debito</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption visible-xs">
							<td>Condizioni economiche</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Condizioni economiche</td>
						</tr>
						<tr data-type="canone">
							<td>Canone annuo</td>
							<td>Gratuito</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="costoPrelievo">
							<td>Costo prelievo ATM</td>
							<td>&euro; 0 in tutti gli sportelli ATM dell'area EURO; 2% del controvalore (con importo minimo di &euro; 3,62) con 1% di maggiorazione per il tasso di cambio nei Paesi Extra Euro</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="costoAnticipoCont" >
							<td>Costo anticipo contante</td>
							<td>-</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="commPag">
						<td>Commissione sui pagamenti</td>
						<td>€ 0 per i pagamenti in area EURO; 2% del controvalore nei Paesi Extra Euro; maggiorazione tasso di cambio 1%</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="platfond">
							<td>Plafond</td>
							<td>Max &euro; 7.750</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<tr class="titoloCaption visible-xs">
							<td>Servizi e Benefici</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Servizi e Benefici</td>
						</tr>
						<tr data-type="utilizzoOnline">
							<td>Utilizzo online</td>
							<td class="align-center"><i class="icon icon-alert_error icon-2x stato-ko"></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="cartaAgg">
							<td>carta aggiuntiva</td>
							<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="promozioni">
							<td>Promozioni e Programmi fedelt&agrave;</td>
							<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="btnRow">
							<td class="align-center"></td>
							<td class="align-center">
								<div class="form-group btnWrapper">
									<div><a type="button" class="btn btn-primary btn-small" id="">richiedi ora</a></div></div><a href="">leggi di pi&ugrave;</a></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>



<script>
 var $table = $('#confrontaTable');
	$(function () {
	/*if(isSmallDevice){
	 	$table.bootstrapTable();
	 	 $table.bootstrapTable('mergeCells', {
			index: 0,
			field: 'primaColonna',
			colspan: 5
		 })
		 $table.bootstrapTable('mergeCells', {
			index: 2,
			field: 'primaColonna',
			colspan: 5
		 })
		  $table.bootstrapTable('mergeCells', {
			index: 5,
			field: 'primaColonna',
			colspan: 5
		 })
	 }*/
	//ARRAY DI OGGETTI STATICI
	//var htmlTable = new Array,
	var chekBox = $('.confronta-carte input[type=checkbox]'),
		
		htmlTable =  {
		"cimpronta" : {
			titolo : 'Cartimpronta ONE',
			tipologia : 'Carta di credito',
			canone : 'Gratuito',
			costoPrel : '---',
			costoAntCont: '3% del valore con un minimo di € 3 in tutto il mondo (prelievo all\'ATM); 3% del valore con un minimo di € 4 (prelievo allo sportello)',
			commPag : 'Maggiorazione dell\'1.5% sul tasso di cambio per gli acquisti in valuta diversa dall\'Euro',
		    platfond : 'Min. € 500 / Max € 7.800',
		    utilizzoOnline: '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    btn : '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/nsf/RichiestaCartimprontaOneFdr.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartimpr_one&amp;OBS_REF=Card_confr_btn_imprntone_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'COL=carte&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartimpr_one&amp;OBS_REF=Card_confr_link_imprntone_scheda\');">leggi di più</a>'
										
		},
		"cgp" : {
			titolo : 'Cartimpronta Gold Plus',
			tipologia : 'Carta di credito ORO',
			canone : '€ 49 (Gratuito se effettui una spesa minima di € 9.000/anno)',
			costoPrel: '---',
			costoAntCont: '3% del valore con un minimo di € 3 in tutto il mondo (prelievo all\'ATM); 3% del valore con un minimo di € 4 (prelievo allo sportello)',
		    commPag : 'Maggiorazione dell\'1.5% sul tasso di cambio per gli acquisti in valuta diversa dall\'Euro',
		    platfond : 'Min. € 5.200 / Max € 30.000',
		    utilizzoOnline: '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    btn: '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_gold_plus_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartimpr_gold_plus&amp;OBS_REF=Card_confr_btn_imprntgold_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_gold_plus_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartimpr_gold_plus&amp;OBS_REF=Card_confr_link_imprntgold_scheda\');">leggi di più</a>'
		},
		"cprep" :  {
			titolo : 'Carta Kje@ns',
			tipologia : 'Carta prepagata',
			canone : 'Gratuito',
			costoPrel : 'Gratis su ATM del Gruppo Banco BPM; € 2 su ATM di altre banche in area Euro; € 3 nei Paesi extra-Euro',
			costoAntCont: '---',
			commPag : 'Maggiorazione dell\'2% sul tasso di cambio per gli acquisti in valuta diversa dall\'Euro',
			platfond : 'Max € 3.000',
			utilizzoOnline: '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			btn: '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/nsf/RichiestaCartaKjeans.action\',null,\'page=first&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartaKjeans_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartaKjeans&amp;OBS_REF=Card_confr_btn_Kjeans_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartaKjeans_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartaKjeans&amp;OBS_REF=Card_confr_link_Kjeans_scheda\');">leggi di più</a>'
		}
	}
	
	//resetta l'html delle celle
	var trAttr = $table.find('tr[data-type]');
	var resetHtmlTd = function () {
		trAttr.each(function(){
			for(i=2; i<=4;i++) {
				$(this).find('td,th').eq(i).html('');
			}
		})
		
	}

	$('.confronta-carte input[type=checkbox]').click(function () {
   			var attribArr = [];
   			var el = $(this);
   			if (el.prop('checked')) {
   				el.closest('.confronta-carte').addClass('selected');
   			} else {
   				el.closest('.confronta-carte').removeClass('selected');
   			}
   			//console.log(htmlTable);
			
			chekBox.each(function (index,checkBox){
				if($(this).is(":checked")) {
					var attrib = $(this).attr('data-column');
					attribArr.push(attrib);
				}
				
			});
			resetHtmlTd();
			
   			$.each(attribArr,function(i,v){
   					var v;
					switch (v) {
					  case "cimpronta":
					  		trTitolo = htmlTable.cimpronta.titolo,
					  		trTipologia = htmlTable.cimpronta.tipologia,
					    	trCanone = htmlTable.cimpronta.canone,
					    	trCostoPrel = htmlTable.cimpronta.costoPrel,
					    	trCostoAntCont = htmlTable.cimpronta.costoAntCont,
					    	trCommPag = htmlTable.cimpronta.commPag,
					    	trPlatfond= htmlTable.cimpronta.platfond,
					    	trUtilizzoOnline= htmlTable.cimpronta.utilizzoOnline,
					    	trCartaAgg= htmlTable.cimpronta.cartaAgg,
					    	trPromozioni = htmlTable.cimpronta.promozioni,
					    	trBtn = htmlTable.cimpronta.btn

					  break;
					  case "cgp":
					  		trTitolo = htmlTable.cgp.titolo,
					  		trTipologia = htmlTable.cgp.tipologia,
					    	trCanone = htmlTable.cgp.canone,
					    	trCostoPrel = htmlTable.cgp.costoPrel,
					    	trCostoAntCont = htmlTable.cgp.costoAntCont,
					    	trCommPag = htmlTable.cgp.commPag,
					    	trPlatfond= htmlTable.cgp.platfond,
					    	trUtilizzoOnline= htmlTable.cgp.utilizzoOnline,
					    	trCartaAgg= htmlTable.cgp.cartaAgg,
					    	trPromozioni = htmlTable.cgp.promozioni,
					    	trBtn = htmlTable.cgp.btn
					  break;
					  case "cprep":
					  		trTitolo = htmlTable.cprep.titolo,
					  		trTipologia = htmlTable.cprep.tipologia,
					    	trCanone = htmlTable.cprep.canone,
					    	trCostoPrel = htmlTable.cprep.costoPrel,
					    	trCostoAntCont = htmlTable.cprep.costoAntCont,
					    	trCommPag = htmlTable.cprep.commPag,
					    	trPlatfond= htmlTable.cprep.platfond,
					    	trUtilizzoOnline= htmlTable.cprep.utilizzoOnline,
					    	trCartaAgg= htmlTable.cprep.cartaAgg,
					    	trPromozioni = htmlTable.cprep.promozioni,
					    	trBtn = htmlTable.cprep.btn
					  break;
					  default:
				}
				$table.find("tr[data-type=titolo]").find('th').eq(i+2).html(trTitolo);
				$table.find("tr[data-type=tipologia]").find('td').eq(i+2).html(trTipologia);
				$table.find("tr[data-type=canone]").find('td').eq(i+2).html(trCanone);
				$table.find("tr[data-type=costoPrelievo]").find('td').eq(i+2).html(trCostoPrel);
				$table.find("tr[data-type=costoAnticipoCont]").find('td').eq(i+2).html(trCostoAntCont);
				$table.find("tr[data-type=commPag]").find('td').eq(i+2).html(trCommPag);
				$table.find("tr[data-type=platfond]").find('td').eq(i+2).html(trPlatfond);
				$table.find("tr[data-type=utilizzoOnline]").find('td').eq(i+2).html(trUtilizzoOnline);
				$table.find("tr[data-type=cartaAgg]").find('td').eq(i+2).html(trCartaAgg);
				$table.find("tr[data-type=promozioni]").find('td').eq(i+2).html(trPromozioni);
				$table.find("tr[data-type=btnRow]").find('td').eq(i+2).html(trBtn);
				
				
			})
   			



   		});

	});

</script>



