
<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="index.php?home" id="navHome">
                    <h1>Playstation</h1>
                    <h2>Interactive Museum</h2>
                </a>
            </div>


            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon">P</span>
            </button>

            <!-- link Menu Icon button to the links class navbar-collapse selector -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">

                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?modelViewer?id=0" id="navModels">
                            Models
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#downloadsModal">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#referencesModal">Statement of Originality</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="referencesModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Statement of Originality</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>This website is the original work of Luna Rain.
                        <br>
                        <br>
                        However code is adapted from that provided with the Web 3D Applications(H7006) Lab tutorials provided by Dr Martin White.
                        <br>
                        <br>
                        All references to "Sony", "Playstation" the design of the playstation systems, adverts, sound effects, game screenshots, and the images used to produce textures are the property of Sony Computer Entertainment.
                        <a href="https://www.playstation.com/en-au/explore/ps4/playstation-through-the-years/">https://www.playstation.com/en-au/explore/ps4/playstation-through-the-years/" </a>
                        <br>
                        <br>
                        Playstation themed fonts were sourced from DaFont.
                        <a href= "https://www.dafont.com/iconic-psx.font">https://www.dafont.com/iconic-psx.font</a>
                        <a href= "https://www.dafont.com/zrnic.font">https://www.dafont.com/zrnic.font</a>
                        </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="downloadsModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">File Downloads</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p><a href= "assets/Downloads/Codebase.zip">Codebase</a>
                        <br>
                        <br>
                        <a href= "assets/Downloads/3ds_max_2017.zip">3ds Max Project Archive</a>
                        <br>
                        <br>
                        <a href= "assets/Downloads/VRML_models.zip">VRML Models</a>
                        </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid" id ="pageBody">
