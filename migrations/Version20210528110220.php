<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528110220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs 
        
        $this->addSql('ALTER TABLE voyage ADD compagnie_id VARCHAR(255) NOT NULL, CHANGE num_voyage num_voyage VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D895552FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (num_Compagnie)');
        $this->addSql('CREATE INDEX IDX_3F9D895552FBE437 ON voyage (compagnie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
  
        
        $this->addSql('DROP INDEX IDX_3F9D895552FBE437 ON voyage');
        $this->addSql('ALTER TABLE voyage DROP compagnie_id, CHANGE num_voyage num_voyage VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
      
    }
}
