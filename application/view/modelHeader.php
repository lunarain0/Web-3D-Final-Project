
           <div class="main_contents" id="models">
            <div class="row" id="modelView">
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                            <?php for ($i=0;$i <count ($data);$i++){ ?>
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?modelViewer?id=<?php echo $i?>" id="navCoke" ><?php echo $data[$i]['console'] ?></a>
                                </li>
                                <?php } ?>
                                
                            </ul>
                        </div>
