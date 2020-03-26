<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200326142316 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande DROP INDEX UNIQ_6EEAA67DAEC0C864, ADD INDEX IDX_6EEAA67DAEC0C864 (credit_commande_id)');
        $this->addSql('ALTER TABLE commande DROP INDEX UNIQ_6EEAA67D2BF1E7C1, ADD INDEX IDX_6EEAA67D2BF1E7C1 (user_commande_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande DROP INDEX IDX_6EEAA67D2BF1E7C1, ADD UNIQUE INDEX UNIQ_6EEAA67D2BF1E7C1 (user_commande_id)');
        $this->addSql('ALTER TABLE commande DROP INDEX IDX_6EEAA67DAEC0C864, ADD UNIQUE INDEX UNIQ_6EEAA67DAEC0C864 (credit_commande_id)');
    }
}
