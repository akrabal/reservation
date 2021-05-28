<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528102743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE numclient numclient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE compagnie CHANGE num_compagnie num_compagnie VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gare CHANGE num_gare num_gare VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gare ADD CONSTRAINT FK_EE713F12A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (num_Ville)');
        $this->addSql('ALTER TABLE reservation CHANGE num_reservation num_reservation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE ville CHANGE num_ville num_ville VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE voyage ADD gare_depart_id VARCHAR(255) NOT NULL, ADD gare_arrive_id VARCHAR(255) NOT NULL, CHANGE num_voyage num_voyage VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D89552284DC4 FOREIGN KEY (gare_depart_id) REFERENCES gare (num_Gare)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955582835C7 FOREIGN KEY (gare_arrive_id) REFERENCES gare (num_Gare)');
        $this->addSql('CREATE INDEX IDX_3F9D89552284DC4 ON voyage (gare_depart_id)');
        $this->addSql('CREATE INDEX IDX_3F9D8955582835C7 ON voyage (gare_arrive_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE numclient numclient VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE compagnie CHANGE num_compagnie num_compagnie VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE gare DROP FOREIGN KEY FK_EE713F12A73F0036');
        $this->addSql('ALTER TABLE gare CHANGE num_gare num_gare VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reservation CHANGE num_reservation num_reservation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE ville CHANGE num_ville num_ville VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D89552284DC4');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955582835C7');
        $this->addSql('DROP INDEX IDX_3F9D89552284DC4 ON voyage');
        $this->addSql('DROP INDEX IDX_3F9D8955582835C7 ON voyage');
        $this->addSql('ALTER TABLE voyage DROP gare_depart_id, DROP gare_arrive_id, CHANGE num_voyage num_voyage VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
