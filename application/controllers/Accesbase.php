<?php 
   class Accesbase extends CI_Controller { 
        
        public function insert() {
            $this->load->database();
            $data = array(
                'actor_id' => 2326,
                'first_name' => 'ROGER',
                'last_name' => 'Luc Jordan',
                'last_update' => (new DateTime())->format('Y-m-d H:i:s')
            );
            
            $this->db->insert("actor", $data);
        }
        public function update() {
            $this->load->database();
            $data = array(
                'actor_id' => 2326,
                'first_name' => 'R',
                'last_name' => 'Luc J',
                'last_update' => (new DateTime())->format('Y-m-d H:i:s')
            );
            $this->db->set($data);
            $this->db->where('actor_id',2326);
            $this->db->update("actor",$data);
        }
        public function delete(){
            $this->load->database();
            $this->db->delete("actor","actor_id = 2327");
        }
        public function select(){
            $this->load->database();
            $query = $this->db->get("actor");
            $data['records'] = $query->result();
        }
   } 
?>