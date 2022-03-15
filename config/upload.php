<?php
//si c'est une image
 function is_image($key,&$errors){
    $ext=array(
        ".jpg",".png",".jpeg",".gif",".jpeg"
    );
    $extension= substr(strchr($_FILES[$key]["name"], '.'),1);
   if(!in_array($extension,$ext)) {
       $errors[$key]="ce fichier n'est pas image";
   }
}
//

function upload($key,&$errors,$login,&$role){
  $role = 'ROLE_JOUEUR';
    if (is_admin()) {
        $role = 'ROLE_ADMIN';
    }
  $name=$_FILES[$key]["name"];
  $tmp_name=$_FILES[$key]["tmp_name"];
  $ext=array(
    ".jpg",".png",".jpeg",".gif",".jpeg"
  );
  $extension= strtolower(strchr($name, '.'));
  if(!empty($name)){
    if(!in_array($extension,$ext)) {
      $errors[$key]="ce fichier n'est pas image, veuillez selectionnée une image";
    }else{
      $var=explode("@",$login);
      $var[0];
      $nouveauNom=$var[0].'_'.$role.strchr($name, '.');
        move_uploaded_file($tmp_name, ROOT."public/upload/".$nouveauNom);
      }
  }else{
    $errors[$key]="le choix d'image est obligatoire";
  } 
}  
   /*  $var=explode("@",$login);
    $var[0];
    $fin = end($var);
    var_dump($var[0]);die(); */

/* $nouveauNom=$var[0].'.'.$role;
    $cheminEtNonTemporaire=$_FILES['monfichier']['tmp_name'];
    $cheminEtNonDefinitif="upload/".$nouveauNom.$_FILES['monfichier']['name'];
$moveIsOk=move_uploaded_file($cheminEtNonTemporaire,$cheminEtNonDefinitif);
if($moveIsOk){
  $message="ce fichier a ete uploadé dans".$cheminEtNonDefinitif;
}else{
  $mesage="Suite à une erreur ,le fichier n'as pas été uploadé";
} */
    ?> 
 