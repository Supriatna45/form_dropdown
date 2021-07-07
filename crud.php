<?php
    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertForm($incm, $tgl, $provider, $cluster, $site){
            try{
                $sql = "INSERT INTO form (incm, date, provider, cluster, site) VALUES (:incm, :tgl, :provider , :cluster, :site)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':incm', $incm);
                $stmt->bindparam(':tgl', $tgl);
                $stmt->bindparam(':provider', $provider);
                $stmt->bindparam(':cluster', $cluster);
                $stmt->bindparam(':site', $site);
                
                $stmt->execute();
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getForm(){
            try{
            $sql = "SELECT * FROM form";
            $result = $this->db->query($sql);
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
        }
        public function editForm($id, $incm, $tgl, $provider, $cluster, $site){
            try{ 
                $sql = "UPDATE form SET incm=:incm, date=:tgl, provider=:provider, cluster=:cluster, site=:site WHERE id_form = :id"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':incm', $incm);
                $stmt->bindparam(':tgl', $tgl);
                $stmt->bindparam(':provider', $provider);
                $stmt->bindparam(':cluster', $cluster);
                $stmt->bindparam(':site', $site);

                $stmt->execute();
                return true;
            } catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function deleteForm($id){
            try{ 
                $sql = "delete from form where id_form = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function getFormDetails($id){
            try{
            $sql = "select * from form where id_form = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
        }
    }
?>