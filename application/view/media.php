<div class="row" id="media">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" id ="video">
                        <div id="embed_video" class="card-img-top img-responsive" "><iframe id="ytplayer" type="text/html" 
  src="<?php echo $data['youtubeUrl'] ?>?rel=0"
  frameborder="0"></iframe></h2></div>
                        <div id="descriptionVideo" class="card-text"><?php echo $data['youtubeDescription'] ?></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" id ="render">
                        <div id="imageRender" class="card-img-top img-responsive">
                        <a href="assets/images/MRRenders/<?php echo $data['console']?>"><img class="img-thumbnail" src="assets/images/MRRenders/<?php echo $data['console']?>"/></a>
                        <div id="descriptionRender" class="card-text">This image has been rendered using the highest quality Mental Ray renderer within 3ds Max.</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" id ="audio">
                        <div id="audio" class="card-audio">
                        <audio controls autoplay>
                            <source src="assets/Audio/<?php echo $data['console']?>.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                            </audio>


                        </div>
                        <div id="descriptionAudio" class="card-text">This player will play the original startup sound for the <?php echo $data['consoleTitle']?> console.</div>
                    </div>
                </div>
            </div>
        </div>