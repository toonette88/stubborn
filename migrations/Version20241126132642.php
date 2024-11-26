<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241126132642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product CHANGE price price NUMERIC(4, 2) NOT NULL, CHANGE stock_xs stock_xs INT NOT NULL, CHANGE stock_s stock_s INT NOT NULL, CHANGE stock_m stock_m INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product CHANGE price price NUMERIC(2, 2) NOT NULL, CHANGE stock_xs stock_xs INT DEFAULT NULL, CHANGE stock_s stock_s INT DEFAULT NULL, CHANGE stock_m stock_m INT DEFAULT NULL');
    }
}
