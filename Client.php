<?php

class Client {
    private int $idNat;
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $listeComptes;


    public function __construct(int $idNat, string $prenom, string $nom, $dateNaissance, string $ville) {
        $this->idNat = $idNat;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->listeComptes = [];
    }
 
    public function __toString()
    {
        return $this->prenom . " ". $this->nom;
    }
    
    // Ajouter nouveau compte à la liste de comptes
    public function ajoutCompte(Compte $listeComptes) {
        $this->listeComptes[] = $listeComptes;
    }
    
    // Afficher liste des comptes
    public function listeComptes() {
        $result = "Liste des comptes :<br>";
        foreach ($this->listeComptes as $compte) {
            $result .= "- " . $compte->getlibelleCompte()."<br>";
        }
        return $result;
    }

    // Donner l'âge du titulaire
    public function donnerAge() {
        $date_actuelle = new DateTime();
        $age = $this->getDatenaissance()->diff($date_actuelle);
        
        return $age->format("%Y ans");
    }
        
    // obtenir infos sur un titulaire
    
        public function getInfoClient(){
            return "Client " . $this ." (". $this->donnerAge() . ")<br>" . $this->listeComptes();
        }

    # Début des Getter and Setter----------------------------------
    public function getIdNat(): int
    {
        return $this->idNat;
    }
        
    public function setIdNat($idNat)
    {
        $this->idNat = $idNat;
        
        return $this;
    }
        
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        
        return $this;
    }
    
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        
        return $this;
    }
    
    public function getVille(): string
    {
        return $this->ville;
    }
    
    public function setVille($ville)
    {
        $this->ville = $ville;
        
        return $this;
    }
    
    public function getListeComptes(): array
    {
        return $this->listeComptes;
    }
    
    public function setListeComptes($listeComptes)
    {
        $this->listeComptes = $listeComptes;
        
        return $this;
    }
    # Fin des Getter and Setter ----------------------------------
}

?>