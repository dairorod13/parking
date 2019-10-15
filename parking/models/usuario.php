<?php
//Herencia
class usuario extends database{

   public function find_user($id){
      try{
         $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
         $result->bindParam(1, $id, PDO::PARAM_INT);
         $result->execute();
         return $result->fetch();
     }catch (Exception $e){
        die("Error User->register() " . $e->getMessage());
     }
   }

  public function all(){
   $result = parent::connect()->prepare("SELECT * FROM tipos INNER JOIN estados ON tipos.estado_id = estados.id_estado WHERE id_tipo = 4");
   $result->execute();
   return $result->fetchAll();
}
public function car(){
   $result = parent::connect()->prepare("SELECT * FROM tipos INNER JOIN estados ON tipos.estado_id = estados.id_estado WHERE id_tipo = 5");
   $result->execute();
   return $result->fetchAll();
}
public function moto(){
   $result = parent::connect()->prepare("SELECT * FROM tipos INNER JOIN estados ON tipos.estado_id = estados.id_estado WHERE id_tipo = 6");
   $result->execute();
   return $result->fetchAll();
}
}
?>