<?php

namespace boud;


/**
 */
function checkPassword($password){



    $maj='';
    $min='';
    $num='';
    $char12='';
    $spechar='';
    $progressBar =100;

    echo' <div class="d-flex justify-content-center">';
    echo'  <ul class="list-group w-auto">';


         // VERIFICATION DES CONDITIONS
           
    if(!preg_match ('#[A-Z]#', $password)){
           
      
        $progressBar -=20;
        $maj='<li class="list-group-item">le mot de pass ne contient pas de  maj</li>';
      
    }

      
    if(!preg_match ('#[a-z]#', $password)){

        $progressBar -=20;
        $min='<li class="list-group-item">le mot de pass ne contient pas de  min </li>';
              
    
    }
    
      
    if(!preg_match ('#[0-9]#', $password)){

        $progressBar -=20;
        $num='<li class="list-group-item">le mot de passe ne contient pas de chiffre </li>';
         
    }
    
    
    if(!preg_match ('#.{12}#', $password)){

        $progressBar -=20;
        $char12='<li class="list-group-item">le mot ne contient pas  12 char</li>';
            
    }
    
    
    
    if (!preg_match('#[&@^$+"è_]#', "$password")) {
        
        $progressBar -= 20;
        $spechar='<li class="list-group-item">le mot ne contient pas de  specialChar</li>';
            
    }

     
      
    if( $progressBar !==100){
  
        echo'<li class=" bg-primary list-group-item">le Mot de passe doit contenir au moins:</li>';
        echo' '.$maj.'';
        echo' '.$min.'';
        echo' '.$num.'';
        echo' '.$char12.'';
        echo' '.$spechar.'';
        echo'</ul>';
        echo'</div>';
     
        }
      


    if($progressBar == 100){

        echo'<h2>OK</h2>';
     
    }

        // PROGRESS COLOR

        
    $colorProgressBar = 0;

    if($progressBar == 20){
        $colorProgressBar ="bg-success";
    }

    if($progressBar == 40){
        $colorProgressBar ="bg-info";
    }


    if($progressBar == 60){
        $colorProgressBar ="bg-secondary";
    }

    if($progressBar == 80){
        $colorProgressBar ="bg-warning";
    }

    if($progressBar == 100){
        $colorProgressBar ="bg-danger";
    }



    echo' <h3 class="text-info">Mot de passe :  '.$password.'</h3>';
    echo'<div class="progress">';
    echo'<div class="progress-bar '.$colorProgressBar.' " role="progressbar" style="width:'.$progressBar.'%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
    echo'</div>';
    echo'<h3 class="text-right">Force du mdp</h3>';


    }

    ?>
      
  

      