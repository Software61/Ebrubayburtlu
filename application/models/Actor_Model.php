
<?php

class Actor_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function GetAllActors(){
		return $this->db->select('*')
				->from("actors")
				->order_by('ActorId','desc')
				->get()
				->result();
	}
	function RemoveActor($id){
		return $this->db->delete('actors',array("ActorId"=>$id));
	}

	function InsertActor($actor){
		return $this->db->insert('actors',$actor);
	}
	function UpdateActor($actor,$actorId){
		return $this->db->where('ActorId',$actorId)
						->update('actors',$actor);
	}
	function GetActorAsID($actorId){
		return $this->db->select('*')
						->from('actors')
						->where('ActorId',$actorId)
						->get()
						->result()[0];
	}
}