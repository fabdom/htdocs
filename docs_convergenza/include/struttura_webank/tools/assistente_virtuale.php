<!-- ASSISTENTE VIRTUALE -->
    <div id="virtAss" style="display:none">
        <div id="vaExtended" style="display:none">
            <div class="vaExtTop">
                <a href="javascript:;" id="vaLinguetta" title="Espandi"></a>
            </div>
            <div id="vaExtConsole" style="display:none">
            </div>
            <div class="vaExtBody"></div>
        </div>
        <div class="vaContainer">
            <div class="vaTop">
                <span id="vaTitle">Paolo, l'assistente virtuale</span>
                <a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
                <a href="javascript:;" class="vaWindow" title="Espandi/Riduci">&nbsp;</a>
            </div>
            <div class="vaFiletto" style="display:none"></div>
            <div class="vaBody">
                <div id="vaSpace"></div>
                <div class="vaConsole">
                    <a href="javascript:;" class="vaAudio" title="Mute on/off"></a>
                    <div id="vaSlider">
                        <a href="javascript:;" id="vaSliderCursor" title="Volume"></a>
                    </div>
                    <a id="vaTextControl" href="javascript:;"></a>
                </div>
                <div id="vaDialog">
                </div>
                <form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.val())" action="javascript:;" method="post">
                <div id="vaForm">
                    <input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda..."/>
                    <a title="Chiedi" class="btnformright" href="javascript:;" id="vaAsking"><span>chiedi</span></a>
                </div>
                </form>
                <br class="clear"/>
            </div>
            <div class="vaBottom"></div>
        </div>
    </div>
    <script type="text/javascript" src="/WB/fe/js/va.js"></script>
    <!-- FINE ASSISTENTE VIRTUALE -->