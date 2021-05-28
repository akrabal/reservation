<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528063029 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (numclient VARCHAR(255) NOT NULL, nomclient VARCHAR(255) NOT NULL, prenom_client VARCHAR(255) NOT NULL, adresse_mail_client VARCHAR(255) NOT NULL, numero_client VARCHAR(255) NOT NULL, adressephysique_client VARCHAR(255) NOT NULL, PRIMARY KEY(numclient)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compagnie (num_compagnie VARCHAR(255) NOT NULL, nom_compagnie VARCHAR(255) NOT NULL, cordonnes_compagnie VARCHAR(255) NOT NULL, PRIMARY KEY(num_compagnie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gare_depart (num_gare VARCHAR(255) NOT NULL, localite_gare VARCHAR(255) NOT NULL, PRIMARY KEY(num_gare)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passager (num_passager VARCHAR(255) NOT NULL, adresse_mail_passager VARCHAR(255) NOT NULL, numero_passager VARCHAR(255) NOT NULL, adresse_physique_passager VARCHAR(255) NOT NULL, PRIMARY KEY(num_passager)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (num_reservation VARCHAR(255) NOT NULL, date_reservation DATETIME NOT NULL, statut_reservation TINYINT(1) NOT NULL, PRIMARY KEY(num_reservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (num_ville VARCHAR(255) NOT NULL, nom_ville VARCHAR(255) NOT NULL, PRIMARY KEY(num_ville)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (num_voyage VARCHAR(255) NOT NULL, heure_depart DATETIME NOT NULL, heure_arrive DATETIME NOT NULL, statut_voyage TINYINT(1) NOT NULL, PRIMARY KEY(num_voyage)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE compagnie');
        $this->addSql('DROP TABLE gare_depart');
        $this->addSql('DROP TABLE passager');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE ville');
        $this->addSql('DROP TABLE voyage');
    }
}
