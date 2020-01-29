<?php

?>
<div class="container-fluid" id="botBox">

    <div class="container center chatboxcontainerhome well well-sm" style="background: rgba(162, 80, 229, 0.6); box-shadow: 0 0 8px 1px #1e1919; margin-top: 60px">
        <!-- setting modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa fa-gear"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalCenterTitle">Speech Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="inputState">Voice</label>
                                <select id="voiceOptions" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label for="formControlRange">Volume</label>
                                <input type="range" class="form-control-range" type="range" id="volumeSlider" min="0" max="1" value="0.5" step="0.1">
                            </div>
                            <div class="form-group">
                                <label for="formControlRange">Rate</label>
                                <input type="range" class="form-control-range" id="rateSlider" min="0" max="2" value="2" step="0.1">
                            </div>
                            <div class="form-group">
                                <label for="formControlRange">Pitch</label>
                                <input type="range" class="form-control-range" id="pitchSlider" min="0" max="2" value="0.5" step="0.1">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <br>
            <div class="botcontainerhome">
                <div class="row center">
                    <img class="animated fadeInRight" src="assets/media/images/logo/bot.png">
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <h2 style="color: white;" class="animated swing center feedback">Hey there, How may I help You?</h2>
                    <textarea readOnly=true; id="response" cols="40" rows="8" style="resize: none; border: none; background: transparent; font-size: 16px; color: #000; font-weight: bold;" class="form-control"></textarea>
                    <div class="input-group add-on">
                        <input id="input" type="text" placeholder="Type here..." autocomplete="off" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="button" id="rec"><i class="fa fa-microphone"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
</div>
