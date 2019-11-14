<div class="row">
                                <?php for ($i=0;$i <count ($data);$i++){ ?>
                                    <icon class="col-md-3">
                    
                        <a href="index.php?modelViewer?id=<?php echo $i?>" >
                            <img class="card-img-top img-fluid" src="assets/images/Logo/<?php echo $data[$i]['console'] ?>.jpg" >
                        </a>
                    
                            </icon>
                                <?php } ?>
                
            </div>
            </div>
            

            </div>