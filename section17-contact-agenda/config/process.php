<?php
session_start();

include_once("connection.php");
include_once("url.php");


$id;

if (!empty($_GET)) {
  $id = $_GET["id"];
}

// Get one contact
if (!empty($id)) {
  $query = "SELECT * FROM contacts WHERE id = :id";

  $stmt = $conn->prepare($query);

  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $contact = $stmt->fetch();
} else {
  // Get all contacts
  $query = "SELECT * FROM contacts";

  $contacts = [];

  $stmt = $conn->prepare($query);

  $stmt->execute();

  $contacts = $stmt->fetchAll();
}