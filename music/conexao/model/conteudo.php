<?php
include '../../conexao/Conexao.php';

class Conteudo extends Conexao{
	private $song;
    private $album;
    private $execution;
    private $artist;
   

    function getSong() {
        return $this->song;
    }

    function getAlbum() {
        return $this->album;
    }

    function getExecution() {
        return $this->execution;
    }

    function getArtist() {
        return $this->artist;
    }

    function setSong($song) {
        $this->song = $song;
    }

    function setAlbum($album) {
        $this->album = $album;
    }

    function setExecution($execution) {
        $this->execution = $execution;
    }

    function setArtist($artist) {
        $this->artist = $artist;
    }

    public function insert($obj){
    	$sql = "INSERT INTO conteudo(song,album,execution,artist) VALUES (:song,:album,:execution,:artist)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('song',  $obj->song);
        $consulta->bindValue('album', $obj->album);
        $consulta->bindValue('execution' , $obj->execution);
        $consulta->bindValue('artist' , $obj->artist);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET song = :song, album = :album,execution = :execution, artist = :artist WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('song',  $obj->song);
        $consulta->bindValue('album', $obj->album);
        $consulta->bindValue('execution' , $obj->execution);
        $consulta->bindValue('artist' , $obj->artist);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM conteudo WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM conteudo";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>