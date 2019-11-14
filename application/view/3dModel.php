                            <div class ="col-sm-8">
                            <div class="card-body">

                               
                                <div id="consoleTitle" class="card-title "><h2><?php echo $data['consoleTitle'] ?> Interactive Model</h2></div>
                                
                                <div id="modelDescription" class="card-text "><p><?php echo $data['modelDescription'] ?></p></div>
                            

                                <div class="model3D">
                                    <x3d id ="wire">
                                            <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/<?php echo $data['console'] ?>.X3D"></inline>
                                        </scene>
                                    
                                    </x3d>
                                </div>
                            </div>
                        </div>
                        </div>
</div>
</div>
</div>

