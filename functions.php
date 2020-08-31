<?php

namespace boud;

function checkPassword($password){




    $progressBar = 100;
    $textMin = '';
    $textMaj ='';
    $textNum='';
    $textChar12='';
    $specialChar='';
  
      if(!preg_match ('#[A-Z]#', $password)){
       
  
          $progressBar -=20;
          $textMaj = 'le mot de pass ne contient pas de  maj';

       
        }

  
        if(!preg_match ('#[a-z]#', $password)){
          $progressBar -=20;
          $textMin = 'le mot de pass ne contient pas de  min';
          

      }

  
        if(!preg_match ('#[0-9]#', $password)){
          $progressBar -=20;
          $textNum = 'le mot de passe ne contient pas de chiffre';
     

        }


        if(!preg_match ('#.{12}#', $password)){
          $progressBar -=20;
           $textChar12 ='le mot ne contient pas  12 char';
        
      }



         if (!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', "$password")) {
          $progressBar -= 20;
          $specialChar = 'le mot ne contient pas de  specialChar';
        

         }

     

         echo' <div> mot de passe :  </div>';
         echo'<div class="progress">';
         echo'<div class="progress-bar  " role="progressbar" style="width:'.$progressBar.'%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
         echo'</div>';

          if($progressBar !== 100){
          
         echo' <div class="d-flex justify-content-center">';
         echo'  <ul class=" p-5 w-50  list-group">';
         echo'<li class=" bg-primary list-group-item">le Mot de passe doit contenir au moins:</li>';
         echo'<li class="list-group-item">'.$textMaj.'</li>';
         echo' <li class="list-group-item">'.$textMin .'</li>';
         echo'<li class="list-group-item">'.$textNum.'</li>';
         echo'<li class="list-group-item">'.$textChar12.'</li>';
         echo' <li class="list-group-item">'.$specialChar.'</li>';
         echo'</ul>';
         echo' </div>';
          }
          

         elseif($progressBar == 100){
          echo'ok';
        }
        

     

    

    


   

         
      

    /**
     * check if the password contains at least:
     *     - 1 number
     *     - 1 lowercase
     *     - 1 uppercase
     *     - 1 special character
     *     - 12 characters
     * 
     * progress-bar for password strength
     * with 5 different bootstrap colors
     * 
     * display password in <h2>
     * display message in <h3>
     */

}


        //  $progressBarColor = '';

        //  if($progressBar =20){

        //   $progressBarColor = 'bg-success';

        //  }

        //  elseif($progressBar =40){

        //   $progressBarColor = 'bg-success';

        //  }

        //  elseif($progressBar =60){

        //   $progressBarColor = 'bg-warning';

        //  }

         
        //  elseif($progressBar =80){

        //   $progressBarColor = 'bg-warning';

        //  }

           
        //  elseif($progressBar =80){

        //   $progressBarColor = 'bg-danger';

        //  }
      
      