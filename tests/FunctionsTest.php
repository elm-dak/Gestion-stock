<?php
use PHPUnit\Framework\TestCase;

// Include the file containing the functions to be tested
require_once("model/function.php");

class FunctionsTest extends TestCase {
    public function testGetArticle() {
        // Test for fetching article by id
        $article = getArticle(1);
        $this->assertNotNull($article);
        // Add more assertions based on expected article properties

        // Test for fetching articles based on search criteria
        $articles = getArticle(1, ['id_categorie' => 1]);
        $this->assertNotEmpty($articles);
        // Add more assertions based on expected articles

     
    }

    public function testCountArticle() {
        // Test for counting articles
        $count = countArticle();
        $this->assertNotNull($count);
        // Add more assertions based on expected count
    }

    public function testGetClient() {
        // Test for fetching client by id
        $client = getClient(1);
        $this->assertNotNull($client);
        // Add more assertions based on expected client properties

        // Test for fetching all clients
        $clients = getClient();
        $this->assertNotEmpty($clients);
        // Add more assertions based on expected clients
    }

    public function testGetVente() {
        // Test for fetching vente by id
        $vente = getVente(1);
        $this->assertNotNull($vente);
        // Add more assertions based on expected vente properties

        // Test for fetching all ventes
        $ventes = getVente();
        $this->assertNotEmpty($ventes);
        // Add more assertions based on expected ventes
    }

    public function testGetFournisseur() {
        // Test for fetching fournisseur by id
        $fournisseur = getFournisseur(1);
        $this->assertNotNull($fournisseur);
        // Add more assertions based on expected fournisseur properties

        // Test for fetching all fournisseurs
        $fournisseurs = getFournisseur();
        $this->assertNotEmpty($fournisseurs);
        // Add more assertions based on expected fournisseurs
    }

    public function testGetCommande() {
        // Test for fetching commande by id
        $commande = getCommande(1);
        $this->assertNotNull($commande);
        // Add more assertions based on expected commande properties

        // Test for fetching all commandes
        $commandes = getCommande();
        $this->assertNotEmpty($commandes);
        // Add more assertions based on expected commandes
    }

    public function testGetAllCommande() {
        // Test for fetching all commandes
        $commandes = getAllCommande();
        $this->assertNotNull($commandes);
        // Add more assertions based on expected commandes count
    }

    public function testGetAllVente() {
        // Test for fetching all ventes
        $ventes = getAllVente();
        $this->assertNotNull($ventes);
        // Add more assertions based on expected ventes count
    }

    public function testGetAllArticle() {
        // Test for fetching all articles
        $articles = getAllArticle();
        $this->assertNotNull($articles);
        // Add more assertions based on expected articles count
    }

    public function testGetCA() {
        // Test for fetching CA
        $ca = getCA();
        $this->assertNotNull($ca);
        // Add more assertions based on expected CA value
    }

    public function testGetLastVente() {
        // Test for fetching last ventes
        $lastVentes = getLastVente();
        $this->assertNotEmpty($lastVentes);
        // Add more assertions based on expected last ventes
    }

    public function testGetMostVente() {
        // Test for fetching most ventes
        $mostVentes = getMostVente();
        $this->assertNotEmpty($mostVentes);
        // Add more assertions based on expected most ventes
    }

    public function testGetCategorie() {
        // Test for fetching categorie by id
        $categorie = getCategorie(1);
        $this->assertNotNull($categorie);
        // Add more assertions based on expected categorie properties

        // Test for fetching all categories
        $categories = getCategorie();
        $this->assertNotEmpty($categories);
        // Add more assertions based on expected categories
    }
}
?>
