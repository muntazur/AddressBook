
    CREATE TABLE IF NOT EXISTS users(
           id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    	   name varchar(50) NOT NULL,
    	   email varchar(50) NOT NULL,
    	   password varchar(50) NOT NULL

	);

    CREATE TABLE IF NOT EXISTS contact_info(

    	   user_id  INT(6) NOT NULL,
    	   contact_id  INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    	   name VARCHAR(50) NOT NULL,
    	   district VARCHAR(50) NOT NULL,
    	   email VARCHAR(50) NOT NULL

    );

    CREATE TABLE IF NOT EXISTS phone_number_info(

           contact_id INT(6) NOT NULL,
           phone  VARCHAR(30) NOT NULL
        
            
    );
