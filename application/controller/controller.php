<?php
// Create the controller class for the MVC design pattern
class Controller {

    // Declare public variables for the controller class
    public $load;
    public $model;
    public $modelNo;
    public $data;
    public $parameters;
    public $currentModel;

    // Create functions for the controller class
    function __construct($pageURI) // constructor of the class
    {
        $this->load = new Load();
        $this->model = new Model();
        $this->data = $this->model->model3D_info();
        $this->data = $this->model->dbGetData();

        $request = explode("?",$pageURI);
        $pageURI = strtok($pageURI,"?");
        $stream = strtok("");
        parse_str($stream,$this->parameters);
        if (isset($this->parameters["id"])){
            $this->currentModel = $this->data[$this->parameters["id"]];
        }
        else{
            $this->currentModel = $this->data[0];
        }
        $this->$pageURI($request);
    }

    
    function gallery(){
        // The Path to thumbnail images
        $directory = 'assets/images/GameScreenshots/' . $this->currentModel['console'] ;
        // Only allow the following extensions
        $allowed_extensions = array('jpg','jpeg','gif','png');
        // Array to seperate extension from the files
        $file_parts = array();
        // Respong message
        $response = "";
        // Opens directory to parse images
        $dir_handle = opendir($directory);
        // Iterate through files
        while ($file = readdir($dir_handle))
        {
            //Check for hidden files
            if (substr($file,0,1)!= '.')
            {
                //Split each file name to extract the file extension
                $file_components = explode('.',$file);
                // Grab the extension token
                $extension = strtolower(array_pop($file_components));
                // Is this file a valid image. If so, add it to the response
                if (in_array($extension, $allowed_extensions))
                {
                    // Build a response string using the tilda as a string seperator
                    $response .='<a href="'.$directory.'/'.$file.'"><img class=" img-thumbnail" src="'.$directory.'/'.$file.'"/></a>';
                }
            }
        }
        closedir($dir_handle);
        // Return response while removing the last tilda
        return $response;
        
            }

    // Home page function
    function home()
    {
        $this->load->view('navBar',$this->data);
        $this->load->view('home',$this->data);
        $this->load->view('iconDescriptions',$this->data);
        $this->load->view('footer',$this->data);
    }

    function modelViewer()
    {        

        $this->load->view('navBar',$this->data);
        $this->load->view('modelHeader',$this->data);
        $this->load->view('modelDescription',$this->currentModel);
        $this->load->view('3dModel',$this->currentModel);
        
        $this->load->view('interaction',$this->currentModel);
        $galleryHTML = $this->gallery();

        $this->load->view('media',$this->currentModel);
        $this->load->view('gallery',array($galleryHTML,$this->currentModel));
        $this->load->view('footer',$this->data);
    }

    function downloads()
    {
        $this->load->view('navBar',$this->data);
        $this->load->view('downloads',$this->data);
        $this->load->view('footer',$this->data);
    }

    function apiCreateTable()
    {
        //echo "Create table function";
        $this->model->model3D_info();
        $data = $this->model->dbCreateTable();
    }
    function apiInsertData()
    {
        //echo "Data insertion function";
        $this->model->model3D_info();
        $data = $this->model->dbInsertData();
    }
    function apiGetJson()
    {
        $this->load->view('viewJson');
    }
}
?>