<?php

/*
 * Controller - Processing with recived data
 * 
 * possibilty to do: 
 *      - Creating a Class with some function for Donation
 *      - processing the data (calculation, saving user information, etc.)
 *      - passing Data to Model - Model is implemented to save data to the database
 *      - redirect to new Page
 *      - using Model/View/Controller structure
 */

$donation = $_POST["donation"];

echo ($donation);