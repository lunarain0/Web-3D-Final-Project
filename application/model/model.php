<?php
class Model {
    // Declaration of the variable that will point to the database connection
    public $dbhandle;

    // Method to simulate the model data
    public function model3D_info(){

        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/playstation.db';

        // Create a connection to database
        try {
            // Change connecttion string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn,'user','password',array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false,));
                
        }
        catch (PDOException $e){
            echo "Connection Failed";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable(){
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (
                Id INTEGER PRIMARY KEY, 
                console TEXT, 
                consoleTitle TEXT,
                releaseDate TEXT, 
                players TEXT, 
                features TEXT, 
                format TEXT,
                price TEXT,
                consoleDescription TEXT,
                galleryDescription TEXT,
                youtubeUrl TEXT,
                youtubeDescription TEXT,
                modelDescription TEXT)");
            return "Model_3D table is successfully created inside test1.db file";
        }
        catch (PDOException $e){
            echo "Exception";
            print new Exception($e ->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData(){
        try{
            $this->dbhandle->exec(
                'INSERT INTO Model_3D(Id, console, consoleTitle, releaseDate, players, features, format, price, consoleDescription, galleryDescription, youtubeUrl, youtubeDescription, modelDescription)
                VALUES (1,"PS1","Playstation","3 December 1994","Up to 8 with Multitap","First Dual Analog controller","Compact Disc","£299"
                ,"The game-changing PlayStation sported a sleek design and CD format, meaning games were bigger, 3D-capable and with superior sound to what came before it. Within a decade, PlayStation became the first games console in history to ship over 100 million units worldwide."
                ,"This gallery demonstrates some best selling Playstation games, including Metal Gear Solid, Crash Bandicoot and Final Fantasy VIII"
                ,"https://www.youtube.com/embed/YWmbUMStlGI",
                "Mental Wealth set the subversive tone of the playstation adverts."
                ,"The model features multiple interactive animated elements. Try clicking the eject button, the memory card, the cd, the cd tray, the power button for a variety of different animations. Click the reset button for a demonstration animation.");' . 
                'INSERT INTO Model_3D(Id, console, consoleTitle, releaseDate, players, features, format, price, consoleDescription, galleryDescription, youtubeUrl, youtubeDescription, modelDescription)
                VALUES (2,"PS2","Playstation 2","4 March 2000","Up to 8 with Multitap","Watch DVD Movies","DVD","£299"
                ,"If PlayStation was a video gaming revolution, PlayStation 2 was the evolution that set a new standard for the medium. High Definition 3D visuals, online play and an integrated DVD player meant movies were just a button press away, without the need for expensive add-ons."
                ,"This gallery demonstrates some best selling Playstation 2 games, including Kingdom Hearts, Ratchet and Clank and Devil May Cry"
                ,"https://www.youtube.com/embed/vZo4SKat2Ys",
                "The Playstation 2 was a gateway into a new dimension, the third place. Who better to demonstrate that than David Lynch."
                ,"The model features multiple interactive animated elements. Try clicking the eject button, the memory card, the dvd, the dvd tray for a variety of different animations. Click the reset button for a demonstration animation.");' . 
                'INSERT INTO Model_3D(Id, console, consoleTitle, releaseDate, players, features, format, price, consoleDescription, galleryDescription, youtubeUrl, youtubeDescription, modelDescription)
                VALUES (3,"PSP","Playstation Portable","12 December 2004","Many Online","Experience Playstation on the go","UMD","£179"
                ,"With two successful home consoles under its belt, changing handheld gaming was the next frontier. Enter a pocket-sized powerhouse that could play games, movies, music and browse the internet."
                ,"This gallery demonstrates some best selling PSP games, including Patapon, Loco Roco and Blazblue"
                ,"https://www.youtube.com/embed/hUE52DejJCw"
                ,"This classic advert featured Karl Pilkington of the Ricky Gervais show fame."
                ,"Try clicking the X button, eject button, the umd, the umd tray, for a variety of different animations. Click the circle button for a demonstration animation.");' . 
                'INSERT INTO Model_3D(Id, console, consoleTitle, releaseDate, players, features, format, price, consoleDescription, galleryDescription, youtubeUrl, youtubeDescription, modelDescription)
                VALUES (4,"PS4","Playstation 4","15 November 2013","Many Online","Gaming in 1080p","Blu-ray","£349"
                ,"The eight generation of video games erupted into life with a powerhouse system capable of high dynamic range (HDR) for vibrant visuals, integrated streaming and social media features for instantly sharing your best (or worst) gaming moments, and the most comfortable DUALSHOCK controller yet."
                ,"This gallery demonstrates some best selling Playstation 4 games, including Horizon Zero Dawn, Spiderman and Bloodborne"
                ,"https://www.youtube.com/embed/bHuf_kMbo4U"
                ,"This advert demonstrated the central ethos of connectedness the PS4 hoped to deliver."
                ,"Try clicking the eject button, the blu-ray disc, and the power button for a variety of different animations.");' 
                
            );
            return "Data inserted into table";
        }
        catch(PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbGetData(){
        try{
            // Prepare a statement to get all records for the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while ($data = $stmt->fetch()){
                $result[$i]['Id'] = $data['Id'];
                $result[$i]['console'] = $data['console'];
                $result[$i]['consoleTitle'] = $data['consoleTitle'];
                $result[$i]['releaseDate'] = $data['releaseDate'];
                $result[$i]['players'] = $data['players'];
                $result[$i]['features'] = $data['features'];
                $result[$i]['format'] = $data['format'];
                $result[$i]['price'] = $data['price'];
                $result[$i]['consoleDescription'] = $data['consoleDescription'];
                $result[$i]['galleryDescription'] = $data['galleryDescription'];
                $result[$i]['youtubeUrl'] = $data['youtubeUrl'];
                $result[$i]['youtubeDescription'] = $data['youtubeDescription'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                $i++;
            }
        }

        catch(PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return $result;
    }

}
?>