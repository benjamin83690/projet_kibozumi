<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200326140550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande_user (commande_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_E6FFD7AA82EA2E54 (commande_id), INDEX IDX_E6FFD7AAA76ED395 (user_id), PRIMARY KEY(commande_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_credit (commande_id INT NOT NULL, credit_id INT NOT NULL, INDEX IDX_1E95952B82EA2E54 (commande_id), INDEX IDX_1E95952BCE062FF9 (credit_id), PRIMARY KEY(commande_id, credit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_user ADD CONSTRAINT FK_E6FFD7AA82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_user ADD CONSTRAINT FK_E6FFD7AAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_credit ADD CONSTRAINT FK_1E95952B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_credit ADD CONSTRAINT FK_1E95952BCE062FF9 FOREIGN KEY (credit_id) REFERENCES credit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2BF1E7C1');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DAEC0C864');
        $this->addSql('DROP INDEX UNIQ_6EEAA67D2BF1E7C1 ON commande');
        $this->addSql('DROP INDEX UNIQ_6EEAA67DAEC0C864 ON commande');
        $this->addSql('ALTER TABLE commande DROP user_commande_id, DROP credit_commande_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commande_user');
        $this->addSql('DROP TABLE commande_credit');
        $this->addSql('ALTER TABLE commande ADD user_commande_id INT NOT NULL, ADD credit_commande_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2BF1E7C1 FOREIGN KEY (user_commande_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DAEC0C864 FOREIGN KEY (credit_commande_id) REFERENCES credit (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6EEAA67D2BF1E7C1 ON commande (user_commande_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6EEAA67DAEC0C864 ON commande (credit_commande_id)');
    }
}
