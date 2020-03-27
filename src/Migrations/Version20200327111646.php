<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200327111646 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFE3E6C7BD2 FOREIGN KEY (credit_category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_1CC16EFE3E6C7BD2 ON credit (credit_category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFE3E6C7BD2');
        $this->addSql('DROP INDEX IDX_1CC16EFE3E6C7BD2 ON credit');
    }
}
