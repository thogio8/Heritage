<?php

namespace App;

use League\Csv\Reader;

class Entreprise
{
    protected string $nom;
    protected string $ville;
    /**
     * @var Personnel[]
     */
    protected array $employes;

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->employes = [];
    }

    /**
     * @param Personnel $employe
     * @return string
     */
    public function ajouterEmployes (Personnel $employe) : bool{
        if($employe instanceof Patron && $this->trouverPatron() != null) {
              return false;
        }
        $this->employes[] = $employe;
        return true;
    }

    public function presenterEmployes () : void {
        foreach($this->employes as $employe){
            echo $employe->presenter().PHP_EOL;
        }
    }

    public function trouverPatron() : ?Patron {
        foreach($this->employes as $employe){
            if($employe instanceof Patron){
                return $employe;
            }
        }
        return null;
    }

    public function afficherEmployeParClasse() : array{
        $tableauTrie = [];
        foreach($this->employes as $employe){
            $type = (new \ReflectionClass($employe))->getShortName();
            if (!isset($tableauTrie[$type])){
                $tableauTrie[$type] = [];
            }
            $tableauTrie[$type][] = $employe;
        }
        return $tableauTrie;
    }

    public function ajouterEmployesCSV(string $fichier) : void{
        $csv = Reader::createFromPath("./csv/".$fichier);
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(";");

        $records = $csv->getRecords();
        foreach($records as $record){
            switch ($record["Categorie"]){
                case "p":
                    $this->employes[] = new Patron($record["Nom"], $record["Prenom"], $record["Age"], $record["Voiture"]);
                    break;
                case "c":
                    $this->employes[] = new ChefService($record["Nom"], $record["Prenom"], $record["Age"], $record["Service"]);
                    break;
                case "e":
                    $this->employes[] = new Employe($record["Nom"], $record["Prenom"], $record["Age"]);
                    break;
                default :
                    break;
            }
        }
    }
}