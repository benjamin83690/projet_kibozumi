<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200326095047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_commande_id INT NOT NULL, credit_commande_id INT NOT NULL, montant_emprunte INT NOT NULL, montant_total DOUBLE PRECISION NOT NULL, date_commande DATE NOT NULL, mensualites DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_6EEAA67D2BF1E7C1 (user_commande_id), UNIQUE INDEX UNIQ_6EEAA67DAEC0C864 (credit_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2BF1E7C1 FOREIGN KEY (user_commande_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DAEC0C864 FOREIGN KEY (credit_commande_id) REFERENCES credit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commande');
    }
}
