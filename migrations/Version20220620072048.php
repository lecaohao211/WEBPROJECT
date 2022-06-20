<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220620072048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chef (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, gender LONGTEXT NOT NULL, salary DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE food ADD chef_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE food ADD CONSTRAINT FK_D43829F7A32F0D1 FOREIGN KEY (chef_id_id) REFERENCES chef (id)');
        $this->addSql('CREATE INDEX IDX_D43829F7A32F0D1 ON food (chef_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE food DROP FOREIGN KEY FK_D43829F7A32F0D1');
        $this->addSql('DROP TABLE chef');
        $this->addSql('DROP INDEX IDX_D43829F7A32F0D1 ON food');
        $this->addSql('ALTER TABLE food DROP chef_id_id');
    }
}
