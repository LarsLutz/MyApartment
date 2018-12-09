<?php

interface personen
{
public function setIdPersonen($idPersonen);
public function getIdPersonen();

public function setName($name);
public function getName();

public function setVorname($vorname);
public function getVorname();

public function setGeburtsdatum($geburtsdatum);
public function getGeburtsdatum();

public function setEinzugsdatum($einzugsdatum);
public function getEinzugsdatum();

public function setTel($tel);
public function getTel();

public function setEmail($email);
public function getEmail();

public function setWohnungen_idGebaeude($woid);
public function getWohnungen_idGebaeude();

}
?>